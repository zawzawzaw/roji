      <!-- inside #page-wrapper-content -->


    </div> <!-- #page-wrapper-content -->
  </div> <!-- #page-wrapper -->


  <!--
     _____ ___   ___ _____ _____ ____
    |  ___/ _ \ / _ \_   _| ____|  _ \
    | |_ | | | | | | || | |  _| | |_) |
    |  _|| |_| | |_| || | | |___|  _ <
    |_|   \___/ \___/ |_| |_____|_| \_\

  -->
  
  <footer id="desktop-footer" class="visible-md visible-lg">
    <div class="container-fluid has-breakpoint">
      <div class="row">
        <div class="col-md-5">
          <div id="desktop-footer-copyright">
            <p>Roji by gryphon tea company &copy; 2017</p>
          </div>
        </div>
        <div class="col-md-7">

          <div id="desktop-footer-links">
            <ul>
              <?php wp_nav_menu(array(
                'container' => false,                           // remove nav container
                'menu' => 'Footer Menu',                       // nav name
                'menu_class' => '',                             // adding custom nav class
                'theme_location' => 'footer-menu',             // where it's located in the theme
                'before' => '',                                 // before the menu
                'after' => '',                                  // after the menu
                'link_before' => '',                            // before each link
                'link_after' => '',                             // after each link
                'depth' => 0,                                   // limit the depth of the nav
                'fallback_cb' => ''                             // fallback function (if there is one)
              )); ?>                    
            </ul>
          </div> <!-- desktop-footer-links -->

        </div>
      </div>
    </div>
  </footer>

  <footer id="mobile-footer" class="visible-sm visible-xs">
    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12">
          <div id="mobile-footer-copyright">
            <p>Roji by gryphon tea company &copy; 2017</p>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!--
     ____  _______     _______ _     ___  ____  __  __ _____ _   _ _____   __  __  ___  ____  _____
    |  _ \| ____\ \   / / ____| |   / _ \|  _ \|  \/  | ____| \ | |_   _| |  \/  |/ _ \|  _ \| ____|
    | | | |  _|  \ \ / /|  _| | |  | | | | |_) | |\/| |  _| |  \| | | |   | |\/| | | | | | | |  _|
    | |_| | |___  \ V / | |___| |__| |_| |  __/| |  | | |___| |\  | | |   | |  | | |_| | |_| | |___
    |____/|_____|  \_/  |_____|_____\___/|_|   |_|  |_|_____|_| \_| |_|   |_|  |_|\___/|____/|_____|

  -->

  <link rel="stylesheet" type="text/css" href="<?php echo THEMEROOT; ?>/assets/css/style.css">
      
  <script type="text/javascript" src="<?php echo THEMEROOT; ?>/assets/js/manic-polyfill.js"></script>
  <script type="text/javascript" src="<?php echo THEMEROOT; ?>/assets/libs/jquery-other/jquery-1.9.1.min.js"></script>
  <script type="text/javascript" src="<?php echo THEMEROOT; ?>/assets/libs/jquery-other/jquery.mousewheel.min.js"></script>
  <script type="text/javascript" src="<?php echo THEMEROOT; ?>/assets/libs/misc-js/mobile-detect.js"></script>
  <script type="text/javascript" src="<?php echo THEMEROOT; ?>/assets/libs/misc-js/preloadjs-0.4.0.min.js"></script>
  <script type="text/javascript" src="<?php echo THEMEROOT; ?>/assets/libs/gsap/src/minified/TweenMax.min.js"></script>
  <script type="text/javascript" src="<?php echo THEMEROOT; ?>/assets/libs/gsap/src/minified/jquery.gsap.min.js"></script>
  <script type="text/javascript" src="<?php echo THEMEROOT; ?>/assets/libs/gsap/src/minified/easing/EasePack.min.js"></script>
  <script type="text/javascript" src="<?php echo THEMEROOT; ?>/assets/libs/gsap/src/minified/plugins/ScrollToPlugin.min.js"></script>
  <script type="text/javascript" src="<?php echo THEMEROOT; ?>/assets/libs/scrollmagic/scrollmagic/minified/ScrollMagic.min.js"></script>
  <script type="text/javascript" src="<?php echo THEMEROOT; ?>/assets/libs/scrollmagic/scrollmagic/minified/plugins/animation.gsap.min.js"></script>
  <script type="text/javascript" src="<?php echo THEMEROOT; ?>/assets/libs/scrollmagic/scrollmagic/minified/plugins/debug.addIndicators.min.js"></script>
  <script type="text/javascript" src="<?php echo THEMEROOT; ?>/assets/libs/slick-carousel/slick/slick.min.js"></script>
  <script type="text/javascript" src="<?php echo THEMEROOT; ?>/assets/libs/gryphon/jquery.gryphon-mobile-wp-sidebar.js"></script>
  
  <!-- Google Closure -->
  <script type="text/javascript" src="<?php echo THEMEROOT; ?>/assets/libs/google-closure/closure-library/closure/goog/base.js"></script>
  <script type="text/javascript" src="<?php echo THEMEROOT; ?>/assets/js/google-closure-dependency-list.js"></script>
  <script type="text/javascript">
    goog.require('roji.page.Default');

    jQuery(document).ready(function($) {
      page = new roji.page.Default({});    
    });
  </script>
  <?php wp_footer(); ?>
</body>
</html>