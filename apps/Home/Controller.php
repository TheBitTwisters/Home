<?php

namespace Home;
class Controller extends \Home\BaseController
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
	{
        $model = $this->loadModel('user');
        if ($model) {
            $data['model'] = 'loaded';
        }
		$this->View->render('home/index', $data);
		return true;
	}

}
