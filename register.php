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
            <h3><?php echo _('Registreer'); ?></h3>
            <?php
              if (array_key_exists('error', $_GET)){
                echo "<p class='error'>" . $_GET['error'] . "</p>";
              }
              ?>
              <form class="row contact_form" action="login/registerCheck.php" method="POST">

                <div class="col-md-6 form-group p_star">
                  <input type="text" class="form-control" id="first_name" name="first_name" placeholder="<?php echo _('Voornaam'); ?>*" required />
                </div>

                <div class="col-md-6 form-group p_star">
                  <input type="text" class="form-control" id="last_name" name="last_name" placeholder="<?php echo _('Achternaam'); ?>*" required />
                </div>

                <div class="col-md-12 form-group">
                  <input type="text" class="form-control" id="company" name="company" placeholder="<?php echo _('Bedrijfsnaam'); ?>" />
                </div>

                <div class="col-md-6 form-group p_star">
                  <input type="text" class="form-control" id="phone" name="phone" placeholder="<?php echo _('Telefoonnummer'); ?>" />
                </div>

                <div class="col-md-6 form-group p_star">
                  <input type="email" class="form-control" id="email" name="email" placeholder="<?php echo _('Email Adres'); ?>*" required />
                </div>

                <div class="col-md-12 form-group p_star">
                  <select class="country_select" id="country" name="country">
                    <option value="BE"><?php echo _('België'); ?></option>
                    <option value="NL"><?php echo _('Nederland'); ?></option>
                  </select>
                </div>

                <div class="col-md-12 form-group p_star">
                  <input type="text" class="form-control" id="address1" name="address1" placeholder="<?php echo _('Adres lijn 1'); ?>*" required />
                </div>

                <div class="col-md-12 form-group p_star">
                  <input type="text" class="form-control" id="address2" name="address2" placeholder="<?php echo _('Adres lijn 2'); ?>" />
                </div>

                <div class="col-md-12 form-group p_star">
                  <input type="text" class="form-control" id="city" name="city" placeholder="<?php echo _('Stad/Gemeente') ?>*" required />
                </div>

                <div class="col-md-12 form-group">
                  <input type="text" class="form-control" id="postal_code" name="postal_code" placeholder="<?php echo _('Postcode'); ?>*" required />
                </div>
                
                <div class="col-md-6 form-group">
                  <input type="password" class="form-control" id="password" name="password" placeholder="<?php echo _('Wachtwoord'); ?>*" required />
                </div>

                <div class="col-md-6 form-group">
                  <input type="password" class="form-control" id="password2" name="password2" placeholder="<?php echo _('Herhaal uw wachtwoord'); ?>*" required />
                </div>
                <div class="form-group mt-lg-3">
                  <button type="submit" class="main_btn"><?php echo _('Registreer'); ?></button>
                </div>

              </form>
          </div>
        </div>
      </div>
      <div>
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