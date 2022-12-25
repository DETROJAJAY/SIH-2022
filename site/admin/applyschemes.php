<?php
include('Database.php');
session_start();

$query = mysqli_query($connect, "select user_id,user_name from user where role='user' ");
$row1 = mysqli_num_rows($query);
?>
<!DOCTYPE html>
<html lang="en">
<?php
include "Database.php";
$qry = mysqli_query($connect, "select * from scheme");
$data = mysqli_num_rows($qry);
$res = mysqli_fetch_assoc($qry);
?>

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
                            <h1 class="h2">Apply Scheme </h1>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <div class="m-sm-4">
                                    <form method="post" action="">
                                        <div class="mb-3">
                                            <input class="form-control form-control-lg" type="text" name="scheme_name" placeholder="Enter scheme name" value="<?php echo $res['scheme_name']; ?> " readonly required />
                                        </div>
                                        <div class="mb-3">
                                            <select name="user_id">
                                                <option>Select User Id</option>
                                                <?php
                                                while ($result = mysqli_fetch_array($query)) {
                                                    echo '<option value="' . $result["user_id"] . ' - ' . $result["user_name"] . '"> ' . $result["user_id"] . '  -  ' . $result["user_name"] . '</option>';
                                                }
                                                ?>
                                            </select>
                                        </div>

                                        <div class="mb-3">

                                            <input class="form-control form-control-lg" type="text" name="que1" value="<?php echo $res['que1']; ?> " readonly required />
                                            <input type="radio" name="ans1" value="Yes">Yes
                                            <input type="radio" name="ans1" value="No">No
                                            <input type="text" name="ans1_d" placeholder="your answer">
                                        </div>
                                        <div class="mb-3">

                                            <input class="form-control form-control-lg" type="text" name="que2" placeholder="Enter Question 2" value="<?php echo $res['que2']; ?> " readonly required />
                                            <input type="radio" name="ans2" value="Yes">Yes
                                            <input type="radio" name="ans2" value="No">No
                                            <input type="text" name="ans2_d" placeholder="your answer">
                                        </div>
                                        <div class="mb-3">
                                            <input class="form-control form-control-lg" type="text" name="que3" placeholder="Enter Question 3" value="<?php echo $res['que3']; ?> " readonly required />
                                            <input type="radio" name="ans3" value="Yes">Yes
                                            <input type="radio" name="ans3" value="No">No
                                            <input type="text" name="ans3_d" placeholder="your answer">
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



<?php
include 'Database.php';

if (isset($_POST['save'])) {
    $user_id = $_POST['user_id'];
    $scheme_name = $_POST['scheme_name'];
    $ans1 = $_POST['ans1'];
    $ans1_d = $_POST['ans1_d'];
    $ans2 = $_POST['ans2'];
    $ans2_d = $_POST['ans2_d'];
    $ans3 = $_POST['ans3'];
    $ans3_d = $_POST['ans3_d'];
    $sql = "insert into applied_user (user_id,scheme_name,ans1,ans1_d,ans2,ans2_d,ans3,ans3_d) values ('$user_id','$scheme_name','$ans1','$ans1_d','$ans2','$ans2_d','$ans3','$ans3_d')";
    $connect->query($sql);
    echo "<script>alert('Suravay Created successfully!'); window.location='scheme.php'</script>";
}

?>