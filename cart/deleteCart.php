<?php
session_start();
require_once '../classes/shopAPI.php';

$api = new ShopAPI();
$cart = $api->deleteLine($_GET['lineId'], $_COOKIE['guid']);

echo json_encode($cart);