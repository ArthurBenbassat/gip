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
}