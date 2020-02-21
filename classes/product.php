<?php
require_once 'shopAPI.php';
class Product {
    public function getProducts() {
        $api = new ShopAPI();
        $products = $api->getAllProducts();
        $id = [];
        $price = [];
        $name = [];
        $items = '<div class="latest_product_inner"><div class="row">';
        for ($i=0; $i < count($products); $i++) {
            $name = $products[$i]->name;
            $id = $products[$i]->id;
            $price = $products[$i]->price;
            
            $items .= "<div class='col-lg-4 col-md-6'>
                            <div class='single-product'>
                            <div class='product-img'>
                                <img class='cart-img' src='img/product/$name.jpg' alt='' />
                                <div class='p_icon'>
                                <a href='#'>
                                    <i class='ti-eye'></i>
                                </a>
                                <a data-product_id='$id' class='itemToWishList'>
                                    <i class='ti-heart'></i>
                                </a>
                                <a data-product_id='$id' class='itemToCart'>
                                    <i class='ti-shopping-cart'></i>
                                </a>
                                </div>
                            </div>
                            <div class='product-btm'>
                                <a href='#' class='d-block'>
                                <h4>$name</h4>
                                </a>
                                <div class='mt-3'>
                                <span class='mr-4'>€$price</span>
                                </div>
                            </div>
                            </div>
                        </div>";
        }
       $items .= '</div></div></div>';

       return $items;
    }
}