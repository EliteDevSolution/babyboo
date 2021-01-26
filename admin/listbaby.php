<?php 
  session_start();
  include_once '../db_config.php';
  include_once '../function.php';
  if(isset($_POST['submit']) && isset($_POST['del_no']))
  {
    $del_no = $_POST['del_no'];
    $sql = "Delete from bayi where No='$del_no'";
    insertData($sql, $conn);
  }
  $sql = "Select * From bayi order by No";
  $result = viewData($sql, $conn);
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
    <style>
      .btn
      {
        cursor: pointer;
      }
    </style>
  </head>

  <body>
    <!-- ########## START: LEFT PANEL ########## -->
    <div class="br-logo br-header"><a href=""><span></span><span></span></a></div>
    <div class="br-sideleft overflow-y-auto">
      <label class="sidebar-label pd-x-15 mg-t-20">Navigation</label>
      <div class="br-sideleft-menu">
        <a href="index.php" class="br-menu-link">
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
              <?php 
              echo $_SESSION['Id']; 
              ?>
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
      <div class="br-pageheader pd-y-15 pd-l-20">
      </div><!-- br-pageheader -->
      <div class="br-pagebody">
        <!-- start you own content here -->
          <h6 class="tx-inverse tx-uppercase tx-bold tx-14 mg-t-80 mg-b-10">List of Babies</h6>
          <br>
        <table class="table table-bordered table-colored table-warning">
            <thead>
              <tr>
                <th width="3%">No</th>
                <th width="8%">Date</th>
                <th width="20%">Location Found</th>
                <th width="20%">Status Of Baby</th>
                <th width="20%">Parents/Guardian</th>
                <th width="15%">Phone-No</th>
                <th width="20%">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
               foreach($result as $key => $row)
               {
                 $insertHtml = "";
                 $no = $row['No'];
                  $insertHtml .= '<tr>';
                  $insertHtml .= '<td>'.$row['No'].'</td>';
                  $insertHtml .= '<td>'.$row['Tarikh'].'</td>';
                  $insertHtml .= '<td>'.$row['Lokasi'].'</td>';
                  $insertHtml .= '<td>'.$row['Status'].'</td>';
                  $insertHtml .= '<td>'.$row['Orang'].'</td>';
                  $insertHtml .= '<td>'.$row['NoFon'].'</td>';
                  $insertHtml .= '<td>'."<form method='post'><a href='updatebaby.php?no=$no' class='text-primary'>Update</a> |<input type='hidden' name='del_no' value='$no'><input class='text-danger' type='submit' name='submit' style='border: none;background: transparent;' value='Delete'/>"
                  .'</form></td>';
                  $insertHtml .= '</tr>';
                  echo $insertHtml;
               }
              ?>
            </tbody>
          </table>


      </div><!-- br-pagebody -->

    </div><!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->

    <script src="../lib/jquery/jquery.js"></script>
    <script src="../lib/popper.js/popper.js"></script>
    <script src="../lib/bootstrap/bootstrap.js"></script>
    <script src="../lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
    <script src="../lib/moment/moment.js"></script>
    <script src="../lib/jquery-ui/jquery-ui.js"></script>
    <script src="../lib/jquery-switchbutton/jquery.switchButton.js"></script>
    <script src="../lib/peity/jquery.peity.js"></script>

    <script src="../js/bracket.js"></script>
    <script>
      $(document).ready(function(){
        $('form').on('submit', function(evt){
          if(confirm('Are you sure delete?'))
          {
            $('form').unbind('submit').submit();
          } else
          {
            evt.preventDefault();
          }
        });
      });
      


    </script>


  </body>
</html>
