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

  <article id="page-account-title-section">
    <div class="container-fluid has-breakpoint">
      <div class="row">
        <div class="col-md-3 col-sm-1 col-xs-0"></div>
        <div class="col-md-9 col-sm-10 col-xs-12">
          <div id="page-account-title">
            <h1>Edit Address.</h1>
          </div> <!-- page-account-title -->
        </div>
      </div>
    </div>
  </article> <!-- page-account-title-section -->

  <!--
      ____ ___  _   _ _____ _____ _   _ _____
     / ___/ _ \| \ | |_   _| ____| \ | |_   _|
    | |  | | | |  \| | | | |  _| |  \| | | |
    | |__| |_| | |\  | | | | |___| |\  | | |
     \____\___/|_| \_| |_| |_____|_| \_| |_|

  -->

  <article id="page-account-content-section">
    <div id="page-account-content-section-bg" class="visible-md visible-lg">
      <div class="sidebar-bg"></div>
      <div class="content-bg"></div>
    </div>

    <div class="container-fluid has-breakpoint">
      <div class="row">

        <div class="col-md-2 col-tablet-landscape-1 hidden-sm hidden-xs">

          <!--
             ____ ___ ____  _____ ____    _    ____
            / ___|_ _|  _ \| ____| __ )  / \  |  _ \
            \___ \| || | | |  _| |  _ \ / _ \ | |_) |
             ___) | || |_| | |___| |_) / ___ \|  _ <
            |____/___|____/|_____|____/_/   \_\_| \_\

          -->

          <div id="page-account-sidebar-width"></div>
          <div id="page-account-sidebar">

            <nav>
              <ul>
                <li><a href="account-info.php">My account</a></li>
                <li class="selected">Address book</li>
                <li><a href="account-order-history.php">Order history</a></li>
                <li><a href="account-gift-card.php">Gift card</a></li>
                <li><a href="account-rebate-history.php">Rebate history</a></li>
                <li><a href="account-friend-referral.php">Friend referral</a></li>
                <li><a href="account-roji-bag.php">My Roji Bag</a></li>

              </ul>
            </nav>

          </div> <!-- page-account-sidebar -->

        </div> <!-- col-md-2 -->
        <div class="col-md-0 col-tablet-landscape-0 col-sm-1 col-xs-0"></div>
        <div class="col-md-10 col-tablet-landscape-11 col-sm-10 col-xs-12">

          <!--
              ____ ___  _   _ _____ _____ _   _ _____
             / ___/ _ \| \ | |_   _| ____| \ | |_   _|
            | |  | | | |  \| | | | |  _| |  \| | | |
            | |__| |_| | |\  | | | | |___| |\  | | |
             \____\___/|_| \_| |_| |_____|_| \_| |_|

          -->

          <div id="page-account-content-width"></div>
          <div id="page-account-content">



            <form class="checkout-form page-account-form" id="" name="">

              <div class="page-account-form-header">
                <h2>Address 1</h2>
              </div> <!-- account-edit-info-header -->

              <div class="page-account-form-content">

                <div class="row">
                  <div class="col-md-6">

                    <div class="page-account-form-column-01">
                      <div class="form-group">
                        <div class="row">
                          <div class="col-md-4">
                            <label>Full Name*</label>
                          </div>
                          <div class="col-md-8">
                            <input type="text" name="" id="" value="Benedict">
                          </div>
                        </div>
                      </div>

                      <div class="form-group">
                        <div class="row">
                          <div class="col-md-4">
                            <label>Email address</label>
                          </div>
                          <div class="col-md-8">
                            <input type="text" name="" id="" value="benedict.tan.219@gmail.com">
                          </div>
                        </div>
                      </div>

                      <div class="form-group">
                        <div class="row">
                          <div class="col-md-4">
                            <label>Contact No.</label>
                          </div>
                          <div class="col-md-8">
                            <input type="text" name="" id="" value="+65 912345678">
                          </div>
                        </div>
                      </div>
                    </div>


                  </div>
                  <div class="col-md-6">

                    <div class="page-account-form-column-02">

                      <div class="form-group">
                        <div class="row">
                          <div class="col-md-4">
                            <label>Shipping address*</label>
                          </div>
                          <div class="col-md-8">
                            <input type="text" name="" id="" value="National University of Singapore">
                            <input type="text" name="" id="" value="21 Lower Kent Ridge Road">
                          </div>
                        </div>
                      </div>

                    </div>

                  </div>
                </div> <!-- row -->

              </div> <!-- page-account-form-content -->

              <div class="page-account-form-footer">
                <div class="row">
                  <div class="col-md-7">
                    <div class="back-cta-container">
                      <a href="account-address-book.php" class="arrow-cta reverse-version">Back</a>
                    </div>
                  </div>
                  <div class="col-md-5">
                    <div class="cta-container">
                      <input type="submit" value="Save changes" class="square-cta">
                    </div>
                  </div>
                </div>
              </div> <!-- page-account-form-footer -->

            </form>
            
            



          </div> <!-- page-account-content -->


        </div> <!-- col-md-10 -->



      </div> <!-- row -->
    </div> <!-- container-fluid -->

  </article> <!-- page-account-content-section -->

  <?php include "footer.php"; ?>
  <?php include "script_account.php" ?>
</body>
</html>