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
      <?php require_once('../skin/roji_theme/images/preloader.svg'); ?>
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
            <a href="index.php" id="mobile-header-logo"></a>
          </div>

        </div>
        <div class="col-xs-3">

          <div id="mobile-header-cart-container">
            <a href="checkout-a.php" id="mobile-header-cart-btn">
              <span class="cart-btn-value">222</span>
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
              <a href="login.php">Join / log in</a>
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

                  <li><a href="about.php">About</a></li>

                  <!-- currency converter functionality pending -->
                  <li class="currency-version">
                    <a href="shop.php">Shop</a>

                    <div id="mobile-header-currency-menu">
                      <div class="dropdown">
                        <select name="mobile-header-currency-select" id="mobile-header-currency-select">
                          <option value="sgd">SGD</option>
                          <option value="usd">USD</option>
                          <option value="yen">YEN</option>
                        </select>
                      </div>
                    </div> <!-- mobile-header-currency-menu -->

                  </li>

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