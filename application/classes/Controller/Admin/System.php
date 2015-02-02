<?php

class Controller_Admin_System extends AdminController
{

    public function action_index()
    {
        $this->redirect('/admin/system/login');
    }

    public function action_login()
    {
        $error = null;
        if ($this->request->method() == Request::POST) {
                if(Auth::getInstance()->login($this->request->post('email'), $this->request->post('password'))) {
                    if (Auth::getInstance()->isAdmin()) {
                        $this->redirect('/admin/dashboard');
                    } else {
                        $error = ['error' => 'Пользователь не является администратором'];
                    }
                }
            else
            {
              $error = ['error' => 'Неверный логин или пароль'];
            }
        }
        if (Auth::getInstance()->isAdmin()) {
            $this->redirect('/admin/dashboard');
        }
         $this->display('system/login', $error);
    }
    public function action_logout() {
        Auth::getInstance()->logout();
        $this->redirect('/admin/system/login');
    }
}
