<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
  <?php include 'head.php'; ?>
</head>

<body class="min-height-version min-height-mobile-version account-rebate-history-page">

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
            <h1>My Rebate History.</h1>
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

  <article id="page-account-rebate-history-header-nav-mobile-section" class="visible-xs">
    <div id="page-account-rebate-history-header-nav-mobile">
      <ul>
        <li data-value="earned" class="selected"><a href="#earned">Earned</a></li>
        <li data-value="redeemed"><a href="#redeemed">Redeemed</a></li>
        <li data-value="expired"><a href="#expired">Expired</a></li>
      </ul>
    </div>
  </article>

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
                <li><a href="account-gift-card.php">Gift card</a></li>
                <li class="selected">Rebate history</li>
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
               ____  _____ ____    _  _____ _____   _   _ ___ ____ _____ ___  ______   __
              |  _ \| ____| __ )  / \|_   _| ____| | | | |_ _/ ___|_   _/ _ \|  _ \ \ / /
              | |_) |  _| |  _ \ / _ \ | | |  _|   | |_| || |\___ \ | || | | | |_) \ V /
              |  _ <| |___| |_) / ___ \| | | |___  |  _  || | ___) || || |_| |  _ < | |
              |_| \_\_____|____/_/   \_\_| |_____| |_| |_|___|____/ |_| \___/|_| \_\|_|

            -->

            
            <div id="page-account-rebate-history-header">
              <div class="row">
                <div class="col-sm-6">

                  <div class="history-header-title hidden-xs">
                    <h2>Rebate History</h2>
                  </div>

                  <div class="history-header-detail">
                    <h4>Current rebate</h4>
                    <p>$58.94</p>
                  </div>

                </div>
                <div class="col-sm-6 hidden-xs">

                  <div class="history-header-nav">
                    <ul>
                      <li data-value="earned" class="selected"><a href="#earned">Earned</a></li>
                      <li data-value="redeemed"><a href="#redeemed">Redeemed</a></li>
                      <li data-value="expired"><a href="#expired">Expired</a></li>
                    </ul>
                  </div>

                </div>
              </div>

            </div> <!-- page-account-rebate-history-header -->



            <div id="page-account-rebate-history-content">


              <!--
                 _____    _    ____  _   _ _____ ____
                | ____|  / \  |  _ \| \ | | ____|  _ \
                |  _|   / _ \ | |_) |  \| |  _| | | | |
                | |___ / ___ \|  _ <| |\  | |___| |_| |
                |_____/_/   \_\_| \_\_| \_|_____|____/

              -->

              <div id="page-account-rebate-history-earned-table" class="page-account-table">

                <div class="page-account-table-header hidden-xs">
                  <div class="row">
                    <div class="col-sm-3">
                      <div class="table-column-first">
                        <h4>Description</h4>
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="table-column">
                        <h4>Status</h4>
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="table-column">
                        <h4>Rebates earned</h4>
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="table-column-last">
                        <h4>Expiry date</h4>
                      </div>
                    </div>
                  </div>
                </div> <!-- page-account-table-header -->

                <div class="page-account-table-item-container">

                  <div class="page-account-table-item">
                    <div class="row">
                      <div class="col-sm-3 col-xs-6">
                        <div class="table-column-first" data-column="Description">
                          <p>Order: 145003111</p>
                        </div>
                      </div>
                      <div class="col-sm-3 col-xs-6">
                        <div class="table-column" data-column="Status">
                          <p>Pending Payment</p>
                        </div>
                      </div>
                      <div class="col-sm-3 col-xs-6">
                        <div class="table-column mobile-last-version" data-column="Rebates earned">
                          <p>66</p>
                        </div>
                      </div>
                      <div class="col-sm-3 col-xs-6">
                        <div class="table-column-last mobile-last-version" data-column="Expiry date">
                          <h4>13/6/2017</h4>
                        </div>
                      </div>
                    </div>
                  </div>


                  <!-- repeat -->
                  <div class="page-account-table-item"><div class="row"><div class="col-sm-3 col-xs-6"><div class="table-column-first" data-column="Description:"><p>Order: 145003111</p></div></div><div class="col-sm-3 col-xs-6"><div class="table-column" data-column="Status:"><p>Pending Payment</p></div></div><div class="col-sm-3 col-xs-6"><div class="table-column mobile-last-version" data-column="Rebates earned:"><p>66</p></div></div><div class="col-sm-3 col-xs-6"><div class="table-column-last mobile-last-version" data-column="Expiry date:"><h4>13/6/2017</h4></div></div></div></div>
                  <div class="page-account-table-item"><div class="row"><div class="col-sm-3 col-xs-6"><div class="table-column-first" data-column="Description:"><p>Order: 145003111</p></div></div><div class="col-sm-3 col-xs-6"><div class="table-column" data-column="Status:"><p>Pending Payment</p></div></div><div class="col-sm-3 col-xs-6"><div class="table-column mobile-last-version" data-column="Rebates earned:"><p>66</p></div></div><div class="col-sm-3 col-xs-6"><div class="table-column-last mobile-last-version" data-column="Expiry date:"><h4>13/6/2017</h4></div></div></div></div>
                  <div class="page-account-table-item"><div class="row"><div class="col-sm-3 col-xs-6"><div class="table-column-first" data-column="Description:"><p>Order: 145003111</p></div></div><div class="col-sm-3 col-xs-6"><div class="table-column" data-column="Status:"><p>Pending Payment</p></div></div><div class="col-sm-3 col-xs-6"><div class="table-column mobile-last-version" data-column="Rebates earned:"><p>66</p></div></div><div class="col-sm-3 col-xs-6"><div class="table-column-last mobile-last-version" data-column="Expiry date:"><h4>13/6/2017</h4></div></div></div></div>
                  <div class="page-account-table-item"><div class="row"><div class="col-sm-3 col-xs-6"><div class="table-column-first" data-column="Description:"><p>Order: 145003111</p></div></div><div class="col-sm-3 col-xs-6"><div class="table-column" data-column="Status:"><p>Pending Payment</p></div></div><div class="col-sm-3 col-xs-6"><div class="table-column mobile-last-version" data-column="Rebates earned:"><p>66</p></div></div><div class="col-sm-3 col-xs-6"><div class="table-column-last mobile-last-version" data-column="Expiry date:"><h4>13/6/2017</h4></div></div></div></div>
                  <div class="page-account-table-item"><div class="row"><div class="col-sm-3 col-xs-6"><div class="table-column-first" data-column="Description:"><p>Order: 145003111</p></div></div><div class="col-sm-3 col-xs-6"><div class="table-column" data-column="Status:"><p>Pending Payment</p></div></div><div class="col-sm-3 col-xs-6"><div class="table-column mobile-last-version" data-column="Rebates earned:"><p>66</p></div></div><div class="col-sm-3 col-xs-6"><div class="table-column-last mobile-last-version" data-column="Expiry date:"><h4>13/6/2017</h4></div></div></div></div>
                  <div class="page-account-table-item"><div class="row"><div class="col-sm-3 col-xs-6"><div class="table-column-first" data-column="Description:"><p>Order: 145003111</p></div></div><div class="col-sm-3 col-xs-6"><div class="table-column" data-column="Status:"><p>Pending Payment</p></div></div><div class="col-sm-3 col-xs-6"><div class="table-column mobile-last-version" data-column="Rebates earned:"><p>66</p></div></div><div class="col-sm-3 col-xs-6"><div class="table-column-last mobile-last-version" data-column="Expiry date:"><h4>13/6/2017</h4></div></div></div></div>
                  <div class="page-account-table-item"><div class="row"><div class="col-sm-3 col-xs-6"><div class="table-column-first" data-column="Description:"><p>Order: 145003111</p></div></div><div class="col-sm-3 col-xs-6"><div class="table-column" data-column="Status:"><p>Pending Payment</p></div></div><div class="col-sm-3 col-xs-6"><div class="table-column mobile-last-version" data-column="Rebates earned:"><p>66</p></div></div><div class="col-sm-3 col-xs-6"><div class="table-column-last mobile-last-version" data-column="Expiry date:"><h4>13/6/2017</h4></div></div></div></div>
                  <div class="page-account-table-item"><div class="row"><div class="col-sm-3 col-xs-6"><div class="table-column-first" data-column="Description:"><p>Order: 145003111</p></div></div><div class="col-sm-3 col-xs-6"><div class="table-column" data-column="Status:"><p>Pending Payment</p></div></div><div class="col-sm-3 col-xs-6"><div class="table-column mobile-last-version" data-column="Rebates earned:"><p>66</p></div></div><div class="col-sm-3 col-xs-6"><div class="table-column-last mobile-last-version" data-column="Expiry date:"><h4>13/6/2017</h4></div></div></div></div>





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

              </div> <!-- page-account-rebate-history-earned-table -->


              <!--
                 ____  _____ ____  _____ _____ __  __ _____ ____
                |  _ \| ____|  _ \| ____| ____|  \/  | ____|  _ \
                | |_) |  _| | | | |  _| |  _| | |\/| |  _| | | | |
                |  _ <| |___| |_| | |___| |___| |  | | |___| |_| |
                |_| \_\_____|____/|_____|_____|_|  |_|_____|____/

              -->

              <div id="page-account-rebate-history-redeemed-table" class="page-account-table">

                <div class="page-account-table-header hidden-xs">
                  <div class="row">
                    <div class="col-sm-3">
                      <div class="table-column-first">
                        <h4>Description</h4>
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="table-column">
                        <h4>Status</h4>
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="table-column">
                        <h4>Rebates used</h4>
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="table-column-last">
                        <h4>Redemption date</h4>
                      </div>
                    </div>
                  </div>
                </div> <!-- page-account-table-header -->

                <div class="page-account-table-item-container">

                  <div class="page-account-table-item">
                    <div class="row">
                      <div class="col-sm-3 col-xs-6">
                        <div class="table-column-first" data-column="Description:">
                          <p>Order: 145003122</p>
                        </div>
                      </div>
                      <div class="col-sm-3 col-xs-6">
                        <div class="table-column" data-column="Status:">
                          <p>Pending Payment</p>
                        </div>
                      </div>
                      <div class="col-sm-3 col-xs-6">
                        <div class="table-column mobile-last-version" data-column="Rebates used:">
                          <p>22</p>
                        </div>
                      </div>
                      <div class="col-sm-3 col-xs-6">
                        <div class="table-column-last mobile-last-version" data-column="Redemption date:">
                          <h4>13/6/2017</h4>
                        </div>
                      </div>
                    </div>
                  </div>


                  <!-- repeat -->
                  <div class="page-account-table-item"><div class="row"><div class="col-sm-3 col-xs-6"><div class="table-column-first" data-column="Description:"><p>Order: 145003122</p></div></div><div class="col-sm-3 col-xs-6"><div class="table-column" data-column="Status:"><p>Pending Payment</p></div></div><div class="col-sm-3 col-xs-6"><div class="table-column mobile-last-version" data-column="Rebates used:"><p>22</p></div></div><div class="col-sm-3 col-xs-6"><div class="table-column-last mobile-last-version" data-column="Redemption date:"><h4>13/6/2017</h4></div></div></div></div>
                  <div class="page-account-table-item"><div class="row"><div class="col-sm-3 col-xs-6"><div class="table-column-first" data-column="Description:"><p>Order: 145003122</p></div></div><div class="col-sm-3 col-xs-6"><div class="table-column" data-column="Status:"><p>Pending Payment</p></div></div><div class="col-sm-3 col-xs-6"><div class="table-column mobile-last-version" data-column="Rebates used:"><p>22</p></div></div><div class="col-sm-3 col-xs-6"><div class="table-column-last mobile-last-version" data-column="Redemption date:"><h4>13/6/2017</h4></div></div></div></div>



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

              </div> <!-- page-account-rebate-history-redeemed-table -->

              <!--
                 _______  ______ ___ ____  _____ ____
                | ____\ \/ /  _ \_ _|  _ \| ____|  _ \
                |  _|  \  /| |_) | || |_) |  _| | | | |
                | |___ /  \|  __/| ||  _ <| |___| |_| |
                |_____/_/\_\_|  |___|_| \_\_____|____/

              -->

              <div id="page-account-rebate-history-expired-table" class="page-account-table">

                <div class="page-account-table-header hidden-xs">
                  <div class="row">
                    <div class="col-sm-3">
                      <div class="table-column-first">
                        <h4>Description</h4>
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="table-column">
                        <h4>Status</h4>
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="table-column">
                        <h4>Rebates</h4>
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="table-column-last">
                        <h4>Expired date</h4>
                      </div>
                    </div>
                  </div>
                </div> <!-- page-account-table-header -->

                <div class="page-account-table-item-container">

                  <div class="page-account-table-item">
                    <div class="row">
                      <div class="col-sm-3 col-xs-6">
                        <div class="table-column-first" data-column="Description:">
                          <p>Order: 145003133</p>
                        </div>
                      </div>
                      <div class="col-sm-3 col-xs-6">
                        <div class="table-column" data-column="Status:">
                          <p>Pending Payment</p>
                        </div>
                      </div>
                      <div class="col-sm-3 col-xs-6">
                        <div class="table-column" data-column="Rebates:">
                          <p>33</p>
                        </div>
                      </div>
                      <div class="col-sm-3 col-xs-6">
                        <div class="table-column-last" data-column="Expired date:">
                          <h4>13/6/2017</h4>
                        </div>
                      </div>
                    </div>
                  </div>


                  <!-- repeat -->
                  
                  <div class="page-account-table-item"><div class="row"><div class="col-sm-3 col-xs-6"><div class="table-column-first" data-column="Description:"><p>Order: 145003133</p></div></div><div class="col-sm-3 col-xs-6"><div class="table-column" data-column="Status:"><p>Pending Payment</p></div></div><div class="col-sm-3 col-xs-6"><div class="table-column" data-column="Rebates:"><p>33</p></div></div><div class="col-sm-3 col-xs-6"><div class="table-column-last" data-column="Expired date:"><h4>13/6/2017</h4></div></div></div></div>
                  <div class="page-account-table-item"><div class="row"><div class="col-sm-3 col-xs-6"><div class="table-column-first" data-column="Description:"><p>Order: 145003133</p></div></div><div class="col-sm-3 col-xs-6"><div class="table-column" data-column="Status:"><p>Pending Payment</p></div></div><div class="col-sm-3 col-xs-6"><div class="table-column" data-column="Rebates:"><p>33</p></div></div><div class="col-sm-3 col-xs-6"><div class="table-column-last" data-column="Expired date:"><h4>13/6/2017</h4></div></div></div></div>
                  <div class="page-account-table-item"><div class="row"><div class="col-sm-3 col-xs-6"><div class="table-column-first" data-column="Description:"><p>Order: 145003133</p></div></div><div class="col-sm-3 col-xs-6"><div class="table-column" data-column="Status:"><p>Pending Payment</p></div></div><div class="col-sm-3 col-xs-6"><div class="table-column" data-column="Rebates:"><p>33</p></div></div><div class="col-sm-3 col-xs-6"><div class="table-column-last" data-column="Expired date:"><h4>13/6/2017</h4></div></div></div></div>
                  <div class="page-account-table-item"><div class="row"><div class="col-sm-3 col-xs-6"><div class="table-column-first" data-column="Description:"><p>Order: 145003133</p></div></div><div class="col-sm-3 col-xs-6"><div class="table-column" data-column="Status:"><p>Pending Payment</p></div></div><div class="col-sm-3 col-xs-6"><div class="table-column" data-column="Rebates:"><p>33</p></div></div><div class="col-sm-3 col-xs-6"><div class="table-column-last" data-column="Expired date:"><h4>13/6/2017</h4></div></div></div></div>
                  

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

              </div> <!-- page-account-rebate-history-expired-table -->

            </div> <!-- page-account-rebate-history-content -->


            




          </div> <!-- page-account-content -->


        </div> <!-- col-md-10 -->



      </div> <!-- row -->
    </div> <!-- container-fluid -->

  </article> <!-- page-account-content-section -->

  <?php include "footer.php"; ?>
  <?php include "script_account.php" ?>
</body>
</html>