<?php
require_once '../classes/shopAPI.php';

$api = new ShopAPI();
$api->order($_POST['userId'], $_POST['email'], $_POST['first_name'], $_POST['last_name'], $_POST['address1'], $_POST['address2'], $_POST['postal_code'], $_POST['city'], $_POST['country'], $_POST['cart']);