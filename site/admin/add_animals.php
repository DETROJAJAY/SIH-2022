<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Add Animals</title>
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
    <script type="text/javascript">
        $(function() {
            $("#animal_type").change(function() {
                if ($(this).value() == "Cow") {
                    $("#breeds").removeAttr("disabled");
                    $("#breeds").focus();
                } else {
                    $("#breeds").attr("disabled", "disabled");
                }
            });
        });
    </script>

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
        include "sidebar/activities/3.php"
        ?>


        <!-- Sidebar End -->

        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <?php
            include "header.php"
            ?>
            <?php
            include('Database.php');
            session_start();
            $query = mysqli_query($connect, "select user_id from user");
            $row1 = mysqli_num_rows($query);
            ?>
            <!-- Navbar End -->

            <div class="container-fluid">
                <div class="row h-100 align-items-center justify-content-center" style="min-height: auto;">
                    <div class="col-15 col-sm-15 col-md-15 col-lg-15 col-xl-14">
                        <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                            <div class="d-flex align-items-center justify-content-between mb-3">

                                <h3>Add Animals</h3>
                            </div>
                            <form action="" method="post">
                                <div class="form-floating mb-3">
                                    <select name="user_id">
                                        <option>Select User Id</option>
                                        <?php
                                        while ($result = mysqli_fetch_array($query)) {
                                            echo '<option value="' . $result["user_id"] . '"> ' . $result["user_id"] . '</option>';
                                        }
                                        ?>
                                    </select>

                                </div>
                                <div>

                                    <select style=" border-radius: 5px; width: 100%; height: 50px; font-size: 18px; background-color:powderblue;" name="animal_type" id="animal_type" required>
                                        <option>Animal Types</option>
                                        <option value="Cow">Cow</option>
                                        <option value="Buffalo">Buffalo</option>
                                        <option value="Goat">Goat</option>
                                        <option value="Sheep">Sheep</option>
                                    </select>

                                </div><br>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="age" placeholder="Animal ID" required>
                                    <label for="floatingInput">Age</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <select style=" border-radius: 5px; width: 100%; height: 50px; font-size: 18px; background-color:powderblue;" name="breeds" id="breeds" required>
                                        <option>Animal Breeds</option>
                                        <option value="Gir Cow">Gir Cow</option>
                                        <option value="Arsi">Arsi</option>
                                        <option value="Abigar">Abigar</option>
                                        <option value="Albera">Albera</option>
                                    </select>
                                </div>
                                <button type="submit" name="submit" class="btn btn-primary py-3 w-100 mb-4">Submit</button>
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

    $user_id = $_POST['user_id'];
    $animal_type = $_POST['animal_type'];
    $age = $_POST['age'];
    $breed_type = $_POST['breed_type'];

    $sql = "insert into animal (user_id,animal_type,age,breed_type) values ('$user_id','$animal_type','$age','$breed_type')";
    $connect->query($sql);
    echo "<script>alert('Animal Added successfully!'); window.location='add_animals.php'</script>";
}




?>