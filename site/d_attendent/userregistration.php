<?php
include 'Database.php';
session_start();

if (isset($_POST['submit'])) {
	$user_id = $_SESSION['user_id'];
	$data = mysqli_query($connect, "select dairy_id from dairy_owner where user_id='$user_id'");
	$row0 = mysqli_num_rows($data);
	$res = mysqli_fetch_assoc($data);
	$dairy_id = $res["dairy_id"];
	$user_name = $_POST['u_name'];
	$password = $_POST['u_password'];
	$mobile_no = $_POST['u_mobile_no'];
	$email = $_POST['email_id'];
	$qry = mysqli_query($connect, "SELECT user.village,user.taluka,user.district,user.state from user,dairy_owner where user.user_id=dairy_owner.user_id");
	$row1 = mysqli_num_rows($qry);
	$res1 = mysqli_fetch_assoc($qry);
	$village = $res1["village"];
	$taluka = $res1["taluka"];
	$district = $res1["district"];
	$state = $res1["state"];

	$password = sha1($password);
	$sql = mysqli_query($connect, "select * from user WHERE email='$email'");
	$row = mySQLi_num_rows($sql);
	if ($row > 0) {
		echo "<script>alert('E-mail already taken!'); window.location='u_registration.php'</script>";
	} else {
		$sql = "insert into user (user_name,role,password,mobile_no,email,village,taluka,district,state) values ('$user_name','user','$password','$mobile_no','$email','$village','$taluka','$district','$state')";
		$connect->query($sql);
		$user_id = $connect->insert_id;
		$sql1 = "insert into dairy_user (dairy_id,user_id) values ('$dairy_id','$user_id')";
		$connect->query($sql1);
		echo "<script>alert('Account successfully created!'); window.location='view_users.php'</script>";
	}
}
