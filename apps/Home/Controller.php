<?php

namespace Home;
class Controller extends \Home\BaseController
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
	{
		$this->View->render('home/index');
		return true;
	}

}
