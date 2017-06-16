<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
  <?php include 'head.php'; ?>
</head>

<body class="min-height-version min-height-mobile-version">
  <?php include "header.php"; ?>


  <!--
     _____ ___ _____ _     _____
    |_   _|_ _|_   _| |   | ____|
      | |  | |  | | | |   |  _|
      | |  | |  | | | |___| |___
      |_| |___| |_| |_____|_____|

  -->

  <article id="page-login-title-section">
    <div class="container-fluid has-breakpoint">
      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-9">
          <div id="page-login-title">
            <h1>Welcome to the <strong>ROJI</strong> family.</h1>
          </div> <!-- page-login-title -->
        </div>
      </div>
    </div>
  </article> <!-- page-login-title-section -->



  <!--
      ____ ___  _   _ _____ _____ _   _ _____
     / ___/ _ \| \ | |_   _| ____| \ | |_   _|
    | |  | | | |  \| | | | |  _| |  \| | | |
    | |__| |_| | |\  | | | | |___| |\  | | |
     \____\___/|_| \_| |_| |_____|_| \_| |_|

  -->

  <div id="page-login-intro-image-mobile" class="visible-sm visible-xs">
    <div class="manic-image-container">
      <img src="" 
        data-image-tablet="images_cms/others/login-intro-tablet.jpg"
        data-image-mobile="images_cms/others/login-intro-mobile.jpg">
    </div>
  </div>
  
  <article id="page-login-content-section">

    <div class="container-fluid has-breakpoint">
      <div class="row">
        <div class="col-md-1 col-tablet-landscape-0 col-sm-0"></div>
        <div class="col-md-5 col-tablet-landscape-6 col-sm-12">

          <div id="page-login-content">

            <form class="checkout-form"> 

              <div class="form-title">
                <h2>Forgot your password?</h2>
                <p>Please enter your email address below. You will receive a link to reset your password.</p>
              </div>

              <div class="form-group">
                <div class="row">
                  <div class="col-md-4">
                    <label>Email address*</label>
                  </div>
                  <div class="col-md-8">
                    <input type="email">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-7">



                </div>
                <div class="col-md-5 col-md-push-0 col-sm-8 col-sm-push-2 col-xs-10 col-xs-push-1">

                  <div class="cta-container">
                    <input type="submit" value="Log In" class="square-cta">
                  </div>

                </div>
              </div>

            </form>
          </div> <!-- page-login-content -->

          
        </div> <!-- col-md-5 -->
        <div class="col-md-4 col-tablet-landscape-5 visible-md visible-lg">

          <div id="page-login-intro-image">
            <div class="manic-image-container">
              <img src="" data-image-desktop="images_cms/others/login-intro.jpg">
            </div>
          </div>

        </div>
      </div> <!-- row -->

    </div>
  </article> <!-- page-login-content-section -->
  


  

  <?php include "footer.php"; ?>
  <?php include "script_checkout.php" ?>
</body>
</html>