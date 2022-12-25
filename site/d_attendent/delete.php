<?php
	include 'Database.php';
	$user_id=$_GET['uid'];
	$data=mysqli_query($connect,"delete from user where user_id='$user_id'");
	if ($data) {
		echo "<script>alert('account deleted'); window.location='view_users.php'</script>";
	}
?>