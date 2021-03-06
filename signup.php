<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V13</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.signup.css">
<!--===============================================================================================-->
</head>
<body style="background-color: #999999;">
	
	<!-- <div class="limiter"> -->
		<!-- <div class="container-login100"> -->
			<!-- <div class="login100-more" style="background:white"></div> -->

			<div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
				<form class="login100-form validate-form" action="includes/signup.inc.php" method="post">
					<span class="login100-form-title p-b-59">
						Sign Up
					</span>

                    <div class="wrap-input100 validate-input" data-validate="Name is required">
						<input class="input100" type="text" name="fname" placeholder="First Name...">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Name is required">
						<input class="input100" type="text" name="lname" placeholder="Last Name...">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Email addess...">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Username is required">
						<input class="input100" type="text" name="uname" placeholder="Username...">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="psw" placeholder="Password...">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Repeat Password is required">
						<input class="input100" type="password" name="repsw" placeholder="Repeat Password...">
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button name="signup-submit" class="login100-form-btn">
								Sign Up
							</button>
						</div>

						<a href="login.php" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
							Sign in
							<i class="fa fa-long-arrow-right m-l-5"></i>
						</a>
					</div>
				</form>
			</div>
		<!-- </div> -->
	<!-- </div> -->

</body>
</html>