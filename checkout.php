<!DOCTYPE html>
<html lang="en">
<?php
require_once('snippets/head.html');
require_once 'classes/checkout.php';
require_once 'checkout/cart.php';
?>

<body>
  <!--================Header Menu Area =================-->

  <?php
  require_once('snippets/header.html');
  ?>
  <!--================Header Menu Area =================-->

  <!--================Home Banner Area =================-->
  <section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
      <div class="container">
        <div class="banner_content d-md-flex justify-content-between align-items-center">
          <div class="mb-3 mb-md-0">
            <h2>Product Checkout</h2>
            <p>Very us move be blessed multiply night</p>
          </div>
          <div class="page_link">
            <a href="index.html">Home</a>
            <a href="checkout.html">Product Checkout</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================End Home Banner Area =================-->

  <!--================Checkout Area =================-->
  <section class="checkout_area section_gap">
    <div class="container">

      <div class="billing_details">
        <div class="row">
          <div class="col-lg-7">
            <h3>Billing Details</h3>
            <?php
            if (array_key_exists('error', $_GET)) {
              echo "<p class='error'>" . $_GET['error'] . "</p>";
            }
            ?>
            <form class="row contact_form" action="checkout/check.php" method="POST">

              <div class="col-md-6 form-group p_star">
                <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First name*" required />
              </div>

              <div class="col-md-6 form-group p_star">
                <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last name*" required />
              </div>

              <div class="col-md-12 form-group">
                <input type="text" class="form-control" id="company" name="company" placeholder="Company name" />
              </div>

              <div class="col-md-6 form-group p_star">
                <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone number" />
              </div>

              <div class="col-md-6 form-group p_star">
                <input type="email" class="form-control" id="email" name="email" placeholder="Email Address*" required />
              </div>

              <div class="col-md-12 form-group p_star">
                <select class="country_select" id="country" name="country">
                  <option value="BE">Belgium</option>
                  <option value="NL">The Netherlands</option>
                </select>
              </div>

              <div class="col-md-12 form-group p_star">
                <input type="text" class="form-control" id="address1" name="address1" placeholder="Address line 1*" required>
              </div>

              <div class="col-md-12 form-group p_star">
                <input type="text" class="form-control" id="address2" name="address2" placeholder="Address line 2" />
              </div>

              <div class="col-md-12 form-group p_star">
                <input type="text" class="form-control" id="city" name="city" placeholder="Town/City*" required/>
              </div>

              <div class="col-md-12 form-group">
                <input type="text" class="form-control" id="postal_code" name="postal_code" placeholder="Postcode/ZIP*" required/>
              </div>

          </div>
          <div class="col-lg-5">
            <div class="order_box">
              <h2>Your Order</h2>
              <?php
              $checkout = new Checkout();
              echo $checkout->getProducts();
              $cart = new Cart();
              $checkoutCart =  $cart->getCart();
              echo "<input type='text' id='cart' name='cart' value='$checkoutCart' hidden='hidden'/>";
              ?>
              
              <div class="payment_item active">
                <div class="radion_btn">
                  <input type="radio" id="f-option6" name="selector" checked/>
                  <label for="f-option6">Paypal </label>
                  <img src="img/product/single-product/card.jpg" alt="" />
                  <div class="check"></div>
                </div>
                <p>
                  Please send a check to Store Name, Store Street, Store Town,
                  Store State / County, Store Postcode.
                </p>
              </div>
              <div class="creat_account">
                <input type="checkbox" id="f-option4" name="selector" required />
                <label for="f-option4">I’ve read and accept the </label>
                <a href="#">terms & conditions*</a>
              </div>
              <input type="submit" class="main_btn" value="Checkout">
            </div>
          </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!--================End Checkout Area =================-->

  <!--================ start footer Area  =================-->
  <?php
  require_once('snippets/footer.html');
  ?>
  <!--================ End footer Area  =================-->

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/stellar.js"></script>
  <script src="vendors/lightbox/simpleLightbox.min.js"></script>
  <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
  <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
  <script src="vendors/isotope/isotope-min.js"></script>
  <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
  <script src="js/jquery.ajaxchimp.min.js"></script>
  <script src="js/mail-script.js"></script>
  <script src="vendors/jquery-ui/jquery-ui.js"></script>
  <script src="vendors/counter-up/jquery.waypoints.min.js"></script>
  <script src="vendors/counter-up/jquery.counterup.js"></script>
  <script src="js/theme.js"></script>
</body>

</html>