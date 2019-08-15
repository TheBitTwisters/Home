<?php

namespace Home;

class Csrf
{

    public static function makeToken()
    {
        $max_ts = Config::get('CSRF_VALIDITY');
        $current_ts = time();
        $csrf_token_ts = Session::get('csrf_token_ts');
        $csrf_token = Session::get('csrf_token');
        if (empty($csrf_token) || ($current_ts - $csrf_token_ts) > $max_ts) {
            Session::set('csrf_token', md5(uniqid(rand(), true)));
            Session::set('csrf_token_ts', $current_ts);
        }
        return Session::get('csrf_token');
    }

    public static function isTokenValid()
    {
        $expired = (time() - Session::get('csrf_token_ts')) > Config::get('CSRF_VALIDITY');
        $token = Request::post('csrf_token');
        return !$expired && !empty($token) && $token == Session::get('csrf_token');
    }

}
