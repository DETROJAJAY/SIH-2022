<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>
    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">
    <!-- Main css -->
    <link rel="stylesheet" href="css/style1.css">
</head>
<?php
include "database.php";
$qry = mysqli_query($connect, "select * from location");
$qry1 = mysqli_query($connect, "select * from location");
$qry2 = mysqli_query($connect, "select * from location");
$qry3 = mysqli_query($connect, "select * from location");
?>
<body>

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
            <div class="form-group form-button">
                <form action="/site/home.php">
                                <input type="submit" class="form-submit" value="Go Back"/>
</form>
                            </div>
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Dairy Sign up</h2>
                        <form method="POST" class="register-form" action="dattendent.php">
                        <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-border-color"></i></label>
                                <input type="text" id="d_id" name="d_id" required placeholder="Dairy ID">
                            </div>
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-assignment-o"></i></label>
                                <input type="text" id="d_name" name="d_name" required placeholder="Dairy Name">
                            </div>
                            <div>
            <style id="d_type" type="text/css">
              select.inputstyle {
                width: 128px !important;
                height: 30px !important;
                margin-top: 2px !important;
                direction: rtl !important;
                text-align: left;
              }
            </style>
            <select style="background-color:powderblue;" class="inputstyle" name="d_type" id="d_type" requierd>
              <option value="1">Select-Dairy-Type</option>
              <option value="Co-Operative">Co-Operative</option>
              <option value="Private">Private</option>
            </select>
          </div><br>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-balance"></i></i></label>
                                <input type="text" id="gst" name="gst" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength=14 required placeholder="GST No.   Ex: 22AAAA0000A1Z5">
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-account"></i></label>
                                <input type="text" id="u_name" name="u_name" required placeholder="Full Name">
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" id="password" name="password" required placeholder="Create Password" autocomplete="new-password">
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-phone"></i></label>
                                <input type="number" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength=10 id="mobile_no" name="mobile_no" required placeholder="Mobile No." autocomplete="new-password">
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" id="email" name="email" required placeholder="Email" autocomplete="nope">
                            </div>
                            <div class="form-floating mb-3">

<select name="village">
    <option>Select Village Name</option>
    <?php
    while ($res = mysqli_fetch_array($qry)) {
        echo '<option value="' . $res["village"] . '">' . $res["village"] . '</option>';
    }
    ?>
</select>

</div>
<div class="form-floating mb-3">

<select name="taluka">
    <option>Select Taluka Name</option>
    <?php
    while ($res1 = mysqli_fetch_array($qry1)) {
        echo '<option value="' . $res1["taluka"] . '">' . $res1["taluka"] . '</option>';
    }
    ?>
</select>

</div>
<div class="form-floating mb-3">

<select name="district">
    <option> Select District Name</option>
    <?php
    while ($res2 = mysqli_fetch_array($qry2)) {
        echo '<option value="' . $res2["district"] . '">' . $res2["district"] . '</option>';
    }
    ?>
</select>

</div>
<div class="form-floating mb-3">

<select name="state">
    <option>Select State Name</option>
    <?php
    while ($res3 = mysqli_fetch_array($qry3)) {
        echo '<option value="' . $res3["state"] . '">' . $res3["state"] . '</option>';
    }
    ?>
</select>
                            <div class="form-group form-button">
                                <input type="submit" name="submit" id="submit" class="form-submit" value="Register"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="login.php" class="signup-image-link">I am already member</a>
                    </div>
                </div>
            </div>
            </section>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>