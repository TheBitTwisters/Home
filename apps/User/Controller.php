<?php

namespace User;
class Controller extends \Home\BaseController
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index($testparam='')
	{
        $model = $this->loadModel('user/users');
        $data['test'] = $testparam;
        if ($model) {
            $data['users'] = $model->getAllUsers();
            $data['count'] = $model->countAllUsers();
        }
		$this->render('user/index', $data);
		return true;
	}

}
