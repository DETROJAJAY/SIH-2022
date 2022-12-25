<!DOCTYPE html>
<html lang="en">

<head>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="img/icons/favicon.png" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
	<link rel="canonical" href="https://demo-basic.adminkit.io/" />

	<title>User Registration</title>
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
	include "sidebar/add_user.php"
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
							<h1 class="h2">Add User/Producer</h1>
							<p class="lead">
								Here You Can Register New Users or Milk Producers.
							</p>
						</div>

						<div class="card">
							<div class="card-body">
								<div class="m-sm-4">
									<form method="post" action="userregistration.php">
										<div class="mb-3">
											<i data-feather="user-plus"></i>&nbsp;&nbsp;<label class="form-label">User Name :-</label>
											<input class="form-control form-control-lg" type="text" name="u_name" placeholder="Create User Name" required />
										</div>
										<div class="mb-3">
											<i data-feather="lock"></i>&nbsp;&nbsp;<label class="form-label">Password :-</label>
											<input class="form-control form-control-lg" type="password" name="u_password" placeholder="Create Password" required />
										</div>
										<div class="mb-3">
											<i data-feather="phone"></i>&nbsp;&nbsp;<label class="form-label">Mobile Number :-</label>
											<input class="form-control form-control-lg" type="number" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength=10 name="u_mobile_no" required placeholder="Enter Valid Mobile No.">
										</div>
										<div class="mb-3">
											<i data-feather="mail"></i>&nbsp;&nbsp;<label class="form-label">Email ID :-</label>
											<input class="form-control form-control-lg" type="email" name="email_id" placeholder="Enter Valid Email-ID" required />
										</div>

										<div class="text-center mt-3">
											<button type="submit" name="submit" class="btn btn-lg btn-primary">Save</button>&nbsp;&nbsp;&nbsp;
											<button type="reset" class="btn btn-lg btn-primary">Cancel</button>
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