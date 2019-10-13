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

  <div class="billing_details" style="padding: 10%">
          <div class="row">
            <div class="col-lg-8">
              <h3>Register</h3>
              <form
                class="row contact_form"
                action="login/registerCheck.php"
                method="GET"
                novalidate="novalidate"
              >
                <div class="col-md-6 form-group p_star">
                  <input
                    type="text"
                    class="form-control"
                    id="first_name"
                    name="first_name"
                    placeholder="First name"
                  />
                </div>

                <div class="col-md-6 form-group p_star">
                  <input
                    type="text"
                    class="form-control"
                    id="last_name"
                    name="last_name"
                    placeholder="Last name"
                  />
                </div>

                <div class="col-md-12 form-group">
                  <input
                    type="text"
                    class="form-control"
                    id="company"
                    name="company"
                    placeholder="Company name"
                  />
                </div>

                <div class="col-md-6 form-group p_star">
                  <input
                    type="text"
                    class="form-control"
                    id="phone"
                    name="phone"
                    placeholder="Phone number"
                  />
                </div>

                <div class="col-md-6 form-group p_star">
                  <input
                    type="text"
                    class="form-control"
                    id="email"
                    name="email"
                    placeholder="Email Address"
                  />
                </div>

                <div class="col-md-12 form-group p_star">
                  <select class="country_select" id="country" name="country">
                    <option value="BE">Belgium</option>
                    <option value="NL">The Nederlands</option>
                  </select>
                </div>

                <div class="col-md-12 form-group p_star">
                  <input
                    type="text"
                    class="form-control"
                    id="address1"
                    name="address1"
                    placeholder="Address line 1"
                  />
                </div>

                <div class="col-md-12 form-group p_star">
                  <input
                    type="text"
                    class="form-control"
                    id="address2"
                    name="address2"
                    placeholder="Address line 2"
                  />
                </div>

                <div class="col-md-12 form-group p_star">
                  <input
                    type="text"
                    class="form-control"
                    id="city"
                    name="city"
                    placeholder="Town/City"
                  />
                </div>

                <div class="col-md-12 form-group">
                  <input
                    type="text"
                    class="form-control"
                    id="postal_code"
                    name="postal_code"
                    placeholder="Postcode/ZIP"
                  />
                </div>
                <div class="col-md-6 form-group">
                  <input
                    type="text"
                    class="form-control"
                    id="password"
                    name="password"
                    placeholder="Password"
                  />
                </div>

                <div class="col-md-6 form-group">
                  <input
                    type="text"
                    class="form-control"
                    id="password2"
                    name="password2"
                    placeholder="Repeat your password"
                  />
                </div>
                <div class="form-group mt-lg-3">
                  <button type="submit" class="main_btn">Register</button>
                </div>
                
              </form>
          </div>
          </div>
     </div>
  <div>
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
        <p class="footer-text m-0 col-lg-8 col-md-12">
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved 
</p>
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
  <script src="vendors/counter-up/jquery.waypoints.min.js"></script>
  <script src="vendors/counter-up/jquery.counterup.js"></script>
  <script src="js/mail-script.js"></script>
  <script src="js/theme.js"></script>
</body>

</html>