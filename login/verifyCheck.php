<?php
include '../sql/dbconnection.php';
include '../classes/customer.php';

if (array_key_exists('id', $_GET)) {
    $id = $_GET['id'];

    $sql2 = "UPDATE Customers SET verified = '1' WHERE id = $id";
    $result = mysqli_query($connection, $sql2) or die("Error: " . mysqli_error($connection));

    header('Location: ../my-account.php');
} else {
    echo 'There went something wrong';
}
