<?php

namespace Home;

use \PHPMailer\PHPMailer\PHPMailer as PHPMailer;

class Mail
{

    private $isHtml;
    private $from;
    private $to;
    private $cc;
    private $subject;
    private $body;

    public function isHtml($isHtml)
    {
        $this->isHtml = $isHtml;
        return $this;
    }

    public function from($email)
    {
        $this->from = $email;
        return $this;
    }

    public function to($email)
    {
        $this->to[] = $email;
        return $this;
    }

    public function cc($email)
    {
        $this->cc[] = $email;
        return $this;
    }

    public function subject($subject)
    {
        $this->subject = $subject;
        return $this;
    }

    public function message($message)
    {
        $this->message = $message;
        return $this;
    }

    public function send()
    {
        $mail = new PHPMailer;

        $mail->CharSet = 'UTF-8';
        $mail->IsSMTP();
        $mail->SMTPDebug = 0;
        $mail->SMTPAuth = Config::get('EMAIL_SMTP_AUTH');
        if (Config::get('EMAIL_SMTP_ENCRYPTION')) {
            $mail->SMTPSecure = Config::get('EMAIL_SMTP_ENCRYPTION');
        }
        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );

        $mail->Host = Config::get('EMAIL_SMTP_HOST');
        $mail->Port = Config::get('EMAIL_SMTP_PORT');
        $mail->Username = Config::get('EMAIL_SMTP_USERNAME');
        $mail->Password = Config::get('EMAIL_SMTP_PASSWORD');

        $mail->isHtml($this->isHtml);
        $mail->setFrom($this->from);
        $mail->Subject = $this->subject;
        $mail->Body = $this->message;

        foreach ($this->to as $email) {
            $mail->AddAddress($email);
        }
        foreach ($this->cc as $email) {
            $mail->addCC($email);
        }

        return $mail->Send();
    }

}
