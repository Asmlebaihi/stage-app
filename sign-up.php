<!DOCTYPE html>
<html>


<!-- Mirrored from www.konnectplugins.com/proclinic/Vertical/sign-up.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 May 2019 22:55:19 GMT -->
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>ProClinic-Bootstrap4 Hospital Admin</title>
	<!-- Fav  Icon Link -->
	<link rel="shortcut icon" type="image/png" href="images/fav.png">
	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- themify icons CSS -->
	<link rel="stylesheet" href="css/themify-icons.css">
	<!-- Main CSS -->
	<link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" href="css/red.css" id="style_theme">
	<link rel="stylesheet" href="css/responsive.css">

	<script src="js/modernizr.min.js"></script>
</head>

<body class="auth-bg">
	<!-- Pre Loader -->
	<div class="loading">
		<div class="spinner">
			<div class="double-bounce1"></div>
			<div class="double-bounce2"></div>
		</div>
	</div>
	<!--/Pre Loader -->
	<!-- Color Changer -->
	<div class="theme-settings" id="switcher">
		<span class="theme-click">
			<span class="ti-settings"></span>
		</span>
		<span class="theme-color theme-default theme-active" data-color="green"></span>
		<span class="theme-color theme-blue" data-color="blue"></span>
		<span class="theme-color theme-red" data-color="red"></span>
		<span class="theme-color theme-violet" data-color="violet"></span>
		<span class="theme-color theme-yellow" data-color="yellow"></span>
	</div>
	<!-- /Color Changer -->
	<div class="wrapper">
		<!-- Page Content -->
		<div id="content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-6 auth-box">
						<div class="proclinic-box-shadow">
							<!-- Page Title -->
							<h3 class="widget-title">Sign Up</h3>
							<!-- /Page Title -->

							<!-- Form -->
							<form class="widget-form">
								<div class="form-group row">
									<div class="col-sm-12">
										<input type="email" placeholder="Email" name="email" class="form-control" required="" data-validation="email" data-validation-has-keyup-event="true" name="email">
									</div>
								</div>
								
								<div class="form-group row">
									<div class="col-sm-12">
										<input name="user" placeholder="Username" class="form-control" required="" data-validation="length alphanumeric" data-validation-length="3-12"
										 data-validation-error-msg="User name has to be an alphanumeric value (3-12 chars)" data-validation-has-keyup-event="true" name="user">
									</div>
								</div>
								
								<div class="form-group row">
									<div class="col-sm-12">
										<input type="password" placeholder="Password" name="pass_confirmation" class="form-control" data-validation="strength" data-validation-strength="2"
										 data-validation-has-keyup-event="true" >
									</div>
								</div>
								
								<div class="form-group row">
									<div class="col-sm-12">
										<input type="password" placeholder="Confirm Password" name="pass_confirmation" class="form-control" data-validation="strength"
										 data-validation-strength="2" data-validation-has-keyup-event="true" name="confirm">
									</div>
								</div>
								<!-- Button -->
								<div class="button-btn-block">
									<button type="submit" class="btn btn-primary btn-lg btn-block" name="signup">Sign Up</button>
								</div>
								<!-- /Button -->
								<!-- Linsk -->
								<div class="auth-footer-text">
									<small>Alredy Sign Up,
										<a href="login.php">Login</a> Here</small>
								</div>
								<!-- /Links -->
							</form>
							<!-- /Form -->
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Page Content -->
	</div>
	<!-- Jquery Library-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<!-- Popper Library-->
	<script src="js/popper.min.js"></script>
	<!-- Bootstrap Library-->
	<script src="js/bootstrap.min.js"></script>
	<!-- Custom Script-->
	<script src="js/custom.js"></script>
</body>

<?php
if(isset($_POST["signup"])){
	header("location:login.php");

}
?>

<!-- Mirrored from www.konnectplugins.com/proclinic/Vertical/sign-up.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 May 2019 22:55:19 GMT -->
</html>