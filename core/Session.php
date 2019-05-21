<?php

namespace Home;
class Session
{
    public static function init()
    {
        if (session_id() == '') session_start();
    }

    public static function set($key, $value)
    {
        $_SESSION[$key] = $value;
    }

    public static function unset($key) {
        if (isset($_SESSION[$key])) unset($_SESSION[$key]);
    }

    public static function get($key)
    {
        if (isset($_SESSION[$key])) {
            $value = $_SESSION[$key];
            return Filter::XSSFilter($value);
        }
        return false;
    }

    public static function add($key, $value)
    {
        $_SESSION[$key][] = $value;
    }

    public static function destroy()
    {
        session_destroy();
        session_start();
    }

    public static function isUserLoggedIn()
    {
        return (self::get('user_id') > 0);
    }

    public static function updateSession()
    {
        // TODO: Future updates
    }
}
