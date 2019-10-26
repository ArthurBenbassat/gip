<!DOCTYPE html>
<html lang="en">

<?php
  session_start();
   if ($_SESSION['loggedin'] == FALSE) {
     $wishList = "TRUE";
   header("Location: login.php?return_page=wishlist");
	exit();
   }
?>
  <?php
   require_once('snippets/head.html');
 ?>

    <body>
      <!--================Header Menu Area =================-->
      <?php
    require_once('snippets/header.html');
  ?>
        <!--================Header Menu Area =================-->
        <section class="banner_area">
          <div class="banner_inner d-flex align-items-center">
            <div class="container">
              <div class="banner_content d-md-flex justify-content-between align-items-center">
                <div class="mb-3 mb-md-0">
                  <h2>Wish list</h2>
                </div>
                <div class="page_link">
                  <a href="index.html">Home</a>
                  <a href="wish-list.html">Wish list</a>
                </div>
              </div>
            </div>
          </div>
        </section>

        <div class="container">

          <p>
            Your wish list is empty
          </p>
        </div>

        <!--================ start footer Area  =================-->
        <?php
      require_once('snippets/footer.html');
    ?>
          <!--================ End footer Area  =================-->

          <!-- Optional JavaScript -->
          <!-- jQuery first, then Popper.js, then Bootstrap JS -->
          <?php
    require_once('snippets/js.html');
    ?>
    </body>

</html>