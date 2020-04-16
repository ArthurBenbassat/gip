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
                  <th scope="col"><?php echo _('Product') ?></th>
                  <th scope="col"><?php echo _('Prijs') ?></th>
                  <th scope="col"><?php echo _('Aantal') ?></th>
                  <th scope="col"><?php echo _('Totaal') ?></th>
                  
                </tr>
              </thead>
              <tbody>
                <?php 
                if (array_key_exists('guid', $_COOKIE)) {
                  echo $cart->getCart($_COOKIE['guid']); 
                  ?> <tr class='out_button_area'>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td>
                    <div class='checkout_btn_inner' id='checkoutbuttons'>
                      <a class='gray_btn' href='shop.php'><?php echo _('Shop verder') ?></a>
                      <a class='main_btn' href='checkout.php'><?php echo _('Ga het bestellen') ?></a>
                    </div>
                  </td>
                </tr>
                <?php
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
