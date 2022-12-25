				<?php
				include 'Database.php';

				$user_id = $_GET['uid'];
				$query = "SELECT * from animal where user_id=$user_id";
				$data = mysqli_query($connect, $query);
				$query1 = "SELECT user.user_id,user.user_name from animal,user where animal.user_id=user.user_id and animal.user_id=$user_id";
				$data1 = mysqli_query($connect, $query1);
				$res = mysqli_fetch_assoc($data1);
				?>
				<!DOCTYPE html>
				<html lang="en">

				<head>
					<meta charset="utf-8">
					<title>View Animals of Selected User</title>
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

					<?php
					include "sidebar/view_all_data/2.php"
					?>
					<div class="content">
						<?php
						include "header.php"
						?>





				</head>

				<body>
					<p>User Id:<?php echo $res["user_id"]; ?></p>
					<p>Name:<?php echo $res["user_name"]; ?></p>

					<main class="d-flex w-100">
						<div class="container d-flex flex-column">
							<table id="table_id">
								<thead>
									<tr>

										<th>Animal Id</th>
										<th>Animal Type</th>
										<th>Age</th>
										<th>Breed Type</th>
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
		</tr>
		";
									}
									?>
									<br>
								</tbody>
							</table>
					</main>
				</body>

				</html>
				<br><br><br><br><br><br><br><br><br><br><br><br><br><br>

				<?php
				include "footer.php"
				?>
				<script type="text/javascript">
					$(document).ready(function() {
						$('#table_id').DataTable();
					});
				</script>

				<style>
					#DataTable {
						position: relative;
						padding: 15px;
						box-sizing: border-box;
					}

					table {
						width: 100%;
						border-collapse: collapse;
					}

					th {
						background: #0096FF;
						color: white;
						font-weight: bold;
						cursor: cell;
					}

					table th:first-child {
						border-radius: 10px 0 0 10px;
					}

					table th:last-child {
						border-radius: 0 10px 10px 0;
					}

					table td:first-child {
						border-radius: 10px 0 0 10px;
					}

					table td:last-child {
						border-radius: 0 10px 10px 0;
					}

					td,
					th {

						font-size: 16px;
						padding: 6px;
						border: 1px solid #ccc;
						text-align: left;

					}

					tr:nth-of-type(even) {
						background-color: White;
					}

					@media only screen and (max-width: 760px),
					(min-device-width: 768px) and (max-device-width: 1024px) {

						table {
							margin-top: 106px;
						}

						/* Force table to not be like tables anymore */
						table,
						thead,
						tbody,
						th,
						td,
						tr {
							display: block;
						}

						/* Hide table headers (but not display: none;, for accessibility) */
						thead tr {
							position: absolute;
							top: -9999px;
							left: -9999px;
						}

						tr {
							margin: 0 0 1rem 0;
							overflow: auto;
							border-bottom: 1px solid #ccc;
						}



						tbody tr:before {
							counter-increment: my-sec-counter;
							content: "";
							background-color: #333;
							display: block;
							height: 1px;
						}


						tr:nth-child(odd) {
							background: #ccc;
						}

						td {
							/* Behave  like a "row" */
							border: none;
							border-bottom: 1px solid #eee;
							margin-right: 0%;
							display: block;
							border-right: 1px solid #ccc;
							border-left: 1px solid #ccc;
							box-sizing: border-box;
						}

						td:before {
							/* Top/left values mimic padding */
							font-weight: bold;
							width: 50%;
							float: left;
							box-sizing: border-box;
							padding-left: 5px;
						}

						/*
	   Label the data
   You could also use a data-* attribute and content for this. That way "bloats" the HTML, this way means you need to keep HTML and CSS in sync. Lea Verou has a clever way to handle with text-shadow.
	   */
						td:nth-of-type(1):before {
							content: "User ID";
						}

						td:nth-of-type(2):before {
							content: "User Name";
						}

						td:nth-of-type(3):before {
							content: "Mobile No";
						}

						td:nth-of-type(4):before {
							content: "Email";
						}

						td:nth-of-type(5):before {
							content: "Village";
						}

						td:nth-of-type(6):before {
							content: "Taluka";
						}

						td:nth-of-type(7):before {
							content: "District";
						}

						td:nth-of-type(8):before {
							content: "State";
						}

						td:nth-of-type(9):before {
							content: "Operations";
						}


						.box ul.pagination {
							position: relative !important;
							bottom: auto !important;
							right: auto !important;
							display: block !important;
							width: 100%;
						}

						.box {
							text-align: center;
							position: fixed;
							width: 100%;
							background-color: #0096FF;
							top: 0px;
							left: 0px;
							padding: 15px;
							box-sizing: border-box;
							border-bottom: 1px solid #ccc;
						}

						.box ul.pagination {
							display: block;
							margin: 0px;
						}

						.box .dvrecords {
							display: block;
							margin-bottom: 10px;
						}

						.pagination>li {
							display: inline-block;
						}
					}

					.top-filters {
						font-size: 0px;
					}

					.search-field {
						text-align: right;
						margin-bottom: 5px;
					}

					.dd-number-of-recoeds {
						font-size: 12px;
					}

					.search-field,
					.dd-number-of-recoeds {
						display: inline-block;
						width: 50%;
					}

					.box ul.pagination {
						position: absolute;
						bottom: -45px;
						right: 15px;
					}

					.box .dvrecords {
						padding: 5px 0;
					}

					.box .dvrecords .records {
						margin-right: 5px;
					}
				</style>

				<style>
					.button {
						border: none;
						color: white;
						padding: 5px 10px;
						text-align: center;
						text-decoration: none;
						display: inline-block;
						font-size: 16px;
						margin: 1px 1px;
						cursor: pointer;
					}

					.button1 {
						background-color: #4CAF50;
						color: black;
						border-radius: 8px;
					}

					.button2 {
						background-color: #f44336;
						color: black;
						border-radius: 8px;
					}

					.button3 {
						background-color: #008CBA;
						color: black;
						border-radius: 8px;
					}
				</style>



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