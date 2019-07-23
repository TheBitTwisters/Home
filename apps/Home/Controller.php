<?php

namespace Home;

use \Home\RenderType as RenderType;
use \Home\Request as Request;
use \Home\Mail as Mail;
use \Home\Config as Config;

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
            $data['company'] = $model->getDetails();
        }

		$this->render('home/index', $data);
		return RenderType::OK;
	}

    public function contact_send()
    {
        if (Request::type('POST')) {
            $sender_name = Request::post('name');
            $sender_email = Request::post('email');
            $sender_message = Request::post('message');

            $datetime = date("F d, Y \- g:i A");
            $subject = 'PFS Contact - Message';
            $message = "<html>
					<body style=\"max-width: 640px; margin: auto; color: #000;\">
		    		<div style=\"background: #C8DCFF; box-shadow: 0 0 30px #FFFFFF; font-size: 1.5em;\">
		        		<h4 style=\"text-align: center; margin: 0; padding: 10px; padding-bottom: 20px;\">
							{$datetime}
						</h4>
				        <h3 style=\"background: #3379BF; color: #eee; padding: 10px 30px; margin: 0;\">Sender details</h3>
				        <p style=\"background: #a8c6e8; color: #333; line-height: 1.5; margin: 0; padding: 10px; padding-bottom: 20px;\">
				            {$sender_name}<br>{$sender_email}
				        </p>
				        <h3 style=\"background: #3379BF; color: #eee; padding: 10px 30px; margin: 0;\">Message</h3>
				        <p style=\"background: #a8c6e8; color: #333; line-height: 1.5; margin: 0; padding: 10px; padding-bottom: 20px;\">
				            {$sender_message}
				        </p>
			    	</div>
					</body>
					</html>";

            $mail = new Mail();
            $mail->isHtml(true)
                ->from(Config::get('EMAIL_CONTACT_FROM'))
                ->to(Config::get('EMAIL_CONTACT_TO'))
                ->subject($subject)
                ->message($message);
            $response = $mail->send();
            $this->renderJSON(['response' => $response]);
        }
        return RenderType::OK;
    }

    public function terms()
    {
		$this->render('home/terms');
		return RenderType::OK;
    }

}
