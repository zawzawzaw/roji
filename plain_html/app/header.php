  <div id="page-preloader">
    <div id="page-preloader-bg"></div>
    <div id="page-preloader-center">
      <?php require_once('../skin/roji_theme/images/preloader.svg'); ?>
    </div>
  </div>

  <header id="desktop-header" class="visible-md visible-lg">
    <div class="container-fluid has-breakpoint">
      <div class="row">
        <div class="col-md-2">

          <div id="desktop-header-logo-container">
            <a href="index.php" id="desktop-header-logo"></a>
          </div> <!-- desktop-header-logo-container -->

        </div>
        <div class="col-md-10">

          <div id="desktop-header-menu-container">
            <div id="desktop-header-menu">
              <nav>
                <ul>
                  <li><a href="about.php">About</a></li>
                  <li><a href="shop.php">Shop</a></li>
                  <li><a href="our-teas.php">Our Teas</a></li>

                  <!-- CLASS HAS TO BE ADDED BY THE JAVASCRIPT -->
                  <li class="submenu-version">
                    <a href="gifts.php">Gifts</a>
                    <ul>
                      <li><a href="gifts.php">Tin</a></li>
                    </ul>
                  </li>

                  <li><a href="blog.php">Blog</a></li>
                  <li><a href="faq.php">FAQ</a></li>
                  <li><a href="contact.php">Contact</a></li>
                </ul>
              </nav>
            </div> <!-- desktop-header-menu -->

            <div id="desktop-header-login-menu">
              <a href="login.php">Join/log in</a>
            </div> <!-- desktop-header-login-menu -->

            <div id="desktop-header-currency-menu">
              <div class="manic-dropdown">
                <select name="desktop-header-currency-select" id="desktop-header-currency-select">
                  <option value="sgd">SGD</option>
                  <option value="usd">USD</option>
                  <option value="yen">YEN</option>
                </select>
              </div>
            </div> <!-- desktop-header-currency-menu -->

            <div id="desktop-header-cart-menu">

              <div id="desktop-header-cart-btn">
                <span class="cart-btn-value">222</span>
              </div>

              <div id="desktop-header-cart-expand-container">

              </div>
            </div> <!-- desktop-header-cart-menu -->

          </div> <!-- desktop-header-menu-container -->
          

        </div>
      </div>
    </div>
  </header>

  <header id="mobile-header" class="visible-sm visible-xs">
  </header>

  <div id="page-wrapper">
    <div id="page-wrapper-content">

      <div id="desktop-header-spacer"></div>
      <div id="mobile-header-spacer"></div>

      <!-- inside #page-wrapper-content -->