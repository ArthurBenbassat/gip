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


  <!-- ================ contact section start ================= -->
  <section class="section_gap">
    <div class="container">
      <div class="d-none d-sm-block mb-5 pb-4">
        
        <div class="mapouter">
          <div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Uitbreidingstraat%2084&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.embedgooglemap.net/blog/nordvpn-coupon-code/"></a></div>
          <style>
            .mapouter {
              position: relative;
              text-align: right;
              height: 500px;
              width: 600px;
            }

            .gmap_canvas {
              overflow: hidden;
              background: none !important;
              height: 500px;
              width: 600px;
            }
          </style>
        </div>


        <div class="row">
          <div class="col-12" style="margin-top: 10%">
            <h2 class="contact-title"><?php echo _('Stuur een bericht of vraag') ?></h2>
          </div>
          <div class="col-lg-8 mb-4 mb-lg-0">
            <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
              <div class="row">
                <div class="col-12">
                  <div class="form-group">
                    <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" placeholder="<?php echo _('Bericht') ?>"></textarea>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <input class="form-control" name="name" id="name" type="text" placeholder="<?php echo _('Naam') ?>">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <input class="form-control" name="email" id="email" type="email" placeholder="<?php echo _('Email') ?>">
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-group">
                    <input class="form-control" name="subject" id="subject" type="text" placeholder="Enter Subject">
                  </div>
                </div>
              </div>
              <div class="form-group mt-lg-3">
                <button type="submit" class="main_btn"><?php echo _('Verstuur') ?></button>
              </div>
            </form>


          </div>

          <div class="col-lg-4">
            <div class="media contact-info">
              <span class="contact-info__icon"><i class="ti-home"></i></span>
              <div class="media-body">
                <h3>Uitbreidingstraat 84</h3>
                <p>Berchem, 2600</p>
              </div>
            </div>
            <div class="media contact-info">
              <span class="contact-info__icon"><i class="ti-tablet"></i></span>
              <div class="media-body">
                <h3><a href="tel:+32487641730">+32 487 64 17 30</a></h3>
                <p><?php echo _('Bel enkel tijdens de werkuren') ?></p>
              </div>
            </div>
            <div class="media contact-info">
              <span class="contact-info__icon"><i class="ti-email"></i></span>
              <div class="media-body">
                <h3><a href="mailto:arthur@benbassat.art">arthur@benbassat.art</a></h3>
                <p><?php echo _('Altijd beschikbaar!') ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>
  <!-- ================ contact section end ================= -->

  <!--================ start footer Area  =================-->
  <?php
  require_once('snippets/footer.php');
  ?>
  <!--================ End footer Area  =================-->

  <!--================Contact Success and Error message Area =================-->
  <div id="success" class="modal modal-message fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <i class="fa fa-close"></i>
          </button>
          <h2>Thank you</h2>
          <p>Your message is successfully sent...</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Modals error -->

  <div id="error" class="modal modal-message fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <i class="fa fa-close"></i>
          </button>
          <h2>Sorry !</h2>
          <p> Something went wrong </p>
        </div>
      </div>
    </div>
  </div>
  <!--================End Contact Success and Error message Area =================-->




  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <?php
  require_once('snippets/js.html');
  ?>
</body>

</html>