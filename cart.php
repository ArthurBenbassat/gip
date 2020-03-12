<!DOCTYPE html>
<html lang="en">
<?php
    require_once 'snippets/head.html';
    require_once 'classes/cart.php';
    $cart = new Cart();
?>
  <body>
    <!--================Header Menu Area =================-->
    <?php
        require_once('snippets/header.html');
        
    ?>
    <!--================Header Menu Area =================-->

    <!--================Cart Area =================-->
    <section class="cart_area">
      <div class="container">
        <div class="cart_inner">
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Product</th>
                  <th scope="col">Price</th>
                  <th scope="col">Quantity</th>
                  <th scope="col">Total</th>
                  
                </tr>
              </thead>
              <tbody>
                <?php 
                if (array_key_exists('guid', $_COOKIE)) {
                  echo $cart->getCart($_COOKIE['guid']); 
                  if (empty($cart)) {
                    echo 'No products in the cart';
                  }
                } 
                ?> 
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>
    <!--================End Cart Area =================-->

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
