<?php
	include 'database.php';

	if (isset($_POST['submit']))
	{
		$dairy_id=$_POST['d_id'];
		$dairy_name=$_POST['d_name'];
		$dairy_type=$_POST['d_type'];
		$gst_no=$_POST['gst'];
		$user_name=$_POST['u_name'];
		$password=$_POST['password'];
		$mobile_no=$_POST['mobile_no'];
		$email=$_POST['email'];
		$village=$_POST['village'];
		$taluka=$_POST['taluka'];
		$district=$_POST['district'];
		$state=$_POST['state'];

		//$password=sha1($password);
		$sql=mysqli_query($connect,"select * from user WHERE email='$email'") or die(mysql_error());
		$row=mySQLi_num_rows($sql);
		if ($row > 0)
		{
			echo "<script>alert('E-mail already taken!'); window.location='d_registration.php'</script>";
		}
		else
		{
				$sql="insert into user (user_name,role,password,mobile_no,email,village,taluka,district,state) values ('$user_name','dairy attendent','$password','$mobile_no','$email','$village','$taluka','$district','$state')";
				$connect->query($sql);
				$user_id=$connect->insert_id;
				mysqli_query($connect,"insert into dairy_owner (dairy_id,user_id,dairy_name,dairy_type,gst_no) values ('$dairy_id','$user_id','$dairy_name','$dairy_type','$gst_no')");
				echo "<script>alert('Account successfully created! Now You Can Login!'); window.location='login.php'</script>";
		}
			
	}
	

?>