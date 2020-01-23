<?php
session_start();
require_once '../classes/shopAPI.php';

$api = new ShopAPI();
if (array_key_exists('guid', $_COOKIE)) {
    if (array_key_exists('id', $_SESSION)) {
        $cart = $api->createCart($_REQUEST['id'], $_SESSION['id'], $_COOKIE['guid']);
    } else {
        
        $cart = $api->createCart($_REQUEST['id'], '', $_COOKIE['guid']);
    }
}
else {
    if (array_key_exists('id', $_SESSION)) {
        $cart = $api->createCart($_REQUEST['id'], $_SESSION['id'], '');
    } else {
        
        $cart = $api->createCart($_REQUEST['id'], '', '');
    }

    setcookie('guid', $cart->guid, time() + (3600*24*3));
}
echo json_encode($cart);
