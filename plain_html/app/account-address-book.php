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
            <h1>My Address Book.</h1>
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
                <li class="selected">My account</li>
                <li><a href="account-address-book.php">Address book</a></li>
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


            <div id="page-account-address-book-header-container" class="sans-container-fluid-mobile">
              <div id="page-account-address-book-header">
                <div class="book-header-title">
                  <h2>Shipping address</h2>
                </div>

                <div class="row">
                  <div class="col-md-4">
                    <div class="detail-item">
                      <h4>Full name</h4>
                      <p>Benedict Marquez Tan</p>
                    </div>
                  </div>
                  <div class="col-md-8">
                    <div class="detail-item">
                      <h4>Shipping address</h4>
                      <p>National University of Singapore  21 Lower Kent Ridge Road Singapore 119077</p>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-4">
                    <div class="detail-item">
                      <h4>Contact no.</h4>
                      <p>+65 912345678</p>
                    </div>
                  </div>
                  <div class="col-md-8">
                    <div class="detail-item">
                      <h4>Email</h4>
                      <p>benedict.tan.219@gmail.com</p>
                    </div>
                  </div>
                </div>
                
              </div> <!-- page-account-address-book-header -->
            </div> <!-- page-account-address-book-header-container -->


            <div id="page-account-address-book-cta-container">

              <div class="row">
                <div class="col-md-12 col-md-push-0 col-sm-8 col-sm-push-2 col-xs-10 col-xs-push-1">

                  <div class="cta-container">
                    <a href="account-edit-address-book.php" class="square-cta">Edit</a>
                    <a href="account-edit-address-book.php" class="square-cta">Add new address</a>
                  </div>
                  
                </div>
              </div>

            </div> <!-- page-account-address-book-cta-container -->

            <div id="page-account-address-book-other-container">
              <div class="book-other-title">
                <h2>Other shipping addresses</h2>
              </div>
              
              <div class="book-other-item-container">

                <div class="book-other-item">
                  <div class="row">
                    <div class="col-sm-3 col-xs-8">
                      <h4><a href="account-edit-address-book.php">Address 1</a></h4>
                    </div>
                    <div class="col-sm-2 col-sm-push-7 col-xs-4">
                      <div class="cta-container">
                        <a href="account-edit-address-book.php" class="edit-btn">Edit</a>
                        <a href="javascript:void(0);" class="close-btn plain-version"></a>
                      </div>
                    </div>
                    <div class="col-sm-7 col-sm-pull-2 col-xs-8">
                      <small>1114 test Array singapore Singapore Singapore 32323</small>
                    </div>
                    
                  </div>
                </div> <!-- book-other-item -->

                <div class="book-other-item">
                  <div class="row">
                    <div class="col-sm-3 col-xs-8">
                      <h4><a href="account-edit-address-book.php">Address 2</a></h4>
                    </div>
                    <div class="col-sm-2 col-sm-push-7 col-xs-4">
                      <div class="cta-container">
                        <a href="account-edit-address-book.php" class="edit-btn">Edit</a>
                        <a href="javascript:void(0);" class="close-btn plain-version"></a>
                      </div>
                    </div>
                    <div class="col-sm-7 col-sm-pull-2 col-xs-8">
                      <small>350 Orchard Road, 5th/6th Floor, Shaw House, 238868</small>
                    </div>
                  </div>
                </div> <!-- book-other-item -->

                <div class="book-other-item">
                  <div class="row">
                    <div class="col-sm-3 col-xs-8">
                      <h4><a href="account-edit-address-book.php">Address 3</a></h4>
                    </div>
                    <div class="col-sm-2 col-sm-push-7 col-xs-4">
                      <div class="cta-container">
                        <a href="account-edit-address-book.php" class="edit-btn">Edit</a>
                        <a href="javascript:void(0);" class="close-btn plain-version"></a>
                      </div>
                    </div>
                    <div class="col-sm-7 col-sm-pull-2 col-xs-8">
                      <small>251 Pandan Loop, Singapore 128431</small>
                    </div>
                  </div>
                </div> <!-- book-other-item -->

              </div> <!-- book-other-item-container -->
            </div> <!-- page-account-address-book-other-container -->

            





          </div> <!-- page-account-content -->


        </div> <!-- col-md-10 -->



      </div> <!-- row -->
    </div> <!-- container-fluid -->

  </article> <!-- page-account-content-section -->

  <?php include "footer.php"; ?>
  <?php include "script_account.php" ?>
</body>
</html>