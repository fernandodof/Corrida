<?php

/**
 * Description of SendEmail
 *
 * @author Fernando
 */
require_once 'PHPMailer-5.2.8/PHPMailerAutoload.php';
require_once 'EmailMessages.php';

class SendEmail {

    public function __construct() {
        $this->setUpMail();
    }

    private function setUpMail() {
        $this->mail = new PHPMailer();
        $this->mail->isSMTP();
        $this->mail->Host = 'smtp.gmail.com';
        $this->mail->SMTPAuth = true;
        $this->mail->Username = 'corridas.contato@gmail.com';
        $this->mail->Password = 'abA2eQlfc0lHw';
        $this->mail->SMTPSecure = 'tls';
        $this->mail->Port = 587;
        $this->mail->CharSet = "UTF-8";
        $this->mail->From = 'corridas.contato@gmail.com';
        $this->mail->FromName = 'Corridas';
        $this->mail->addReplyTo('noreply@corridas.com', 'Corridas');
        $this->mail->isHTML();
    }

    public function sendPasswordRecoverEmail($personName, $link, $address) {
        $this->mail->Subject = $personName;
        $this->mail->Body = EmailMessages::recoverPasswordHTML($personName, $link);
        $this->mail->AltBody = EmailMessages::recoverPasswordNormal($personName, $link);
        $this->mail->addAddress($address);
        if (!$this->mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $this->mail->ErrorInfo;
        } else {
            echo 'Message has been sent';
        }
    }

}
