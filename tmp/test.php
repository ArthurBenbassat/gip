<?php
    $to = "arthur.benbassat@gmail.com";
    $subject = "Register your email";

    $message = "
    <html>
    <head>
    <title>Register your account</title>
    </head>
    <body>
    <p>register your mail</p>
    
    <a href='http://arthur.6tib.be/login/registerMail.php>Click here</a>
    </body>
    </html>
    ";

    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // More headers
    $headers .= 'From: <arthur.benbassat@gmail.com>' . "\r\n";

    mail($to,$subject,$message,$headers);