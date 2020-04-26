<?php
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);
if (array_key_exists('guid', $_GET) && $_COOKIE['guid'] == $_GET['guid']) {
    
    echo '<!DOCTYPE html>';
    echo "<html lang='en'>";


    require_once 'snippets/head.html';
    require_once 'checkout/check.php';
    require_once 'snippets/header.html';
        ?>
        <body>
        <div class="container"><article><h3><?php echo _('Bedankt voor je bestelling bij Benbassat, de bestelling die je hebt geplaatst wordt verwerkt. We hebben u de factuur van deze bestelling gestuurd ter bevestiging.') ?></h3></article></div>
        echo '<div class="container"><article style="margin-bottom: 10%"><form action="index.php"><button class="main_btn" type="submit"><?php echo _('Ga terug naar de home pagina') ?></button></form></article></div>';
        <?php
        require_once 'snippets/footer.php';

        require_once 'snippets/js.html';
        ?>
        </body>

    </html>
    <?php
  } else {
      header("Location: index.php");
  }

