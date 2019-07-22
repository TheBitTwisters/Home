<?php

namespace Home;

class Csrf
{

    public static function makeToken()
    {
        $max_ts = 60 * 60;
        $current_ts = time();
        $stored_ts = Session::get('csrf_token_ts');
        $csrf_token = Session::get('csrf_token');
        if (empty($csrf_token) || ($max_ts + $stored_ts) <= $current_ts) {
            Session::set('csrf_token', md5(uniqid(rand(), true)));
            Session::set('csrf_token_ts', $current_ts);
        }
        return Session::get('csrf_token');
    }

    public static function isTokenValid()
    {
        $token = Request::post('csrf_token');
        return !empty($token) && $token === Session::get('csrf_token');
    }

}
