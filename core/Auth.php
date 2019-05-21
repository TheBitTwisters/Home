<?php

namespace Home;
class Auth
{

    public static function checkAuthentication()
    {
        if (!Session::isUserLoggedIn()) {
            Session::destroy();
            Redirect::to('login');
            exit();
        }
    }

    public static function loginWithCookie()
    {
        // TODO: Future updates
    }

}
