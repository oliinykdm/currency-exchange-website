<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Exchange extends Controller {
    var $post;
    public function before()
    {
        $this->post = $this->request->post();
    }
    public function action_index()
    {
        $view = View::factory('change');
        $response = Arr::extract($this->post, ['payAmount', 'payCurrency', 'getCurrency']);

        if($response) {

            if($response['payAmount'] >= 1 && !empty($response['payCurrency']) && !empty($response['getCurrency'])) {

                $payCurrency = Model\ExchangeRatesQuery::create()->findOneByFrom($response['payCurrency']);
                $getCurrency = Model\ExchangeRatesQuery::create()->findOneByFrom($response['getCurrency']);
                if(!$payCurrency) { goto ERROR; }
                if(!$getCurrency) { goto ERROR; }
                $payInfo = Paymentssystem::getToChangeValue($response['payAmount'], $response['payCurrency']);

                $payType = $payInfo['type'];
                $view = View::factory('payment/start');
                $view->surname = null;
                $view->firstname = null;
                $view->patronymic = null;
                $view->payment_details_to_ = null;
                $view->payment_details_from_ = null;
                $view->email = null;
                $view->phone = null;
                $view->js                   = ['popup'  =>  'popup.js'];

                switch($payType) {
                    case 'privat24':
                        $view->payment_details_from = 'privat24';
                        $view->payment_details_from_desc = Kohana::message('exchange', 'privat24-title');
                        $view->payment_details_from_ph = 'Пример: 1234567890123456';
                        $view->payment_details_from_pattern = 'required="required" pattern="[0-9]{16}" ';
                        break;
                    case 'webmoney':
                        $view->payment_details_from = 'webmoney';
                        $view->payment_details_from_desc = Kohana::message('exchange', 'webmoney-title');
                        $prefix = strtoupper(substr($response['payCurrency'], 2, 3));
                        $view->payment_details_from_ph = 'Пример: ' . $prefix . '123456789012';
                        $view->payment_details_from_pattern = 'required="required" pattern="' . $prefix . '[0-9]{12}" ';
                        break;
                }

                if(Paymentssystem::isWebmoney($response['getCurrency'])) {
                    $view->payment_details_to = 'webmoney';
                    $view->payment_details_to_desc = Kohana::message('exchange', 'webmoney-title');
                    $prefix =  strtoupper(substr($response['getCurrency'], 2, 3));
                    $view->payment_details_to_ph = 'Пример: ' . $prefix . '123456789012';
                    $view->payment_details_to_pattern = 'required="required" pattern="' . $prefix . '[0-9]{12}" ';
                }
                elseif(Paymentssystem::isPrivat24($response['getCurrency'])){
                    $view->payment_details_to = 'privat24';
                    $view->payment_details_to_desc = Kohana::message('exchange', 'privat24-title');
                    $view->payment_details_to_ph = 'Пример: 1234567890123456';
                    $view->payment_details_to_pattern = 'required="required" pattern="[0-9]{16}" ';
                }

                if ($post_data = @$this->request->post()) {
                    if(@$post_data['pay_button']) {
                        $view->surname = $post_data['surname'];
                        $view->firstname = $post_data['firstname'];
                        $view->patronymic = $post_data['patronymic'];
                        $view->payment_details_to_ = $post_data['payment_details_to_' . $view->payment_details_to];
                        $view->payment_details_from_ = $post_data['payment_details_from_' . $view->payment_details_from];
                        $view->email = $post_data['email'];
                        $view->phone = $post_data['phone'];
                        $post = Validation::factory($_POST);
                        $post
                            ->rule('surname', 'not_empty')
                            ->rule('surname', 'min_length', array(':value', '2'))
                            ->rule('surname', 'max_length', array(':value', '30'))
                            ->rule('firstname', 'not_empty')
                            ->rule('firstname', 'min_length', array(':value', '2'))
                            ->rule('firstname', 'max_length', array(':value', '30'))
                            ->rule('patronymic', 'not_empty')
                            ->rule('patronymic', 'min_length', array(':value', '2'))
                            ->rule('patronymic', 'max_length', array(':value', '30'))
                            ->rule('payment_details_to_' . $view->payment_details_to, 'not_empty')
                            ->rule('payment_details_from_' . $view->payment_details_from, 'not_empty');
                        if($view->payment_details_to == 'webmoney') {
                                $post
                                    ->rule('payment_details_to_' . $view->payment_details_to, 'regex', array(':value', '|' . strtoupper(substr($response['getCurrency'], 2, 3)) .'\d{12}|'));
                            }
                        if($view->payment_details_to == 'privat24') {
                            $post
                                ->rule('payment_details_to_' . $view->payment_details_to, 'regex', array(':value', '/^([0-9]{4})[-|s]*([0-9]{4})[-|s]*([0-9]{4})[-|s]*([0-9]{2,4})$/'));
                            }
                        if($view->payment_details_from  == 'webmoney') {
                            $post
                                ->rule('payment_details_from_' . $view->payment_details_from, 'regex', array(':value', '|' . strtoupper(substr($response['payCurrency'], 2, 3)) .'\d{12}|'));
                        }
                        if($view->payment_details_from == 'privat24') {
                            $post
                                ->rule('payment_details_from_' . $view->payment_details_from, 'regex', array(':value', '/^([0-9]{4})[-|s]*([0-9]{4})[-|s]*([0-9]{4})[-|s]*([0-9]{2,4})$/'));
                        }
                           $post
                            ->rule('email', 'not_empty')
                            ->rule('email', 'min_length', array(':value', '5'))
                            ->rule('email', 'max_length', array(':value', '35'))
                            ->rule('email', 'regex', array(':value', '/^([a-z0-9_\.\-]{1,20})@([a-z0-9\.\-]{1,20})\.([a-z]{2,4})/is'))
                            ->rule('phone', 'not_empty')
                            ->rule('payAmount', 'not_empty')
                            ->rule('payCurrency', 'not_empty')
                            ->rule('getCurrency', 'not_empty');

                        if ($post->check()) {
                            $data = ['payment_details_to'   =>  $post_data['payment_details_to_' . $view->payment_details_to],
                                'payment_details_from'   =>  $post_data['payment_details_from_' . $view->payment_details_from]];

                            $paymentsSystem = new Paymentssystem();
                            $paymentOutput = $paymentsSystem->init(Arr::merge($data, $post_data));
                            print $paymentOutput;
                            exit('Processing...');

                        } else {
                            $errors = $post->errors('exchange');
                            $view->message = $errors;
                        }
                    }
                }

                $view->payAmount = $response['payAmount'];
                $view->toPay = $payInfo['toPay'];
                $view->toGet = $payInfo[$response['payCurrency']][$response['getCurrency']];
                $view->payCurrency = $response['payCurrency'];
                $view->getCurrency = $response['getCurrency'];



                $this->response->body($this->request->response = $view->render());

            }
            else
            {
                ERROR:
                echo 'payment error';
            }

        }
        $this->response->body($this->request->response = $view->render());
    }

}
