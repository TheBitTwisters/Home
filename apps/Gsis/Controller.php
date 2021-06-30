<?php

namespace Gsis;

use \Home\RenderType as RenderType;
use \Home\Request as Request;
use \Home\Mail as Mail;
use \Home\Config as Config;
use \Home\Feedback as Feedback;

class Controller extends \Home\BaseController
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
  	{
        $data = [];

        $this->renderJSON($data);
    		return RenderType::OK;
  	}

    public function login()
  	{
        $data = [
          'token' => 'AeHPvhg2Tqx6t83LkQMbZGaNFJnKWV9X'
        ];

        $this->renderJSON($data);
    		return RenderType::OK;
  	}

    public function fetchUserdata()
    {
      $data = [
        'id' => 'admin',
        'name' => 'Dehny Ahn',
        'telephone' => '+123 456 789',
        'email' => 'email@email.com',
        'address' => 'Seoul'
      ];

      $this->renderJSON($data);
      return RenderType::OK;
    }

    public function check_notices() 
    {
      $data['notices'][] = [
        'id' => 1,
        'title' => 'Notice 1',
        'content' => 'Notice 1 Sample content'
      ];
      $data['notices'][] = [
        'id' => 2,
        'title' => 'Notice 2',
        'content' => 'Notice 2 Sample content'
      ];

      $this->renderJSON($data);
      return RenderType::OK;
    }

    public function check_faq()
    {
      $data = [
        'faq' => [
          'id' => 1,
          'question' => 'What is Doosan?',
          'asnwer' => 'Notice 1 Sample content'
        ],
        'notices' => [
          'id' => 2,
          'title' => 'Notice 2',
          'content' => 'Notice 2 Sample content'
        ],
      ];

      $this->renderJSON($data);
      return RenderType::OK;
    }
}
 