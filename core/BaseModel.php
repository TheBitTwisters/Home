<?php

namespace Home;

use \PDO as PDO;
use \PDOException as PDOException;

class BaseModel
{
    private $db;
    protected $stmt;

    public function __construct()
    {
        $this->setup();
    }

    public function run($sql, $data)
    {
        $this->stmt = $this->db->prepare($sql);
        $this->stmt->execute($data);
        return $this->stmt;
    }

    public function fetch($fetch_type = null)
    {
        if ($fetch_type) {
            return $this->stmt->fetch($fetch_type);
        }
        return $this->stmt->fetch();
    }

    public function fetchAll($fetch_type = null, $fetch_argument = null)
    {
        if ($fetch_type) {
            if ($fetch_argument) {
                return $this->stmt->fetchAll($fetch_type, $fetch_argument);
            }
            return $this->stmt->fetchAll($fetch_type);
        }
        return $this->stmt->fetchAll();
    }

    public function affectedRows()
    {
        return $this->stmt->rowCount();
    }

    private function setup()
    {
        $db_type = Config::get('DB_TYPE');
        if ($db_type == 'mysql') {
            $this->db = $this->setupMysql();
        }
    }

    private function setupMysql()
    {
        $db = false;
        try {
            $timezone = Config::get('SITE_TIMEZONE');
            $timezone_setting = "SET time_zone='{$timezone}'";
            $options = [
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
                PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
                PDO::MYSQL_ATTR_INIT_COMMAND => $timezone_setting
            ];
            $db = new \PDO(
                'mysql' .
                ':host=' . Config::get('DB_HOST') .
                ';dbname=' . Config::get('DB_NAME') .
                ';port=' . Config::get('DB_PORT') .
                ';charset=' . Config::get('DB_CHARSET'),
                Config::get('DB_USER'), Config::get('DB_PASS'), $options
            );
        } catch (PDOException $e) {
            $error = array();
            $error['name'] = 'Database Error';
            $error['code'] = $e->getCode();
            $error['message'] = $e->getMessage();
            Session::error($error);
        }
        return $db;
    }

}
