<?php
error_reporting(E_ERROR | E_PARSE);
include 'settings/settings.php';
include 'mail/src/Exception.php';
include 'mail/src/PHPMailer.php';
include 'mail/src/SMTP.php';
include '../settings/settings.php';
include '../mail/src/Exception.php';
include '../mail/src/PHPMailer.php';
include '../mail/src/SMTP.php';
use PHPMailer\PHPMailer\PHPMailer;

class Mail {
    public function sendMail($email, $body, $subject, $file = null) {        
        
        $settings = new Settings();
        $mail = new PHPMailer(true);
        $mail->isSMTP();                                            
        $mail->Host       = $settings->getMailServer();                   
        $mail->SMTPAuth   = true;                                   
        $mail->Username   = $settings->getMailUsername();                     
        $mail->Password   = $settings->getMailPassword();                               
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;        //PHPMailer::ENCRYPTION_SMTPS; //
        $mail->Port       = $settings->getMailPort();  
        $mail->CharSet = 'UTF-8';
        
        
        $mail->setFrom('koekhandel@benbassat.art', 'Koekhandel benbassat.art');
        $mail->addAddress($email, '');     

        $mail->isHTML(true);                                  
        $mail->Subject = $subject;
        $mail->Body    = $body;
        
        if (isset($file)) {
            $mail->AddAttachment($file, 'invoice.pdf', 'base64', 'application/pdf');      // attachment
        }

        $mail->send();
    }
} 