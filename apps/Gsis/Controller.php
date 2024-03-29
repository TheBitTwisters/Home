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
    $method = Request::type();
    $params = [
      'id' => Request::post('id'),
      'password' => Request::post('password')
    ];

    $data = [
      'name' => '',
      'auth_key' => '',
      'status' => '',
      'role' => ''
    ];

    if ($method == 'POST') {
      if ($params['id'] == 'A012345' && $params['password'] == 'admin321') {
        $data = [
          'name' => 'Dehny Ahn',
          'auth_key' => 'AeHPvhg2Tqx6t83LkQMbZGaNFJnKWV9X',
          'status' => 'active',
          'role' => 'admin'
        ];
      }
    }

    $this->renderJSON($data);
		return RenderType::OK;
	}

  public function signup()
	{
    $method = Request::type();
    $params = [
      'machine_location' => Request::post('machine_location'),
      'email' => Request::post('email'),
      'password' => Request::post('password'),
      'confirm_password' => Request::post('confirm_password')
    ];

    $data = [
      'id' => 'A012345'
    ];

    if ($method == 'POST') {
      if ($params['password'] == $params['confirm_password']) {
        $data['id'] = 'A012345';
      } else {
        $data = [];
      }
    } else {
      $data = [];
    }

    $this->renderJSON($data);
		return RenderType::OK;
	}

  public function fetchUserdata()
  {
    $method = Request::type();
    $params = [
      'id' => Request::get('id'),
      'auth_key' => Request::get('auth_key')
    ];
    if ($method == 'GET') {
      if ($params['id'] == 'A012345' && $params['auth_key'] == 'AeHPvhg2Tqx6t83LkQMbZGaNFJnKWV9X') {
        $data = [
          'id' => 'admin',
          'name' => 'Dehny Ahn',
          'telephone' => '+123 456 789',
          'email' => 'email@email.com',
          'address' => 'Seoul',
          'role' => 'admin'
        ];
      } else {
        $data = [];
      }
    } else {
      $data = [];
    }

    $this->renderJSON($data);
    return RenderType::OK;
  }

  public function fetchNewManuals()
  {
    $method = Request::type();
    $params = [
      'id' => Request::get('id'),
      'auth_key' => Request::get('auth_key')
    ];
    if ($method == 'GET') {
      if ($params['id'] == 'A012345' && $params['auth_key'] == 'AeHPvhg2Tqx6t83LkQMbZGaNFJnKWV9X') {
        $data = [
          [
            'id' => '1',
            'title' => 'DXC300LC-5K',
            'href' => '#',
            'img' => 'https://s7d2.scene7.com/is/image/Caterpillar/CM20190927-1f4f1-6deb0?wid=600&hei=400&op_sharpen=1&qlt=100',
            'version' => '1.0',
            'date' => '2021-06-08',
            'file_type' => 'OM'
          ],
          [
            'id' => '2',
            'title' => 'DXC300LC-7',
            'href' => '#',
            'img' => 'https://s7d2.scene7.com/is/image/Caterpillar/CM20190927-1f4f1-6deb0?wid=600&hei=400&op_sharpen=1&qlt=100',
            'version' => '1.0',
            'date' => '2021-07-01',
            'file_type' => 'OM'
          ]
        ];
      } else {
        $data = [];
      }
    } else {
      $data = [];
    }
    $this->renderJSON($data);
    return RenderType::OK;
  }

  public function fetchManuals()
  {
    $method = Request::type();
    $params = [
      'id' => Request::get('id'),
      'auth_key' => Request::get('auth_key')
    ];
    if ($method == 'GET') {
      if ($params['id'] == 'A012345' && $params['auth_key'] == 'AeHPvhg2Tqx6t83LkQMbZGaNFJnKWV9X') {
        $data = [
          [
            'id' => 'UN7E94JBAXZYK85T2LWPGSD36MHQVCFR',
            'title' => 'DXC300LC-5K',
            'href' => '#',
            'img' => 'https://s7d2.scene7.com/is/image/Caterpillar/CM20190927-1f4f1-6deb0?wid=600&hei=400&op_sharpen=1&qlt=100',
            'version' => '1.0',
            'date' => '2021-06-08',
            'file_type' => 'OM',
            'downloadUrl' => 'https://thebittwisters.com/file.zip'
          ],
          [
            'id' => 'RPUY8VENZC5QMFW92X4BDS3T7J6KHGAL',
            'title' => 'DXC300LC-7',
            'href' => '#',
            'img' => 'https://s7d2.scene7.com/is/image/Caterpillar/CM20190927-1f4f1-6deb0?wid=600&hei=400&op_sharpen=1&qlt=100',
            'version' => '1.0',
            'date' => '2021-07-01',
            'file_type' => 'OM',
            'downloadUrl' => 'https://thebittwisters.com/file.zip'
          ]
        ];
      } else {
        $data = [];
      }
    } else {
      $data = [];
    }


    $this->renderJSON($data);
    return RenderType::OK;
  }

  public function searchManuals()
  {
    $method = Request::type();
    $params = [
      'id' => Request::get('id'),
      'auth_key' => Request::get('auth_key'),
      'keyword' => Request::get('keyword'),
      'category' => Request::get('category')
    ];
    if ($method == 'GET') {
      if ($params['id'] == 'A012345' && $params['auth_key'] == 'AeHPvhg2Tqx6t83LkQMbZGaNFJnKWV9X') {
        if ($params['keyword'] == 'Tractor') {
          $data = [
            [
            'id' => '1',
            'title' => 'DXC300LC-5K',
            'href' => '#',
            'img' => 'https://s7d2.scene7.com/is/image/Caterpillar/CM20190927-1f4f1-6deb0?wid=600&hei=400&op_sharpen=1&qlt=100',
            'version' => '1.0',
            'date' => '2021-06-08',
            'file_type' => 'OM'
            ]
          ];
        }
      } else {
        $data = [];
      }
    } else {
      $data = [];
    }

    $this->renderJSON($data);
    return RenderType::OK;
  }

  public function getBookmark()
  {
    $method = Request::type();
    $params = [
      'id' => Request::get('id'),
      'auth_key' => Request::get('auth_key')
    ];
    if ($method == 'GET') {
      if ($params['id'] == 'A012345' && $params['auth_key'] == 'AeHPvhg2Tqx6t83LkQMbZGaNFJnKWV9X') {
          $data = [
            'id' => '1',
            'name' => 'My Bookmark',
            'manual_id' => '213',
            'page' => '12'
          ];
      } else {
        $data = [];
      }
    } else {
      $data = [];
    }

    $this->renderJSON($data);
    return RenderType::OK;
  }

  public function getNotification()
  {
    $method = Request::type();
    $params = [
      'id' => Request::get('id'),
      'auth_key' => Request::get('auth_key')
    ];
    if ($method == 'GET') {
      if ($params['id'] == 'A012345' && $params['auth_key'] == 'AeHPvhg2Tqx6t83LkQMbZGaNFJnKWV9X') {
          $data = [
            [
              'id' => '1',
              'title' => 'New app version',
              'content' => 'Notice 1 sample content'
            ]
          ];
      } else {
        $data = [];
      }
    } else {
      $data = [];
    }

    $this->renderJSON($data);
    return RenderType::OK;
  }

  public function getQA()
  {
    $method = Request::type();
    $params = [
      'id' => Request::get('id'),
      'auth_key' => Request::get('auth_key')
    ];
    if ($method == 'GET') {
      if ($params['id'] == 'A012345' && $params['auth_key'] == 'AeHPvhg2Tqx6t83LkQMbZGaNFJnKWV9X') {
          $data = [
            [
            'id' => '1',
            'question' => 'What is Doosan?',
            'answer' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean porta nisi maximus nibh mollis, et pharetra augue viverra.'
            ],
            [
            'id' => '2',
            'question' => 'What is Doosan 2?',
            'answer' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean porta nisi maximus nibh mollis, et pharetra augue viverra.'
            ],
          ];
      } else {
        $data = [];
      }
    } else {
      $data = [];
    }

    $this->renderJSON($data);
    return RenderType::OK;
  }

  public function getFAQ()
  {
    $method = Request::type();
    $params = [
      'id' => Request::get('id'),
      'auth_key' => Request::get('auth_key')
    ];
    if ($method == 'GET') {
      if ($params['id'] == 'A012345' && $params['auth_key'] == 'AeHPvhg2Tqx6t83LkQMbZGaNFJnKWV9X') {
          $data = [
            [
              'id' => '1',
            'question' => 'What is Doosan?',
            'answer' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean porta nisi maximus nibh mollis, et pharetra augue viverra.'
            ],
            [
            'id' => '2',
            'question' => 'What is Doosan2?',
            'answer' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean porta nisi maximus nibh mollis, et pharetra augue viverra.'
            ]
          ];
      } else {
        $data = [];
      }
    } else {
      $data = [];
    }

    $this->renderJSON($data);
    return RenderType::OK;
  }
}
