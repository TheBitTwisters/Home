<?php

namespace Home;

class Auth
{

    public static function check()
    {
        if (!Session::isUserLoggedIn()) {
            Session::destroy();
            Cookie::set('login_redirect', $_SERVER['REQUEST_URI']);
            return false;
        }
        return true;
    }

}
