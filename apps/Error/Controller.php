<?php

namespace Error;
class Controller extends \Home\BaseController
{

    public function __construct()
    {
        parent::__construct();
    }

    public function not_found()
	{
		$this->View->render('error/404');
		return true;
	}

}
