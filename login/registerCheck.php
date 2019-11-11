<?php
include '../sql/dbconnection.php';
include '../classes/customer.php';
include '../classes/mail.php';
$email2 = $_POST["email"];
//try {
    /*$sql2 = "SELECT email FROM Customers WHERE email = $email";
    $result = mysqli_query($connection, $sql2) or die("Error: " . mysqli_error($connection));
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $verify = $row['verified'];
        }
    }
} catch (Exception $e) {
    $error = 'Your email is already known';
    header("Location: ../register.php?error=$error");
 }
*/
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
    if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) { } else {
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
    '0')";

    $gelukt = mysqli_query($connection, $sql) or die("Error: " . mysqli_error($connection));

    $email = mysqli_real_escape_string($connection, $_POST["email"]);
    $name = mysqli_real_escape_string($connection, $_POST["first_name"]);

    $sql2 = "SELECT id FROM Customers ORDER BY id DESC LIMIT 1";
    $result = mysqli_query($connection, $sql2) or die("Error: " . mysqli_error($connection));

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        if ($row) {
            $id = $row['id'];
        }
    }

    $mail = new Mail();
    $subject = 'Confirm your account';
    $base_path = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $server = str_replace(basename(__FILE__, '.php'), '/verify', $base_path);
    $server = str_replace('login/', '', $server);
    $body = "Hello $name<br><a href=\"$server/verify.php?id=$id\">Click here for verifying your account</a>";
    $mail->sendMail($email, $body, $subject);

    session_start();
    $_SESSION['loggedin'] = TRUE;
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['first_name'] = $_POST["first_name"];
    $_SESSION['last_name'] = $_POST["last_name"];
    $_SESSION['id'] = $id;
    header('Location: ../my-account.php');
}
