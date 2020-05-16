<?php
    
echo '<!DOCTYPE html>';
echo "<html lang='en'>";


require_once 'snippets/head.html';

echo '<body>';


require_once 'snippets/header.html';


echo '<div class="container"><article><h3>' . _('Bedankt voor het inschrijven, wij hebben je een mail gestuurd') . '</h3></article></div>';
echo '<div class="container"><article style="margin-bottom: 10%"><form action="index.php"><button class="main_btn" type="submit">' . _('Ga terug naar de home pagina') . '</button></form></article></div>';
require_once 'snippets/footer.php';

require_once 'snippets/js.html';

echo '</body>';

echo '</html>';
