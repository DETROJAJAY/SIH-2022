<?php
include 'Database.php';
session_start();
$user_id = $_SESSION['user_id'];
$query = "SELECT * from user,dairy_owner where user.user_id=dairy_owner.user_id and user.user_id=$user_id ";
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

	<title>View/Edit Profile</title>

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
include "sidebar/dashboard.php"
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
							<h1 class="h2">View/Edit Your Profile</h1>

						</div>

						<div class="card">
							<div class="card-body">
								<div class="m-sm-4">
									<form method="post" action="">
									<div class="mb-3">
										<i data-feather="check-square"></i>&nbsp;&nbsp;<label class="form-label">Dairy ID :-</label>
											<input class="form-control form-control-lg" id="demo" onclick="myFunction()" type="text" value="<?php echo $result['dairy_id']; ?>" name="dairy_id" required readonly/>
										</div>
										
										<div class="mb-3">
										<i data-feather="check-square"></i>&nbsp;&nbsp;<label class="form-label">Dairy Name :-</label>
											<input class="form-control form-control-lg" value="<?php echo $result['dairy_name']; ?>" name="dairy_name" required/>
										</div>
										<div>
										<select style="width: 150px; height: 37px; font-size: 16px; background-color:powderblue;" name="dairy_type" required>
										<option value="1">Select Dairy</option>	
										<option value="Co-Operative"<?php if ($result['dairy_type'] == 'Co-Operative')
{
    echo "selected";
} ?>>Co-Operative</option>
										<option value="Private" <?php if ($result['dairy_type'] == 'Private')
{
    echo "selected";
} ?>>Private</option>
										</select><br><br>
										</div>
										<div class="mb-3">
										<i data-feather="printer"></i>&nbsp;&nbsp;<label class="form-label">GST No. :-</label>
											<input class="form-control form-control-lg" id="demo" onclick="myFunction()" value="<?php echo $result['gst_no']; ?>" name="gst_no" required readonly/>
										</div>

									<div class="mb-3">
										<i data-feather="user"></i>&nbsp;&nbsp;<label class="form-label">User ID :-</label>
											<input class="form-control form-control-lg" id="demo" onclick="myFunction()" type="text" value="<?php echo $result['user_id']; ?>" name="user_id" required readonly />
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
											 <button type="submit" name="Update" class="btn btn-lg btn-primary">Save</button>
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
if (isset($_POST['Update']))
{
    $user_name = $_POST['user_name'];
    $mobile_no = $_POST['mobile_no'];
    $email = $_POST['email'];
    $village = $_POST['village'];
    $taluka = $_POST['taluka'];
    $district = $_POST['district'];
    $state = $_POST['state'];
    $dairy_id = $_POST['dairy_id'];
    $dairy_name = $_POST['dairy_name'];
    $dairy_type = $_POST['dairy_type'];
    $sql1 = "UPDATE user SET  user_name='$user_name', mobile_no='$mobile_no', email='$email', village='$village', taluka='$taluka', district='$district', state='$state' where user_id=$user_id";
    $data1 = mysqli_query($connect, $sql1);
    $sql = "UPDATE dairy_owner SET dairy_name='$dairy_name', dairy_type='$dairy_type' where dairy_id=$dairy_id";
    $data = mysqli_query($connect, $sql);
    if ($data1 && $data)
    {
        echo "<script>alert('data update successfully'); window.location='profile.php'</script>";
    }
    else
    {
        echo "failed";
    }
}
?>
<script>
function myFunction() {
  var txt;
  if (confirm("You Can't Edit This Data")) {
  } 
  document.getElementById("demo").innerHTML = txt;
}
</script>