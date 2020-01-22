<?php
session_start();
require_once '../classes/shopAPI.php';

$api = new ShopAPI();
if (array_key_exists('cart', $_COOKIE)) {
    if (array_key_exists('id', $_SESSION)) {
        $cart = $api->createCart($_REQUEST['id'], $_SESSION['id'], $_COOKIE['cart']);
    } else {
        
        $cart = $api->createCart($_REQUEST['id'], '', $_COOKIE['cart']);
    }
}
else {
    if (array_key_exists('id', $_SESSION)) {
        $cart = $api->createCart($_REQUEST['id'], $_SESSION['id'], '');
    } else {
        
        $cart = $api->createCart($_REQUEST['id'], '', '');
    }

    setcookie('cart', $cart->guid, time() + (3600*24*3));
}
var_dump($cart);
