<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Add Locations</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- Favicon -->
    <link href="img/favicon.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

    <!-- Spinner End -->
    <!-- Sidebar Start -->
    <?php
    include "sidebar/activities/7.php"
    ?>


    <!-- Sidebar End -->

    <!-- Content Start -->
    <div class="content">
        <!-- Navbar Start -->
        <?php
        include "header.php"
        ?>
        <!-- Navbar End -->

        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: auto;">
                <div class="col-15 col-sm-15 col-md-15 col-lg-15 col-xl-14">
                    <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <table id="table_id">
                                <thead>
                                    <tr>

                                        <th>Village</th>
                                        <th>Taluka</th>
                                        <th>District</th>
                                        <th>State</th>
                                        <th>Operations</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include "Database.php";
                                    $query = mysqli_query($connect, "select * from location");
                                    $row1 = mysqli_num_rows($query);

                                    while ($result1 = mysqli_fetch_assoc($query)) {
                                        echo "
			   <tr>
			
			   <td>" . $result1['village'] . "</td>
			   <td>" . $result1['taluka'] . "</td>
			   <td>" . $result1['district'] . "</td>
			   <td>" . $result1['state'] . "</td>
			   <td><a href='edit_location.php ? vil=$result1[village] & tal=$result1[taluka] & dis=$result1[district] & st=$result1[state]' class='button button1'>Edit</a>
			   <a href='delete_animal.php ? v=$result1[village]' onclick='returncheckdelete()' class='button button2'>Delete</a>
			  
			   </tr>
			   ";
                                    }
                                    ?>
                                </tbody>
                            </table>
                            </main>
                            <script type="text/javascript">
                                $(document).ready(function() {
                                    $('#table_id').DataTable();
                                });
                            </script>

</body>

</html>
<style>
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

        font-size: 17px;
        padding: 5px;
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
            content: "User ID";
        }

        td:nth-of-type(2):before {
            content: "User Name";
        }

        td:nth-of-type(3):before {
            content: "Mobile No";
        }

        td:nth-of-type(4):before {
            content: "Email";
        }

        td:nth-of-type(5):before {
            content: "Village";
        }

        td:nth-of-type(6):before {
            content: "Taluka";
        }

        td:nth-of-type(7):before {
            content: "District";
        }

        td:nth-of-type(8):before {
            content: "State";
        }

        td:nth-of-type(9):before {
            content: "Operations";
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


</div>
<h3>Add Locations</h3>
<form action="" method="post">
    <div class="form-floating mb-3">
        <input type="text" class="form-control" name="village" placeholder="Village Name" required>
        <label for="floatingInput">Village Name</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" class="form-control" name="taluka" placeholder="Taluka Name" required>
        <label for="floatingInput">Taluka Name</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" class="form-control" name="district" placeholder="District Name" required>
        <label for="floatingInput">District Name</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" class="form-control" name="state" placeholder="State Name" required>
        <label for="floatingInput">State Name</label>
    </div>
    <button type="submit" name="submit" class="btn btn-primary py-3 w-100 mb-4">Add</button>
    </div>
    </div>
    </div>
    </div>
</form>
<!-- Footer Start -->
<?php
include "footer.php"
?>
<!-- Footer End -->
</div>
<!-- Content End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</div>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="lib/chart/chart.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/tempusdominus/js/moment.min.js"></script>
<script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
<script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
<script src="https://kit.fontawesome.com/2f4725a179.js"></script>
<!-- Template Javascript -->
<script src="js/main.js"></script>
</body>

</html>
<?php
include 'Database.php';

if (isset($_POST['submit'])) {
    $village = $_POST['village'];
    $taluka = $_POST['taluka'];
    $district = $_POST['district'];
    $state = $_POST['state'];


    $sql = "insert into location (village,taluka,district,state) values ('$village','$taluka','$district','$state')";
    $connect->query($sql);

    echo "<script>alert('Data Added Successfully!'); window.location='add_location.php'</script>";
}



?>