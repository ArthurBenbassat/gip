<?php
require_once 'classes/shopAPI.php';
class Cart {
    function getCart() {
        try {
            if (array_key_exists('guid', $_COOKIE)) {
                $api = new ShopAPI();
                $cart = $api->getCart($_COOKIE['guid']);
        
                return json_encode($cart);
            } else {
                return '';
            }
        } catch (Exception $e) {
            return '';
        }
        
    }
}
