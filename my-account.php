<!DOCTYPE html>
<html lang="en">

<?php
require_once 'snippets/head.html';
require_once 'classes/shopAPI.php';
if (!isset($_SESSION['loggedin'])) {
  header('Location: login.php');
  exit();
}
$api = new ShopAPI();
/*
if (array_key_exists('guid', $_COOKIE)) {
  $api->updateCustomer($_SESSION['id'], $_COOKIE['guid']);
}
*/
?>

<body>
  <?php
  require_once 'snippets/header.html';
  
  $customer = $api->getCustomer($_SESSION['id']);
  ?>
  <div class="container">
    <h1>
      My account
    </h1>
    <p>
      Name:
      <?php
      echo $customer->first_name . ' ' . $customer->last_name;
      ?>
    </p> 
    <br>
    <p>
      Verified email:
      <?php
      
      if ($customer->verified == 0) {
        echo 'no, check your email';
      } else {
        echo 'yes';
      }
      ?>
    </p>
    <a href="logout.php">Log out</a>
  </div>

  <?php
  require_once('snippets/footer.php');

  require_once('snippets/js.html');

  ?>
</body>

</html>