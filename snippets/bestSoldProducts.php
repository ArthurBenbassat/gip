<?php
require_once 'classes/shopAPI.php';
$api = new ShopAPI();
$products = $api->getProduct(1);
$items = "";
$name = $products->name;
$id = $products->id;
$price = $products->price;
?>
    <div class='col-lg-6'>
        <div class='new_product'>
        <h5 class='text-uppercase'><?php echo _('Onze nummer 1') ?>:</h5>
        <h3 class='text-uppercase'><?php echo $name ?></h3>
        <div class='product-img'>
            <img class='img-fluid' src='img/product/<?php echo $name ?>.jpg' alt='' />
        </div>
        <h4>€<?php echo $price ?></h4>
        <a class='main_btn addCart'  data-product_id='<?php echo $id ?>' ><?php echo _('Voeg toe aan winkelmandje'); ?></a>
        </div>
    </div>