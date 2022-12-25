<?php
	include 'Database.php';
	$user_id=$_GET['uid1'];
	echo $user_id;
	//echo mysqli_query($connect,"select *  from user;");
	$data=mysqli_query($connect,"delete from dairy_user where user_id=$user_id; ");
	$data1=mysqli_query($connect,"delete from user where user_id=$user_id; ");
	//echo "t2";
	//echo "delete from user where user_id=".$user_id."";
	//echo $data;
	if ($data && $data1) {
		//echo "here";
		echo "<script>alert('account deleted'); window.location='view_users.php';</script>";
	}
	//echo "outside";
?>