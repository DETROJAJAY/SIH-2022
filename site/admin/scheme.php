<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
    <title>Add Schemes</title>
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
<div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        
        </div>
        <?php
          include "sidebar/activities/6.php"
            ?>

     <!-- Sidebar End -->

        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <?php
            include "header.php"
            ?>


    <main class="d-flex w-100">
        <div class="container d-flex flex-column">
            <div class="row vh-100">
                <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
                    <div class="d-table-cell align-left">

                        <div class="text-center mt-4">
                            <h1 class="h2">Add New Scheme </h1>
                            <p class="lead">
                                Here You Can Add Multiple Types of Questions.
                            </p>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <div class="m-sm-4">
                                    <form method="post" action="">
                                        <div class="mb-3">
                                            <i data-feather="user"></i>&nbsp;&nbsp;<label class="form-label">scheme name:-</label>
                                            <input class="form-control form-control-lg" type="text" name="scheme_name" placeholder="Enter scheme name" required />
                                        </div>
                                        <div class="mb-3">
                                            <i data-feather="user"></i>&nbsp;&nbsp;<label class="form-label">scheme details:-</label><br>
                                            <textarea name="detail"></textarea>
                                            <style>
                                                .textarea {
                                                    height: 300px;
                                                    width: 600px;
                                                }
                                            </style>
                                        </div>

                                        <div class="mb-3">
                                            <i data-feather="user"></i>&nbsp;&nbsp;<label class="form-label">Question 1 :-</label>
                                            <input class="form-control form-control-lg" type="text" name="que1" placeholder="Enter Question 1" required />
                                        </div>
                                        <div class="mb-3">
                                            <i data-feather="pocket"></i>&nbsp;&nbsp;<label class="form-label">Question 2 :-</label>
                                            <input class="form-control form-control-lg" type="text" name="que2" placeholder="Enter Question 2" required />
                                        </div>
                                        <div class="mb-3">
                                            <i data-feather="pocket"></i>&nbsp;&nbsp;<label class="form-label">Question 3 :-</label>
                                            <input class="form-control form-control-lg" type="text" name="que3" placeholder="Enter Question 3" required />
                                        </div>

                                        <div class="text-center mt-3">
                                            <button type="submit" id="save" name="save" class="btn btn-lg btn-primary">Save</button>&nbsp;&nbsp;&nbsp;
                                            <button type="reset" class="btn btn-lg btn-primary">Cancel</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main><br><br><br><br><br>
    <?php
            include "footer.php"
            ?>
            <!-- Footer End -->
        </div>
        <!-- Content End -->

                                            </div>
        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

</body>

</html>
<script src="js/app.js"></script>
<script src="js/home.js"></script>
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

<?php
include 'Database.php';

if (isset($_POST['save'])) {
    $scheme_name = $_POST['scheme_name'];
    $detail = $_POST['detail'];
    $que1 = $_POST['que1'];
    $que2 = $_POST['que2'];
    $que3 = $_POST['que3'];
    $sql = "insert into scheme (que1,que2,que3) values ('$que1','$que2','$que3')";
    $connect->query($sql);
    echo "<script>alert('Suravay Created successfully!'); window.location='scheme.php'</script>";
}

?>