<?php

include '../classes/customer.php';

try {
  $email =  $_POST['email'];
  $password = $_POST['password'];
  $returnPage = $_POST['return_page'];

  $customer = new Customer();

  $customer->login($email, $password);  
  
  session_start();
  $_SESSION['loggedin'] = TRUE;
  $_SESSION['id'] = $customer->id;
  $_SESSION['first_name'] = $customer->firstName ;
  $_SESSION['last_name'] = $customer->lastName;  
  $_SESSION['email'] = $customer->email;
  
  if ($returnPage == 'wishlist') {
    header('Location: ../wish-list.php');
  }
  else {
    header('Location: ../my-account.php');
  }
}
catch (Exception $e) {
  $error = $e->getMessage();
  header("Location: ../login.php?error=$error");
}





  
  
  
