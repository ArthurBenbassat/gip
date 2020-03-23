<?php 
require_once 'classes/product.php'; 
$product = new Product();
require_once 'classes/filtering.php';
$filter = new Filter();
?>
<!DOCTYPE html>
<html lang="en">
<?php
require_once 'snippets/head.html';
require_once 'classes/shopAPI.php';
?>

<body>
  <!--================Header Menu Area =================-->
  <?php
  require_once 'snippets/header.html';
  ?>
  <!--================Header Menu Area =================-->


  <!--================Category Product Area =================-->
  <section class="cat_product_area section_gap">
    <div class="container">
      <div class="row flex-row-reverse">
        <div class="col-lg-9">
          <div class="product_top_bar">
            <div class="left_dorp">
              <select class="sorting">
                <?php echo _("<option value='1'>Oplopend</option>"); ?>  
                <?php echo _("<option value='2'>Aflopend</option>"); ?>
              </select>
              <select class="show">
                <?php echo _("<option value='1'>Sorteer volgens naam</option>"); ?>
                <?php echo _("<option value='2'>Sorteer volgens prijs</option>"); ?>
                <?php echo _("<option value='3'>Sorteer volgens beoordeling</option>"); ?>
              </select>
            </div>
          </div>

          <?php echo $product->getProducts($_GET); ?>

        <div class="col-lg-3">
          <div class="left_sidebar_area">
            <form methode="GET" action="filter/addFilter.php">
            <?php echo $filter->getCategories($_GET) ?>

            <?php echo $filter->getBrands($_GET) ?>

            <aside class="left_widgets p_filter_widgets">
              <div class="l_w_title">
                <h3>Color Filter</h3>
              </div>
              <div class="widgets_inner">
                <ul class="list">
                  <li>
                    <div class="custom-control custom-checkbox mb-3">
                    <input type="checkbox" class="custom-control-input" id="customCheck" name="example1">
                    <label class="custom-control-label" for="customCheck">Custom checkbox</label>
                    </div>
                    
                  </li>
                  <li>
                    <a href="#">Black Leather</a>
                  </li>
                  <li class="active">
                    <a href="#">Black with red</a>
                  </li>
                  <li>
                    <a href="#">Gold</a>
                  </li>
                  <li>
                    <a href="#">Spacegrey</a>
                  </li>
                </ul>
              </div>
            </aside>

            <aside class="left_widgets p_filter_widgets">
              <div class="l_w_title">
                <h3>Price Filter</h3>
              </div>
              <div class="widgets_inner">
                <div class="range_item">
                  <div id="slider-range"></div>
                  <div class="">
                    <label for="amount">Price : </label>
                    <input type="text" id="amount" readonly />
                  </div>
                </div>
              </div>
            </aside>
            <aside class="left_widgets p_filter_widgets">
              <button class="main_btn container-fluid" type="sumbit"><?php echo _('Pas toe'); ?></button>
            </aside>
          </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================End Category Product Area =================-->

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