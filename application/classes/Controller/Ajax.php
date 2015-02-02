<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Ajax extends AjaxController {
    public function action_getRates() {
        $ratesArray = [];
        if($rates = Model\ExchangeRatesQuery::create()->find()) {
            foreach($rates as $rate) {
                $ratesArray[$rate->getFrom()][$rate->getTo()] = $rate->getValue();
            }
            $this->_response_ = $ratesArray;
        }
    }
    public function action_getPaymentStatus() {
        $response = Arr::extract($this->_post_data_, ['paymentId']);
        if($exchangeDetails = Model\ExchangesQuery::create()->findOneByExchangeUniqid($response['paymentId'])) {
            $this->_response_['status'] = $exchangeDetails->getExchangeStatus();
        }
        else
        {
            $this->_response_['status'] = 'bad-paymentId';
        }
    }
    public function action_initRegister() {
        if($this->_post_data_) {
            $response = Arr::extract($this->_post_data_, ['email', 'username', 'password', 'password_complete']);
            foreach($response as $data => $value) {
                if(empty($value)) {
                    $this->_response_['error'] = Kohana::message('register/init', 'fill_error');
                    return;
                }
            }
            if(!preg_match('/^([a-z0-9_\.\-]{1,20})@([a-z0-9\.\-]{1,20})\.([a-z]{2,4})/is', $response['email'])) {
                $this->_response_['error'] = Kohana::message('register/init', 'error_email_format');
                return;
            }
            $user = Model\UsersQuery::create()->findOneByEmail($response['email']);
            if($user) {
                $this->_response_['error'] = Kohana::message('register/init', 'email_exists');
                return;
            }
            if(!preg_match('/^[абвгдеёжзийклмнопрстуфхцчшщъыьэюяАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЇїіІєЄёЁa-zA-Z0-9]+$/', $response['username'])) {
                $this->_response_['error'] = Kohana::message('register/init', 'error_username_format');
                return;
            }
            if(strlen($response['password']) < 6 || strlen($response['password']) > 32) {
                $this->_response_['error'] = Kohana::message('register/init', 'error_password_length');
                return;
            }
            if($response['password'] !== $response['password_complete']) {
                $this->_response_['error'] = Kohana::message('register/init', 'error_password_not_match');
                return;
            }
            $register = new Register();
            if($register->init([$response])) {
                $this->_response_['success'] = Kohana::message('register/init', 'success');
            }
        }
    }
    public function action_initLogin() {
        if($this->_post_data_) {
            $response = Arr::extract($this->_post_data_, ['email', 'password']);
            foreach($response as $data => $value) {
                if(empty($value)) {
                    $this->_response_['error'] = Kohana::message('register/init', 'fill_error');
                    return;
                }
            }
            if(!preg_match('/^([a-z0-9_\.\-]{1,20})@([a-z0-9\.\-]{1,20})\.([a-z]{2,4})/is', $response['email'])) {
                $this->_response_['error'] = Kohana::message('login/init', 'error_email_format');
                return;
            }
            $user = Model\UsersQuery::create()->findOneByEmail($response['email']);
            if(!$user) {
                $this->_response_['error'] = Kohana::message('login/init', 'email_not_exists');
                return;
            }
            if(strlen($response['password']) < 6 || strlen($response['password']) > 32) {
                $this->_response_['error'] = Kohana::message('login/init', 'error_password_length');
                return;
            }
            if(Auth::getInstance()->login($response['email'], $response['password'])) {
                $this->_response_['success'] = true;
            }
            else
            {
                $this->_response_['error'] = Kohana::message('login/init', 'error_auth');
            }
        }
    }
    public function action_initForgot() {
        if($this->_post_data_) {
            $response = Arr::extract($this->_post_data_, ['email']);
            foreach($response as $data => $value) {
                if(empty($value)) {
                    $this->_response_['error'] = Kohana::message('forgot/init', 'fill_error');
                    return;
                }
            }
            if(!preg_match('/^([a-z0-9_\.\-]{1,20})@([a-z0-9\.\-]{1,20})\.([a-z]{2,4})/is', $response['email'])) {
                $this->_response_['error'] = Kohana::message('forgot/init', 'error_email_format');
                return;
            }
            $user = Model\UsersQuery::create()->findOneByEmail($response['email']);
            if(!$user) {
                $this->_response_['error'] = Kohana::message('forgot/init', 'email_not_exists');
                return;
            }

            if(Auth::getInstance()->recover($response['email'])) {
                $this->_response_['success'] = Kohana::message('forgot/init', 'success');
            }
            else
            {
                $this->_response_['error'] = Kohana::message('forgot/init', 'error_forgot');
            }

        }
    }
    public function action_initChangePass() {
        if($this->_post_data_) {
            $response = Arr::extract($this->_post_data_, ['password', 'password_complete', 'key']);

            $key = Model\UsersQuery::create()->findOneByRecoverKey($response['key']);
            if(!$key) {
                $this->_response_['error'] = Kohana::message('change_pass/init', 'key_not_exists');
                return;
            }
            foreach($response as $data => $value) {
                if(empty($value)) {
                    $this->_response_['error'] = Kohana::message('change_pass/init', 'fill_error');
                    return;
                }
            }
            if(strlen($response['password']) < 6 || strlen($response['password']) > 32) {
                $this->_response_['error'] = Kohana::message('change_pass/init', 'error_password_length');
                return;
            }
            if($response['password'] !== $response['password_complete']) {
                $this->_response_['error'] = Kohana::message('change_pass/init', 'error_password_not_match');
                return;
            }
            if(Auth::getInstance()->change_password($response['password'], $response['key'])) {
                $this->_response_['success'] = Kohana::message('change_pass/init', 'success');
            }
            else
            {
                $this->_response_['error'] = Kohana::message('change_pass/init', 'error_change_pass');
            }

        }
    }
    public function action_initLogout() {
      $this->_response_ = Auth::getInstance()->logout();
    }

    public function action_initCalcExchangeValues() {
        if($this->_post_data_) {
            $response = Arr::extract($this->_post_data_, ['fromCurrency', 'amount']);
            $this->_response_ = Paymentssystem::getToChangeValue($response['amount'], $response['fromCurrency']);
        }
    }
}
