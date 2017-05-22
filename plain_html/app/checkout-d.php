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
            <h1>You have <strong>3</strong> items in your cart.</h1>
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
        <div class="col-md-2">

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
        <div class="col-md-10">


          <!--
              ____ ___  _   _ _____ _____ _   _ _____
             / ___/ _ \| \ | |_   _| ____| \ | |_   _|
            | |  | | | |  \| | | | |  _| |  \| | | |
            | |__| |_| | |\  | | | | |___| |\  | | |
             \____\___/|_| \_| |_| |_____|_| \_| |_|

          -->

          <div id="page-checkout-content-width"></div>
          <div id="page-checkout-content">
            
          </div> <!-- page-checkout-content -->

        </div> <!-- col-md-10 -->
      </div> <!-- row -->
    </div> <!-- container-fluid -->
  </article> <!-- page-checkout-content-section -->
  

  <?php include "footer.php"; ?>
  <?php include "script_checkout.php" ?>
</body>
</html>