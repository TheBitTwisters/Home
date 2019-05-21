<?php

namespace Home;
class Redirect
{

    public static function home()
    {
        header("location: " . Config::get('URL'));
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
