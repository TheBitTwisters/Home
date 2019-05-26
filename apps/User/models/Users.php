<?php

namespace User\Model;
class Users extends \Home\BaseModel
{

    public function __construct()
    {
        parent::__construct();
        $this->tableName = 'users';
        $this->columns = [
            'name',
            'password_hash'
        ];
    }

    public function getAllUsers($limit = 100)
    {
        $sql = 'SELECT * FROM users LIMIT '.$limit;
        return $this->run($sql);
    }

    public function countAllUsers()
    {
        return $this->count(['id' => 2]);
    }

}
