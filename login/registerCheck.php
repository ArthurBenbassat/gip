<?php
require_once '../classes/mail.php';
require_once '../classes/shopAPI.php';
try {
    $shopAPI = new ShopAPI();
    $customer = $shopAPI->register($_POST["email"], $_POST["first_name"], $_POST["last_name"], $_POST["address1"], $_POST["address2"], $_POST["postal_code"], $_POST["city"], $_POST["country"], $_POST["phone"], $_POST["company"], "", $_POST["password"],  $_POST["password2"]);  
    /*
    $mail = new Mail();
    $subject = 'Confirm your account';
    $base_path = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $server = str_replace(basename(__FILE__, '.php'), '/verify', $base_path);
    $server = str_replace('login/', '', $server);
    $body = "Hello $name<br><a href=\"$server/verify.php?id=$id\">Click here for verifying your account</a>";
    $mail->sendMail($email, $body, $subject);
    */
    session_start();
    $_SESSION['loggedin'] = TRUE;
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['first_name'] = $customer->first_name;
    $_SESSION['last_name'] = $_POST["last_name"];
    $_SESSION['id'] = $id;
    header('Location: ../my-account.php');
    
} catch (Exception $e) {
    $error = $e->getMessage();
    header("Location: ../register.php?error=$error");
}



