<?php
require_once '../classes/shopAPI.php';

$shopAPI = new ShopAPI();
$customer = $shopAPI->verify($_GET['id'], $_GET['token']);
header("Location: ../my-account.php");
exit();
