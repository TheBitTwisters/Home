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
        $data = [];

        $model = $this->loadModel('home/Company');
        if ($model) {
            $data['profile'] = $model->get('profile');
            $data['address'] = $model->get('address');
            $data['phones'] = $model->get('phones');
        }

		$this->render('home/index', $data);
		return true;
	}

    public function terms()
    {
		$this->render('home/terms');
		return true;
    }

}