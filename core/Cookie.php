<?php

namespace Home;

class Cookie
{

    public static function set($name, $value, $duration = false)
    {
        if (!$duration) {
            $duration = time() - (3600 * 24 * 3650);
        }
        setcookie($name, $value, $duration,
            Config::get('COOKIE_PATH'), Config::get('COOKIE_DOMAIN'),
            Config::get('COOKIE_SECURE'), Config::get('COOKIE_HTTP'));
    }

    public static function remove($name)
    {
        setcookie($name, '', 1);
    }

}
