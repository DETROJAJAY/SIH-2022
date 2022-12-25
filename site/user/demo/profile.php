<?php
include('Database.php');




$timeout = 2000;



ini_set( "session.gc_maxlifetime", $timeout );



ini_set( "session.cookie_lifetime", $timeout );




session_start();



$user_id = session_name();



if(isset( $_COOKIE[ $user_id ] )) {


    setcookie( $user_id, $_COOKIE[ $user_id ], time() + $timeout, '/' );

    

}

else

header("location:../../site/login.php");

?>

<?php
include('Database.php');

$query = "SELECT user.user_id,user.user_name,user.mobile_no,user.email,user.village,user.taluka,user.district,user.state,dairy_user.dairy_id,dairy_owner.dairy_name from user,dairy_user,dairy_owner where user.user_id=dairy_user.user_id and dairy_user.dairy_id=dairy_owner.dairy_id and user.user_id=$user_id ";
$data = mysqli_query($connect, $query);
$result = mysqli_fetch_assoc($data);
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="img/icons/favicon.png" />
	<link href="css/user1.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

	<title>View Your Profile</title>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link href="css/app.css" rel="stylesheet">
	<link href="css/user2.css" rel="stylesheet">

    <link rel="manifest" href="/manifest.json" >

</head>
<div class="product__footer"><a class="button button-xs button-gray-2" href="#">details</a>
<body>
<main class="d-flex w-1000">
		<div class="container d-flex flex-column">
			<div class="row vh-1000">
				<div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
					<div class="d-table-cell align-left">

						<div class="text-center mt-4">
							<h1 class="h2">View Your Profile</h1>

						</div>

						<div class="card">
							<div class="card-body">
								<div class="m-sm-4">
    <form action="#" method="POST">


        <div class="mb-3">
            <i data-feather="user"></i>&nbsp;&nbsp;<label class="form-label">User ID :-</label>
            <input class="form-control form-control-lg" id="demo" onclick="myFunction()" type="text" value="<?php echo $result['user_id']; ?>" name="user_id" required readonly />
        </div>
        <div class="mb-3">
            <i data-feather="user-check"></i>&nbsp;&nbsp;<label class="form-label">UserName :-</label>
            <input class="form-control form-control-lg" type="text" value="<?php echo $result['user_name'] ?>" name="user_name" required readonly />
        </div>
        <div class="mb-3">
            <i data-feather="phone"></i>&nbsp;&nbsp;<label class="form-label">Mobile Number :-</label>
            <input class="form-control form-control-lg" type="number" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength=10 value="<?php echo $result['mobile_no'] ?>" name="mobile_no" required readonly>
        </div>
        <div class="mb-3">
            <i data-feather="mail"></i>&nbsp;&nbsp;<label class="form-label">Email ID :-</label>
            <input class="form-control form-control-lg" type="email" value="<?php echo $result['email'] ?>" name="email" required readonly />
        </div>
        <div class="mb-3">
            <i data-feather="map-pin"></i>&nbsp;&nbsp;<label class="form-label">Village :-</label>
            <input class="form-control form-control-lg" type="text" value="<?php echo $result['village'] ?>" name="village" required readonly />
        </div>
        <div class="mb-3">
            <i data-feather="map-pin"></i>&nbsp;&nbsp;<label class="form-label">Taluka :-</label>
            <input class="form-control form-control-lg" type="text" value="<?php echo $result['taluka'] ?>" name="taluka" required readonly />
        </div>
        <div class="mb-3">
            <i data-feather="map-pin"></i>&nbsp;&nbsp;<label class="form-label">District :-</label>
            <input class="form-control form-control-lg" type="text" value="<?php echo $result['district'] ?>" name="district" required readonly />
        </div>
        <div class="mb-3">
            <i data-feather="map-pin"></i>&nbsp;&nbsp;<label class="form-label">State :-</label>
            <input class="form-control form-control-lg" type="text" value="<?php echo $result['state'] ?>" name="state" required readonly />
        </div>
        <div class="mb-3">
            <i data-feather="check-square"></i>&nbsp;&nbsp;<label class="form-label">Dairy ID :-</label>
            <input class="form-control form-control-lg" id="demo" onclick="myFunction()" type="text" value="<?php echo $result['dairy_id']; ?>" name="dairy_id" required readonly />
        </div>

        <div class="mb-3">
            <i data-feather="check-square"></i>&nbsp;&nbsp;<label class="form-label">Dairy Name :-</label>
            <input class="form-control form-control-lg" value="<?php echo $result['dairy_name']; ?>" name="dairy_name" required readonly />
        </div>
    </form>

    <script>
        //if browser support service worker
        if('serviceWorker' in navigator) {
          navigator.serviceWorker.register('sw.js');
        };
    </script>

    
</body>

</html>
