<?php

if (array_key_exists('cart', $_COOKIE)) {
    echo 'Cart ID = ' . $_COOKIE['cart'];
}
else {
    echo 'geen winkelmandje';
    setcookie('cart', 12, time() + 10);
}

