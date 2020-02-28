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
              <h4><?php echo _($footer->getBiscuitOfTheWeekTitle()); ?></h4>
              <ul>
                <?php echo $footer->getBiscuitOfTheWeek(); ?>
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
              <div class="form-wrap" id="mc_embed_signup">
                <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                  method="get" class="form-inline">
                  <input class="form-control" name="EMAIL" placeholder="Your Email Address" onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'Your Email Address '" required="" type="email">
                  <button class="click-btn btn btn-default"><?php echo _('Abonneer') ?></button>
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
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved</p>
            <div class="col-lg-4 col-md-12 footer-social">
              <a href="#"><i class="fa fa-facebook"></i></a>
              <a href="#"><i class="fa fa-twitter"></i></a>
              <a href="#"><i class="fa fa-dribbble"></i></a>
              <a href="#"><i class="fa fa-behance"></i></a>
            </div>
          </div>
        </div>
      </footer>