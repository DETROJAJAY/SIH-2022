<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Admin - DFMS</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- Favicon -->
    <link href="img/favicon.png" rel="icon">
    <link rel="stylesheet" href="./css_final.css">
    <script src="./filter.js"></script>
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

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
    <style type="text/css">
        .chartbox {
            width: 50%;
            height: 50%;
        }
    </style>
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
        include "sidebar/dashboard.php"
        ?>


        <!-- Sidebar End -->

        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <?php
            include "header.php"
            ?>
            <!-- Navbar End -->
            <?php
            $connect = mysqli_connect('localhost', 'root', '', 'dairy_management');


            $query = "select SUM(liter) as 'sumliter' from milk_collection";
            //$query1 = "select SUM(total_animal) as 'sumanimal' from milk_collection";
            $query1 = "SELECT count(*) as total_animal FROM animal";
            $query2 = "select COUNT(role) as 'sumrole1' from user where role='user'";
            $query3 = "select SUM(fat) as 'sumfat' from milk_collection";
            $query4 = "select COUNT(role) as 'sumrole2' from user where role='dairy attendent'";


            $res = mysqli_query($connect, $query);
            $res1 = mysqli_query($connect, $query1);
            $res2 = mysqli_query($connect, $query2);
            $res3 = mysqli_query($connect, $query3);
            $res4 = mysqli_query($connect, $query4);

            $query5 = $connect->query("SELECT SUM(liter) AS liter, date FROM `milk_collection` GROUP BY date");

            foreach ($query5 as $data) {
                //$user_id[] = $data['user_id'];
                $date[] = $data['date'];
                $liter[] = $data['liter'];
            }

            $data = mysqli_fetch_array($res);
            $data1 = mysqli_fetch_array($res1);
            $data2 = mysqli_fetch_array($res2);
            $data3 = mysqli_fetch_array($res3);
            $data4 = mysqli_fetch_array($res4);
            ?>

            <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-hat-cowboy-side fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Collection Centers</p>
                                <h6 class="mb-0"><?php echo $data4['sumrole2']; ?></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-user fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Milk Producers</p>
                                <h6 class="mb-0"><?php echo $data2['sumrole1']; ?></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-filter fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Liters</p>
                                <h6 class="mb-0"><?php echo $data['sumliter']; ?> L.</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-cow fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Animal-Count</p>
                                <h6 class="mb-0"><?php echo $data1['total_animal']; ?></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sale & Revenue End -->


            <!-- Sales Chart Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light text-center rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">Distribution Of Animal Types</h6>

                            </div>
                            <!--<canvas id="worldwide-sales"></canvas>-->
                            <div class="py-3" id="piechart">
                                <script type="text/javascript">
                                    google.charts.load('current', {
                                        'packages': ['corechart']
                                    });
                                    google.charts.setOnLoadCallback(drawChart);

                                    function drawChart() {

                                        var data = google.visualization.arrayToDataTable([
                                            ['animal_type', 'total animal'],
                                            <?php
                                            $result = $connect->query("select * from cattle");

                                            while ($row = $result->fetch_assoc()) {
                                                echo "['" . $row['animal_type'] . "'," . $row['total_animal'] . "],";
                                            }

                                            ?>
                                        ]);

                                        var options = {
                                            title: 'Cow,Buffalo,Goat'
                                        };

                                        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

                                        chart.draw(data, options);
                                    }
                                </script>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light text-center rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">Salse & Revenue</h6>
                            </div>
                            <!--<canvas id="salse-revenue"></canvas>-->
                            <canvas id="myChart"></canvas>
                        </div>
                        <script>
                            const labels = <?php echo json_encode($date) ?>;
                            const data = {
                                labels: labels,
                                datasets: [{
                                    label: 'liter',
                                    data: <?php echo json_encode($liter) ?>,
                                    backgroundColor: [
                                        'rgba(255, 99, 132, 0.2)',
                                        'rgba(255, 159, 64, 0.2)',
                                        'rgba(255, 205, 86, 0.2)',
                                        'rgba(75, 192, 192, 0.2)',
                                        'rgba(54, 162, 235, 0.2)',
                                        'rgba(153, 102, 255, 0.2)',
                                        'rgba(201, 203, 207, 0.2)'
                                    ],
                                    borderColor: [
                                        'rgb(255, 99, 132)',
                                        'rgb(255, 159, 64)',
                                        'rgb(255, 205, 86)',
                                        'rgb(75, 192, 192)',
                                        'rgb(54, 162, 235)',
                                        'rgb(153, 102, 255)',
                                        'rgb(201, 203, 207)'
                                    ],
                                    borderWidth: 1
                                }]
                            };

                            const config = {
                                type: 'bar',
                                data: data,
                                options: {
                                    scales: {
                                        y: {
                                            beginAtZero: true
                                        }
                                    }
                                },
                            };
                        </script>


                        <script>
                            const myChart = new Chart(
                                document.getElementById('myChart'),
                                config
                            );
                        </script>
                    </div>
                </div>
            </div>
            <!-- Sales Chart End -->


            <!-- Recent Sales Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">District AND State Wise Milk Collection</h6>

                    </div>
                    <div class="table-responsive">
                        <table id="emp-table1">
                            <thead>
                                <tr>

                                    <th col-index=1>Date</th>
                                    <th col-index=2>Liter</th>
                                    <th col-index=3>Fat</th>
                                    <th col-index=4>Snf</th>
                                    <th col-index=6>District
                                        <select class="table-filter" onchange="filter_rows()">
                                            <option value="all"></option>
                                        </select>
                                    </th>
                                    <th col-index=7>State
                                        <select class="table-filter" onchange="filter_rows()">
                                            <option value="all"></option>
                                        </select>
                                    </th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                //$user_id = $_SESSION['user_id'];
                                //$dairy_id = $res["user_id"];
                                $qry = mysqli_query($connect, "select date,Sum(liter) As liter,AVG(fat) As fat,AVG(snf) AS snf,user.district,user.state from user,milk_collection where user.user_id=milk_collection.user_id group by user.user_id,date");
                                $row1 = mysqli_num_rows($qry);

                                while ($result1 = mysqli_fetch_assoc($qry)) {
                                    echo "
			   <tr>
			   <td>" . $result1['date'] . "</td>
			   <td>" . $result1['liter'] . "</td>
			   <td>" . $result1['fat'] . "</td>
			   <td>" . $result1['snf'] . "</td>
			   <td>" . $result1['district'] . "</td>
			   <td>" . $result1['state'] . "</td>
			   </tr>
			   ";
                                }
                                ?>
                            </tbody>
                        </table>
                        <script type="text/javascript">
                            $(document).ready(function() {
                                $('#emp-table1').DataTable();
                            });
                        </script>
                        <script>
                            window.onload = () => {
                                console.log(document.querySelector("#emp-table > tbody > tr:nth-child(1) > td:nth-child(2) ").innerHTML);
                            };

                            getUniqueValuesFromColumn()
                        </script>

                    </div>
                </div>
            </div>
            <!-- Recent Sales End -->


            <!-- Widgets Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-md-6 col-xl-4">
                        <div class="h-100 bg-light rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <h6 class="mb-0">Top Dairy Milk Producer </h6>

                            </div>
                            <div class="table-responsive">
                                <table id="emp-table">
                                    <thead>
                                        <tr>

                                            <th col-index=1>Date</th>
                                            <th col-index=2>Liter</th>
                                            <th col-index=3>Fat</th>
                                            <th col-index=4>Snf</th>
                                            <th col-index=5>Dairy Name
                                                <select class="table-filter" onchange="filter_rows()">
                                                    <option value="all"></option>
                                                </select>
                                            </th>
                                            <th col-index=6>district
                                                <select class="table-filter" onchange="filter_rows()">
                                                    <option value="all"></option>
                                                </select>
                                            </th>
                                            <th col-index=7>state
                                                <select class="table-filter" onchange="filter_rows()">
                                                    <option value="all"></option>
                                                </select>
                                            </th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php

                                        //$user_id = $_SESSION['user_id'];
                                        //$dairy_id = $res["user_id"];
                                        $qry1 = mysqli_query($connect, "select date,Sum(liter) As liter,AVG(fat) As fat,AVG(snf) AS snf,dairy_owner.dairy_name,user.district,user.state from user,milk_collection,dairy_owner where dairy_owner.dairy_id=milk_collection.dairy_id and user.user_id=dairy_owner.user_id group by dairy_owner.dairy_id,date");
                                        $row2 = mysqli_num_rows($qry1);

                                        while ($result2 = mysqli_fetch_assoc($qry1)) {
                                            echo "
			   <tr>
			   <td>" . $result2['date'] . "</td>
			   <td>" . $result2['liter'] . "</td>
			   <td>" . $result2['fat'] . "</td>
			   <td>" . $result2['snf'] . "</td>
               <td>" . $result2['dairy_name'] . "</td>
			   <td>" . $result2['district'] . "</td>
			   <td>" . $result2['state'] . "</td>
			   </tr>
			   ";
                                        }
                                        ?>
                                    </tbody>
                                </table>
                                <script type="text/javascript">
                                    $(document).ready(function() {
                                        $('#emp-table').DataTable();
                                    });
                                </script>
                                <script>
                                    window.onload = () => {
                                        console.log(document.querySelector("#emp-table1 > tbody > tr:nth-child(1) > td:nth-child(2) ").innerHTML);
                                    };

                                    getUniqueValuesFromColumn()
                                </script>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Widgets End -->


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