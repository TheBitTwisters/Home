<?php

namespace Home;

class Redirect
{

    public static function home()
    {
        header("location: " . Config::get('URL'));
    }

    public static function login()
    {
        $login_url = Config::get('DEFAULT_LOGIN_URL');
        header("location: " . Config::get('URL_ROOT') . $login_url);
    }

    public static function to($path)
    {
        $path = trim($path, '/');
        $path = '/'.$path.'/';
        header("location: " . Config::get('URL_ROOT') . $path);
    }

    public static function external($path)
    {
        header("location: " . $path);
    }
}
