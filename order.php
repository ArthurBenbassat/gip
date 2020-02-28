<?php


echo '<!DOCTYPE html>';
echo "<html lang='en'>";


   require_once 'snippets/head.html';

    echo '<body>';
      
      
    require_once 'snippets/header.html';
    if ($_GET['succes'] ==  'true') {
        echo '<div class="container"><article><h3>Thank you for your order at Benbassat, the order that you have placed is being processed. We have sent you the invoice of this order for confirmation.</h3></article></div>';
        
    } else {
        echo '<div class="container"><h3>Cannot activate order, try again or send an email to arthur@benbassat.be</h3></div>';
    }
    
    require_once 'snippets/footer.php';

    require_once 'snippets/js.html';

    echo '</body>';

echo '</html>';