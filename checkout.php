<!DOCTYPE html>
<html lang="en">
<?php
require_once 'snippets/head.html';
require_once 'classes/checkout.php';
require_once 'checkout/cart.php';
require_once 'classes/shopAPI.php';
$api = new ShopAPI();
$cart = $api->getCart($_COOKIE['guid']);
if (array_key_exists('guid', $_GET) && $_COOKIE['guid'] = $_GET['guid']) {
  $status = file_get_contents('checkout/' . $_GET['guid'] . '.txt');
  if ($status === FALSE) {
    echo 'Nog geen betaalstatus';
    exit;
  }
  else {
    echo 'betaalstatus = ' . $status . '<br>';exit;
  }
}
?>

<body>
  <!--================Header Menu Area =================-->

  <?php
  require_once('snippets/header.html');
  ?>
  <!--================Header Menu Area =================-->

  <!--================Checkout Area =================-->
  <section class="checkout_area section_gap">
    <div class="container">

      <div class="billing_details">
        <div class="row">
          <div class="col-lg-7">
            <h3><?php echo _('Factureringsgegevens'); ?></h3>
            <?php
            if (array_key_exists('error', $_GET)) {
              echo "<p class='error'>" . $_GET['error'] . "</p>";
            }
            ?>
            <form class="row contact_form" action="checkout/pay.php" method="POST">

              <div class="col-md-6 form-group p_star">
                <input type="text" class="form-control" id="first_name" name="first_name" placeholder="<?php echo _('Voornaam'); ?>*" value="<?php echo $cart->delivery_first_name ?>" required />
              </div>

              <div class="col-md-6 form-group p_star">
                <input type="text" class="form-control" id="last_name" name="last_name" placeholder="<?php echo _('Achternaam'); ?>*" value="<?php echo $cart->delivery_last_name ?>" required />
              </div>

              <div class="col-md-6 form-group p_star">
                <input type="text" class="form-control" id="phone" name="phone" placeholder="<?php echo _('Telefoonnummer') ?>" value="<?php echo $cart->delivery_phone ?>" />
              </div>

              <div class="col-md-6 form-group p_star">
                <input type="email" class="form-control" id="email" name="email" placeholder="<?php echo _('Email Adres'); ?>*" value="<?php echo $cart->delivery_email ?>" required />
              </div>

              <div class="col-md-12 form-group p_star">
                <select class="country_select" id="country" name="country">
                  <option value="BE"><?php echo _('België'); ?></option>
                  <option value="NL"><?php echo _('Nederland'); ?></option>
                </select>
              </div>

              <div class="col-md-12 form-group p_star">
                <input type="text" class="form-control" id="address1" name="address1" placeholder="<?php echo _('Adres lijn 1'); ?>*" value="<?php echo $cart->delivery_address_line1 ?>" required>
              </div>

              <div class="col-md-12 form-group p_star">
                <input type="text" class="form-control" id="address2" name="address2" placeholder="<?php echo _('Adres lijn 2'); ?>" value="<?php echo $cart->delivery_address_line2 ?>" />
              </div>

              <div class="col-md-12 form-group p_star">
                <input type="text" class="form-control" id="city" name="city" placeholder="<?php echo _('Stad/Gemeente') ?>*" value="<?php echo $cart->delivery_city ?>" required/>
              </div>

              <div class="col-md-12 form-group">
                <input type="text" class="form-control" id="postal_code" name="postal_code" placeholder="<?php echo _('Postcode'); ?>*" value="<?php echo $cart->delivery_postal_code ?>" required/>
              </div>

          </div>
          <div class="col-lg-5">
            <div class="order_box">
              <h2><?php echo _('Uw bestelling'); ?></h2>
              <?php
              $checkout = new Checkout();
              echo $checkout->getProducts();
              $Cart = new Cart();
              $checkoutCart =  $Cart->getCart();
              echo "<input type='text' id='cart' name='cart' value='$checkoutCart' hidden='hidden'/>";
              if (array_key_exists('loggedin', $_SESSION) && $_SESSION['loggedin'] === true) {
                $userId = $_SESSION['id'];
                echo "<input type='text' id='userId' name='userId' value='$userId' hidden='hidden'/>";
              }
              echo "<input type='text' id='bedrag' name='bedrag' value='$cart->totalPrice' hidden='hidden'/>";
              ?>
              
              <div class="payment_item active">
                <div class="radion_btn">
                  <input type="radio" id="f-option6" name="selector" checked/>
                  <label for="f-option6">Paypal </label>
                  <img src="img/product/single-product/card.jpg" alt="" />
                  <div class="check"></div>
                </div>
                <p>
                  <?php echo _('Weet dat dit een fictief bedrijf is'); ?>
                </p>
              </div>
              <div class="creat_account">
                <input type="checkbox" id="f-option4" name="selector" required />
                <label for="f-option4"><?php echo _('Ik heb gelezen en accepteer de'); ?> </label>
                <a href="#"><?php echo _('algemene voorwaarden'); ?>*</a>
              </div>
              <?php 
                if (isset($cart->payment_status) && $cart->payment_status == 1) {
                  echo "<img src='https://i.gifer.com/origin/34/34338d26023e5515f6cc8969aa027bca_w200.gif' width='100px'>";
                } else {
                  ?>
                 <input type='submit' class='main_btn' value='<?php echo _('Betaal') ?>'>
                <?php }
              ?>
              
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