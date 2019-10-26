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
    Naam:
  </p>
  
  <?php
 echo $_SESSION['name'];
  
 ?>
    <br>

  <a href="logout.php">Log out</a>
  
  </div>
 
    <?php
      require_once('snippets/footer.html');

    require_once('snippets/js.html');
 
    ?>
</body>

</html>