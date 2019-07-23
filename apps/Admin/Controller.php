<?php

namespace Admin;

use \Home\Auth as Auth;
use \Home\RenderType as RenderType;
use \Home\Request as Request;

class Controller extends \Home\BaseController
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
	{
        if (!Auth::check()) {
            return RenderType::REQUIRE_LOGIN;
        }

		$this->render('admin/index', $data);
		return RenderType::OK;
	}

    public function login()
    {
        if (Request::type('POST')) {
            $loginModel = $this->loadModel('admin/login');
            $username = Request::post('username');
            $password = Request::post('password');
            $rememberme = Request::post('rememberme');
            $data['user'] = $loginModel->validate($username, $password);
            $data['password'] = $password;
            $this->renderJSON($data);
        } else {
            $this->render('admin/login');
        }
        return RenderType::OK;
    }

}
