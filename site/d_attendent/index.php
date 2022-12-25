<!DOCTYPE html>
<html lang="en">

<head>

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="img/icons/favicon.png" />

	<link rel="canonical" href="https://demo-basic.adminkit.io/" />
	<link rel="stylesheet" href="./css_final.css">
	<script src="./filter.js"></script>

	<title>Dairy Data Management</title>

	<link href="css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<style type="text/css">
		.chartbox {
			width: 50%;
			height: 50%;
		}
	</style>


</head>

<body>
	<?php
	include "sidebar/dashboard.php"
	?>
	<?php
	include "header.php"
	?>
	<?php
	include('Database.php');
	//$connect = mysqli_connect('localhost', 'root', '', 'dairy_management');
	session_start();
	$user_id = $_SESSION['user_id'];
	$data = mysqli_query($connect, "select dairy_id from dairy_owner where user_id='$user_id'");
	$row0 = mysqli_num_rows($data);
	$res = mysqli_fetch_assoc($data);
	$dairy_id = $res["dairy_id"];
	$date1 = date('Y-m-d');
	$query = "select SUM(liter) as 'sumliter' from milk_collection where date='$date1' and dairy_id='$dairy_id' ";
	//$query1 = "select SUM(total_animal) as 'sumanimal' from milk_collection where dairy_id='$dairy_id'";
	$query1 = "SELECT count(*) as total_animal FROM animal,dairy_user where animal.user_id=dairy_user.user_id AND dairy_user.dairy_id='$dairy_id'";
	//$query2 = "select COUNT(role) as 'sumrole' from user where role='user'";
	$query2 = mysqli_query($connect, "select count(*) As user from dairy_user,user where dairy_user.dairy_id='$dairy_id' and user.user_id=dairy_user.user_id ");
	$query3 = "select AVG(fat) as 'sumfat' from milk_collection where dairy_id='$dairy_id'";

	$query4 = $connect->query("SELECT SUM(liter) AS liter, date FROM `milk_collection` where dairy_id='$dairy_id' GROUP BY date");

	foreach ($query4 as $data) {
		//$user_id[] = $data['user_id'];
		$date[] = $data['date'];
		$liter[] = $data['liter'];
	}
	$res = mysqli_query($connect, $query);
	$res1 = mysqli_query($connect, $query1);
	//$res2 = mysqli_query($connect, $query2);
	$res3 = mysqli_query($connect, $query3);


	$data = mysqli_fetch_array($res);
	$data1 = mysqli_fetch_array($res1);
	$data2 = mysqli_fetch_array($query2);
	$data3 = mysqli_fetch_array($res3);
	?>


	<main class="content">
		<div class="container-fluid p-0">

			<h1 class="h3 mb-3"><strong>Total:</strong> Analytics from Users/Milk Producers</h1>

			<div class="row">
				<div class="col-xl-6 col-xxl-5 d-flex">
					<div class="w-100">
						<div class="row">
							<div class="col-sm-6">
								<div class="card">
									<div class="card-body">
										<div class="row">
											<div class="col mt-0">
												<h5 class="card-title">Liters</h5>
											</div>

											<div class="col-auto">
												<div class="stat text-primary">
													<i class="align-middle" data-feather="info"></i>
												</div>
											</div>
										</div>
										<h1 class="mt-1 mb-3"><?php echo $data['sumliter']; ?> L.</h1>
										<div class="mb-0">
											
										</div>
									</div>
								</div>

								<div class="card">
									<div class="card-body">
										<div class="row">
											<div class="col mt-0">
												<h5 class="card-title">Producers</h5>
											</div>

											<div class="col-auto">
												<div class="stat text-primary">
													<i class="align-middle" data-feather="users"></i>
												</div>
											</div>
										</div>
										<h1 class="mt-1 mb-3"><?php echo $data2['user']; ?></h1>
										<div class="mb-0">
									
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="card">
									<div class="card-body">
										<div class="row">
											<div class="col mt-0">
												<h5 class="card-title">Animal Count</h5>
											</div>

											<div class="col-auto">
												<div class="stat text-primary">
													<i class="align-middle" data-feather="gitlab"></i>
												</div>
											</div>
										</div>
										<h1 class="mt-1 mb-3"><?php echo $data1['total_animal']; ?></h1>
										<div class="mb-0">
								
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-body">
										<div class="row">
											<div class="col mt-0">
												<h5 class="card-title">Fat Content</h5>
											</div>

											<div class="col-auto">
												<div class="stat text-primary">
													<i class="align-middle" data-feather="crosshair"></i>
												</div>
											</div>
										</div>
										<h1 class="mt-1 mb-3"><?php echo $data3['sumfat']; ?></h1>
										<div class="mb-0">
						
										</div>

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-6 col-xxl-7">
					<div class="card flex-fill w-100">
						<div class="card-header">

							<h5 class="card-title mb-0">Recent Movement</h5>
						</div>
						<div class="card-body py-3">
							<div class="chart chart-sm">
								<!--<canvas id="chartjs-dashboard-line"></canvas>-->
								<canvas id="myChart"></canvas>
							</div>
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

			<div class="row">
				<div class="col-12 col-md-6 col-xxl-3 d-flex order-2 order-xxl-3">
					<div class="card flex-fill w-100">
						<div class="card-header">

							<h5 class="card-title mb-0">Browser Usage</h5>
						</div>
						<div class="card-body d-flex">
							<div class="align-self-center w-100">
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
												$result = $connect->query("SELECT animal_type,count(*) as total_animal FROM animal,dairy_user where animal.user_id=dairy_user.user_id AND dairy_user.dairy_id='$dairy_id' group by animal_type");

												while ($row = $result->fetch_assoc()) {
													echo "['" . $row['animal_type'] . "'," . $row['total_animal'] . "],";
												}

												?>
											]);

											var options = {
												title: 'Buffalo,Cow,'
											};

											var chart = new google.visualization.PieChart(document.getElementById('piechart'));

											chart.draw(data, options);
										}
									</script>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-6 col-xxl-3 d-flex order-1 order-xxl-1">
					<div class="card flex-fill">
						<div class="card-header">

							<h5 class="card-title mb-0">Calendar</h5>
						</div>
						<div class="card-body d-flex">
							<div class="align-self-center w-100">
								<div class="chart">
									<div id="datetimepicker-dashboard"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-12 col-xxl-6 d-flex order-3 order-xxl-2">
				<div class="card flex-fill w-100">
					<div class="card-header">

						<h5 class="card-title mb-0">Real-Time</h5>
					</div>
					<div class="card-body px-4">
						<div id="world_map" style="height:350px;"></div>
					</div>
				</div>
			</div>



			<div class="row">
				<div class="col-12 col-lg-8 col-xxl-9 d-flex">
					<div class="card flex-fill">
						<div class="card-header">

							<h5 class="card-title mb-0">Latest Projects</h5>
						</div>
						<table id="emp-table1">
							<thead>
								<tr>

									<th col-index=1>Date</th>
									<th col-index=2>Liter</th>
									<th col-index=3>Fat</th>
									<th col-index=4>Snf</th>

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
				<div class="col-12 col-lg-4 col-xxl-3 d-flex">
					<div class="card flex-fill w-100">
						<div class="card-header">

							<h5 class="card-title mb-0">Monthly Sales</h5>
						</div>
						<div class="card-body d-flex w-100">
							<div class="align-self-center chart chart-lg">
								<canvas id="chartjs-dashboard-bar"></canvas>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</main>

	<?php
	include "footer.php"
	?>
	</div>
	</div>

	<script src="js/app.js"></script>
	<script src="js/home.js"></script>

</body>

</html>