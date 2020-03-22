<?php
require_once 'shopAPI.php';
class Footer {
    public function getCategoryTitle() {
        return "Categorieën";
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
        return 'Best verkocht';
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
        return 'Promoties van de week';
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

    public function getBrandOfTheMonthTitle() {
        return 'Merk van de maand';
    }

    public function getBrandOfTheMonth() {
        return "<li><a href='shop.php?brand_id=9'>Milka</a></li>";

    }
}