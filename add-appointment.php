<!DOCTYPE html>
<html>


<!-- Mirrored from www.konnectplugins.com/proclinic/Vertical/add-appointment.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 May 2019 22:54:50 GMT -->
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
	<!-- Animations CSS -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Main CSS -->
	<link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" href="css/red.css" id="style_theme">
	<link rel="stylesheet" href="css/responsive.css">
	<!-- morris charts -->
	<link rel="stylesheet" href="charts/css/morris.css">
	<!-- jvectormap -->
	<link rel="stylesheet" href="css/jquery-jvectormap.css">
	<link rel="stylesheet" href="datatable/dataTables.bootstrap4.min.css">

	<script src="js/modernizr.min.js"></script>
</head>

<body>
	<!-- Pre Loader -->
	<?php
	include("index.php");
	?>
		
			<!-- /Page Title -->

			<!-- /Breadcrumb -->
			<!-- Main Content -->
			<div class="container-fluid">

				<div class="row">
					<!-- Widget Item -->
					<div class="col-md-12">
						<div class="widget-area-2 proclinic-box-shadow">
							<h3 class="widget-title">Add Appointment</h3>
							<form>
								<div class="form-row">
									<div class="form-group col-md-6">
										<label for="patient-name">Patient ID</label>
										<input type="text" class="form-control" placeholder="Patient ID" id="patient-id">
									</div>
									<div class="form-group col-md-6">
										<label for="department">Department</label>
										<select class="form-control" id="department">
											<option>Neuro</option>
											<option>Ortho</option>
											<option>General</option>
										</select>
									</div>
									<div class="form-group col-md-6">
										<label for="doctor-name">Doctor Name</label>
										<input type="text" placeholder="Doctor Name" class="form-control" id="doctor-name">
									</div>
									<div class="form-group col-md-6">
										<label for="appointment-date">Appointment Date</label>
										<input type="date" placeholder="Appointment Date" class="form-control" id="appointment-date">
									</div>
									<div class="form-group col-md-6">
										<label for="time-slot">Time Slot</label>
										<select class="form-control" id="time-slot">
											<option>10AM-11AM</option>
											<option>11AM-12pm</option>
											<option>12PM-01PM</option>
											<option>2PM-3PM</option>
											<option>3PM-4PM</option>
											<option>4PM-5PM</option>
											<option>6PM-7PM</option>
											<option>7PM-8PM</option>
											<option>8PM-9PM</option>
										</select>
									</div>
									<div class="form-group col-md-6">
										<label for="token-number">Token Number <small>(Auto Generated)</small></label>
										<input type="text" placeholder="Token Number" class="form-control" id="token-number">
									</div>
									<div class="form-group col-md-12">
										<label for="problem">Problem</label>
										<textarea placeholder="Problem" class="form-control" id="problem" rows="3"></textarea>
									</div>
																		
									<div class="form-check col-md-12 mb-2">
										<div class="text-left">
											<div class="custom-control custom-checkbox">
												<input class="custom-control-input" type="checkbox" id="ex-check-2">
												<label class="custom-control-label" for="ex-check-2">Please Confirm</label>
											</div>
										</div>
									</div>
									<div class="form-group col-md-6 mb-3">
										<button type="submit" class="btn btn-primary btn-lg">Submit</button>
									</div>
								</div>
							</form>
							<!-- Alerts-->
							<div class="alert alert-success alert-dismissible fade show" role="alert">
								<strong>Successfully Done!</strong> Appointment token Generated
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
							</div>
							<div class="alert alert-warning alert-dismissible fade show" role="alert">
								<strong>Holy guacamole!</strong> You should check in on some of those fields below.
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
							</div>
							<!-- /Alerts-->
						</div>
					</div>
					<!-- /Widget Item -->
				</div>
			</div>
			<!-- /Main Content -->
		</div>
		<!-- /Page Content -->
	</div>
	<!-- Back to Top -->
	<a id="back-to-top" href="#" class="back-to-top">
		<span class="ti-angle-up"></span>
	</a>
	<!-- /Back to Top -->
	<!-- Jquery Library-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<!-- Popper Library-->
	<script src="js/popper.min.js"></script>
	<!-- Bootstrap Library-->
    <script src="js/bootstrap.min.js"></script>
    
    <!-- Datatable  -->
	<script src="datatable/jquery.dataTables.min.js"></script>
	<script src="datatable/dataTables.bootstrap4.min.js"></script>
    
	<!-- Custom Script-->
	<script src="js/custom.js"></script>

</body>


<!-- Mirrored from www.konnectplugins.com/proclinic/Vertical/add-appointment.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 May 2019 22:54:50 GMT -->
</html>