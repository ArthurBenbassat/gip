<?php

require_once '../settings/settings.php';
require_once '../mail/src/Exception.php';
require_once '../mail/src/PHPMailer.php';
require_once '../mail/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;


class Mail {
    public function sendMail($email, $body, $subject) {
        $settings = new Settings();
        $mail = new PHPMailer(true);
        $mail->isSMTP();                                            
        $mail->Host       = $settings->getMailServer();                   
        $mail->SMTPAuth   = true;                                   
        $mail->Username   = $settings->getMailUsername();                     
        $mail->Password   = $settings->getMailPassword();                               
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; //PHPMailer::ENCRYPTION_STARTTLS;        
        $mail->Port       = $settings->getMailPort();  
        $mail->CharSet = 'UTF-8';
            

        $mail->setFrom('koekhandel@benbassat.art', 'Koekhandel benbassat.art');
        $mail->addAddress($email, '');     

        $mail->isHTML(true);                                  
        $mail->Subject = $subject;
        $mail->Body    = $body;

        $mail->send();
    }
} 