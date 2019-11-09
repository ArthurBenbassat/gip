<?php
include '../sql/dbconnection.php';
include '../classes/customer.php';
include '../classes/mail.php';

if ($_POST["email"] == "" or $_POST["password"] == "") {
    $error = 'Fill everthing in!';
    header("Location: ../register.php?error=$error");
} elseif ($_POST["password"] <> $_POST["password2"]) {
    $error = 'passwords are not the same';
    header("Location: ../register.php?error=$error");
} else {
    if ($_POST["company"] == false) {
        $customers_type = 1;
    } else {
        $customers_type = 2;
    }
    if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        // valid address
    } else {
        $error = 'email is not correct';
        header("Location: ../register.php?error=$error");
    }

    $salt = 'zrgfkjhzghzkrgj';
    $password =  $_POST["password"];
    $hashedPassword = md5($password . $salt);
    $sql = "insert into Customers (customer_type_id,email,first_name,last_name,address_line1,address_line2,postal_code,city,country,phone_number,organization_name,vat_number,password,verified) values (
    " . $customers_type . ",
    '" . mysqli_real_escape_string($connection, $_POST["email"]) . "',
    '" . mysqli_real_escape_string($connection, $_POST["first_name"]) . "',
    '" . mysqli_real_escape_string($connection, $_POST["last_name"]) . "',
    '" . mysqli_real_escape_string($connection, $_POST["address1"]) . "',
    '" . mysqli_real_escape_string($connection, $_POST["address2"]) . "',
    '" . mysqli_real_escape_string($connection, $_POST["postal_code"]) . "',
    '" . mysqli_real_escape_string($connection, $_POST["city"]) . "',
    '" . mysqli_real_escape_string($connection, $_POST["country"]) . "',
    '" . mysqli_real_escape_string($connection, $_POST["phone"]) . "',
    '" . mysqli_real_escape_string($connection, $_POST["company"]) . "',
    '',
    '" . $hashedPassword . "',
    'no')";

    $gelukt = mysqli_query($connection, $sql) or die("Error: " . mysqli_error($connection));

    $email = mysqli_real_escape_string($connection, $_POST["email"]);
    $name = mysqli_real_escape_string($connection, $_POST["first_name"]);
    $mail = new Mail();
    $subject = 'Confirm your account';
    $body = 'Hello ' . $name .  "<br> <a href='localhost/GIP/verify.php'>Click here for verifying your account</a>";
    $mail->sendMail($email, $body, $subject);


    session_start();
    $_SESSION['loggedin'] = TRUE;
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['first_name'] = $_POST["first_name"];
    $_SESSION['last_name'] = $_POST["last_name"];
    header('Location: ../my-account.php');
}
