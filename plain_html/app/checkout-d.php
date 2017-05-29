<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
  <?php include 'head.php'; ?>
</head>

<body class="min-height-version">
  <?php include "header.php"; ?>

  <!--
     _____ ___ _____ _     _____
    |_   _|_ _|_   _| |   | ____|
      | |  | |  | | | |   |  _|
      | |  | |  | | | |___| |___
      |_| |___| |_| |_____|_____|

  -->


  <article id="page-checkout-title-section" class="visible-md visible-lg">
    <div class="container-fluid has-breakpoint">
      <div class="row">
        <div class="col-md-3">
        </div>
        <div class="col-md-9">
          <div id="page-checkout-title">
            <h1>Review your order.</h1>
          </div>
        </div>
      </div>
    </div>
  </article> <!-- page-checkout-title-section -->

  <!--
      ____ ___  _   _ _____ _____ _   _ _____
     / ___/ _ \| \ | |_   _| ____| \ | |_   _|
    | |  | | | |  \| | | | |  _| |  \| | | |
    | |__| |_| | |\  | | | | |___| |\  | | |
     \____\___/|_| \_| |_| |_____|_| \_| |_|

  -->

  <article id="page-checkout-content-section" class="visible-md visible-lg">

    <div id="page-checkout-content-section-bg">
      <div class="sidebar-bg"></div>
      <div class="content-bg"></div>
    </div>

    <div class="container-fluid has-breakpoint">
      <div class="row">
        <div class="col-md-2 col-tablet-landscape-1">

          <!--
             ____ ___ ____  _____ ____    _    ____
            / ___|_ _|  _ \| ____| __ )  / \  |  _ \
            \___ \| || | | |  _| |  _ \ / _ \ | |_) |
             ___) | || |_| | |___| |_) / ___ \|  _ <
            |____/___|____/|_____|____/_/   \_\_| \_\

          -->

          <div id="page-checkout-sidebar-width"></div>
          <div id="page-checkout-sidebar">

            <nav>
              <ul>
                <li><a href="checkout-a.php">1. Your Cart</a></li>
                <li><a href="checkout-c.php">2. Shipping & Billing</a></li>
                <li class="selected">3. Order Confirmation</li>
              </ul>
            </nav>

          </div> <!-- page-checkout-sidebar -->



        </div> <!-- col-md-2 -->
        <div class="col-md-10 col-tablet-landscape-11">


          <!--
              ____ ___  _   _ _____ _____ _   _ _____
             / ___/ _ \| \ | |_   _| ____| \ | |_   _|
            | |  | | | |  \| | | | |  _| |  \| | | |
            | |__| |_| | |\  | | | | |___| |\  | | |
             \____\___/|_| \_| |_| |_____|_| \_| |_|

          -->

          <div id="page-checkout-content-width"></div>
          <div id="page-checkout-content">

            <div id="page-confirmation-cart-container">
              <div id="page-confirmation-cart">

                <!--
                   _____  _    ____  _     _____
                  |_   _|/ \  | __ )| |   | ____|
                    | | / _ \ |  _ \| |   |  _|
                    | |/ ___ \| |_) | |___| |___
                    |_/_/   \_\____/|_____|_____|

                -->


                <div id="page-checkout-cart-table">

                  <div id="page-checkout-cart-table-header">
                    <div class="row">
                      <div class="col-md-2">
                        <h4 class="left-aligned">Product</h4>
                      </div>
                      <div class="col-md-4">
                        <h4 class="center-aligned">Description</h4>
                      </div>
                      <div class="col-md-2">
                        <h4 class="center-aligned">Unit Price</h4>
                      </div>
                      <div class="col-md-2">
                        <h4 class="center-aligned">Quantity</h4>
                      </div>
                      <div class="col-md-2">
                        <h4 class="center-aligned">Subtotal</h4>
                      </div>
                    </div>
                  </div> <!-- page-checkout-cart-table-header -->

                  <div id="page-checkout-cart-table-content">

                    <!--
                        ___  _
                       / _ \/ |
                      | | | | |
                      | |_| | |
                       \___/|_|

                    -->

                    <div class="page-checkout-cart-table-item">
                      <div class="row">
                        <div class="col-md-2">

                          <a href="product-detail.php" title="Momotaro" class="cart-item-image">
                            <div class="manic-image-container" data-scale-mode="show_all" data-horizontal-align="left">
                              <img src="" 
                                data-image-desktop="images_cms/cart/cart-image-01.png"
                                data-image-tablet="images_cms/cart/cart-image-01.png"
                                data-image-mobile="images_cms/cart/cart-image-01.png">
                            </div>
                          </a>

                        </div>
                        <div class="col-md-4">

                          <div class="cart-item-description">
                            <h2><a href="product-detail.php" title="Momotaro">Momotaro</a></h2>
                            <h3>ももたろう</h3>
                            <p>Japanese Sencha with White Peach</p>
                          </div>

                        </div>
                        <div class="col-md-2">

                          <div class="cart-item-value">$16.90</div>

                        </div>
                        <div class="col-md-2">

                          <div class="cart-item-value">1</div>

                        </div>
                        <div class="col-md-2">

                          <div class="cart-item-value">$33.80</div>
                          
                        </div>
                        
                      </div>
                    </div>

                    <!--
                        ___ ____
                       / _ \___ \
                      | | | |__) |
                      | |_| / __/
                       \___/_____|

                    -->

                    <div class="page-checkout-cart-table-item">
                      <div class="row">
                        <div class="col-md-2">

                          <a href="product-detail.php" title="Momotaro" class="cart-item-image">
                            <div class="manic-image-container" data-scale-mode="show_all" data-horizontal-align="left">
                              <img src="" 
                                data-image-desktop="images_cms/cart/cart-image-02.png"
                                data-image-tablet="images_cms/cart/cart-image-02.png"
                                data-image-mobile="images_cms/cart/cart-image-02.png">
                            </div>
                          </a>

                        </div>
                        <div class="col-md-4">

                          <div class="cart-item-description">
                            <h2><a href="product-detail.php" title="Momotaro">Koku Yuzu Kukicha</a></h2>
                            <h3>濃ゆず茎茶</h3>
                            <p>Japanese Twig Tea with Kochi Yuzu</p>
                          </div>

                        </div>
                        <div class="col-md-2">

                          <div class="cart-item-value">$16.90</div>

                        </div>
                        <div class="col-md-2">

                          <div class="cart-item-value">2</div>

                        </div>
                        <div class="col-md-2">

                          <div class="cart-item-value">$33.80</div>
                          
                        </div>
                      </div>
                    </div>

                  </div> <!-- page-checkout-cart-table-content -->

                </div> <!-- page-checkout-cart-table -->

                <div id="page-checkout-cart-middle">
                  <div class="row">
                    <div class="col-md-6">
                      <p>This shopping cart is worth S$4 in rebates.</p>
                    </div>

                  </div>
                </div> <!-- page-checkout-cart-middle -->

                <!--
                   ____  _   _ ____ _____ ___ _____  _    _
                  / ___|| | | | __ )_   _/ _ \_   _|/ \  | |
                  \___ \| | | |  _ \ | || | | || | / _ \ | |
                   ___) | |_| | |_) || || |_| || |/ ___ \| |___
                  |____/ \___/|____/ |_| \___/ |_/_/   \_\_____|

                -->


                <div id="page-confirmation-cart-subtotal">
                  <div class="row">
                    <div class="col-md-8">

                      <div id="page-confirmation-cart-billing-shipping-info-container">
                        <div id="page-confirmation-cart-billing-shipping-info">
                          <div class="row">
                            <div class="col-md-5">

                              <div id="page-confirmation-cart-billing-info">
                                <h2>Billing information</h2>
                                <div class="info-item-container">
                                  <div class="info-item">
                                    <h4>Full Name:</h4>
                                    <p>Benedict Tan</p>
                                  </div>

                                  <div class="info-item">
                                    <h4>Email Address:</h4>
                                    <p>benedict.tan.219@gmail.com</p>
                                  </div>

                                  <div class="info-item">
                                    <h4>Address:</h4>
                                    <p>National University of Singapore 21 Lower Kent Ridge Road Singapore 119077</p>
                                  </div>

                                  <div class="info-item">
                                    <h4>Contact no.: </h4>
                                    <p>+65 912345678</p>
                                  </div>
                                </div>
                              </div> <!-- page-confirmation-cart-billing-info -->

                            </div>
                            <div class="col-md-2">
                            </div>
                            <div class="col-md-5">
                              
                              <div id="page-confirmation-cart-shipping-info">
                                <h2>Shipping information</h2>
                                <div class="info-item-container">
                                  <div class="info-item">
                                    <h4>Full Name:</h4>
                                    <p>Benedict Tan</p>
                                  </div>

                                  <div class="info-item">
                                    <h4>Email Address:</h4>
                                    <p>benedict.tan.219@gmail.com</p>
                                  </div>

                                  <div class="info-item">
                                    <h4>Address:</h4>
                                    <p>National University of Singapore 21 Lower Kent Ridge Road Singapore 119077</p>
                                  </div>

                                  <div class="info-item">
                                    <h4>Contact no.: </h4>
                                    <p>+65 912345678</p>
                                  </div>
                                </div>
                              </div> <!-- page-confirmation-cart-shipping-info -->

                            </div>
                          </div>
                          
                        </div> <!-- page-confirmation-cart-billing-shipping-info -->
                      </div> <!-- page-confirmation-cart-billing-shipping-info-container -->

                      

                      
                      

                    </div>
                    <div class="col-md-4">

                      <div id="page-checkout-cart-subtotal">
                        <div class="row">
                          <div class="col-md-8">
                            <div class="column-01">
                              <p>Subtotal:</p>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="column-02">
                              <p>$50.70</p>
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-md-8">
                            <div class="column-01">
                              <p>Shipping & handling:</p>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="column-02">
                              <p>$6.00</p>
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-md-8">
                            <div class="column-01">
                              <p>Tax:</p>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="column-02">
                              <p>$2.24</p>
                            </div>
                          </div>
                        </div>

                        <hr>

                        <div class="row">
                          <div class="col-md-8">
                            <div class="column-01">
                              <p>Grand total:</p>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="column-02">
                              <p>$58.94</p>
                            </div>
                          </div>
                        </div>
                      </div> <!-- page-checkout-cart-subtotal -->


                      <div id="page-confirmation-cart-payment">
                        <div class="row">
                          <div class="col-md-4"></div>
                          <div class="col-md-8">

                            <div class="cta-container">
                              <a href="checkout-e.php" class="square-cta full-width-version">Proceed to pay</a>
                            </div>

                          </div>
                        </div>

                        <div class="cc-container">
                          <p>Payment via Paypal</p>
                          <ul>
                            <li><span class="fa fa-cc-discover"></span></li>
                            <li><span class="fa fa-cc-visa"></span></li>
                            <li><span class="fa fa-cc-amex"></span></li>
                            <li><span class="fa fa-cc-mastercard"></span></li>
                          </ul>
                        </div>

                      </div>



                    </div> <!-- col-md-4 -->

                  </div>
                </div> <!-- page-confirmation-cart-subtotal -->
                

              </div> <!-- page-confirmation-cart -->
            </div> <!-- page-confirmation-cart-container -->











            
          </div> <!-- page-checkout-content -->

        </div> <!-- col-md-10 -->
      </div> <!-- row -->
    </div> <!-- container-fluid -->
  </article> <!-- page-checkout-content-section -->
  

  <?php include "footer.php"; ?>
  <?php include "script_checkout.php" ?>
</body>
</html>