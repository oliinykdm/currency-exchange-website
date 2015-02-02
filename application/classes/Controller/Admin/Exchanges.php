<?php

class Controller_Admin_Exchanges extends AdminController
{
    public function action_index()
    {
        $exchanges = Model\ExchangesQuery::create()->find();

        $this->display('exchanges', ['exchanges_list'   =>  $exchanges]);
    }


}
