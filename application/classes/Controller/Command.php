<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Command extends Controller {
    var $command;
    public function before() {
        $this->command = $this->request->param('id');
    }
    public function action_activate()
    {
        $activateId = $this->command;
        if(!empty($activateId)) {
            if($userData = Model\UsersPrepareQuery::create()->findOneByActivationCode($activateId)) {
                $newData = $userData->toArray();
                unset($newData['Id']);
                $registerUser = new Model\Users();
                $registerUser->fromArray($newData);
                $registerUser->setRecoverKey(Auth::getInstance()->calcRecoverHash());
                if($registerUser->save()) {
                    Model\UsersPrepareQuery::create()->findByEmail($registerUser->getEmail())->delete();
                    $this->redirect('/');
                }
            }
            else
            {
                $this->redirect('/');
            }
        }
        else
        {
            $this->redirect('/');
        }
    }
    public function action_changepass() {
        $recoverKey = $this->command;
        if(!empty($recoverKey)) {
            if($userData = Model\UsersQuery::create()->findOneByRecoverKey($recoverKey)) {
                $view = View::factory('auth/new_pass');
                $view->js                   = ['popup'  =>  'popup.js', 'handler'	=> 'handler.js'];
                $view->key = $recoverKey;
                $this->response->body($this->request->response = $view->render());
            }
            else
            {
                $this->redirect('/');
            }
        }
        else
        {
            $this->redirect('/');
        }
    }

}
