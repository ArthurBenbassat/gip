<!DOCTYPE html>
<html lang="en">
<?php
    require_once('snippets/head.html');
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
          <div
            class="banner_content d-md-flex justify-content-between align-items-center"
          >
            <div class="mb-3 mb-md-0">
              <h2>Cart</h2>
              <p>Very us move be blessed multiply night</p>
            </div>
            <div class="page_link">
              <a href="index.html">Home</a>
              <a href="cart.html">Cart</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================End Home Banner Area =================-->

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
                <tr>
                  <td>
                    <div class="media">
                      <div class="d-flex">
                        <img
                          src="img/product/single-product/cart-1.jpg"
                          alt=""
                        />
                      </div>
                      <div class="media-body">
                        <p>Minimalistic shop for multipurpose use</p>
                      </div>
                    </div>
                  </td>
                  <td>
                    <h5>$360.00</h5>
                  </td>
                  <td>
                    <div class="product_count">
                      <input
                        type="text"
                        name="qty"
                        id="sst"
                        maxlength="12"
                        value="1"
                        title="Quantity:"
                        class="input-text qty"
                      />
                      <button
                        onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;"
                        class="increase items-count"
                        type="button"
                      >
                        <i class="lnr lnr-chevron-up"></i>
                      </button>
                      <button
                        onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;"
                        class="reduced items-count"
                        type="button"
                      >
                        <i class="lnr lnr-chevron-down"></i>
                      </button>
                    </div>
                  </td>
                  <td>
                    <h5>$720.00</h5>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="media">
                      <div class="d-flex">
                        <img
                          src="img/product/single-product/cart-1.jpg"
                          alt=""
                        />
                      </div>
                      <div class="media-body">
                        <p>Minimalistic shop for multipurpose use</p>
                      </div>
                    </div>
                  </td>
                  <td>
                    <h5>$360.00</h5>
                  </td>
                  <td>
                    <div class="product_count">
                      <input
                        type="text"
                        name="qty"
                        id="sst"
                        maxlength="12"
                        value="1"
                        title="Quantity:"
                        class="input-text qty"
                      />
                      <button
                        onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;"
                        class="increase items-count"
                        type="button"
                      >
                        <i class="lnr lnr-chevron-up"></i>
                      </button>
                      <button
                        onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;"
                        class="reduced items-count"
                        type="button"
                      >
                        <i class="lnr lnr-chevron-down"></i>
                      </button>
                    </div>
                  </td>
                  <td>
                    <h5>$720.00</h5>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="media">
                      <div class="d-flex">
                        <img
                          src="img/product/single-product/cart-1.jpg"
                          alt=""
                        />
                      </div>
                      <div class="media-body">
                        <p>Minimalistic shop for multipurpose use</p>
                      </div>
                    </div>
                  </td>
                  <td>
                    <h5>$360.00</h5>
                  </td>
                  <td>
                    <div class="product_count">
                      <input
                        type="text"
                        name="qty"
                        id="sst"
                        maxlength="12"
                        value="1"
                        title="Quantity:"
                        class="input-text qty"
                      />
                      <button
                        onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;"
                        class="increase items-count"
                        type="button"
                      >
                        <i class="lnr lnr-chevron-up"></i>
                      </button>
                      <button
                        onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;"
                        class="reduced items-count"
                        type="button"
                      >
                        <i class="lnr lnr-chevron-down"></i>
                      </button>
                    </div>
                  </td>
                  <td>
                    <h5>$720.00</h5>
                  </td>
                </tr>
                <tr class="bottom_button">
                  <td>
                    <a class="gray_btn" href="#">Update Cart</a>
                  </td>
                  <td></td>
                  <td></td>
                  <td>
                    <div class="cupon_text">
                      <input type="text" placeholder="Coupon Code" />
                      <a class="main_btn" href="#">Apply</a>
                      <a class="gray_btn" href="#">Close Coupon</a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                  <td>
                    <h5>Subtotal</h5>
                  </td>
                  <td>
                    <h5>$2160.00</h5>
                  </td>
                </tr>
                <tr class="shipping_area">
                  <td></td>
                  <td></td>
                  <td>
                    <h5>Shipping</h5>
                  </td>
                  <td>
                    <div class="shipping_box">
                      <ul class="list">
                        <li>
                          <a href="#">Flat Rate: $5.00</a>
                        </li>
                        <li>
                          <a href="#">Free Shipping</a>
                        </li>
                        <li>
                          <a href="#">Flat Rate: $10.00</a>
                        </li>
                        <li class="active">
                          <a href="#">Local Delivery: $2.00</a>
                        </li>
                      </ul>
                      <h6>
                        Calculate Shipping
                        <i class="fa fa-caret-down" aria-hidden="true"></i>
                      </h6>
                      <select class="shipping_select">
                        <option value="1">Bangladesh</option>
                        <option value="2">India</option>
                        <option value="4">Pakistan</option>
                      </select>
                      <select class="shipping_select">
                        <option value="1">Select a State</option>
                        <option value="2">Select a State</option>
                        <option value="4">Select a State</option>
                      </select>
                      <input type="text" placeholder="Postcode/Zipcode" />
                      <a class="gray_btn" href="#">Update Details</a>
                    </div>
                  </td>
                </tr>
                <tr class="out_button_area">
                  <td></td>
                  <td></td>
                  <td></td>
                  <td>
                    <div class="checkout_btn_inner">
                      <a class="gray_btn" href="#">Continue Shopping</a>
                      <a class="main_btn" href="#">Proceed to checkout</a>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>
    <!--================End Cart Area =================-->

    <!--================ start footer Area  =================-->
    <footer class="footer-area section_gap">
      <div class="container">
        <div class="row">
          <div class="col-lg-2 col-md-6 single-footer-widget">
            <h4>Top Products</h4>
            <ul>
              <li><a href="#">Managed Website</a></li>
              <li><a href="#">Manage Reputation</a></li>
              <li><a href="#">Power Tools</a></li>
              <li><a href="#">Marketing Service</a></li>
            </ul>
          </div>
          <div class="col-lg-2 col-md-6 single-footer-widget">
            <h4>Quick Links</h4>
            <ul>
              <li><a href="#">Jobs</a></li>
              <li><a href="#">Brand Assets</a></li>
              <li><a href="#">Investor Relations</a></li>
              <li><a href="#">Terms of Service</a></li>
            </ul>
          </div>
          <div class="col-lg-2 col-md-6 single-footer-widget">
            <h4>Features</h4>
            <ul>
              <li><a href="#">Jobs</a></li>
              <li><a href="#">Brand Assets</a></li>
              <li><a href="#">Investor Relations</a></li>
              <li><a href="#">Terms of Service</a></li>
            </ul>
          </div>
          <div class="col-lg-2 col-md-6 single-footer-widget">
            <h4>Resources</h4>
            <ul>
              <li><a href="#">Guides</a></li>
              <li><a href="#">Research</a></li>
              <li><a href="#">Experts</a></li>
              <li><a href="#">Agencies</a></li>
            </ul>
          </div>
          <div class="col-lg-4 col-md-6 single-footer-widget">
            <h4>Newsletter</h4>
            <p>You can trust us. we only send promo offers,</p>
            <div class="form-wrap" id="mc_embed_signup">
              <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                method="get" class="form-inline">
                <input class="form-control" name="EMAIL" placeholder="Your Email Address" onfocus="this.placeholder = ''"
                  onblur="this.placeholder = 'Your Email Address '" required="" type="email">
                <button class="click-btn btn btn-default">Subscribe</button>
                <div style="position: absolute; left: -5000px;">
                  <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                </div>
  
                <div class="info"></div>
              </form>
            </div>
          </div>
        </div>
        <div class="footer-bottom row align-items-center">
          <p class="footer-text m-0 col-lg-8 col-md-12"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          <div class="col-lg-4 col-md-12 footer-social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-dribbble"></i></a>
            <a href="#"><i class="fa fa-behance"></i></a>
          </div>
        </div>
      </div>
    </footer>
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
