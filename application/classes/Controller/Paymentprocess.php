<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Paymentprocess extends Controller {
    var $mode;
    var $post;
    var $paymentId;
    public function before() {
        $this->mode = $this->request->param('id');
        $this->post = $this->request->post();
    }

    public function action_result() {

        if($paymentId = Paymentssystem::getPaymentId()) {
            if(empty($this->mode)) {
                $this->redirect(Route::get('PaymentProcess')->uri(
                    array(
                        'controller' => 'paymentprocess',
                        'action'     => 'result',
                        'id'     => $paymentId,
                    )
                ));
            }
        }

        $view = View::factory('payment/result');
        $view->paymentId = $this->mode;
        $view->js = ['popup'    => 'popup.js', 'result'   => 'payment_result.js'];

        $this->response->body($this->request->response = $view->render());
    }

    public function action_webmoney()
    {
        if(isset($this->post['LMI_PAYEE_PURSE'])) {
                    if ($this->post['LMI_HASH'] === Paymentssystem::generateWebmoneySignature([
                    urldecode($this->post['LMI_PAYEE_PURSE']),
                    urldecode($this->post['LMI_PAYMENT_AMOUNT']),
                    urldecode($this->post['LMI_PAYMENT_NO']),
                    urldecode($this->post['LMI_MODE']),
                    urldecode($this->post['LMI_SYS_INVS_NO']),
                    urldecode($this->post['LMI_SYS_TRANS_NO']),
                    urldecode($this->post['LMI_SYS_TRANS_DATE']),
		            Paymentssystem::wm_secret_key,
                    urldecode($this->post['LMI_PAYER_PURSE']),
                    urldecode($this->post['LMI_PAYER_WM'])])) {
                $orderId = $this->post['LMI_PAYMENT_NO'];
                $orderAmount = $this->post['LMI_PAYMENT_AMOUNT'];
                $ownerPurse = $this->post['LMI_PAYEE_PURSE'];
                $payerPurse = $this->post['LMI_PAYER_PURSE'];
                $_ownerPurse = Model\SettingsQuery::create()->findOneByValue($ownerPurse);
                if($_ownerPurse) {
                    if ($exchangeDetails = Model\ExchangesQuery::create()->findOneByExchangeUniqid($orderId)) {
                        if($payerPurse === $exchangeDetails->getPaymentDetailsFrom()) {
                            $checkRate = Model\ExchangeRatesQuery::create()
                                ->filterByFrom($exchangeDetails->getChangeFromCurr())
                                ->_and()
                                ->filterByTo($exchangeDetails->getChangeToCurr())
                                ->findOne();
                            if ($orderAmount * $checkRate->getValue() == $exchangeDetails->getChangeToAmount()) {
                                $exchangeDetails->setExchangeStatus('success');
                                $exchangeDetails->save();
                            } else {
                                $exchangeDetails->setExchangeStatus('success');
                                $exchangeDetails->setChangeFromAmount($orderAmount);
                                $exchangeDetails->setChangeToAmount($orderAmount * $checkRate->getValue());
                                $exchangeDetails->save();
                            }
                            $sms = new SMSGW();
                            $sms->setSMSText('У Вас новая оплаченная Webmoney-заявка на обмен (#' . $exchangeDetails->getId() . ').');
                            $sms->sendMessage();
                        }
                        else
                        {
                            throw new Exception('Bad payer purse');
                        }
                    }
                    else
                    {
                        throw new Exception('PaymentId not found');
                    }
                }
                else
                {
                    throw new Exception('Bad owner purse');
                }
            }
            else
            {
                throw new Exception('Bad hash');
            }
        }
    }

    public function action_privat24()
    {
                if(isset($this->post['data'])) {
                    if ($this->post['signature'] === Paymentssystem::generatePrivat24Signature($this->post['data'])) {
                        $jsonData = json_decode(base64_decode($this->post['data']));
                        $orderId = $jsonData->order_id;
                        $orderStatus = $jsonData->status;
                        $orderAmount = $jsonData->amount;
                        $orderCurrency = $jsonData->currency;
                        if(($orderStatus === 'success' || $orderStatus === 'sandbox') && $orderCurrency === 'UAH') {
                            if ($exchangeDetails = Model\ExchangesQuery::create()->findOneByExchangeUniqid($orderId)) {
                                $checkRate = Model\ExchangeRatesQuery::create()
                                    ->filterByFrom($exchangeDetails->getChangeFromCurr())
                                    ->_and()
                                    ->filterByTo($exchangeDetails->getChangeToCurr())
                                    ->findOne();
                                if($orderAmount * $checkRate->getValue() == $exchangeDetails->getChangeToAmount()) {
                                    $exchangeDetails->setExchangeStatus($orderStatus);
                                    $exchangeDetails->save();
                                }
                                else
                                {
                                    $exchangeDetails->setExchangeStatus($orderStatus);
                                    $exchangeDetails->setChangeFromAmount($orderAmount);
                                    $exchangeDetails->setChangeToAmount($orderAmount * $checkRate->getValue());
                                    $exchangeDetails->save();
                                }

                                $sms = new SMSGW();
                                $sms->setSMSText('У Вас новая оплаченная Privat24-заявка на обмен (#' . $exchangeDetails->getId() . ').');
                                $sms->sendMessage();
                            }
                        }
                        else
                        {
                            if ($exchangeDetails = Model\ExchangesQuery::create()->findOneByExchangeUniqid($orderId)) {
                                $checkRate = Model\ExchangeRatesQuery::create()
                                    ->filterByFrom($exchangeDetails->getChangeFromCurr())
                                    ->_and()
                                    ->filterByTo($exchangeDetails->getChangeToCurr())
                                    ->findOne();
                                $exchangeDetails->setExchangeStatus($orderStatus);
                                $exchangeDetails->setChangeFromCurr(strtolower($orderCurrency));
                                $exchangeDetails->setChangeFromAmount($orderAmount);
                                $exchangeDetails->setChangeToAmount($orderAmount * $checkRate->getValue());
                                $exchangeDetails->save();
                            }
                        }
                    }
                    else
                    {
                        throw new Exception('Bad signature');
                    }
                }
    }

}
