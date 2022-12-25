<?php
include 'Database.php';

$user_id=$_GET['uid'];
$query="SELECT * from user where user_id=$user_id ";
$data= mysqli_query($connect,$query);
$result= mysqli_fetch_assoc($data);
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
											<input class="form-control form-control-lg" type="text" value="<?php echo $result['user_id']; ?>" name="user_id" required />
										</div>
										<div class="mb-3">
										<i data-feather="user-check"></i>&nbsp;&nbsp;<label class="form-label">UserName :-</label>
											<input class="form-control form-control-lg" type="text" value="<?php echo $result['user_name'] ?>" name="user_name" required />
										</div>
										<div class="mb-3">
										<i data-feather="phone"></i>&nbsp;&nbsp;<label class="form-label">Mobile Number :-</label>
											<input class="form-control form-control-lg" type="number" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength=10 value="<?php echo $result['mobile_no'] ?>" name="mobile_no" required>
                            			</div>
										<div class="mb-3">
										<i data-feather="mail"></i>&nbsp;&nbsp;<label class="form-label">Email ID :-</label>
											<input class="form-control form-control-lg" type="email" value="<?php echo $result['email'] ?>" name="email" required/>
										</div>
										<div class="mb-3">
										<i data-feather="map-pin"></i>&nbsp;&nbsp;<label class="form-label">Village :-</label>
											<input class="form-control form-control-lg" type="text" value="<?php echo $result['village'] ?>" name="village" required/>
										</div>
										<div class="mb-3">
										<i data-feather="map-pin"></i>&nbsp;&nbsp;<label class="form-label">Taluka :-</label>
											<input class="form-control form-control-lg" type="text" value="<?php echo $result['taluka'] ?>" name="taluka" required/>
										</div>
										<div class="mb-3">
										<i data-feather="map-pin"></i>&nbsp;&nbsp;<label class="form-label">District :-</label>
											<input class="form-control form-control-lg" type="text" value="<?php echo $result['district'] ?>" name="district" required/>
										</div>
										<div class="mb-3">
										<i data-feather="map-pin"></i>&nbsp;&nbsp;<label class="form-label">State :-</label>
											<input class="form-control form-control-lg" type="text" value="<?php echo $result['state'] ?>" name="state" required/>
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
		$user_id=$_POST['user_id'];
		$user_name=$_POST['user_name'];
		$mobile_no=$_POST['mobile_no'];
		$email=$_POST['email'];
		$village=$_POST['village'];
		$taluka=$_POST['taluka'];
		$district=$_POST['district'];
		$state=$_POST['state'];
		$sql1="UPDATE user SET user_id='$user_id', user_name='$user_name', mobile_no='$mobile_no', email='$email', village='$village', taluka='$taluka', district='$district', state='$state' where user_id=$user_id";
		$data1=mysqli_query($connect,$sql1);
		if($data1){
			echo "<script>alert('data updated successfully'); window.location='view_users.php'</script>";
		}
		else{
			echo "failed";
		}
	}
?>
