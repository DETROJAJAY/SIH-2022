<!DOCTYPE html>
<html lang="en">
<head>


<?php
include('Database.php');
session_start();
	$user_id = $_SESSION['user_id'];
$data = mysqli_query($connect, "select SUM(liter) AS liter from milk_collection where user_id='$user_id'");
$row0 = mysqli_num_rows($data);
$res = mysqli_fetch_array($data);
$data1 = mysqli_query($connect, "select AVG(fat) AS fat from milk_collection where user_id='$user_id'");
$row1 = mysqli_num_rows($data1);
$res1 = mysqli_fetch_array($data1);
$data2 = mysqli_query($connect, "select AVG(SNF) AS snf from milk_collection where user_id='$user_id'");
$row2 = mysqli_num_rows($data2);
$res2 = mysqli_fetch_array($data2);
$data3 = mysqli_query($connect, "select count(*) As total_animal from animal where user_id='$user_id'");
$row3 = mysqli_num_rows($data3);
$res3 = mysqli_fetch_array($data3);
$data4 = mysqli_query($connect, "select * from user where user_id='$user_id'");
$row4 = mysqli_num_rows($data4);
$res4 = mysqli_fetch_array($data4);
?>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>User Data</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="../assets/vendors/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="../assets/vendors/jvectormap/jquery-jvectormap.css">
  <!-- End plugin css for this page -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="../assets/css/demo/style.css">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="../assets/images/favicon.png" />


</head>
<body>

  <div class="body-wrapper">
    <!-- partial:partials/_sidebar.html -->
    <aside class="mdc-drawer mdc-drawer--dismissible mdc-drawer--open">
      <div class="mdc-drawer__header">
        <a href="index.html" class="brand-logo">
          <img src="../assets/images/dfms.png" height="60px" width="200px"alt="logo">
        </a>
      </div>
      <div class="mdc-drawer__content">
     
        <div class="mdc-list-group">
          <nav class="mdc-list mdc-drawer-menu">
            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-drawer-link" href="index.php">
                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">home</i>
                Dashboard
              </a>
            </div>
            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-drawer-link" href="view_animal_data.php">
                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">track_changes</i>
                View Animal Data
              </a>
            </div>
            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-expansion-panel-link" href="view_milk_data.php" data-toggle="expansionPanel" data-target="ui-sub-menu">
                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">dashboard</i>
                View Milk Data
              </a>
</div>
              <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-drawer-link" href="logout.php">
                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true"></i>
                LogOut
              </a>
            
              <div class="mdc-expansion-panel" id="ui-sub-menu">
                <nav class="mdc-list mdc-drawer-submenu">
                  
                </nav>
              </div>
            </div>
           
        </div>
      </div>
    </aside>
    <!-- partial -->
    <div class="main-wrapper mdc-drawer-app-content">
      <!-- partial:partials/_navbar.html -->
      <header class="mdc-top-app-bar">
        <div class="mdc-top-app-bar__row">
          <div class="mdc-top-app-bar__section mdc-top-app-bar__section--align-start">
            <button class="material-icons mdc-top-app-bar__navigation-icon mdc-icon-button sidebar-toggler">menu</button>
          
           
          <div class="mdc-top-app-bar__section mdc-top-app-bar__section--align-end mdc-top-app-bar__section-right">
            <div class="menu-button-container menu-profile d-none d-md-block">
              <button class="mdc-button mdc-menu-button">
                <span class="d-flex align-items-center">
                  <span class="figure">
                    <img src="../assets/images/faces/user.jpg" alt="user" class="user">
                  </span>
                  <span class="user-name"><?php echo $res4['user_name']; ?></span>
                </span>
              </button>
              <a href="profile.php">
              <div class="mdc-menu mdc-menu-surface" tabindex="-1">
                <ul class="mdc-list" role="menu" aria-hidden="true" aria-orientation="vertical">
                  <li class="mdc-list-item" role="menuitem">
                    <div class="item-thumbnail item-thumbnail-icon-only">
                      <i class="mdi mdi-account-edit-outline text-primary"></i>
                    </div>
                   
                    <div class="item-content d-flex align-items-start flex-column justify-content-center">
                     <h6 class="item-subject font-weight-normal"> View profile</h6></a>
                    </div>
                  </li>
                  
                      
                      
                    </div>
                  </li>
                </ul>
              </div>
            </div>
           
      </header>
      <!-- partial -->
      <div class="page-wrapper mdc-toolbar-fixed-adjust">
        <main class="content-wrapper">
          <div class="mdc-layout-grid">
            <div class="mdc-layout-grid__inner">
              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3-desktop mdc-layout-grid__cell--span-4-tablet">
                <div class="mdc-card info-card info-card--success">
                  <div class="card-inner">
                    <h5 class="card-title">Liter</h5>
                    <h5 class="font-weight-light pb-2 mb-1 border-bottom"><?php echo $res['liter']; ?> Liters</h5>
          
                    <div class="card-icon-wrapper">
                      <i class="material-icons">dvr</i>
                    </div>
                  </div>
                </div>
              </div>
              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3-desktop mdc-layout-grid__cell--span-4-tablet">
                <div class="mdc-card info-card info-card--danger">
                  <div class="card-inner">
                    <h5 class="card-title">Fat</h5>
                    <h5 class="font-weight-light pb-2 mb-1 border-bottom"><?php echo $res1['fat']; ?> %</h5>
                   
                    <div class="card-icon-wrapper">
                      <i class="material-icons">colorize</i>
                    </div>
                  </div>
                </div>
              </div>
              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3-desktop mdc-layout-grid__cell--span-4-tablet">
                <div class="mdc-card info-card info-card--primary">
                  <div class="card-inner">
                    <h5 class="card-title">SNF</h5>
                    <h5 class="font-weight-light pb-2 mb-1 border-bottom"><?php echo $res2['snf']; ?> %</h5>
                   
                    <div class="card-icon-wrapper">
                      <i class="material-icons">trending_up</i>
                    </div>
                  </div>
                </div>
              </div>
              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3-desktop mdc-layout-grid__cell--span-4-tablet">
                <div class="mdc-card info-card info-card--info">
                  <div class="card-inner">
                    <h5 class="card-title">Animals</h5>
                    <h5 class="font-weight-light pb-2 mb-1 border-bottom"><?php echo $res3['total_animal']; ?></h5>
                    
                    <div class="card-icon-wrapper">
                      <i class="material-icons">pets</i>
                    </div>
                  </div>
                </div>
              </div>
             
        </main>
        <!-- partial:partials/_footer.html -->
        <footer>
          <div class="mdc-layout-grid">
            <div class="mdc-layout-grid__inner">
              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                <span class="text-center text-sm-left d-block d-sm-inline-block tx-14">Copyright © <a href="index.php" target="_blank">Space Makers </a></span>
              </div>
            </div>
          </div>
        </footer>
        <!-- partial -->
      </div>
    </div>
  </div>
  <!-- plugins:js -->
  <script src="../assets/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="../assets/vendors/chartjs/Chart.min.js"></script>
  <script src="../assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
  <script src="../assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="../assets/js/material.js"></script>
  <script src="../assets/js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="../assets/js/dashboard.js"></script>
  <!-- End custom js for this page-->



    
</body>
</html> 