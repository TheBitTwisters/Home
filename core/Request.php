<?php

namespace Home;

class Request
{
    public static function post($key, $clean = true)
    {
        if (isset($_POST[$key])) {
            return ($clean) ? trim(strip_tags($_POST[$key])) : $_POST[$key];
        }
    }

    public static function postCheckbox($key)
    {
        return isset($_POST[$key]) ? 1 : NULL;
    }

    public static function get($key)
    {
        if (isset($_GET[$key])) {
            return $_GET[$key];
        }
    }

    public static function type($check=null)
    {
        if (!$check)
            return $_SERVER['REQUEST_METHOD'];
        else
            return $_SERVER['REQUEST_METHOD'] == $check;
    }
}
