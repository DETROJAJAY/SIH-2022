<?php
include('Database.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="img/icons/favicon.png" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
	<link rel="canonical" href="https://demo-basic.adminkit.io/" />

	<title>Add Milk Data</title>
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
	include "sidebar/add_milk_data.php"
	?>
	<?php
	include "header.php"
	?>
	<?php
	$user_id = $_SESSION['user_id'];
	$data = mysqli_query($connect, "select dairy_id from dairy_owner where user_id='$user_id'");
	$row0 = mysqli_num_rows($data);

	$res = mysqli_fetch_assoc($data);
	$dairy_id = $res["dairy_id"];
	$query = mysqli_query($connect, "select user_id from dairy_user where dairy_user.dairy_id='$dairy_id' ");
	$row1 = mysqli_num_rows($query);


	?>


	<main class="d-flex w-100">
		<div class="container d-flex flex-column">
			<div class="row vh-100">
				<div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
					<div class="d-table-cell align-left">

						<div class="text-center mt-4">
							<h1 class="h2">Add Milk Data</h1>
							<p class="lead">
								Here You Can Add Collection of Milk Data.
							</p>
						</div>

						<div class="card">
							<div class="card-body">
								<div class="m-sm-4">
									<form method="post" action="collect.php">
										<div class="mb-3">
											<i data-feather="user"></i>&nbsp;&nbsp;<label class="form-label">User ID :-</label>
											<br>
											<select name="user_id">
												<option>Select User Id</option>
												<?php
												while ($result = mysqli_fetch_array($query)) {
													echo '<option value="' . $result["user_id"] . '"> ' . $result["user_id"] . '</option>';
												}
												?>
											</select>
										</div>
										<div class="mb-3">
											<i data-feather="info"></i>&nbsp;&nbsp;<label class="form-label">Liter :-</label>
											<input class="form-control form-control-lg" type="number" name="liter" placeholder="Enter Liter in Numbers" required />
										</div>
										<div class="mb-3">
											<i data-feather="info"></i>&nbsp;&nbsp;<label class="form-label">Fat :-</label>
											<input class="form-control form-control-lg" type="number" name="fat" placeholder="Enter Fat in Numbers" required />
										</div>
										<div class="mb-3">
											<i data-feather="info"></i>&nbsp;&nbsp;<label class="form-label">SNF :-</label>
											<input class="form-control form-control-lg" type="number" name="snf" placeholder="Enter Solids-Not-Fat" required />
										</div>
										<div class="text-center mt-3">
											<button type="submit" id="save" name="save" class="btn btn-lg btn-primary">Save</button>&nbsp;&nbsp;&nbsp;
											<button type="reset" class="btn btn-lg btn-primary">Reset</button>
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