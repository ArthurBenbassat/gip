<!DOCTYPE html>
<html lang="en">

<?php
require_once('snippets/head.html');
require_once 'classes/shopAPI.php';
if (!isset($_SESSION['loggedin'])) {
  header('Location: login.php');
  exit();
}
?>

<body>
  <?php
  require_once('snippets/header.html');
  $api = new ShopAPI();
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
  require_once('snippets/footer.html');

  require_once('snippets/js.html');

  ?>
</body>

</html>