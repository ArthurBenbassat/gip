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
              <h3>Log in</h3>
              <form
                class="row contact_form"
                action="login/register.php"
                method="post"
                novalidate="novalidate"
              >
               <div class="col-md-6 form-group p_star">
                  <input
                    type="text"
                    class="form-control"
                    id="email"
                    name="name"
                    placeholder="email"
                  />
                </div>

                <div class="col-md-6 form-group p_star">
                  <input
                    type="password"
                    class="form-control"
                    id="password"
                    name="name"
                    placeholder="password"
                  />
                </div>
                
                <div class="form-group mt-lg-3">
                  <button type="submit" class="main_btn">Log in</button>
               </div>
                
              </form>
              </div>
          </div>    
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