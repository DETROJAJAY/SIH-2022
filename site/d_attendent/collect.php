<?php
	include 'Database.php';
	session_start();
	if (isset($_POST['save']))
	{
		$user_id1=$_SESSION['user_id'];
		$data = mysqli_query($connect,"select dairy_id from dairy_owner where user_id='$user_id1'");
		$row0 = mysqli_num_rows($data);
		$res = mysqli_fetch_assoc($data);
		$dairy_id=$res["dairy_id"];
		$user_id=$_POST['user_id'];
		$liter=$_POST['liter'];
		$fat=$_POST['fat'];
		$snf=$_POST['snf'];
		$date=date("Y-m-d");
		$year=date("Y");
		
		//$price=$liter*$fat*7;
		$total=mysqli_query($connect,"select count(*) as total_animal from animal where user_id='$user_id'");
		$ro=mysqli_num_rows($total);
		$resu=mysqli_fetch_assoc($total);
		$total_animal=$resu["total_animal"];
				$sql=mysqli_query($connect,"insert into milk_collection(user_id,dairy_id,total_animal,liter,fat,snf,date,year) values ('$user_id','$dairy_id','$total_animal','$liter','$fat','$snf','$date','$year')");
				if($sql){
					echo "<script>alert('milk data Added successfully!'); window.location='add_milk_data.php'</script>";
				}
				
				
				
	}
?>