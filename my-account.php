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
      <?php echo _('Mijn profiel') ?>
    </h1>
    <p>
      <?php echo _('Naam') ?>: 
      <?php
      echo $customer->first_name . ' ' . $customer->last_name;
      ?>
    </p> 
    <br>
    <p>
      <?php echo _('Bevestigde e-mail: ') ?>
      <?php
      
      if ($customer->verified == 0) {
        echo _('Nee, controleer je mail');
      } else {
        echo _('Ja');
      }
      ?>
    </p>
    <a href="logout.php"><?php echo _('Uitloggen') ?></a>
  </div>

  <?php
  require_once('snippets/footer.php');

  require_once('snippets/js.html');

  ?>
</body>

</html>