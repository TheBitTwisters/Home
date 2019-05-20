<?php

namespace Home;
/**
 * Class Auth
 * Checks if user is logged in, if not then sends the user to "yourdomain.com/login".
 * Auth::checkAuthentication() can be used in the constructor of a controller (to make the
 * entire controller only visible for logged-in users) or inside a controller-method to make only this part of the
 * application available for logged-in users.
 */
class Auth
{
    /**
     * The normal authentication flow, just check if the user is logged in (by looking into the session).
     * If user is not, then he will be redirected to login page and the application is hard-stopped via exit().
     */
    public static function checkAuthentication()
    {
        // if user is NOT logged in...
        // (if user IS logged in the application will not run the code below and therefore just go on)
        if (!Session::isUserLoggedIn()) {

            // ... then treat user as "not logged in", destroy session, redirect to login page
            Session::destroy();

            // send the user to the login form page
            Redirect::to('login');

            // to prevent fetching views via cURL (which "ignores" the header-redirect above) we leave the application
            // the hard way, via exit(). @see https://github.com/panique/php-login/issues/453
            // this is not optimal and will be fixed in future releases
            exit();
        }
    }

    public static function loginWithCookie()
    {
        // $session = Request::cookie('current_session');
        //
        // if (LoginModel::resumeSession($session)) {
        //     $redirect = $_SERVER['REQUEST_URI'];
        //     Redirect::to($redirect);
        //     exit();
        // }
    }

}
