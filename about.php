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
        <section class="banner_area">
          <div class="banner_inner d-flex align-items-center">
            <div class="container">
              <div class="banner_content d-md-flex justify-content-between align-items-center">
                <div class="mb-3 mb-md-0">
                  <h2><?php echo _('Over ons') ?></h2>
                </div>
                <div class="page_link">
                  <a href="index.php">Home</a>
                  <a href="about.php"><?php echo _('Over ons') ?></a>
                </div>
              </div>
            </div>
          </div>
        </section>

        <div class="container">
          <br>
          <p>
          <?php echo _('Dit is het bedrijf opgericht door Arthur Benbassat die 17 jaar oud is en graag sporten, IT en scouts speelt. Hij zit in het laatste jaar van ICT bij Kta Da Vinci in Antwerpen.') ?>
          </p>
          <p><?php echo _('Bij Benbassat: koekenshop verkopen we koekjes van kwaliteitsmerken zoals Lotus, BN en Delacre. Dit omvat zowel standaardkoekjes als exclusieve. Gemengde pakketten zijn beschikbaar om te kopen. . Vanaf het begin hadden we maar één doel: je gelukkig maken. Wij zijn een van de meest professionele bedrijven met een obsessieve focus op klanttevredenheid die deskundig advies geven. Met een snelle levering en onze mooie kwaliteit hopen we dat we je gelukkig kunnen maken.') ?>
         </p>
            <p><?php echo _('Dit is een GIP, dus het is niet mogelijk om effectief te bestellen.') ?></p>
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