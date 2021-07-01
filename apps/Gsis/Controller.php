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

    public function check_documents() 
    {
      $data['documents'][] = [
        'id' => 1,
        'title' => 'DXC300LC-5K',
        'href' => '#',
        'img' => 'https://s7d2.scene7.com/is/image/Caterpillar/CM20190927-1f4f1-6deb0?wid=600&hei=400&op_sharpen=1&qlt=100',
        'version' => '1.0',
        'date' => '2021-06-08',
        'file_type' => 'OM'
      ];
      $data['documents'][] = [
        'id' => 1,
        'title' => 'DXC300LC-8K',
        'href' => '#',
        'img' => 'https://s7d2.scene7.com/is/image/Caterpillar/CM20190927-1f4f1-6deb0?wid=600&hei=400&op_sharpen=1&qlt=100',
        'version' => '1.0',
        'date' => '2021-06-08',
        'file_type' => 'SM'
      ];
     

      $this->renderJSON($data);
      return RenderType::OK;
    }

    public function check_qa()
    {
      $data['qa'][] = [
        'id' => 1,
        'question' => 'What is Doosan?',
        'answer' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean porta nisi maximus nibh mollis, et pharetra augue viverra.'
      ];
      $data['qa'][] = [
        'id' => 2,
        'question' => 'What is Doosan?',
        'answer' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean porta nisi maximus nibh mollis, et pharetra augue viverra.'
      ];

      $this->renderJSON($data);
      return RenderType::OK;
    }

    public function check_faq()
    {
      $data['faq'][] = [
        'id' => 1,
        'question' => 'What is Doosan?',
        'answer' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean porta nisi maximus nibh mollis, et pharetra augue viverra.'
      ];
      $data['faq'][] = [
        'id' => 2,
        'question' => 'What is Doosan?',
        'answer' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean porta nisi maximus nibh mollis, et pharetra augue viverra.'
      ];

      $this->renderJSON($data);
      return RenderType::OK;
    }

   
}

 