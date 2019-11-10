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
    echo '<input type="text" id="id" name="id" value="' . $_GET['id'] . '" hidden="hidden"/>';
    ?>

    <div class="container">
        <h1>Verify your account</h1>
        <p>Click on the button for verifying your account</p>
        <form action="login/verifyCheck.php">
            <?php
            echo '<input type="text" id="id" name="id" value="' . $_GET['id'] . '" hidden="hidden"/>';
            ?>
            <button class="main_btn">Verify</button>
        </form>
    </div>
    <br>
    <?php
    require_once('snippets/footer.html');

    require_once('snippets/js.html');

    ?>
</body>

</html>