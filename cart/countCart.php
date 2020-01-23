<?php
session_start();
require_once '../classes/shopAPI.php';

$api = new ShopAPI();
$cart = $api->getCart($_REQUEST['guid']);

echo json_encode($cart);
