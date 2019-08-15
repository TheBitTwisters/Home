<?php

namespace Admin\Model;

use \Home\Config as Config;
use \Home\Session as Session;
use \PDO as PDO;
use \Home\Cookie as Cookie;

class Login extends \Home\BaseModel
{

    public function __construct()
    {
        parent::__construct();
    }

    public function isLoginAvailable()
    {
        $last_login = time() - Session::get('failed_login_ts');
        if ($last_login < Config::get('LOGIN_RETRY_TIME')) {
            return Session::get('failed_login_count') < Config::get('LOGIN_FAILED_COUNTS');
        }
        $this->resetFailedLoginCount();
        return true;
    }

    public function validate($username, $password)
    {
        $user = $this->getUser($username);

        if ($user && password_verify($password, $user->password_hash)) {
            $this->setSession($user);
            return true;
        } else {
            self::incrementFailedLoginCount();
            return false;
        }
    }

    private function getUser($username)
    {
        $sql = "SELECT id, name, password_hash, active, group_id
                  FROM users
                 WHERE name = :name";
        $data = [':name' => $username];
        $this->run($sql, $data);
        return $this->fetch();
    }

    private function incrementFailedLoginCount()
    {
        Session::set('failed_login_count', Session::get('failed_login_count') + 1);
        Session::set('failed_login_ts', time());
    }
    private function resetFailedLoginCount()
    {
        Session::set('failed_login_count', 0);
        Session::set('failed_login_ts', 0);
    }

    private function setSession($user)
    {
        Session::init();
        session_regenerate_id(true);
        $_SESSION = array();

        Session::set('user_id', $user->id);
        Session::set('user_name', $user->name);
        Session::set('user_group_id', $user->group_id);

        Session::updateSession();
        Cookie::set(session_name(), session_id());
    }


}
