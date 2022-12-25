<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="img/icons/favicon.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="canonical" href="https://demo-basic.adminkit.io/" />

    <title>Add Animals</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
    <meta name="author" content="AdminKit">
    <meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">





    <link href="css/app.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">

</head>

<body>


    <main class="d-flex w-100">
        <div class="container d-flex flex-column">
            <div class="row vh-100">
                <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
                    <div class="d-table-cell align-left">

                        <div class="text-center mt-4">
                            <h1 class="h2">Add Animals</h1>
                            <p class="lead">
                                Here You Can Add Multiple Types of Questions.
                            </p>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <div class="m-sm-4">
                                    <form method="post" action="">
                                        <div class="mb-3">
                                            <i data-feather="user"></i>&nbsp;&nbsp;<label class="form-label">Question 1 :-</label>
                                            <input class="form-control form-control-lg" type="text" name="user_id" placeholder="Enter Question 1" required />
                                        </div>
                                        <div class="mb-3">
                                            <i data-feather="pocket"></i>&nbsp;&nbsp;<label class="form-label">Question 2 :-</label>
                                            <input class="form-control form-control-lg" type="text" name="animal_id" placeholder="Enter Question 2" required />
                                        </div>
                                        <div class="mb-3">
                                            <i data-feather="pocket"></i>&nbsp;&nbsp;<label class="form-label">Question 3 :-</label>
                                            <input class="form-control form-control-lg" type="text" name="animal_id" placeholder="Enter Question 3" required />
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
    </main>
</body>

</html>
<script src="js/app.js"></script>
<script src="js/home.js"></script>


<?php
include 'Database.php';

if (isset($_POST['save'])) {

    $que1 = $_POST['que1'];
    $que2 = $_POST['que2'];
    $que3 = $_POST['que3'];
    $sql = "insert into suravy (que1,que2,que3) values ('$que1','$que2','$que3')";
    $connect->query($sql);
    echo "<script>alert('Suravay Created successfully!'); window.location='scheme.php'</script>";
}

?>