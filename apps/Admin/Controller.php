<?php

namespace Admin;

use \Home\Auth as Auth;
use \Home\RenderType as RenderType;
use \Home\Request as Request;
use \Home\Csrf as Csrf;
use \Home\Cookie as Cookie;
use \Home\Config as Config;
use \Home\Feedback as Feedback;
use \Home\Session as Session;
use \Home\Redirect as Redirect;

class Controller extends \Home\BaseController
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
	{
        if (!Auth::check()) return RenderType::REQUIRE_LOGIN;

		$this->render('admin/index', $data);
		return RenderType::OK;
	}

    public function test() {
        $data = $_COOKIE;
        $this->renderJSON($data);
        return RenderType::OK;
    }

    public function login()
    {
        if (Request::type('POST')) {
            $loginModel = $this->loadModel('admin/login');
            $username = Request::post('username');
            $password = Request::post('password');
            $rememberme = Request::post('rememberme');
            if (Csrf::isTokenValid()) {
                if ($loginModel->isLoginAvailable()) {
                    $user = $loginModel->validate($username, $password);
                    $data['user'] = $user;
                    if ($user) {
                        $data['error'] = false;
                        $data['feedback'] = Feedback::create('success', 'Logged-in successfully', 'Redirecting ...');
                        $redirect_url = Cookie::get('login_redirect') ?? Config::get('LOGIN_REDIRECT_URL');
                        $data['response'] = [
                            'redirect_url' => $redirect_url
                        ];
                    } else {
                        $data['error'] = 'Wrong username and password combination';
                        $data['feedback'] = Feedback::create('danger', $data['error']);
                    }
                } else {
                    $data['error'] = 'Too many failed login attempts';
                    $data['feedback'] = Feedback::create('warning', $data['error']);
                }
            } else {
                $data['error'] = 'Invalid secret code';
                $data['feedback'] = Feedback::create('warning', $data['error']);
            }
            $this->renderJSON($data);
        } else {
            if (Session::isUserLoggedIn()) {
                Redirect::admin();
            } else {
                $this->render('admin/login');
            }
        }
        return RenderType::OK;
    }

}
