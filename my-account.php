<!DOCTYPE html>
<html lang="en">

<?php
require_once('snippets/head.html');

if (!isset($_SESSION['loggedin'])) {
  header('Location: login.php');
  exit();
}
?>

<body>
  <?php
  require_once('snippets/header.html');
  ?>
  <div class="container">
    <h1>
      My account
    </h1>
    <p>
      Name:


      <?php
      echo $_SESSION['first_name'] . ' ' . $_SESSION['last_name'];

      ?>
    </p>

    
    <br>
    <p>
      Verified email:
      <?php
      
      if (array_key_exists('verified', $_SESSION) && $_SESSION['verified'] == 0) {
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