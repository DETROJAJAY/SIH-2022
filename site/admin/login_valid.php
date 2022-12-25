<?php
$con = mysqli_connect("localhost","root","","dairy_management");
session_start();

	if(isset($_POST['submit']))
	{
		$role=$_POST['role'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		{
			$result = mysqli_query($con,"SELECT * FROM user WHERE role='$role' and email = '$email' or mobile_no='$email' and password='$password'");
							
			$row = mysqli_fetch_array($result);
			$count = mysqli_num_rows($result);				
			if ($count != 0) 
			{
				if ($row['role'] =='Admin') {
					session_start();
					$_SESSION['user_id'] = $row['user_id'];
					header("location:admin/index.php");
				}
				elseif ($row['role']=='dairy attendent') {
					session_start();
					$_SESSION['user_id'] = $row['user_id'];
					header("location:d_attendent/home.php");	
				}
				elseif ($row['role'] =='user') {
					session_start();
					$_SESSION['user_id'] = $row['user_id'];
					header("location:userhomepage.php");
				}
			} 
			else if ($count == 0)
			{
					echo "<script>alert('Please check your username and password!'); window.location='login.php'</script>";
				
			}
		}				
	}
?>