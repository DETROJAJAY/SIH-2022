<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="images/favicon.png" type="image/x-icon">
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style1.css">
    
   
</head>
<body>
    
     
        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
            <div class="form-group form-button">
                <form action="/site/home.php">
                                <input type="submit" class="form-submit" value="Go Back"/>
</form></div>
                <div class="signin-content">
                    <div class="signin-image">
                        
                        <figure><img src="images/signin-image.jpg" alt="sing up image"></figure>
                        <a href="d_registration.php" class="signup-image-link">Create an account</a>
                    </div>

                    <div class="signin-form">

                        <h2 class="form-title">Login</h2>
                        <form method="POST" class="register-form" id="login-form" action="login_valid.php">
                        <select style="width: 150px; height: 37px; font-size: 18px; background-color:powderblue;" name="role" id="role" required>
		<option >Select-Role</option>
		<option value="user">User</option>
		<option value="dairy attendent">Dairy-Attendent</option>
		<option value="Admin">Admin</option>
        </select><br><br>
                  
                            <div class="form-group">
                                <label><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" id="email" name="email" placeholder="Email/Mobile No." autocomplete="nope" required>
                            </div>
                            <div class="form-group">
                                <label><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" id="password" placeholder="Password" name="password" autocomplete="new-password" required>
                            </div>
                            <div class="form-group">
                           
                              <br>
                                <a href="forget-password.php"><span><span></span></span>Forgot Password ?</a>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="submit" id="submit" class="form-submit" value="Log in"/>
                            </div>
                            
                        </form>
                       
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
 
</body>
</html>