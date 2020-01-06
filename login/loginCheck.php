<?php

include '../classes/shopAPI.php';

try {
  $email =  $_POST['email'];
  $password = $_POST['password'];
  $returnPage = array_key_exists('return_page', $_POST) ? $_POST['return_page'] : '';

  $shopAPI = new ShopAPI();
  $customer = $shopAPI->checkLogin($email, $password);
  session_start();
  $_SESSION['loggedin'] = TRUE;
  $_SESSION['id'] = $customer->id;
  $_SESSION['first_name'] = $customer->first_name;
  $_SESSION['last_name'] = $customer->last_name;
  $_SESSION['email'] = $customer->email;  
  $_SESSION['verified'] = $customer->verified;
  if ($returnPage == 'wishlist') {
    header('Location: ../wish-list.php');
  } else {
    header('Location: ../my-account.php');
  }
} catch (Exception $e) {
  $error = $e->getMessage();
  header("Location: ../login.php?error=$error");
}
