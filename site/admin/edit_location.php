<?php
include 'Database.php';

$village = $_GET['vil'];
$taluka = $_GET['tal'];
$district = $_GET['dis'];
$state = $_GET['st'];
$query = "SELECT * from location where village='$village' and taluka='$taluka' and district='$district'  state='$state'  ";
$data = mysqli_query($connect, $query);
$result = mysqli_fetch_assoc($data);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Edit Selected Location</title>
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

    <!-- Tables -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
    <?php
    //include "sidebar/activities/5.php"
    ?>
    <div class="content">
        <?php
        include "header.php"
        ?>



        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: auto;">
                <div class="col-15 col-sm-15 col-md-15 col-lg-15 col-xl-14">
                    <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">

                            <h3>Edit Selected Location</h3>
                        </div>
                        <form action="" method="post">

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" value="<?php echo $result['village'] ?>" name="village" placeholder="Village Name" required>
                                <label for="floatingInput">Village Name</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" value="<?php echo $result['taluka'] ?>" name="taluka" placeholder="Taluka Name" required>
                                <label for="floatingInput">Taluka Name</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" value="<?php echo $result['district'] ?>" name="district" placeholder="District Name" required>
                                <label for="floatingInput">District Name</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" value="<?php echo $result['state'] ?>" name="state" placeholder="State Name" required>
                                <label for="floatingInput">State Name</label>
                            </div>
                            <button type="submit" name="Update" value="Update" class="btn btn-primary py-3 w-100 mb-4">Update</button>
                    </div>
                </div>
            </div>
        </div>
        </form>
        <?php
        include "footer.php"
        ?>
    </div>
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

</body>

</html>
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


<?php
include "Database.php";
if (isset($_POST['Update'])) {
    $village = $_POST['village'];
    $taluka = $_POST['taluka'];
    $district = $_POST['district'];
    $state = $_POST['state'];
    $sql = "UPDATE location SET village='$village', taluka='$taluka', district='$district', state='$state' ";
    $data = mysqli_query($connect, $sql);

    if ($data) {
        echo "<script>alert('data update successfully'); window.location='add_location.php'</script>";
    } else {
        echo "failed";
    }
}
?>