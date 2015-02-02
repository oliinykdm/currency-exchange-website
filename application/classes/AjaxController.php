<?php

class AjaxController extends Controller
{
    var $_response_;
    var $_post_data_;

    public function before()
    {
        if(!$this->request->is_ajax() || HTTP_Request::POST !== $this->request->method()) {
            exit('error: bad request');
        }
        $this->_post_data_ = $this->request->post();
    }

    public function after()
    {
        echo json_encode($this->_response_);
    }
}