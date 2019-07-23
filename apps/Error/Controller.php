<?php

namespace Error;

use \Home\RenderType as RenderType;

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
            $this->render('error/code', $data);
        } else {
            \Home\Redirect::home();
        }
        return RenderType::OK;
    }

    public function not_found()
	{
		$this->render('error/404');
		return RenderType::OK;
	}

    public function db($code = 0)
	{
        if ($code) {
            $data['code'] = $code;
            $this->render('error/db', $data);
        } else {
            \Home\Redirect::home();
        }
        return RenderType::OK;
	}

}
