<?php
	include 'Database.php';
	$dairy_id=$_GET['did'];
	$data=mysqli_query($connect,"delete from dairy_owner where dairy_id='$dairy_id'");
	if ($data) {
		echo "<script>alert('account deleted'); window.location='view_d_attendents.php'</script>";
	}
?>