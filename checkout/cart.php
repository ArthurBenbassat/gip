<?php
require_once 'classes/shopAPI.php';
class Cart {
    function getCart() {
        $api = new ShopAPI();
        $cart = $api->getCart($_COOKIE['guid']);

        return json_encode($cart);
    }
}
