<?php

namespace Home;
class BaseModel
{
    private $db;

    public function __construct()
    {
        if (!$this->$db) {
            if (Config::get('DB_TYPE') == 'mysql') {
                $this->mysqlSetup();
            }
        }
    }

    private function mysqlSetup()
    {
        try {
            $timezone_setting = "SET time_zone='".Config::get('SITE_TIMEZONE')."'";
            $options = [
                \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_OBJ,
                \PDO::ATTR_ERRMODE => \PDO::ERRMODE_WARNING,
                \PDO::MYSQL_ATTR_INIT_COMMAND => $timezone_setting
            ];
            $this->db = new \PDO (
                'mysql' .
                ':host=' . Config::get('DB_HOST') .
                ';dbname=' . Config::get('DB_NAME') .
                ';port=' . Config::get('DB_PORT') .
                ';charset=' . Config::get('DB_CHARSET'),
                Config::get('DB_USER'), Config::get('DB_PASS'), $options
            );
        } catch (\PDOException $e) {
            $code = $e->getCode();
            Redirect::to('error/db/'.$code);
            exit();
        }
    }

}
