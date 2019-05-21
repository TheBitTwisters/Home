<?php

namespace Error;
class Controller extends \Home\BaseController
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index($code = 0)
    {
        if ($code) {
            $data['code'] = $code;
            $this->View->render('error/code', $data);
        } else {
            \Home\Redirect::home();
        }
        return true;
    }

    public function not_found()
	{
		$this->View->render('error/404');
		return true;
	}

    public function db($code = 0)
	{
        if ($code) {
            $data['code'] = $code;
            $this->View->render('error/db', $data);
        } else {
            \Home\Redirect::home();
        }
        return true;
	}

}
