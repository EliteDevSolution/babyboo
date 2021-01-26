<?php 
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Bracket">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/bracket/img/bracket-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/bracket">
    <meta property="og:title" content="Bracket">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/bracket/img/bracket-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/bracket/img/bracket-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>Baby Hatch System Admin Page</title>

    <!-- vendor css -->
    <link href="../lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="../lib/Ionicons/css/ionicons.css" rel="stylesheet">
    <link href="../lib/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <link href="../lib/jquery-switchbutton/jquery.switchButton.css" rel="stylesheet">

    <!-- Bracket CSS -->
    <link rel="stylesheet" href="../css/bracket.css">
  </head>

  <body>
    <!-- ########## START: LEFT PANEL ########## -->
    <div class="br-logo br-header"><a href=""><span></span><span></span></a></div>
    <div class="br-sideleft overflow-y-auto">
      <label class="sidebar-label pd-x-15 mg-t-20">Navigation</label>
      <div class="br-sideleft-menu">
        <a href="index.php" class="br-menu-link active">
          <div class="br-menu-item">
            <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
            <span class="menu-item-label">Home</span>
          </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <a href="#" class="br-menu-link">
          <div class="br-menu-item">
            <i class="menu-item-icon icon ion-ios-bookmarks-outline tx-20"></i>
            <span class="menu-item-label">Record List</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub nav flex-column">
          <li class="nav-item"><a href="listbaby.php" class="nav-link">Baby List</a></li>
          <li class="nav-item"><a href="listadd.php" class="nav-link">New Record</a></li>
        </ul>
      </div><!-- br-sideleft-menu -->

      <br>
    </div><!-- br-sideleft -->
    <!-- ########## END: LEFT PANEL ########## -->

    <!-- ########## START: HEAD PANEL ########## -->
    <div class="br-header">
      <div class="br-header-left">
        <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i class="icon ion-navicon-round"></i></a></div>
        <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i class="icon ion-navicon-round"></i></a></div>
        <div class="input-group hidden-xs-down wd-170 transition">

        </div><!-- input-group -->
      </div><!-- br-header-left -->
      <div class="br-header-right">
        <nav class="nav">
          
          <div class="dropdown">
            <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
              <span class="logged-name hidden-md-down">Cetan</span>
              <img src="http://via.placeholder.com/64x64" class="wd-32 rounded-circle" alt="">
              <span class="square-10 bg-success"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-header wd-200">
              <ul class="list-unstyled user-profile-nav">
                <li><a href=""><i class="icon ion-ios-person"></i>Edit Profile</a></li>
                <li><a href=""><i class="icon ion-ios-gear"></i>Settings</a></li>
                <li><a href="../Logout.php"><i class="icon ion-power"></i> Sign Out</a></li>
              </ul>
            </div><!-- dropdown-menu -->
          </div><!-- dropdown -->
        </nav>
      </div><!-- br-header-right -->
    </div><!-- br-header -->
    <!-- ########## END: HEAD PANEL ########## -->

    <!-- ########## START: RIGHT PANEL ########## -->
    <div class="br-sideright">
      <ul class="nav nav-tabs sidebar-tabs" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" data-toggle="tab" role="tab" href="#contacts"><i class="icon ion-ios-contact-outline tx-24"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" role="tab" href="#attachments"><i class="icon ion-ios-folder-outline tx-22"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" role="tab" href="#calendar"><i class="icon ion-ios-calendar-outline tx-24"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" role="tab" href="#settings"><i class="icon ion-ios-gear-outline tx-24"></i></a>
        </li>
      </ul><!-- sidebar-tabs -->
    </div><!-- br-sideright -->
    <!-- ########## END: RIGHT PANEL ########## --->

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
      <div class="pd-30">
        <h4 class="tx-gray-800 mg-b-5">Dashboard</h4>
        <p class="mg-b-0">Do big things with Bracket, the responsive bootstrap 4 admin template.</p>
      </div><!-- d-flex -->

      <div class="br-pagebody mg-t-5 pd-x-30">
        <div class="row row-sm">
          <div class="col-sm-6 col-xl-3">
            <div class="bg-teal rounded overflow-hidden">
              <div class="pd-25 d-flex align-items-center">
                <i class="ion ion-earth tx-60 lh-0 tx-white op-7"></i>
                <div class="mg-l-20">
                  <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Today's Visits</p>
                  <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">1,975,224</p>
                  <span class="tx-11 tx-roboto tx-white-6">24% higher yesterday</span>
                </div>
              </div>
            </div>
          </div><!-- col-3 -->
          <div class="col-sm-6 col-xl-3 mg-t-20 mg-sm-t-0">
            <div class="bg-danger rounded overflow-hidden">
              <div class="pd-25 d-flex align-items-center">
                <i class="ion ion-bag tx-60 lh-0 tx-white op-7"></i>
                <div class="mg-l-20">
                  <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Today Sales</p>
                  <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">$329,291</p>
                  <span class="tx-11 tx-roboto tx-white-6">$390,212 before tax</span>
                </div>
              </div>
            </div>
          </div><!-- col-3 -->
          <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
            <div class="bg-primary rounded overflow-hidden">
              <div class="pd-25 d-flex align-items-center">
                <i class="ion ion-monitor tx-60 lh-0 tx-white op-7"></i>
                <div class="mg-l-20">
                  <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">% Unique Visits</p>
                  <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">54.45%</p>
                  <span class="tx-11 tx-roboto tx-white-6">23% average duration</span>
                </div>
              </div>
            </div>
          </div><!-- col-3 -->
        </div><!-- row -->

            <div class="card bd-0 shadow-base pd-30 mg-t-20">
              <div class="d-flex align-items-center justify-content-between mg-b-30">
                <div>
                  <h6 class="tx-13 tx-uppercase tx-inverse tx-semibold tx-spacing-1">Newly Registered Users</h6>
                  <p class="mg-b-0"><i class="icon ion-calendar mg-r-5"></i> From October 2017 - December 2017</p>
                </div>
                <a href="" class="btn btn-outline-info btn-oblong tx-11 tx-uppercase tx-mont tx-medium tx-spacing-1 pd-x-30 bd-2">See more</a>
              </div><!-- d-flex -->

              <table class="table table-valign-middle mg-b-0">
                <tbody>
                  <tr>
                    <td class="pd-l-0-force">
                      <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                    </td>
                    <td>
                      <h6 class="tx-inverse tx-14 mg-b-0">Deborah Miner</h6>
                      <span class="tx-12">@deborah.miner</span>
                    </td>
                    <td>Nov 01, 2017</td>
                    <td><span id="sparkline1">1,4,4,7,5,9,4,7,5,9,1</span></td>
                    <td class="pd-r-0-force tx-center"><a href="" class="tx-gray-600"><i class="icon ion-more tx-18 lh-0"></i></a></td>
                  </tr>
                  <tr>
                    <td class="pd-l-0-force">
                      <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                    </td>
                    <td>
                      <h6 class="tx-inverse tx-14 mg-b-0">Belinda Connor</h6>
                      <span class="tx-12">@belinda.connor</span>
                    </td>
                    <td>Oct 28, 2017</td>
                    <td><span id="sparkline2">1,3,6,4,5,8,4,2,4,5,0</span></td>
                    <td class="pd-r-0-force tx-center"><a href="" class="tx-gray-600"><i class="icon ion-more tx-18 lh-0"></i></a></td>
                  </tr>
                  <tr>
                    <td class="pd-l-0-force">
                      <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                    </td>
                    <td>
                      <h6 class="tx-inverse tx-14 mg-b-0">Andrew Wiggins</h6>
                      <span class="tx-12">@andrew.wiggins</span>
                    </td>
                    <td>Oct 27, 2017</td>
                    <td><span id="sparkline3">1,2,4,2,3,6,4,2,4,3,0</span></td>
                    <td class="pd-r-0-force tx-center"><a href="" class="tx-gray-600"><i class="icon ion-more tx-18 lh-0"></i></a></td>
                  </tr>
                  <tr>
                    <td class="pd-l-0-force">
                      <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                    </td>
                    <td>
                      <h6 class="tx-inverse tx-14 mg-b-0">Brandon Lawrence</h6>
                      <span class="tx-12">@brandon.lawrence</span>
                    </td>
                    <td>Oct 27, 2017</td>
                    <td><span id="sparkline4">1,4,4,7,5,9,4,7,5,9,1</span></td>
                    <td class="pd-r-0-force tx-center"><a href="" class="tx-gray-600"><i class="icon ion-more tx-18 lh-0"></i></a></td>
                  </tr>
                  <tr>
                    <td class="pd-l-0-force">
                      <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                    </td>
                    <td>
                      <h6 class="tx-inverse tx-14 mg-b-0">Marilyn Tarter</h6>
                      <span class="tx-12">@marilyn.tarter</span>
                    </td>
                    <td>Oct 27, 2017</td>
                    <td><span id="sparkline5">1,3,6,4,5,8,4,2,4,5,0</span></td>
                    <td class="pd-r-0-force tx-center"><a href="" class="tx-gray-600"><i class="icon ion-more tx-18 lh-0"></i></a></td>
                  </tr>
                </tbody>
              </table>
            </div><!-- card -->
          </div><!-- col-9 -->
          <div class="col-4">
          </div><!-- col-3 -->
        </div><!-- row -->

    <script src="../lib/jquery/jquery.js"></script>
    <script src="../lib/popper.js/popper.js"></script>
    <script src="../lib/bootstrap/bootstrap.js"></script>
    <script src="../lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
    <script src="../lib/moment/moment.js"></script>
    <script src="../lib/jquery-ui/jquery-ui.js"></script>
    <script src="../lib/jquery-switchbutton/jquery.switchButton.js"></script>
    <script src="../lib/peity/jquery.peity.js"></script>

    <script src="../js/bracket.js"></script>
  </body>
</html>
