<!DOCTYPE html>
<html lang="en">

<?php
include 'Database.php';

$user_id = $_GET['uid'];
$query = "SELECT * from animal where user_id=$user_id";
$data = mysqli_query($connect, $query);
$query1 = "SELECT animal.user_id,user.user_name from animal,user where animal.user_id=user.user_id and animal.user_id=$user_id";
$data1 = mysqli_query($connect, $query1);
$res = mysqli_fetch_assoc($data1);
?>

<head>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="img/icons/favicon.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="canonical" href="https://demo-basic.adminkit.io/" />
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/bf5d24baef.js" crossorigin="anonymous"></script>
    <title>Animals of Selected User</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
    <meta name="author" content="AdminKit">
    <meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
    <link href="css/app.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css_final.css">

    <script src="./filter.js"></script>

</head>

<body>
    <?php
    include "sidebar/view_all_users.php"
    ?>
    <?php
    include "header.php"
    ?>


    <main class="d-flex w-100">
        <div class="container d-flex flex-column">




            </head>

            <body>
                <p>User Id:<?php echo $res["user_id"]; ?></p>
                <p>Name:<?php echo $res["user_name"]; ?></p>

                <table id="emp-table">
                    <thead>
                        <th col-index=1>Animal ID</th>
                        <th col-index=2>Animal Type
                            <select class="table-filter" onchange="filter_rows()">
                                <option value="all"></option>
                            </select>
                        </th>

                        <th col-index=3>Age

                        </th>
                        <th col-index=4>Breed Type
                            <select class="table-filter" onchange="filter_rows()">
                                <option value="all"></option>
                            </select>
                        </th>
                        <th>Operations</th>
                    </thead>
                    <tbody>
                        <?php
                        while ($result = mysqli_fetch_assoc($data)) {
                            echo "
		<tr>
			<td>" . $result['animal_id'] . "</td>
			<td>" . $result['animal_type'] . "</td>
			<td>" . $result['age'] . "</td>
			<td>" . $result['breed_type'] . "</td>
            <td><a href='editanimal.php ? aid=$result[animal_id]  & atype=$result[animal_type] & age=$result[age] & btype=$result[breed_type]' <i class='fa-solid fa-pen-to-square'></i></a>
            &nbsp;<a href='deleteanimal.php ? aid=$result[animal_id]'onclick='returncheckdelete()'<i class='fa-solid fa-trash'></i></td>
		</tr>
		";
                        }
                        ?>
                    </tbody>
                </table>

                <script>
                    window.onload = () => {
                        console.log(document.querySelector("#emp-table > tbody > tr:nth-child(1) > td:nth-child(2) ").innerHTML);
                    };

                    getUniqueValuesFromColumn()
                </script>
                <script type="text/javascript">
                    $(document).ready(function() {
                        $('#emp-table').DataTable();
                    });
                </script>
            </body>

</html>