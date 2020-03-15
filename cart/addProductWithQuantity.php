<?php 
session_start();
require_once '../classes/shopAPI.php';

$api = new ShopAPI();

if (array_key_exists('guid', $_COOKIE)) {
    if (array_key_exists('id', $_SESSION)) {
        $cart = $api->createCart($_GET['productId'], $_SESSION['id'], $_COOKIE['guid'], $_GET['quantity']);
    } else {
        
        $cart = $api->createCart($_GET['productId'], '', $_COOKIE['guid'], $_GET['quantity']);
    }
}
else {
    if (array_key_exists('id', $_SESSION)) {
        $cart = $api->createCart($_GET['productId'], $_SESSION['id'], '', $_GET['quantity']);
    } else {
        
        $cart = $api->createCart($_GET['productId'], '', '', $_GET['quantity']);
    }

}

header('Location: ../cart.php');
