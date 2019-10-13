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