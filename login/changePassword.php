<?php
require_once '../classes/shopAPI.php';
try {
    $api = new ShopAPI();
    $api->changePassword($_POST['oldPassword'], $_POST['newPassword'], $_POST['customerId']);
    
    header('Location: ../my-account.php');
} catch (Exception $e) {
    $error = $e->getMessage();
    echo $error;
    
  header("Location: ../my-account.php?error=$error");
}

