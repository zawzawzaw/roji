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

  <article id="page-login-content-section">
    <div class="container-fluid has-breakpoint">
      <div class="row">

        <div class="col-md-1 col-tablet-landscape-0 col-sm-2 col-xs-0"></div>
        <div class="col-md-5 col-tablet-landscape-6 col-sm-8 col-xs-12">

          <div id="page-login-content">

            <form class="checkout-form"> 

              <div class="form-title">
                <h2>Login to your account</h2>
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

              <div class="form-group">
                <div class="row">
                  <div class="col-md-4">
                    <label>Password*</label>
                  </div>
                  <div class="col-md-8">
                    <input type="password">
                  </div>
                </div>
              </div>

              <div id="page-login-form-forgot-password-container">
                <a href="javascript:void(0);">Forgot password?</a>
              </div>

              <div class="row">
                <div class="col-md-8">

                  <div class="form-group checkbox-version">
                    <div class="checkbox">
                      <input type="checkbox" name="" id="">
                      <label>
                        <span></span>
                        <p>Remember me</p>
                      </label>
                    </div>
                  </div>

                </div>
                <div class="col-md-4">

                  <div class="cta-container">
                    <input type="submit" value="Log In" class="square-cta">
                  </div>

                </div>
              </div>


              <!-- Remember me checkbox -->

            </form>
          </div> <!-- page-login-content -->

          
        </div> <!-- col-md-5 -->
        <div class="col-md-4">

          <div id="page-login-intro-image">
            <div class="manic-image-container">
              <img src="" data-image-desktop="images_cms/others/login-intro.jpg">
            </div>
          </div>

        </div>
      </div> <!-- row -->

      <div class="row">
        <div class="col-md-12">
          <hr class="page-login-seperator-hr">
        </div>
      </div>

      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-8">

          <div id="page-login-register-form-container">
            <div id="page-login-register-form">
              <h2>Don’t have an Account?</h2>

              <div class="default-copy">
                <small>Registration is free and easy! By creating an account with our store, you will be able to move through the checkout process faster, store multiple addresses, view and track your orders in your account and more!</small>
              </div>

              <div class="cta-container">
                <a href="javascript:void(0);" class="square-cta">Create an account</a>
              </div>

            </div> <!-- page-login-register-form -->
          </div> <!-- page-login-register-form-container -->

        </div>
      </div> <!-- row -->

    </div>
  </article> <!-- page-login-content-section -->
  


  

  <?php include "footer.php"; ?>
  <?php include "script_checkout.php" ?>
</body>
</html>