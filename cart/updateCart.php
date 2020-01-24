<?php

session_start();
require_once '../classes/shopAPI.php';

$api = new ShopAPI();
$cart = $api->updateQuantity($_GET['quantity'], $_GET['guid'], $_GET['lineId']);

echo json_encode($cart);
