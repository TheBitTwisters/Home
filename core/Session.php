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
            return Filter::special($value);
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

    public static function error($error)
    {
        self::add('error', $error);
    }

    public static function isUserLoggedIn()
    {
        return (self::get('user_id') > 0);
    }

    public static function updateSession()
    {
        $sql = "UPDATE sessions
                   SET ts_last_active=:ts_last_active
                 WHERE user_id=:user_id AND session=:session";
        $data = [
            ':ts_last_active' => time(),
            ':user_id' => Session::get('user_id'),
            ':session' => session_id()
        ];
        $model = new BaseModel();
        $model->run($sql, $data);
        if (!$model->rowCount()) self::addSession();
    }

    private static function addSession()
    {
        $sql = "INSERT INTO sessions ( user_id,  session,  ip,  ts_last_active)
                     VALUES          (:user_id, :session, :ip, :ts_last_active)";
        $data = [
            ':user_id' => Session::get('user_id'),
            ':session' => session_id(),
            ':ip' => $_SERVER['REMOTE_ADDR'],
            ':ts_last_active' => time()
        ];
        $model = new BaseModel();
        $model->run($sql, $data);
    }

}
