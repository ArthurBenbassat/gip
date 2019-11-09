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
    <?php 

    ?>
    <div class="container">
        <h1>Verify your account</h1>
        <p>Click on the button for verifying your account</p>
        <button>Verify</button>
    </div>

    <?php
    require_once('snippets/footer.html');

    require_once('snippets/js.html');

    ?>
</body>
</html>