<!DOCTYPE html>
<html lang="en">
<?php
    require_once('snippets/head.html');
?>

  <body>
    <!--================Header Menu Area =================-->
    <header class="header_area">
      <div class="top_menu">
        <div class="container">
          <div class="row">
            <div class="col-lg-7">
              <div class="float-left">
                <p>Phone: +01 256 25 235</p>
                <p>email: info@eiser.com</p>
              </div>
            </div>
            <div class="col-lg-5">
              <div class="float-right">
                <ul class="right_side">
                  <li>
                    <a href="cart.html">
                      gift card
                    </a>
                  </li>
                  <li>
                    <a href="tracking.html">
                      track order
                    </a>
                  </li>
                  <li>
                    <a href="contact.html">
                      Contact Us
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="main_menu">
        <div class="container">
          <nav class="navbar navbar-expand-lg navbar-light w-100">
            <!-- Brand and toggle get grouped for better mobile display -->
            <a class="navbar-brand logo_h" href="index.html">
              <img src="img/logo.png" alt="" />
            </a>
            <button
              class="navbar-toggler"
              type="button"
              data-toggle="collapse"
              data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div
              class="collapse navbar-collapse offset w-100"
              id="navbarSupportedContent"
            >
              <div class="row w-100 mr-0">
                <div class="col-lg-7 pr-0">
                  <ul class="nav navbar-nav center_nav pull-right">
                    <li class="nav-item">
                      <a class="nav-link" href="index.html">Home</a>
                    </li>
                    <li class="nav-item submenu dropdown">
                      <a
                        href="#"
                        class="nav-link dropdown-toggle"
                        data-toggle="dropdown"
                        role="button"
                        aria-haspopup="true"
                        aria-expanded="false"
                        >Shop</a
                      >
                      <ul class="dropdown-menu">
                        <li class="nav-item">
                          <a class="nav-link" href="category.html"
                            >Shop Category</a
                          >
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="single-product.html"
                            >Product Details</a
                          >
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="checkout.html"
                            >Product Checkout</a
                          >
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="cart.html">Shopping Cart</a>
                        </li>
                      </ul>
                    </li>
                    <li class="nav-item submenu dropdown">
                      <a
                        href="#"
                        class="nav-link dropdown-toggle"
                        data-toggle="dropdown"
                        role="button"
                        aria-haspopup="true"
                        aria-expanded="false"
                        >Blog</a
                      >
                      <ul class="dropdown-menu">
                        <li class="nav-item">
                          <a class="nav-link" href="blog.html">Blog</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="single-blog.html"
                            >Blog Details</a
                          >
                        </li>
                      </ul>
                    </li>
                    <li class="nav-item active submenu dropdown">
                      <a
                        href="#"
                        class="nav-link dropdown-toggle"
                        data-toggle="dropdown"
                        role="button"
                        aria-haspopup="true"
                        aria-expanded="false"
                        >Pages</a
                      >
                      <ul class="dropdown-menu">
                        <li class="nav-item">
                          <a class="nav-link" href="tracking.html">Tracking</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="elements.html">Elements</a>
                        </li>
                      </ul>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="contact.html">Contact</a>
                    </li>
                  </ul>
                </div>

                <div class="col-lg-5 pr-0">
                  <ul class="nav navbar-nav navbar-right right_nav pull-right">
                    <li class="nav-item">
                      <a href="#" class="icons">
                        <i class="ti-search" aria-hidden="true"></i>
                      </a>
                    </li>

                    <li class="nav-item">
                      <a href="#" class="icons">
                        <i class="ti-shopping-cart"></i>
                      </a>
                    </li>

                    <li class="nav-item">
                      <a href="#" class="icons">
                        <i class="ti-user" aria-hidden="true"></i>
                      </a>
                    </li>

                    <li class="nav-item">
                      <a href="#" class="icons">
                        <i class="ti-heart" aria-hidden="true"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </header>
    <!--================Header Menu Area =================-->

    <!--================Home Banner Area =================-->
    <section class="banner_area">
      <div class="banner_inner d-flex align-items-center">
        <div class="container">
          <div
            class="banner_content d-md-flex justify-content-between align-items-center"
          >
            <div class="mb-3 mb-md-0">
              <h2>Order Tracking</h2>
              <p>Very us move be blessed multiply night</p>
            </div>
            <div class="page_link">
              <a href="index.html">Home</a>
              <a href="tracking.html">Order Tracking</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================End Home Banner Area =================-->

    <!--================Tracking Box Area =================-->
    <section class="tracking_box_area section_gap">
        <div class="container">
            <div class="tracking_box_inner">
                <p>To track your order please enter your Order ID in the box below and press the "Track" button. This was given
                    to you on your receipt and in the confirmation email you should have received.</p>
                <form class="row tracking_form" action="#" method="post" novalidate="novalidate">
                    <div class="col-md-12 form-group">
                        <input type="text" class="form-control" id="order" name="order" placeholder="Order ID">
                    </div>
                    <div class="col-md-12 form-group">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Billing Email Address">
                    </div>
                    <div class="col-md-12 form-group">
                        <button type="submit" value="submit" class="btn submit_btn">Track Order</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!--================End Tracking Box Area =================-->

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