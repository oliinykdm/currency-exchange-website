<?php

class AdminController extends Controller
{
    var $view;
    var $displayCalled;
    const TPL_PREFIX = 'admin';
    protected function display($tpl, $vars = []) {
        $this->displayCalled = true;
        $this->view = View::factory(self::TPL_PREFIX . '/' . $tpl);
         if($vars) {
            foreach ($vars as $var => $val) {
                $this->view->$var = $val;
            }
        }
        $this->response->body($this->request->response = $this->view->render());
    }
}