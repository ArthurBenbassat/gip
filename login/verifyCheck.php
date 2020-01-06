<?php
require_once '../classes/shopAPI.php';

$shopAPI = new ShopAPI();
$customer = $shopAPI->verify($_POST['id'], $_POST['token']);

