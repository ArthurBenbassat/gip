<?php
require_once 'shopAPI.php';
class Footer {
    public function getCategoryTitle() {
        $api = new ShopAPI();
        $category = $api->getCategory();
        return "Categories";
    }

    public function getCategories() {
        $api = new ShopAPI();
        $category = $api->getCategory();
        $id = [];
        $name = [];
        $items = "";
        for ($i=0; $i < count($category); $i++) {
            $name = $category[$i]->name;
            $id = $category[$i]->id;
            $items .= "<li><a href='shop.php?cat_id=$id'>$name</a></li>";
        }
        return $items;
    }

    public function getBestSoldedTitle() {
        return 'Best solded';
    }

    public function getBestSolded() {
        $api = new ShopAPI();
        $products = $api->getAllProducts();
        $id = [];
        $name = [];
        $items = "";
        for ($i=0; $i < 5; $i++) {
            $name = $products[$i]->name;
            $id = $products[$i]->id;
            $number = $i + 1;
            $items .= "<li><a href='product.php?id=$id'>$number. $name</a></li>";
        }
        return $items;
    }

    public function getPromotionTitle() {
        return 'Promotion of the week';
    }

    public function getpromotionProducts() {
        $api = new ShopAPI();
        $product = $api->getProduct(14);
        $items = '';
        $name = $product->name;
        $id = $product->id;
        $items .= "<li><a href='product.php?id=$id'>$name</a></li>";
        $product = $api->getProduct(17);
        $name = $product->name;
        $id = $product->id;
        $items .= "<li><a href='product.php?id=$id'>$name</a></li>";
        $product = $api->getProduct(21);
        $name = $product->name;
        $id = $product->id;
        $items .= "<li><a href='product.php?id=$id'>$name</a></li>";
        return $items;
    }

    public function getBiscuitOfTheWeekTitle() {
        return 'Biscuit of the week';
    }

    public function getBiscuitOfTheWeek() {
        $api = new ShopAPI();
        $product = $api->getProduct(16);
        $name = $product->name;
        $id = $product->id;
        return "<li><a href='product.php?id=$id'>$name</a></li>";

    }
}