<!DOCTYPE html>
<html lang="en">

<?php
     require_once('snippets/head.html');
   if (array_key_exists('loggedin', $_SESSION) && $_SESSION['loggedin'] == TRUE) {
    header('Location: my-account.php');
    exit();
   }
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
              <?php
              if (array_key_exists('error', $_GET)){
                echo "<p class='error'>" . $_GET['error'] . "</p>";
              }
              
              echo "<form class='row contact_form' action='login/loginCheck.php' method='post' novalidate='novalidate'>";
                            
              if (array_key_exists('return_page', $_GET)) {
                echo '<input type="text" id="return_page" name="return_page" value="' . $_GET['return_page'] . '" hidden="hidden"/>';
                if (array_key_exists('id', $_GET) && array_key_exists('token', $_GET)) {
                  echo '<input type="text" id="id" name="id" value="' . $_GET['id'] . '" hidden="hidden"/>';
                  echo '<input type="text" id="token" name="token" value="' . $_GET['token'] . '" hidden="hidden"/>';
                }
              }
              ?>
              
              
              
               <div class="col-md-6 form-group p_star">
                  <input
                    type="text"
                    class="form-control"
                    id="email"
                    name="email"
                    placeholder="email"
                  />
                </div>

                <div class="col-md-6 form-group p_star">
                  <input
                    type="password"
                    class="form-control"
                    id="password"
                    name="password"
                    placeholder="password"
                  />
                </div>
                
                <div class="form-group mt-lg-3">
                  <button type="submit" class="main_btn">Log in</button>
               </div>
                
              </form>
              <a href="register.php">No account yet?</a>
              </div>
          </div>    
    </div>
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
