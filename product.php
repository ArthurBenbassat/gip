<?php 
require_once 'classes/shopAPI.php';
if(array_key_exists('id', $_GET)) {
    $id = $_GET['id'];
    $shopProduct = new ShopAPI();
    $product = $shopProduct->getProduct($id);
} else {
    header('Location: shop.php');
}


?>
<!DOCTYPE html>
<html lang="en">
  
<?php
    require_once 'snippets/head.html';
?>
  <body>
    <!--================Header Menu Area =================-->
    <?php
    require_once 'snippets/header.html';
  ?>
    <!--================Header Menu Area =================-->

    <!--================Single Product Area =================-->
    <div class="product_image_area">
      <div class="container">
        <div class="row s_product_inner">
          <div class="col-lg-6">
            <div class="s_product_img">
             
                    <img
                      class="d-block w-100"
                      src="img/product/<?php echo $product->photo ?>"
                      alt="First slide"
                    />
            </div>
          </div>
          <div class="col-lg-5 offset-lg-1">
            <div class="s_product_text">
              <h1><?php echo $product->name ?></h1>
              <h2>€<?php echo $product->price ?></h2>
              <ul class="list">
                <li>
                  <a class="active" href="shop.php?cat_id=<?php echo $product->categoryId ?>">
                    <span><?php echo _('Categorie') ?></span>  : <?php echo $product->category ?></a
                  >
                </li>
                <li>
                  <a> <span><?php echo _('Beschikbaarheid'); ?></span>  : <?php echo _('Op voorraad'); ?></a>
                </li>
              </ul>
              <p>
               <?php echo $product->ingredients ?>
              </p>
              <form method="GET" action='cart/addProductWithQuantity.php'>
              <div style="margin: 15px">
              
                <label for="qty"><?php echo _('Hoeveelheid'); ?>:</label>
                
                <input type="text" id="id" name="productId" value="<?php echo $_GET['id'] ?>" hidden="hidden"/>
                <div 
                  class='value-button' 
                  id='decrease' 
                  onclick="var value = parseInt(document.getElementById('number').value, 10);
                            value = isNaN(value) ? 0 : value;
                            value < 1 ? value = 1 : '';
                            value--;
                            document.getElementById('number').value = value;"  
                  value='Decrease Value'>
                  -
                </div>
                <input type='number' id='number' class='number' name="quantity" value='1'/>
                <div 
                    class='value-button' 
                    id="increase" 
                    onclick="var value = parseInt(document.getElementById('number').value, 10);
                              value = isNaN(value) ? 0 : value;
                              value++;
                              document.getElementById('number').value = value;" 
                    value='Increase Value'>+
                </div>
              </div>
              <div class="card_area" style="padding-bottom: 20px">
                <button type="submit" class="main_btn"><?php echo _('Voeg toe aan winkelmandje'); ?></button>
                
                </div>
              </form>
              
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--================End Single Product Area =================-->

    <!--================Product Description Area =================-->
      <div class="container">
        <?php 
        if ($product->video) {
          echo $product->video;
        }
        ?>
      </div>
    </section>
    <!--================End Product Description Area =================-->

    <!--================ start footer Area  =================-->
    <?php
      require_once('snippets/footer.php');
    ?>
    <!--================ End footer Area  =================-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <?php
    require_once('snippets/js.html');
    ?>
  </body>
</html>
