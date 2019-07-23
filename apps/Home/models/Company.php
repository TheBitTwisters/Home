<?php

namespace Home\Model;

use \Home\BaseModel as BaseModel;
use \PDO as PDO;

class Company extends BaseModel
{

    public function __construct()
    {
        parent::__construct();
    }

    public function getDetails()
    {
        $sql = "SELECT name, value
                  FROM company
                 WHERE id IN (
                     SELECT MAX(id)
                       FROM company
                   GROUP BY name
                 )";
        $data = [];
        $this->run($sql, $data);
        return $this->fetchAll(PDO::FETCH_KEY_PAIR);
    }

}
