<!DOCTYPE html>
<html lang="en">

<?php
require_once('snippets/head.html');
if (!isset($_SESSION['loggedin'])) {
    if (array_key_exists('id', $_GET) && array_key_exists('token', $_GET)){
        $id = $_GET['id'];
        $token = $_GET['token'];
        header("Location: login.php?return_page=verify&id=$id&token=$token");
        exit();
    }   
}
?>

<body>
    <?php
    require_once('snippets/header.html');
    ?>
    

    <div class="container">
        <h1>Verify your account</h1>
        <p>Click on the button for verifying your account</p>
        <form action="login/verifyCheck.php">
            <?php
            echo '<input type="text" id="id" name="id" value="' . $_GET['id'] . '" hidden="hidden"/>';
            echo '<input type="text" id="token" name="token" value="' . $_GET['token'] . '" hidden="hidden"/>';
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