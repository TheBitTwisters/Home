<?php

namespace Home;

class Filter
{

    public static function special($value)
    {
        if (is_string($value)) {
            $value = htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
        }

        return $value;
    }
    public static function encode($str)
    {
        return htmlentities($str, ENT_QUOTES, 'UTF-8');
    }

}
