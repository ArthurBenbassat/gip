<!DOCTYPE html>
<html lang="en">

<?php
session_start();

if (!isset($_SESSION['loggedin'])) {
  header('Location: login.php');
  exit();
}
require_once('snippets/head.html');
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

    <a href="logout.php">Log out</a>
    <br>
    <p>
      Verified email:
      <?php
      
      if ($_SESSION['verified'] == 0) {
        echo 'no, check your email';
      } else {
        echo 'yes';
      }
      ?>
    </p>

  </div>

  <?php
  require_once('snippets/footer.html');

  require_once('snippets/js.html');

  ?>
</body>

</html>