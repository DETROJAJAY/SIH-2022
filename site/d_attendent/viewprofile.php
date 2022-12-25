<?php
include 'Database.php';
session_start();
$user_id = $_SESSION['user_id'];
$query = "SELECT * from user,dairy_owner where user.user_id=dairy_owner.user_id and user.user_id=$user_id ";
$data = mysqli_query($connect, $query);
$result = mysqli_fetch_assoc($data);
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>

<body>
	<form action="#" method="POST">
		<table>
			<tr>
				<td>User id</td>
				<td><input type="text" value="<?php echo $result['user_id']; ?>" name="user_id" required readonly></td>
			</tr>
			<tr>
				<td>User name</td>
				<td><input type="text" value="<?php echo $result['user_name'] ?>" name="user_name" required></td>
			</tr>
			<tr>
				<td>Mobile No</td>
				<td><input type="text" value="<?php echo $result['mobile_no'] ?>" name="mobile_no" required></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" value="<?php echo $result['email'] ?>" name="email" required></td>
			</tr>
			<tr>
				<td>Village</td>
				<td><input type="text" value="<?php echo $result['village'] ?>" name="village" required></td>
			</tr>
			<tr>
				<td>Taluka</td>
				<td><input type="text" value="<?php echo $result['taluka'] ?>" name="taluka" required></td>
			</tr>
			<tr>
				<td>District</td>
				<td><input type="text" value="<?php echo $result['district'] ?>" name="district" required></td>
			</tr>
			<tr>
				<td>State</td>
				<td><input type="text" value="<?php echo $result['state'] ?>" name="state" required></td>
			</tr>
			<tr>
				<td>Dairy id</td>
				<td><input type="text" value="<?php echo $result['dairy_id']; ?>" name="dairy_id" required readonly></td>
			</tr>
			<tr>
				<td>Dairy name</td>
				<td><input type="text" value="<?php echo $result['dairy_name']; ?>" name="dairy_name" required></td>
			</tr>
			<tr>
				<td>Dairy Type</td>

				<td><select name="dairy_type" id="d_type" requierd>
						<option value="1">Select Dairy</option>
						<option value="Co-Operative" <?php if ($result['dairy_type'] == 'Co-Operative') {
															echo "selected";
														} ?>>Co-Operative</option>
						<option value="Private" <?php if ($result['dairy_type'] == 'Private') {
													echo "selected";
												} ?>>
							Private</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Gst No.</td>
				<td><input type="text" value="<?php echo $result['gst_no']; ?>" name="gst_no" required readonly></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" name="Update" value="Update"></td>
			</tr>
		</table>

	</form>
</body>

</html>
<?php
if (isset($_POST['Update'])) {
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
	if ($data1 && $data) {
		echo "<script>alert('data update successfully'); window.location='editprofile.php'</script>";
	} else {
		echo "failed";
	}
}
?>