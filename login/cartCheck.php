<?php
session_start();
require_once '../classes/shopAPI.php';
$api = new ShopAPI();
if (array_key_exists('cart', $_COOKIE)) {
    $cart = $api->createCart($_GET['id'], $_SESSION['id'], $_COOKIE['cart']);
}
else {
    $cart = $api->createCart($_GET['id'], $_SESSION['id'], '');

    setcookie('cart', $cart->guid, time() + (3600*24*3));
}
var_dump($cart);
