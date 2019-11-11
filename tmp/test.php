<?php
include '../sql/dbconnection.php';
$email2 = "ljqsdjqskljdsjdsmlkds";
try {
    $sql2 = "SELECT email FROM Customers WHERE email = $email2";
    if (!mysqli_query($connection, $sql2)){
        throw new Exception("Incorrect username!");
    }else {
        throw new Exception("Incorrect username!");
    }
    
} catch (Exception $e) {
    echo 'Your email is already known';
 }