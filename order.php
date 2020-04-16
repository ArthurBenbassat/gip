<?php
if (array_key_exists('guid', $_GET) && $_COOKIE['guid'] == $_GET['guid']) {
    
    echo '<!DOCTYPE html>';
    echo "<html lang='en'>";


    require_once 'snippets/head.html';
    require_once 'checkout/check.php';
        echo '<body>';
        
        
        require_once 'snippets/header.html';
        
        echo '<div class="container"><article><h3>Thank you for your order at Benbassat, the order that you have placed is being processed. We have sent you the invoice of this order for confirmation.</h3></article></div>';
        echo '<div class="container"><article style="margin-bottom: 10%"><form action="index.php"><button class="main_btn" type="submit">Go back to the home page</button></form></article></div>';
        require_once 'snippets/footer.php';

        require_once 'snippets/js.html';

        echo '</body>';

    echo '</html>';
    
  } else {
      header("Location: checkout.php");
  }

