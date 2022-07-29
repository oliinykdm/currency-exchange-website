<?php
Class Paymentssystem {
    // LiqPay
    const public_key = '',
          private_key = '',
          wm_secret_key = '';
    // Payments detail
    var $paymentPurse = null;
    var $paymentId = null;
    var $description = null;
    var $paymentSum = null;
    var $paymentCurrency = null;
    var $getSum = null;
    var $getCurrency = null;

    public static function getNewOrderId($id) {
        return (int)substr(preg_replace("/\D/","",sha1($id.microtime(1))),0,mt_rand(7,9));
    }
    public static function getPaymentId() {
        return @Session::instance()->get('dataPaymentId');
    }
    public function setPaymentId($id) {
        Session::instance()->set('dataPaymentId', $id);
    }
    public static function getToChangeValue($from, $currency)
    {
        $currenciesValue = null;
        if ($rates = Model\ExchangeRatesQuery::create()->filterByFrom($currency)->find()->toArray()) {
            foreach ($rates as $rate) {
                if ($rate['To'] == 'privat24uah') {
                    $currenciesValue['rate'] = $rate['Value'];
                    $currenciesValue['rateName'] = 'privat24uah';
                } elseif ($rate['To'] == 'wmu') {
                    $currenciesValue['rate'] = $rate['Value'];
                    $currenciesValue['rateName'] = 'wmu';
                }
                $currenciesValue[$rate['From']][$rate['To']] = $from * $rate['Value'];
            }
        }
        if(Paymentssystem::isWebmoney($currency)) {
            $currenciesValue['type'] = 'webmoney';
            $currenciesValue['toPay'] = $from + $from * (0.8 / 100);
        }
        if(Paymentssystem::isPrivat24($currency)) {
            $currenciesValue['type'] = 'privat24';
            $currenciesValue['toPay'] = $from;
        }

        return $currenciesValue;

    }
    public function init($init) {
        $exchange = new Model\Exchanges();
        $this->paymentId = self::getNewOrderId(time());
        $this->paymentSum = $init['payAmount'];
        $this->paymentCurrency = $init['payCurrency'];
        $this->getCurrency = $init['getCurrency'];
        $payInfo = Paymentssystem::getToChangeValue($this->paymentSum, $this->paymentCurrency);
        $this->getSum = $payInfo[$this->paymentCurrency][$this->getCurrency];
        if(self::isWebmoney($this->paymentCurrency)) {
            $this->paymentPurse = Model\SettingsQuery::create()->findOneByName(substr($this->paymentCurrency, 0, 3) . '_purse')->getValue();
        }
        $exchange->setExchangeUniqid($this->paymentId);
        $exchange->setSurname($init['surname']);
        $exchange->setFirstname($init['firstname']);
        $exchange->setPatronymic($init['patronymic']);
        $exchange->setEmail($init['email']);
        $exchange->setPhone($init['phone']);
        $exchange->setPaymentDetailsFrom($init['payment_details_from']);
        $exchange->setPaymentDetailsTo($init['payment_details_to']);
        $exchange->setChangeFromCurr($this->paymentCurrency);
        $exchange->setChangeToCurr($this->getCurrency);
        $exchange->setChangeFromAmount($this->paymentSum);
        $exchange->setChangeToAmount($this->getSum);
        $exchange->setExchangeDate(time());
        $exchange->setExchangeStatus('not-paid');
        if(Auth::getInstance()->isLogged()) {
            $exchange->setUserid(Auth::getInstance()->getCurrentUserId());
        }

        $exchange->save();
        $this->setPaymentId($this->paymentId);
        $this->setPaymentDescription();
        if(self::isWebmoney($this->paymentCurrency)) {
            return $this->WMExchange();
        }
        elseif(self::isPrivat24($this->paymentCurrency)) {
            return $this->P24Exchange();
        }
        else
        {
            return false;
        }

    }
    public static function isWebmoney($currency) {
        return (substr(strtolower($currency), 0, 2) === 'wm');
    }
    public static function isPrivat24($currency) {
        return (strtolower($currency) === 'privat24uah');
    }
    public function setPaymentDescription() {
        $this->description = Model\SettingsQuery::create()->findOneByName('payment_description')->getValue();
        $this->description = str_replace('%payment_id%', $this->paymentId, $this->description);
        $this->description = str_replace('%payment_sum%', $this->paymentSum, $this->description);
        $this->description = str_replace('%payment_currency%', strtoupper($this->paymentCurrency), $this->description);
        $this->description = str_replace('%get_sum%', $this->getSum, $this->description);
        $this->description = str_replace('%get_currency%', strtoupper($this->getCurrency), $this->description);
    }



    public function WMExchange() {
        return <<<TEXT
<form id="pay" name="pay" method="POST" action="https://merchant.webmoney.ru/lmi/payment.asp">
<p>
  <input type="hidden" name="LMI_PAYMENT_AMOUNT" value="{$this->paymentSum}">
  <input type="hidden" name="LMI_PAYMENT_DESC" value="{$this->description}">
  <input type="hidden" name="LMI_PAYMENT_NO" value="{$this->paymentId}">
  <input type="hidden" name="LMI_PAYEE_PURSE" value="{$this->paymentPurse}">
  <input type="hidden" name="LMI_SIM_MODE" value="0">
</p>
</form>
<script language="JavaScript">
document.pay.submit();
</script>
TEXT;

    }

    public function P24Exchange() {
        $p24 = new LiqPay(self::public_key, self::private_key);
        $html = $p24->cnb_form($this->P24Fields());
        return $html;
    }
 public function P24Fields() {
        return [
            'public_key'    => self::public_key,
	        'type'		=> 'buy',
            'version'        => '3',
            'amount'         => $this->paymentSum,
            'currency'       => 'UAH',
            'description'    => $this->description,
            'order_id'       => $this->paymentId,
            'sandbox'        => 1,
            'server_url' => URL::base('http', TRUE).'paymentprocess/privat24',
            'result_url' => URL::base('http', TRUE).'paymentprocess/result',
        ];
    }

    public static function generatePrivat24Signature($data) {
        return base64_encode(sha1(self::private_key. $data. self::private_key, 1));
    }
    public static function generateWebmoneySignature($data) {
        $string = null;
        foreach($data as $item) {
            $string .= $item;
        }
	file_put_contents('test.txt',  $string);
        return strtoupper(hash('sha256', $string));
    }

}
