<!DOCTYPE html>
<html lang="en">

<?php
require_once 'snippets/head.html';
require_once 'classes/shopAPI.php';
if (!isset($_SESSION['loggedin'])) {
  header('Location: login.php');
  exit();
}
$api = new ShopAPI();

?>

<body>
  <?php
  require_once 'snippets/header.html';
  
  $customer = $api->getCustomer($_SESSION['id']);
  ?>
  <div class="container">
    <h1>
      <?php echo _('Mijn profiel') ?>
    </h1>
    
    <p>
      <?php echo _('Bevestigde e-mail: ') ?>
      <?php
      
      if ($customer->verified == 0) {
        echo _('Nee, controleer je mail');
      } else {
        echo _('Ja');
      }
      ?>
    </p>
    <a href="logout.php"><?php echo _('Uitloggen') ?></a>
    <hr>
    <form class="row contact_form" action="login/changeDetails.php" method="POST">

      <div class="col-md-2 form-group">
        <label for="first_name" class="required"><?php echo _('Voornaam'); ?>:</label>
      </div>
      <div class="col-md-10 form-group">
        <input type="text" class="form-control" id="first_name" name="first_name" placeholder="<?php echo _('Voornaam'); ?>*" value="<?php echo $customer->first_name ?>"  required />
      </div>

      <div class="col-md-2 form-group">
        <label for="last_name" class="required"><?php echo _('Achternaam'); ?>:</label>
      </div>
      <div class="col-md-10 form-group">
        <input type="text" class="form-control" id="last_name" name="last_name" placeholder="<?php echo _('Achternaam'); ?>*" value="<?php echo $customer->last_name ?>" required />
      </div>

      <div class="col-md-2 form-group">
        <label for="company"><?php echo _('Bedrijfsnaam'); ?>:</label>
      </div>
      <div class="col-md-10 form-group">
        <input type="text" class="form-control" id="company" name="company" placeholder="<?php echo _('Bedrijfsnaam'); ?>" value="<?php echo $customer->organization_name ?>" />
      </div>

      <div class="col-md-2 form-group">
        <label for="phone"><?php echo _('Telefoonnummer'); ?>:</label>
      </div>
      <div class="col-md-10 form-group">  
        <input type="text" class="form-control" id="phone" name="phone" placeholder="<?php echo _('Telefoonnummer'); ?>" value="<?php echo $customer->phone_number ?>" />
      </div>

      <div class="col-md-2 form-group">
        <label for="email" class="required"><?php echo _('Email Adres'); ?></label>
      </div>
      <div class="col-md-10 form-group">
        <input type="email" class="form-control" id="email" name="email" placeholder="<?php echo _('Email Adres'); ?>*" value="<?php echo $customer->email ?>" required />
      </div>

      <div class="col-md-2 form-group p_star">
        <label for="country" class="required"><?php echo _('Land'); ?></label>
      </div>
      <div class="col-md-10 form-group">
        <select class="country_select" id="country" name="country">
          <option value="BE"><?php echo _('België'); ?></option>
          <option value="NL"><?php echo _('Nederland'); ?></option>
        </select>
      </div>

      <div class="col-md-2 form-group">
        <label for="address1" class="required"><?php echo _('Adres lijn 1'); ?></label>
      </div>
      <div class="col-md-10 form-group">
        <input type="text" class="form-control" id="address1" name="address1" placeholder="<?php echo _('Adres lijn 1'); ?>*" value="<?php echo $customer->address_line1 ?>" required />
      </div>

      <div class="col-md-2 form-group">
        <label for="address2"><?php echo _('Adres lijn 2'); ?></label>
      </div>
      <div class="col-md-10 form-group">
        <input type="text" class="form-control" id="address2" name="address2" placeholder="<?php echo _('Adres lijn 2'); ?>" value="<?php echo $customer->address_line2 ?>" />
      </div>

      <div class="col-md-2 form-group">
        <label for="city" class="required"><?php echo _('Stad/Gemeente') ?></label>
      </div>
      <div class="col-md-10 form-group">
        <input type="text" class="form-control" id="city" name="city" placeholder="<?php echo _('Stad/Gemeente') ?>*" value="<?php echo $customer->city ?>" required />
      </div>

      <div class="col-md-2 form-group">
        <label for="postal_code" class="required"><?php echo _('Postcode'); ?></label>
      </div>
      <div class="col-md-10 form-group">
        <input type="text" class="form-control" id="postal_code" name="postal_code" placeholder="<?php echo _('Postcode'); ?>*" value="<?php echo $customer->postal_code ?>" required />
      </div>
      <input type="hidden"  name="customerId" value="<?php echo $_SESSION['id'] ?>">
      <div class="form-group mt-lg-3">
        <button type="submit" class="main_btn"><?php echo _('Verander uw gegevens'); ?></button>
      </div>

    </form>
    <hr>
     <?php 
      if (array_key_exists('error', $_GET)){
          echo "<p class='error'>" . $_GET['error'] . "</p>";
        } 
    ?>
    <form class="row contact_form" action="login/changePassword.php" method="POST">
      <div class="col-md-2 form-group">
        <label for="oldPassword" class="required"><?php echo _('Oud wachtwoord'); ?></label>
      </div>
      <div class="col-md-10 form-group">
        <input type="password" class="form-control" id="password" name="oldPassword" placeholder="<?php echo _('Oud wachtwoord'); ?>*" required />
      </div>

      <div class="col-md-2 form-group">
        <label for="newPassword" class="required"><?php echo _('Nieuw wachtwoord'); ?></label>
      </div>
      <div class="col-md-10 form-group">
        <input type="text" class="form-control" id="postal_code" name="newPassword" placeholder="<?php echo _('Nieuw wachtwoord'); ?>*" required />
      </div>

      <input type="hidden"  name="customerId" value="<?php echo $_SESSION['id'] ?>">

      <div class="form-group mt-lg-3">
        <button type="submit" class="main_btn"><?php echo _('Verander uw wachtwoord'); ?></button>
      </div>
    </form>
  </div>

  <?php
  require_once 'snippets/footer.php';

  require_once 'snippets/js.html';

  ?>
</body>

</html>