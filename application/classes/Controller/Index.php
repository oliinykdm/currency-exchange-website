<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Index extends Controller {

	public function action_index()
	{
		$view = View::factory('new_template');
		$view->js                   = ['popup'  =>  'popup.js', 'handler'	=> 'handler.js'];
		$this->response->body($this->request->response = $view->render());
	}

}
