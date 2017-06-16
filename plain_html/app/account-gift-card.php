<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
  <?php include 'head.php'; ?>
</head>

<body class="min-height-version account-gift-card-page">
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
            <h1>My Gift Cards.</h1>
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
                <li><a href="account-order-history.php">Order history</a></li>
                <li class="selected">Gift card</li>
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
                ____ ___ _____ _____    ____    _    ____  ____
               / ___|_ _|  ___|_   _|  / ___|  / \  |  _ \|  _ \
              | |  _ | || |_    | |   | |     / _ \ | |_) | | | |
              | |_| || ||  _|   | |   | |___ / ___ \|  _ <| |_| |
               \____|___|_|     |_|    \____/_/   \_\_| \_\____/

            -->

            <div id="page-account-gift-card-header">
              <div class="row">
                <div class="col-md-6">

                  <div class="gift-card-title">
                    <h2>Gift cards</h2>
                  </div>

                </div>
                <div class="col-md-6">

                  <div class="gift-card-nav">
                    <ul>
                      <li data-value="stored" class="selected"><a href="#stored">Stored</a></li>
                      <li data-value="redeemed"><a href="#redeemed">Redeemed</a></li>
                    </ul>
                  </div>

                </div>
              </div>
            </div> <!-- page-account-gift-card-header -->


            <div id="page-account-gift-card-content">


              <!--
                 ____ _____ ___  ____  _____ ____
                / ___|_   _/ _ \|  _ \| ____|  _ \
                \___ \ | || | | | |_) |  _| | | | |
                 ___) || || |_| |  _ <| |___| |_| |
                |____/ |_| \___/|_| \_\_____|____/

              -->


              <div id="page-account-gift-card-stored-table" class="page-account-table">

                <div class="page-account-table-header">
                  <div class="row">
                    <div class="col-md-4">
                      <div class="table-column-first">
                        <h4>Gift card code</h4>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="table-column">
                        <h4>Amount</h4>
                      </div>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-2">
                      <div class="table-column-last">
                        <h4>expiry date</h4>
                      </div>
                    </div>
                  </div>
                </div> <!-- page-account-table-header -->

                <div class="page-account-table-item-container">


                  <div class="page-account-table-item">
                    <div class="row">
                      <div class="col-md-4">
                        <div class="table-column-first">
                          <p>434NR254536N</p>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="table-column">
                          <p>S$25.00</p>
                        </div>
                      </div>
                      <div class="col-md-2"></div>
                      <div class="col-md-2">
                        <div class="table-column-last">
                          <p>13/6/2017</p>
                        </div>
                      </div>
                    </div>
                  </div> <!-- page-account-table-item -->

                  




                  <!-- repeat -->
                  <div class="page-account-table-item"><div class="row"><div class="col-md-4"><div class="table-column-first"><p>434NR254536N</p></div></div><div class="col-md-4"><div class="table-column"><p>S$25.00</p></div></div><div class="col-md-2"></div><div class="col-md-2"><div class="table-column-last"><p>13/6/2017</p></div></div></div></div> <!-- page-account-table-item -->
                  <div class="page-account-table-item"><div class="row"><div class="col-md-4"><div class="table-column-first"><p>434NR254536N</p></div></div><div class="col-md-4"><div class="table-column"><p>S$25.00</p></div></div><div class="col-md-2"></div><div class="col-md-2"><div class="table-column-last"><p>13/6/2017</p></div></div></div></div> <!-- page-account-table-item -->
                  <div class="page-account-table-item"><div class="row"><div class="col-md-4"><div class="table-column-first"><p>434NR254536N</p></div></div><div class="col-md-4"><div class="table-column"><p>S$25.00</p></div></div><div class="col-md-2"></div><div class="col-md-2"><div class="table-column-last"><p>13/6/2017</p></div></div></div></div> <!-- page-account-table-item -->
                  <div class="page-account-table-item"><div class="row"><div class="col-md-4"><div class="table-column-first"><p>434NR254536N</p></div></div><div class="col-md-4"><div class="table-column"><p>S$25.00</p></div></div><div class="col-md-2"></div><div class="col-md-2"><div class="table-column-last"><p>13/6/2017</p></div></div></div></div> <!-- page-account-table-item -->
                  <div class="page-account-table-item"><div class="row"><div class="col-md-4"><div class="table-column-first"><p>434NR254536N</p></div></div><div class="col-md-4"><div class="table-column"><p>S$25.00</p></div></div><div class="col-md-2"></div><div class="col-md-2"><div class="table-column-last"><p>13/6/2017</p></div></div></div></div> <!-- page-account-table-item -->



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

              </div> <!-- page-account-gift-card-stored-table -->



              <!--
                 ____  _____ ____  _____ _____ __  __ _____ ____
                |  _ \| ____|  _ \| ____| ____|  \/  | ____|  _ \
                | |_) |  _| | | | |  _| |  _| | |\/| |  _| | | | |
                |  _ <| |___| |_| | |___| |___| |  | | |___| |_| |
                |_| \_\_____|____/|_____|_____|_|  |_|_____|____/

              -->

              <div id="page-account-gift-card-redeemed-table" class="page-account-table">
                <div class="page-account-table-header">
                  <div class="row">
                    <div class="col-md-3">
                      <div class="table-column-first">
                        <h4>Gift card code</h4>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="table-column">
                        <h4>Amount</h4>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="table-column">
                        <h4>Order no.</h4>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="table-column-last">
                        <h4>Redemption date</h4>
                      </div>
                    </div>
                  </div>
                </div> <!-- page-account-table-header -->

                <div class="page-account-table-item-container">

                  <div class="page-account-table-item">
                    <div class="row">
                      <div class="col-md-3">
                        <div class="table-column-first">
                          <p>434NR254536N</p>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="table-column">
                          <p>S$15.00</p>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="table-column">
                          <p>145003178</p>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="table-column-last">
                          <p>13/6/2017</p>
                        </div>
                      </div>
                    </div>
                  </div> <!-- page-account-table-item -->


                  <!-- repeat -->
                  <div class="page-account-table-item"><div class="row"><div class="col-md-3"><div class="table-column-first"><p>434NR254536N</p></div></div><div class="col-md-3"><div class="table-column"><p>S$15.00</p></div></div><div class="col-md-3"><div class="table-column"><p>145003178</p></div></div><div class="col-md-3"><div class="table-column-last"><p>13/6/2017</p></div></div></div></div>
                  <div class="page-account-table-item"><div class="row"><div class="col-md-3"><div class="table-column-first"><p>434NR254536N</p></div></div><div class="col-md-3"><div class="table-column"><p>S$15.00</p></div></div><div class="col-md-3"><div class="table-column"><p>145003178</p></div></div><div class="col-md-3"><div class="table-column-last"><p>13/6/2017</p></div></div></div></div>
                  <div class="page-account-table-item"><div class="row"><div class="col-md-3"><div class="table-column-first"><p>434NR254536N</p></div></div><div class="col-md-3"><div class="table-column"><p>S$15.00</p></div></div><div class="col-md-3"><div class="table-column"><p>145003178</p></div></div><div class="col-md-3"><div class="table-column-last"><p>13/6/2017</p></div></div></div></div>
                  <div class="page-account-table-item"><div class="row"><div class="col-md-3"><div class="table-column-first"><p>434NR254536N</p></div></div><div class="col-md-3"><div class="table-column"><p>S$15.00</p></div></div><div class="col-md-3"><div class="table-column"><p>145003178</p></div></div><div class="col-md-3"><div class="table-column-last"><p>13/6/2017</p></div></div></div></div>
                  <div class="page-account-table-item"><div class="row"><div class="col-md-3"><div class="table-column-first"><p>434NR254536N</p></div></div><div class="col-md-3"><div class="table-column"><p>S$15.00</p></div></div><div class="col-md-3"><div class="table-column"><p>145003178</p></div></div><div class="col-md-3"><div class="table-column-last"><p>13/6/2017</p></div></div></div></div>
                  <div class="page-account-table-item"><div class="row"><div class="col-md-3"><div class="table-column-first"><p>434NR254536N</p></div></div><div class="col-md-3"><div class="table-column"><p>S$15.00</p></div></div><div class="col-md-3"><div class="table-column"><p>145003178</p></div></div><div class="col-md-3"><div class="table-column-last"><p>13/6/2017</p></div></div></div></div>


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
              </div> <!-- page-account-gift-card-redeemed-table -->

              
            </div> <!-- page-account-gift-card-content -->



            

            





          </div> <!-- page-account-content -->


        </div> <!-- col-md-10 -->



      </div> <!-- row -->
    </div> <!-- container-fluid -->

  </article> <!-- page-account-content-section -->

  <?php include "footer.php"; ?>
  <?php include "script_account.php" ?>
</body>
</html>