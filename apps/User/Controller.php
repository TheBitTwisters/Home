<?php

namespace User;
class Controller extends \Home\BaseController
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
	{
        $model = new Model();
		$this->View->render('user/index');
		return true;
	}

}
