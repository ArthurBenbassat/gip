<?php
require_once 'shopAPI.php';
class Product {
    public function getProducts() {
        $api = new ShopAPI();
        $products = $api->getAllProducts();
        $id = [];
        $price = [];
        $name = [];
        $photo = [];
        $items = '<div class="latest_product_inner"><div class="row">';
        for ($i=0; $i < count($products); $i++) {
            $name = $products[$i]->name;
            $id = $products[$i]->id;
            $price = $products[$i]->price;
            $photo =$products[$i]->photo;
            
            $items .= "<div class='col-lg-4 col-md-6'>
                            <div class='single-product'>
                            <div class='product-img'>
                                <img class='cart-img' src='img/product/$photo' alt='' />
                                <div class='p_icon'>
                                <a href='product.php?id=$id'>
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
                                <a href='product.php?id=$id' class='d-block'>
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

    public function getPromotions() {
        $api = new ShopAPI();
        return $this->getHtmlForPromotion($api->getProduct(14)) . $this->getHtmlForPromotion($api->getProduct(17)) . $this->getHtmlForPromotion($api->getProduct(1));
    }

    public function getHtmlForPromotion($product) {
        $name = $product->name;
        $id = $product->id;
        $price = $product->price;
        $photo = $product->photo;
        $originalPrice = number_format((float)$price * 1.5, 2, '.', '');
        return "<div class='col-lg-4 col-md-6'>
                    <div class='single-product'>
                        <div class='product-img'>
                            <img class='img-promotion' src='img/product/$photo' alt='' />
                            <div class='p_icon'>
                            <a href='product.php?id=$id'>
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
                        <a href='product.php?id=$id' class='d-block'>
                        <h4>$name</h4>
                        </a>
                        <div class='mt-3'>
                        <span class='mr-4'>€$price</span>
                        <del>€$originalPrice</del>
                        </div>
                    </div>
                    </div>
                </div>";
    }

    public function bestSold() {
        $api = new ShopAPI();
        $products = $api->getAllProducts();
        $items = "";
        $items .= " <div class='col-lg-6 mt-5 mt-lg-0'><div class='row'>";
        $id = 0;
        $name = '';
        for ($i=1; $i < 5; $i++) {
            $name = $products[$i]->name;
            $id = $products[$i]->id;
            $price = $products[$i]->price;
            $photo = $products[$i]->photo;
            $items .= "<div class='col-lg-6 col-md-6'>
                            <div class='single-product'>
                                <div class='product-img'>
                                    <img class='img-bestsold' src='img/product/$photo' alt='' />
                                    <div class='p_icon'>
                                    <a href='product.php?id=$id'>
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
                                    <a href='product.php?id=$id' class='d-block'>
                                    <h4>$name</h4>
                                    </a>
                                    <div class='mt-3'>
                                    <span class='mr-4'>€$price</span>
                                    </div>
                                </div>
                            </div>
                        </div>";
        }
        $items .=  '</div></div>';
        return $items;
    }
}