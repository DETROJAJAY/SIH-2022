<?php
include('Database.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


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
	
<?php
        include "sidebar/add_animal.php"
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
	$query = mysqli_query($connect, "select dairy_user.user_id,user.user_name from dairy_user,user where dairy_user.user_id=user.user_id and dairy_user.dairy_id='$dairy_id' ");
	$row1 = mysqli_num_rows($query);


	?>

	<main class="d-flex w-100">
		<div class="container d-flex flex-column">
			<div class="row vh-100">
				<div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
					<div class="d-table-cell align-left">

						<div class="text-center mt-4">
							<h1 class="h2">Add Animals</h1>
							<p class="lead">
								Here You Can Add Multiple Types of Milking Animals.
							</p>
						</div>

						<div class="card">
							<div class="card-body">
								<div class="m-sm-4">
									<form method="post" action="">
										<div class="mb-3">
											<i data-feather="user"></i>&nbsp;&nbsp;<label class="form-label">User ID :-</label>
											<br>
											<select name="user_id">
												<option>Select User Id</option>
												<?php
												while ($result = mysqli_fetch_array($query)) {
													echo '<option value="' . $result["user_id"] . '  -  ' . $result["user_name"] . '"> ' . $result["user_id"] . ' - ' . $result["user_name"] . '</option>';
												}
												?>
											</select>
										</div>
										<div>
											<select style="width: 150px; height: 37px; font-size: 18px; background-color:powderblue;" name="animal_type" required>
												<option>Animal Types</option>
												<option value="Cow">Cow</option>
												<option value="Buffalo">Buffalo</option>
												<option value="Goat">Goat</option>
												<option value="Sheep">Sheep</option>
											</select><br><br>
										</div>
										<div class="form-floating mb-3">
											<input type="number" class="form-control" name="age" placeholder="Age" required>
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



</body>

</html>
<script src="js/app.js"></script>
<script src="js/home.js"></script>


<?php
include 'Database.php';

if (isset($_POST['save'])) {

	$user_id = $_POST['user_id'];
	$age = $_POST['age'];
	$animal_type = $_POST['animal_type'];
	$breed_type = $_POST['breeds'];
	$sql = mysqli_query($connect, "select * from animal WHERE animal_id='$animal_id'");
	$row = mySQLi_num_rows($sql);

	$sql = "insert into animal (user_id,animal_type,age,breed_type) values ('$user_id','$animal_type','$age','$breed_type')";
	$connect->query($sql);
	echo "<script type='text/javascript'>alert(\"Wrong Username or Password\")</script>";
header("location:add_animal.php");
}

?>