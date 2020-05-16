<!DOCTYPE html>
<html lang="en">

<?php
   require_once 'snippets/head.html';
?>

    <body>
      <!--================Header Menu Area =================-->
      <?php
        require_once 'snippets/header.html';
      ?>
      
      <div class="container">
          <h1><?php echo _('Beleef') ?></h1>
          <p><?php echo _('Ontdek de beste koeken in goed gezelschap van vrienden en onder professionele begeleiding van Arthur Benbassat, een gekende sommelier uit regio Antwerpen. Als specialist in koeken laten we je kennis maken met een selectie van de beste koeken. Ook de basistechnieken van koeken degusteren komen aan bod!') ?></p>
          <p><?php echo _('We laten al uw zintuigen het werk doen én we zorgen voor een geweldige ervaring!') ?></p>
          <h2><?php echo _('Eerstvolgende degustatie') ?></h2>
          <p><?php echo _('De eerstvolgende wijndegustatie gaat door in de Uitbreidingstraat 84 te Berchem op 14 september. Om ten volle te kunnen genieten van deze avond zijn de plaatsen beperkt tot max. 12 personen. Het is 35 euro per persoon. Schrijf je dus snel in!') ?></p>
          <form action="experience/sign-up.php" class="row contact_form" method="POST">

            <div class="col-md-2 form-group">
              <label for="first_name" class="required"><?php echo _('Voornaam'); ?>:</label>
            </div>
            <div class="col-md-10 form-group">
              <input type="text" class="form-control" id="first_name" name="first_name" placeholder="<?php echo _('Voornaam'); ?>*" required />
            </div>

            <div class="col-md-2 form-group">
              <label for="last_name" class="required"><?php echo _('Achternaam'); ?>:</label>
            </div>
            <div class="col-md-10 form-group">
              <input type="text" class="form-control" id="last_name" name="last_name" placeholder="<?php echo _('Achternaam'); ?>*" required />
            </div>

            <div class="col-md-2 form-group">
              <label for="email" class="required"><?php echo _('Email Adres'); ?></label>
            </div>
            <div class="col-md-10 form-group">
              <input type="email" class="form-control" id="email" name="email" placeholder="<?php echo _('Email Adres'); ?>*" required />
            </div>

            <div class="form-group mt-lg-3">
              <button type="submit" class="main_btn"><?php echo _('Schrijf je in'); ?></button>
            </div>
          </form>
      </div>

          <!--================ start footer Area  =================-->
      <?php
        require_once 'snippets/footer.php';
      ?>
            <!--================ End footer Area  =================-->

            <!-- Optional JavaScript -->
            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <?php
        require_once 'snippets/js.html';
      ?>
  </body>

</html>