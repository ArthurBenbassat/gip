<!DOCTYPE html>
<html lang="en">

<?php
  require_once 'snippets/head.html';
  require_once 'classes/product.php'; 
  $product = new Product();
?>
    <body>
  <!--================Header Menu Area =================-->
  <?php
    require_once 'snippets/header.html';
  ?>
  <!--================Header Menu Area =================-->

  <!--================Home Banner Area =================-->
  <section class="home_banner_area mb-40">
    <div class="banner_inner d-flex align-items-center">
      <div class="container">
        <div class="banner_content row">
          <div class="col-lg-12">
            <p class="sub text-uppercase"><?php echo _('koekenshop') ?></p>
            <h3><span><?php echo _('Dé'); ?></span><?php echo _(' plaats'); ?> <br /><?php echo _('voor '); ?><span><?php echo _('koeken'); ?></span></h3>
            <a class="main_btn mt-40" href="shop.php"><?php echo _('Bekijk onze koeken'); ?></a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================End Home Banner Area =================-->

  <!-- Start feature Area -->
  <section class="feature-area section_gap_bottom_custom">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6">
          <div class="single-feature">
            <a href="#" class="title">
              <i class="flaticon-money"></i>
              <h3><?php echo _('Geld terug garantie'); ?></h3>
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="single-feature">
            <a href="#" class="title">
              <i class="flaticon-truck"></i>
              <h3><?php echo _('Gratis levering') ?></h3>
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="single-feature">
            <a href="#" class="title">
              <i class="flaticon-support"></i>
              <h3><?php echo _('Altijd ondersteuning') ?></h3>
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="single-feature">
            <a href="#" class="title">
              <i class="flaticon-blockchain"></i>
              <h3><?php echo _('veilige betalingen') ?></h3>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End feature Area -->

  <!--================ Feature Product Promotion Area =================-->
  <section class="feature_product_area section_gap_bottom_custom">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-12">
          <div class="main_title">
            <h2><span><?php echo _('Promoties van de week'); ?></span></h2>
            <p><?php echo _('Geniet van onze wekelijkse promoties'); ?></p>
          </div>
        </div>
      </div>

      <div class="row">
        <?php echo $product->getPromotions(); ?>
      </div>
    </div>
  </section>
  <!--================ End Feature Product Promotion Area =================-->

  <!--================ Offer Area =================-->
  <section class="offer_area">
    <div class="container">
      <div class="row">
          <div class="offer_content" id="brandOfTheMonth">
            <h3 class="text-uppercase"><?php echo _('Merk van de'); ?><br><?php echo _('maand'); ?></h3>
            <a href="shop.php?brand_id=9" class="main_btn mb-20 mt-5"><?php echo _('Bekijk onze producten'); ?></a>
          </div>
      </div>
    </div>
  </section>
  <!--================ End Offer Area =================-->

  <!--================ Best sold Products Area =================-->
  <section class="new_product_area section_gap_top section_gap_bottom_custom">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-12">
          <div class="main_title">
            <h2><span><?php echo _('Best verkochte producten'); ?></span></h2>
            <p><?php echo _('Dit zijn onze populairste koeken'); ?></p>
          </div>
        </div>
      </div>

      <div class="row">
        <?php require_once 'snippets/bestSoldProducts.php'; ?>
        <?php echo $product->bestSold(); ?>
      </div>
    </div>
  </section>
  <!--================ End  Best sold Products Area =================-->

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