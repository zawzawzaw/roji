  <!-- INSERT GOOGLE ANALYTICS HERE -->


  <!-- INSERT FONTS HERE -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Open+Sans:300,400,400i,600|Raleway:300,600" rel="stylesheet">


  <?php $is_debug = true; ?>

  <?php if ($is_debug == true): ?>

    <!--
       ____  _______     _______ _     ___  ____  __  __ _____ _   _ _____   __  __  ___  ____  _____
      |  _ \| ____\ \   / / ____| |   / _ \|  _ \|  \/  | ____| \ | |_   _| |  \/  |/ _ \|  _ \| ____|
      | | | |  _|  \ \ / /|  _| | |  | | | | |_) | |\/| |  _| |  \| | | |   | |\/| | | | | | | |  _|
      | |_| | |___  \ V / | |___| |__| |_| |  __/| |  | | |___| |\  | | |   | |  | | |_| | |_| | |___
      |____/|_____|  \_/  |_____|_____\___/|_|   |_|  |_|_____|_| \_| |_|   |_|  |_|\___/|____/|_____|

    -->

    <link rel="stylesheet" type="text/css" href="../skin/roji_theme/css/style.css">
        
    <script type="text/javascript" src="../skin/roji_theme/js/manic-polyfill.js"></script>
    <script type="text/javascript" src="../skin/roji_theme/libs/jquery-other/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="../skin/roji_theme/libs/jquery-other/jquery.mousewheel.min.js"></script>
    <script type="text/javascript" src="../skin/roji_theme/libs/misc-js/mobile-detect.js"></script>
    <script type="text/javascript" src="../skin/roji_theme/libs/misc-js/preloadjs-0.4.0.min.js"></script>
    <script type="text/javascript" src="../skin/roji_theme/libs/gsap/src/minified/TweenMax.min.js"></script>
    <script type="text/javascript" src="../skin/roji_theme/libs/gsap/src/minified/jquery.gsap.min.js"></script>
    <script type="text/javascript" src="../skin/roji_theme/libs/gsap/src/minified/easing/EasePack.min.js"></script>
    <script type="text/javascript" src="../skin/roji_theme/libs/gsap/src/minified/plugins/ScrollToPlugin.min.js"></script>
    <script type="text/javascript" src="../skin/roji_theme/libs/scrollmagic/scrollmagic/minified/ScrollMagic.min.js"></script>
    <script type="text/javascript" src="../skin/roji_theme/libs/scrollmagic/scrollmagic/minified/plugins/animation.gsap.min.js"></script>
    <script type="text/javascript" src="../skin/roji_theme/libs/scrollmagic/scrollmagic/minified/plugins/debug.addIndicators.min.js"></script>
    <script type="text/javascript" src="../skin/roji_theme/libs/slick-carousel/slick/slick.min.js"></script>


    <!-- videojs -->
    <script type="text/javascript" src="../skin/roji_theme/libs/videojs_new/ie8/videojs-ie8.min.js"></script>
    <script type="text/javascript" src="../skin/roji_theme/libs/videojs_new/video.min.js"></script>
    <script>
      videojs.options.flash.swf = "../skin/roji_theme/libs/videojs_new/video-js.swf";
    </script>
    
    <!-- Google Closure -->
    <script type="text/javascript" src="../skin/roji_theme/libs/google-closure/closure-library/closure/goog/base.js"></script>
    <script type="text/javascript" src="../skin/roji_theme/js/google-closure-dependency-list.js"></script>
    <script type="text/javascript">
      goog.require('roji.page.Default');

      jQuery(document).ready(function($) {
        page = new roji.page.Default({});    
      });
    </script>

  <?php else: ?>

    <!--
        ___  ____ _____ ___ __  __ ___ __________ ____    __  __  ___  ____  _____
       / _ \|  _ \_   _|_ _|  \/  |_ _|__  / ____|  _ \  |  \/  |/ _ \|  _ \| ____|
      | | | | |_) || |  | || |\/| || |  / /|  _| | | | | | |\/| | | | | | | |  _|
      | |_| |  __/ | |  | || |  | || | / /_| |___| |_| | | |  | | |_| | |_| | |___
       \___/|_|    |_| |___|_|  |_|___/____|_____|____/  |_|  |_|\___/|____/|_____|

    -->

    <script type="text/javascript" src="../skin/roji_theme/js/minified/head.load.min.js"></script>
    <script type="text/javascript">

      var PAGE_LIBRARY        = "../skin/roji_theme/js/minified/page-libraries.min.js";
      var PAGE_JS             = "../skin/roji_theme/js/minified/page-default.min.js";
      var PAGE_CSS            = "../skin/roji_theme/css/style.css";
      
      head.load(PAGE_CSS);
      head.load(PAGE_LIBRARY, function() {

        window.videojs.options.flash.swf = "../skin/roji_theme/libs/videojs_new/video-js.swf";

        head.load(PAGE_JS, function() {
          window.page = new roji.page.Default({});
        });
      });
    </script>

  <?php endif; ?>


