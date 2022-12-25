<!DOCTYPE html>
<html lang="en">
<?php
include "database.php";
$qry = mysqli_query($connect, "select * from location");
$qry1 = mysqli_query($connect, "select * from location");
$qry2 = mysqli_query($connect, "select * from location");
$qry3 = mysqli_query($connect, "select * from location");
?>

<head>
    <meta charset="utf-8">
    <title>Add User</title>
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

    <link rel="stylesheet" href="./css_final.css">

    <script src="./filter.js"></script>
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->
        <!-- Sidebar Start -->
        <?php
        include "sidebar/activities/2.php"
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

                                <h3>Add User</h3>
                            </div>
                            <form action="" method="post">

                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="u_name" placeholder="User Name" required>
                                    <label for="floatingInput" col-index=1>User Name</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control" name="password" placeholder="Create Password" required>
                                    <label for="floatingInput" col-index=2>Create Password</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="number" class="form-control" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength=10 name="mobile_no" placeholder="Mobile No." required>
                                    <label for="floatingInput" col-index=3>Mobile No.</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control" name="email" placeholder="Email ID" required>
                                    <label for="floatingInput" col-index=4>Email ID</label>
                                </div>
                                <div class="form-floating mb-3">

                                    <select name="village">
                                        <option>Select Village Name</option>
                                        <?php
                                        while ($res = mysqli_fetch_array($qry)) {
                                            echo '<option value="' . $res["village"] . '">' . $res["village"] . '</option>';
                                        }
                                        ?>
                                    </select>

                                </div>
                                <div class="form-floating mb-3">

                                    <select name="taluka">
                                        <option>Select Taluka Name</option>
                                        <?php
                                        while ($res1 = mysqli_fetch_array($qry1)) {
                                            echo '<option value="' . $res1["taluka"] . '">' . $res1["taluka"] . '</option>';
                                        }
                                        ?>
                                    </select>

                                </div>
                                <div class="form-floating mb-3">

                                    <select name="district">
                                        <option> Select District Name</option>
                                        <?php
                                        while ($res2 = mysqli_fetch_array($qry2)) {
                                            echo '<option value="' . $res2["district"] . '">' . $res2["district"] . '</option>';
                                        }
                                        ?>
                                    </select>

                                </div>
                                <div class="form-floating mb-3">

                                    <select name="state">
                                        <option>Select State Name</option>
                                        <?php
                                        while ($res3 = mysqli_fetch_array($qry3)) {
                                            echo '<option value="' . $res3["state"] . '">' . $res3["state"] . '</option>';
                                        }
                                        ?>
                                    </select>


                                </div>
                                <button type="submit" name="submit" class="btn btn-primary py-3 w-100 mb-4">Register</button>
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

$dairy_id = $res["dairy_id"];
if (isset($_POST['submit'])) {
    session_start();
    $user_id = $_SESSION['user_id'];
    $data = mysqli_query($connect, "select dairy_id from dairy_owner where user_id='$user_id'");
    $row0 = mysqli_num_rows($data);
    $res = mysqli_fetch_assoc($data);
    $dairy_id = $res["dairy_id"];
    $user_name = $_POST['u_name'];
    $password = $_POST['password'];
    $mobile_no = $_POST['mobile_no'];
    $email = $_POST['email'];
    $village = $_POST['village'];
    $taluka = $_POST['taluka'];
    $district = $_POST['district'];
    $state = $_POST['state'];

    $password = sha1($password);
    $sql = mysqli_query($connect, "select * from user WHERE email='$email'");
    $row = mySQLi_num_rows($sql);
    if ($row > 0) {
        echo "<script>alert('E-mail already taken!'); window.location='add_user.php'</script>";
    } else {
        $sql = "insert into user (user_name,role,password,mobile_no,email,village,taluka,district,state) values ('$user_name','user','$password','$mobile_no','$email','$village','$taluka','$district','$state')";
        $connect->query($sql);
        $user_id = $connect->insert_id;
        $sql1 = "insert into dairy_user (user_id,dairy_id) values ('$user_id','$dairy_id')";
        $connect->query($sql);
        echo "<script>alert('Account successfully created!'); window.location='add_user.php'</script>";
    }
}
?>