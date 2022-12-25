<?php
include 'Database.php';

$animal_id = $_GET['aid'];
$query = "SELECT * from animal where animal_id=$animal_id ";
$data = mysqli_query($connect, $query);
$result = mysqli_fetch_assoc($data);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="img/icons/favicon.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="canonical" href="https://demo-basic.adminkit.io/" />

    <title>Edit Selected User</title>

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
    <?php
    include "sidebar/view_all_users.php"
    ?>
    <?php
    include "header.php"
    ?>


    <main class="d-flex w-1000">
        <div class="container d-flex flex-column">
            <div class="row vh-1000">
                <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
                    <div class="d-table-cell align-left">

                        <div class="text-center mt-4">
                            <h1 class="h2">Edit This User</h1>

                        </div>

                        <div class="card">
                            <div class="card-body">
                                <div class="m-sm-4">
                                    <form method="post" action="">

                                        <div class="mb-3">
                                            <i data-feather="user"></i>&nbsp;&nbsp;<label class="form-label">User ID :-</label>
                                            <input class="form-control form-control-lg" type="text" value="<?php echo $result['animal_id']; ?>" name="animal_id" required />
                                        </div>
                                        <div class="mb-3">
                                            <i data-feather="user-check"></i>&nbsp;&nbsp;<label class="form-label">Animal Type :-</label>
                                            <input class="form-control form-control-lg" type="text" value="<?php echo $result['animal_type'] ?>" name="animal_type" required />
                                        </div>
                                        <div class="mb-3">
                                            <input class="form-control form-control-lg" type="text" value="<?php echo $result['age'] ?>" name="age" required />
                                        </div>
                                        <div class="mb-3">
                                            <i data-feather="mail"></i>&nbsp;&nbsp;<label class="form-label">Breed Type :-</label>
                                            <input class="form-control form-control-lg" type="text" value="<?php echo $result['breed_type'] ?>" name="breed" required />
                                        </div>
                                        <div class="mb-3">
                                            <i data-feather="map-pin"></i>&nbsp;&nbsp;<label class="form-label">User Id :-</label>
                                            <input class="form-control form-control-lg" type="text" value="<?php echo $result['user_id'] ?>" name="user_id" required />
                                        </div>


                                        <div class="text-center mt-3">
                                            <button type="submit" name="Update" class="btn btn-lg btn-primary">Update</button>
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

    </main>
    <?php
    include "footer.php"
    ?>
</body>

</html>
<script src="js/app.js"></script>
<script src="js/home.js"></script>


<?php
if (isset($_POST['Update'])) {
    $user_id = $_POST['user_id'];

    $animal_type = $_POST['animal_type'];
    $age = $_POST['age'];
    $breed_type = $_POST['breed'];
    $sql1 = "UPDATE animal SET user_id='$user_id', animal_type='$animal_type', age='$age', breed_type='$breed_type' where animal_id=$animal_id";
    $data1 = mysqli_query($connect, $sql1);
    if ($data1) {
        echo "<script>alert('data updated successfully'); window.location='view_users.php'</script>";
    } else {
        echo "failed";
    }
}
?>