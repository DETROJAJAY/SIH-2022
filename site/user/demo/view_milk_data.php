<!DOCTYPE html>
<html lang="en">
<head>

<?php
include('Database.php');

session_start();
	$user_id = $_SESSION['user_id'];
$data4 = mysqli_query($connect, "select * from user where user_id='$user_id'");
$row4 = mysqli_num_rows($data4);
$res4 = mysqli_fetch_array($data4);
?>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>View Milk Data</title>
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
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
  <!-- End layout styles -->
  <link rel="shortcut icon" href="../assets/images/favicon.png" />

  <link rel="manifest" href="/manifest.json" >
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
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
        <div class="content">
        <table id="table_id">
            <thead>
                <tr>

                    
                    <th>Total Animal</th>
                    <th>Liter</th>
                    <th>Fat</th>
                    <th>SNF</th>
                    <th>Date</th>
                    <th>Year</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = mysqli_query($connect, "select * from milk_collection where user_id='$user_id'");
                $row1 = mysqli_num_rows($query);

                while ($result1 = mysqli_fetch_assoc($query)) {
                    echo "
				<tr>
			
				<td>" . $result1['total_animal'] . "</td>
				<td>" . $result1['liter'] . "</td>
				<td>" . $result1['fat'] . "</td>
				<td>" . $result1['snf'] . "</td>
				<td>" . $result1['date'] . "</td>
				<td>" . $result1['year'] . "</td>
				</tr>

				";
                }
                ?>
            </tbody>
        </table>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#table_id').DataTable();
            });
        </script>
        <style>
        body {
            counter-reset: my-sec-counter;
            font-family: 'Open Sans', sans-serif;
            font-size: 14px;
        }

        #DataTable {
            position: relative;
            padding: 15px;
            box-sizing: border-box;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            background: #0096FF;
            color: white;
            font-weight: bold;
            cursor: cell;
        }

        table th:first-child {
            border-radius: 10px 0 0 10px;
        }

        table th:last-child {
            border-radius: 0 10px 10px 0;
        }

        table td:first-child {
            border-radius: 10px 0 0 10px;
        }

        table td:last-child {
            border-radius: 0 10px 10px 0;
        }

        td,
        th {

            font-size: 16px;
            padding: 6px;
            border: 1px solid #ccc;
            text-align: left;

        }

        tr:nth-of-type(even) {
            background-color: White;
        }

        @media only screen and (max-width: 760px),
        (min-device-width: 768px) and (max-device-width: 1024px) {

            table {
                margin-top: 106px;
            }

            /* Force table to not be like tables anymore */
            table,
            thead,
            tbody,
            th,
            td,
            tr {
                display: block;
            }

            /* Hide table headers (but not display: none;, for accessibility) */
            thead tr {
                position: absolute;
                top: -9999px;
                left: -9999px;
            }

            tr {
                margin: 0 0 1rem 0;
                overflow: auto;
                border-bottom: 1px solid #ccc;
            }



            tbody tr:before {
                counter-increment: my-sec-counter;
                content: "";
                background-color: #333;
                display: block;
                height: 1px;
            }


            tr:nth-child(odd) {
                background: #ccc;
            }

            td {
                /* Behave  like a "row" */
                border: none;
                border-bottom: 1px solid #eee;
                margin-right: 0%;
                display: block;
                border-right: 1px solid #ccc;
                border-left: 1px solid #ccc;
                box-sizing: border-box;
            }

            td:before {
                /* Top/left values mimic padding */
                font-weight: bold;
                width: 50%;
                float: left;
                box-sizing: border-box;
                padding-left: 5px;
            }

            /*
	   Label the data
   You could also use a data-* attribute and content for this. That way "bloats" the HTML, this way means you need to keep HTML and CSS in sync. Lea Verou has a clever way to handle with text-shadow.
	   */
            td:nth-of-type(1):before {
                content: "Total Animal";
            }

            td:nth-of-type(2):before {
                content: "Liter";
            }

            td:nth-of-type(3):before {
                content: "Fat";
            }

            td:nth-of-type(4):before {
                content: "SNF";
            }

            td:nth-of-type(5):before {
                content: "Date";
            }

            td:nth-of-type(6):before {
                content: "Year";
            }



            .box ul.pagination {
                position: relative !important;
                bottom: auto !important;
                right: auto !important;
                display: block !important;
                width: 100%;
            }

            .box {
                text-align: center;
                position: fixed;
                width: 100%;
                background-color: #0096FF;
                top: 0px;
                left: 0px;
                padding: 15px;
                box-sizing: border-box;
                border-bottom: 1px solid #ccc;
            }

            .box ul.pagination {
                display: block;
                margin: 0px;
            }

            .box .dvrecords {
                display: block;
                margin-bottom: 10px;
            }

            .pagination>li {
                display: inline-block;
            }
        }

        .top-filters {
            font-size: 0px;
        }

        .search-field {
            text-align: right;
            margin-bottom: 5px;
        }

        .dd-number-of-recoeds {
            font-size: 12px;
        }

        .search-field,
        .dd-number-of-recoeds {
            display: inline-block;
            width: 50%;
        }

        .box ul.pagination {
            position: absolute;
            bottom: -45px;
            right: 15px;
        }

        .box .dvrecords {
            padding: 5px 0;
        }

        .box .dvrecords .records {
            margin-right: 5px;
        }
    </style>
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

  <script>
        //if browser support service worker
        if('serviceWorker' in navigator) {
          navigator.serviceWorker.register('sw.js');
        };
    </script>
    
</body>
</html> 