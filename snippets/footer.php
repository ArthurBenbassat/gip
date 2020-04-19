<?php 
require_once 'classes/footer.php'; 
$footer = new Footer();
?>
<footer class="footer-area section_gap">
        <div class="container">
          <div class="row">
            <div class="col-lg-2 col-md-6 single-footer-widget">
              <h4><?php echo _($footer->getPromotionTitle()); ?></h4>
              <ul>
                <?php echo $footer->getpromotionProducts(); ?>
              </ul>
            </div>
            <div class="col-lg-2 col-md-6 single-footer-widget">
              <h4><?php echo _($footer->getBrandOfTheMonthTitle()); ?></h4>
              <ul>
                <?php echo $footer->getBrandOfTheMonth(); ?>
              </ul>
            </div>
            <div class="col-lg-2 col-md-6 single-footer-widget">
              <h4><?php echo _($footer->getCategoryTitle()); ?></h4>
              <ul>
              <?php echo $footer->getCategories(); ?>
            </ul>
            </div>
            
            <div class="col-lg-2 col-md-6 single-footer-widget">
              <h4><?php echo _($footer->getBestSoldedTitle()); ?></h4>
              <ul>
                <?php echo $footer->getBestSolded(); ?>
              </ul>
            </div>
            <div class="col-lg-4 col-md-6 single-footer-widget">
              <h4><?php echo _('Nieuwsbrief') ?></h4>
              <p><?php echo _('Schrijf je in voor onze nieuwsbrief') ?></p>
              <div class="form-wrap" id="signup_newletter">
                <form action="newletter.php"
                  method="get" class="form-inline">
                  <input class="form-control" name="EMAIL" placeholder="<?php echo _('Jouw e-mailadres'); ?>" onfocus="this.placeholder = ''"
                    onblur="this.placeholder = '<?php echo _('Jouw e-mailadres'); ?>'" required="" type="email">
                  <button class="click-btn btn btn-default"><?php echo _('Abonneer') ?></button>
                  <div style="position: absolute; left: -5000px;">
                    <input name="newletterEmail" tabindex="-1" value="" type="text">
                  </div>
    
                  <div class="info"></div>
                </form>
              </div>
            </div>
          </div>
          <div class="footer-bottom row align-items-center">
            <p class="footer-text m-0 col-lg-8 col-md-12">
  Copyright &copy;<script>document.write(new Date().getFullYear());</script><?php echo _(' Alle rechten voorbehouden') ?></p>
            <div class="col-lg-4 col-md-12 footer-social">
              <a href="#"><i class="fa fa-facebook"></i></a>
              <a href="#"><i class="fa fa-twitter"></i></a>
              <a href="#"><i class="fa fa-dribbble"></i></a>
              <a href="#"><i class="fa fa-behance"></i></a>
            </div>
          </div>
        </div>
      </footer>