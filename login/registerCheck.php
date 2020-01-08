<?php
require_once '../classes/mail.php';
require_once '../classes/shopAPI.php';
try {
    $shopAPI = new ShopAPI();
    $customer = $shopAPI->register($_POST["email"], $_POST["first_name"], $_POST["last_name"], $_POST["address1"], $_POST["address2"], $_POST["postal_code"], $_POST["city"], $_POST["country"], $_POST["phone"], $_POST["company"], "", $_POST["password"],  $_POST["password2"]);  
    
    session_start();
    $_SESSION['loggedin'] = TRUE;
    $_SESSION['email'] = $customer->email;
    $_SESSION['first_name'] = $customer->first_name;
    $_SESSION['last_name'] = $customer->last_name;
    $_SESSION['id'] = $customer->id;
    $_SESSION['verified'] = $customer->verified;
    
    $mail = new Mail();
    $subject = 'Confirm your account';
    $base_path = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $server = str_replace(basename(__FILE__, '.php'), 'verify', $base_path);
    $server = str_replace('login/', '', $server);
    $body = "Hello $customer->first_name $customer->last_name,<br><a href=\"$server?id=$customer->id&token=$customer->token\">Click here for verifying your account</a>";
    $mail->sendMail($customer->email, $body, $subject);
    
    header('Location: ../my-account.php');
    
} catch (Exception $e) {
    $error = $e->getMessage();
    header("Location: ../register.php?error=$error");
}



