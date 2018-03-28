<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <link rel="shortcut icon" href="<?php echo THEMEROOT; ?>/assets/images/favicon.ico" type="image/x-icon" />  
  <?php if(is_home()): ?>
  <title><?php bloginfo('name'); ?></title>
  <?php else: ?>
  <?php global $post ?>
  <title><?php echo get_the_title($post->ID) . ' - Roji Cha'; ?></title>
  <?php endif; ?>
  <meta name="description" content="">

  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, minimal-ui"/>

  <link rel="stylesheet" type="text/css" href="<?php echo THEMEROOT; ?>/assets/css/critical_style.css">
  
  <!--[if lt IE 9]>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
  <![endif]-->

  <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Montserrat:400,500|Open+Sans:300,400,400i,600|Raleway:300,600">

  <?php wp_head(); ?>


</head>

<body class="min-height-version min-height-mobile-version">
  <script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '181822275684181',
      xfbml      : true,
      version    : 'v2.9'
    });
    FB.AppEvents.logPageView();
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>

    <!--
     ____  ____  _____ _     ___    _    ____  _____ ____
    |  _ \|  _ \| ____| |   / _ \  / \  |  _ \| ____|  _ \
    | |_) | |_) |  _| | |  | | | |/ _ \ | | | |  _| | |_) |
    |  __/|  _ <| |___| |__| |_| / ___ \| |_| | |___|  _ <
    |_|   |_| \_\_____|_____\___/_/   \_\____/|_____|_| \_\

  -->


  <div id="page-preloader">
    <div id="page-preloader-bg"></div>
    <div id="page-preloader-center">
      <img src="<?php echo THEMEROOT; ?>/assets/images/preloader.svg" alt="">    
    </div>
  </div>

  <!--
     ____  _____ ____  _  _______ ___  ____    _   _ _____    _    ____  _____ ____
    |  _ \| ____/ ___|| |/ /_   _/ _ \|  _ \  | | | | ____|  / \  |  _ \| ____|  _ \
    | | | |  _| \___ \| ' /  | || | | | |_) | | |_| |  _|   / _ \ | | | |  _| | |_) |
    | |_| | |___ ___) | . \  | || |_| |  __/  |  _  | |___ / ___ \| |_| | |___|  _ <
    |____/|_____|____/|_|\_\ |_| \___/|_|     |_| |_|_____/_/   \_\____/|_____|_| \_\

  -->

  <header id="desktop-header" class="visible-md visible-lg">
    <div class="container-fluid has-breakpoint">
      <div class="row">
        <div class="col-md-2">

          <div id="desktop-header-logo-container">
            <a href="http://www.rojicha.com" id="desktop-header-logo"></a>
          </div> <!-- desktop-header-logo-container -->

        </div>
        <div class="col-md-10">

          <div id="desktop-header-menu-container">
            <div id="desktop-header-menu">
              <nav>
                <?php wp_nav_menu(array(
                  'container' => false,                           // remove nav container
                  'menu' => 'Desktop Menu',                       // nav name
                  'menu_class' => '',                             // adding custom nav class
                  'theme_location' => 'desktop-menu',             // where it's located in the theme
                  'before' => '',                                 // before the menu
                  'after' => '',                                  // after the menu
                  'link_before' => '',                            // before each link
                  'link_after' => '',                             // after each link
                  'depth' => 0,                                   // limit the depth of the nav
                  'fallback_cb' => ''                             // fallback function (if there is one)
                )); ?>              
              </nav>
            </div> <!-- desktop-header-menu -->

            <div id="desktop-header-login-menu">
              <a href="http://www.rojicha.com/customer/account/login">Join/log in</a>
            </div> <!-- desktop-header-login-menu -->

            <!-- <div id="desktop-header-currency-menu">
              <div class="manic-dropdown">
                <select name="desktop-header-currency-select" id="desktop-header-currency-select">
                  <option value="sgd">SGD</option>
                  <option value="usd">USD</option>
                  <option value="yen">YEN</option>
                </select>
              </div>
            </div> --> <!-- desktop-header-currency-menu -->

            <div id="desktop-header-cart-menu">

              <div id="desktop-header-cart-btn">
                <a href="http://www.rojicha.com/checkout/cart">
                  <span class="cart-btn-value">0</span>
                </a>
              </div>

              <div id="desktop-header-cart-expand-container">

              </div>
            </div> <!-- desktop-header-cart-menu -->

          </div> <!-- desktop-header-menu-container -->
          

        </div>
      </div>
    </div>
  </header> <!-- desktop-header -->

  <!--
     __  __  ___  ____ ___ _     _____   _   _ _____    _    ____  _____ ____
    |  \/  |/ _ \| __ )_ _| |   | ____| | | | | ____|  / \  |  _ \| ____|  _ \
    | |\/| | | | |  _ \| || |   |  _|   | |_| |  _|   / _ \ | | | |  _| | |_) |
    | |  | | |_| | |_) | || |___| |___  |  _  | |___ / ___ \| |_| | |___|  _ <
    |_|  |_|\___/|____/___|_____|_____| |_| |_|_____/_/   \_\____/|_____|_| \_\

  -->


  <header id="mobile-header" class="visible-sm visible-xs">

    <div class="mobile-header-bg"></div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-3">

          <div id="mobile-menu-btn-container">
            <div id="mobile-menu-btn">
              <span class="line-01"></span>
              <span class="line-02"></span>
              <span class="line-03"></span>
            </div>
          </div>
          
        </div>
        <div class="col-xs-6">

          <div id="mobile-header-logo-container">
            <a href="http://www.rojicha.com" id="mobile-header-logo"></a>
          </div>

        </div>
        <div class="col-xs-3">

          <div id="mobile-header-cart-container">
            <a href="http://www.rojicha.com/checkout/cart" id="mobile-header-cart-btn">
              <span class="cart-btn-value">0</span>
            </a>
          </div>

        </div>

      </div> <!-- row -->
    </div> <!-- container-fluid -->
  </header> <!-- mobile-header -->

  <!--
     __  __  ___  ____ ___ _     _____   _   _ _____    _    ____  _____ ____    _______  ______   _    _   _ ____
    |  \/  |/ _ \| __ )_ _| |   | ____| | | | | ____|  / \  |  _ \| ____|  _ \  | ____\ \/ /  _ \ / \  | \ | |  _ \
    | |\/| | | | |  _ \| || |   |  _|   | |_| |  _|   / _ \ | | | |  _| | |_) | |  _|  \  /| |_) / _ \ |  \| | | | |
    | |  | | |_| | |_) | || |___| |___  |  _  | |___ / ___ \| |_| | |___|  _ <  | |___ /  \|  __/ ___ \| |\  | |_| |
    |_|  |_|\___/|____/___|_____|_____| |_| |_|_____/_/   \_\____/|_____|_| \_\ |_____/_/\_\_| /_/   \_\_| \_|____/

  -->

  <header id="mobile-header-expanded">
    <div class="mobile-header-spacer"></div>
    <div id="mobile-header-account-container">

      <div class="container-fluid">
        <div class="row">
          <div class="col-xs-12">

            <div id="mobile-header-account-single-link">
              <a href="http://www.rojicha.com/customer/account/login">Join / log in</a>
            </div> <!-- mobile-header-account-single-link -->

            <div id="mobile-header-account-menu" style="display: none;">
              <nav>
                <ul>
                  <li><a href="javascript:void(0);">My Account</a></li>
                  <li><a href="javascript:void(0);">Address Book</a></li>
                  <li><a href="javascript:void(0);">Order History</a></li>
                  <li><a href="javascript:void(0);">Gift Card<span class="account-menu-value">$10.00</span></a></li>
                  <li><a href="javascript:void(0);">Rebates<span class="account-menu-value">$17.00</span></a></li>
                  <li><a href="javascript:void(0);">Friend Referral</a></li>
                  <li><a href="javascript:void(0);">Log out</a></li>
                </ul>
              </nav>
            </div> <!-- mobile-header-account-menu -->


          </div>
        </div>
      </div>
      
    </div> <!-- mobile-header-account-container -->

    <div id="mobile-header-menu-container">
      <div class="container-fluid">
        <div class="row">
          <div class="col-xs-12">

            <div id="mobile-header-menu">
              <nav>
                <ul>

                  <li><a href="http://www.rojicha.com/about">About</a></li>

                  <!-- currency converter functionality pending -->
                  <li class="currency-version">
                    <a href="http://www.rojicha.com/shop.html">Shop</a>

                    <!-- <div id="mobile-header-currency-menu">
                      <div class="dropdown">
                        <select name="mobile-header-currency-select" id="mobile-header-currency-select">
                          <option value="sgd">SGD</option>
                          <option value="usd">USD</option>
                          <option value="yen">YEN</option>
                        </select>
                      </div>
                    </div> --> <!-- mobile-header-currency-menu -->

                  </li>

                  <li><a href="http://www.rojicha.com/our-teas">Our Teas</a></li>

                  <!-- CLASS HAS TO BE ADDED BY THE JAVASCRIPT -->
                  <li class="submenu-version">
                    <a href="http://www.rojicha.com/gifts.html">Gifts</a>
                    <ul>
                      <li><a href="http://www.rojicha.com/gifts.html">Tin</a></li>
                    </ul>
                  </li>
                  <li><a href="http://www.rojicha.com/blog">Blog</a></li>
                  <li><a href="http://www.rojicha.com/chaseki-members-program">CHASEKI MEMBERS</a></li>
                  <li><a href="http://www.rojicha.com/contact">Contact</a></li>
                  <li><a href="http://www.rojicha.com/faq">FAQ</a></li>
                  <li><a href="http://www.rojicha.com/shipping-info">shipping info</a></li>
                  <li><a href="http://www.rojicha.com/privacy-policy">Privacy policy</a></li>
                  <li><a href="http://www.rojicha.com/terms-of-use">Terms of Use</a></li>

                </ul>
              </nav>
            </div>


          </div>
        </div>
      </div>


    </div> <!-- mobile-header-menu-container -->
        


  </header> <!-- mobile-header-expanded -->

  <div id="page-wrapper">
    <div id="page-wrapper-content">

      <div class="desktop-header-spacer visible-md visible-lg"></div>
      <div class="mobile-header-spacer visible-sm visible-xs"></div>

      <!-- inside #page-wrapper-content -->

      <article id="page-blog-title-section" class="hidden-xs hidden-sm">
        <div class="container-fluid has-breakpoint">
          <div class="row">
            <div class="col-md-3 col-sm-1 col-xs-0"></div>
            <div class="col-md-9 col-sm-10 col-xs-12">
              <div id="page-blog-title">
                <h1>The Roji Journal.</h1>
              </div> <!-- page-our-teas-title -->
            </div>
          </div>
        </div>
      </article>

      <div id="trigger-sticky-sidebar"></div>
      <div id="mobile-blog-sidebar" class="visible-xs visible-sm">
        <div id="mobile-blog-button-container">
          <div class="mobile-blog-button" id="gryphon-blog-categories-button">Categories</div>
          <div class="mobile-blog-button" id="gryphon-blog-tag-button">Tags</div>    
        </div>

        <div id="mobile-blog-tag-container" style="">
          <?php the_widget( 'WP_Widget_Tag_Cloud' ); ?>  
        </div>

        <div id="mobile-blog-category-container">
          <?php the_widget( 'WP_Widget_Categories' ); ?>  
        </div>
      </div>      