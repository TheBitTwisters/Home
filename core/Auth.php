<?php

namespace Home;

class Auth
{

    public static function check()
    {
        if (!Session::isUserLoggedIn()) {
            Session::destroy();
            Cookie::set('login_redirect', $_SERVER['REQUEST_URI']);
            return false;
        }
        if (Config::get('LOGIN_CHECK_SESSION')) {
            return self::checkSession();
        }
        return true;
    }

    private static function checkSession()
    {
        $sql = "SELECT *
                  FROM sessions
                 WHERE user_id=:user_id AND session=:session";
        $data = [
            ':user_id' => Session::get('user_id'),
            ':session' => session_id()
        ];
        $model = new BaseModel();
        $model->run($sql, $data);
        return $model->fetch() ? true : false;
    }

}
