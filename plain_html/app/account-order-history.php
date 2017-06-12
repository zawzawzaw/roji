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
            <h1>My Order History.</h1>
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
                <li><a href="account-address-book.php">Address book</a></li>
                <li class="selected">Order history</li>
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
            

            


            <!--
                ___  ____  ____  _____ ____    _   _ ___ ____ _____ ___  ______   __
               / _ \|  _ \|  _ \| ____|  _ \  | | | |_ _/ ___|_   _/ _ \|  _ \ \ / /
              | | | | |_) | | | |  _| | |_) | | |_| || |\___ \ | || | | | |_) \ V /
              | |_| |  _ <| |_| | |___|  _ <  |  _  || | ___) || || |_| |  _ < | |
               \___/|_| \_\____/|_____|_| \_\ |_| |_|___|____/ |_| \___/|_| \_\|_|

            -->

            <div id="page-account-order-history-header">
              <h2>order history</h2>
            </div> <!-- page-account-order-history-header -->

            <div id="page-account-order-history-content">

              <div class="page-account-table">

                <div class="page-account-table-header">
                  <div class="row">
                    <div class="col-md-3">
                      <div class="table-column-first">
                        <h4>Date</h4>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="table-column">
                        <h4>Order</h4>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="table-column">
                        <h4>Status</h4>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="table-column-last">
                        <h4>Total</h4>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="page-account-table-item-container">
                  <div class="page-account-table-item">
                    <div class="row">
                      <div class="col-md-3">
                        <div class="table-column-first">
                          <p>5/6/2017</p>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="table-column">
                          <h4><a href="account-order-detail.php">145003178</a></h4>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="table-column">
                          <p>Pending Payment</p>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="table-column-last">
                          <h4>$58.94</h4>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="page-account-table-item">
                    <div class="row">
                      <div class="col-md-3">
                        <div class="table-column-first">
                          <p>5/6/2017</p>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="table-column">
                          <h4><a href="account-order-detail.php">145003178</a></h4>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="table-column">
                          <p>Pending Payment</p>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="table-column-last">
                          <h4>$58.94</h4>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="page-account-table-item">
                    <div class="row">
                      <div class="col-md-3">
                        <div class="table-column-first">
                          <p>5/6/2017</p>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="table-column">
                          <h4><a href="account-order-detail.php">145003178</a></h4>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="table-column">
                          <p>Pending Payment</p>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="table-column-last">
                          <h4>$58.94</h4>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="page-account-table-item">
                    <div class="row">
                      <div class="col-md-3">
                        <div class="table-column-first">
                          <p>5/6/2017</p>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="table-column">
                          <h4><a href="account-order-detail.php">145003178</a></h4>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="table-column">
                          <p>Pending Payment</p>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="table-column-last">
                          <h4>$58.94</h4>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="page-account-table-item">
                    <div class="row">
                      <div class="col-md-3">
                        <div class="table-column-first">
                          <p>5/6/2017</p>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="table-column">
                          <h4><a href="account-order-detail.php">145003178</a></h4>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="table-column">
                          <p>Pending Payment</p>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="table-column-last">
                          <h4>$58.94</h4>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="page-account-table-item">
                    <div class="row">
                      <div class="col-md-3">
                        <div class="table-column-first">
                          <p>5/6/2017</p>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="table-column">
                          <h4><a href="account-order-detail.php">145003178</a></h4>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="table-column">
                          <p>Pending Payment</p>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="table-column-last">
                          <h4>$58.94</h4>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="page-account-table-item">
                    <div class="row">
                      <div class="col-md-3">
                        <div class="table-column-first">
                          <p>5/6/2017</p>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="table-column">
                          <h4><a href="account-order-detail.php">145003178</a></h4>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="table-column">
                          <p>Pending Payment</p>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="table-column-last">
                          <h4>$58.94</h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div> <!-- page-account-table-item-container -->

                <div class="page-account-table-pagination">
                  <!-- add if there is a back button -->
                  <!-- <a href="javascript:void(0);" class="arrow-cta arrow-version reverse-version"></a> -->
                  <ul>
                    <li class="selected">1</li>
                    <li><a href="javascript:void(0);">2</a></li>
                    <li><a href="javascript:void(0);">3</a></li>
                  </ul>
                  <a href="javascript:void(0);" class="arrow-cta arrow-version"></a>
                </div> <!-- page-account-table-pagination -->

              </div> <!-- page-account-table -->


            </div> <!-- page-account-order-history-content -->

            
            

          </div> <!-- page-account-content -->


        </div> <!-- col-md-10 -->



      </div> <!-- row -->
    </div> <!-- container-fluid -->

  </article> <!-- page-account-content-section -->

  <?php include "footer.php"; ?>
  <?php include "script_account.php" ?>
</body>
</html>