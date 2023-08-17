<!DOCTYPE html>
<html>


<!-- Mirrored from www.konnectplugins.com/proclinic/Vertical/about-appointment.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 May 2019 22:54:50 GMT -->
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
		
			<!-- /Top Navigation -->
			<!-- Breadcrumb -->
			<!-- Page Title -->
			<div class="row no-margin-padding">
				<div class="col-md-6">
					<h3 class="block-title">Appointment Details</h3>
				</div>
				<div class="col-md-6">
					<ol class="breadcrumb">						
						<li class="breadcrumb-item">
							<a href="index.php">
								<span class="ti-home"></span>
							</a>
                        </li>
                        <li class="breadcrumb-item">Appointments</li>
						<li class="breadcrumb-item active">Appointment Details</li>
					</ol>
				</div>
			</div>
			<!-- /Page Title -->

			<!-- /Breadcrumb -->
			<!-- Main Content -->
			<div class="container-fluid">

                <div class="row">
                    <!-- Widget Item -->
                    <div class="col-md-12">
                        <div class="widget-area-2 proclinic-box-shadow">
                            <h3 class="widget-title">Appointment Details</h3>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <tbody>
                                        <tr>
                                            <td><strong>Patient ID</strong></td>
                                            <td>PT56</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Department</strong></td>
                                            <td>Dental</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Doctor Name</strong></td>
                                            <td>Dr Kiran Sharma</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Appointment Date</strong></td>
                                            <td>16-nov-2018</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Time Slot </strong></td>
                                            <td>10AM-11AM</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Token Number </strong></td>
                                            <td>27</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Problem</strong></td>
                                            <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur convallis egestas aliquet.
                                                Nunc ullamcorper massa in magna pulvinar, a eleifend felis condimentum.</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!--Export links-->
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination export-pagination">
                                        <li class="page-item">
                                            <a class="page-link" href="#"><span class="ti-download"></span> csv</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#"><span class="ti-printer"></span> print</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#"><span class="ti-file"></span> PDF</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#"><span class="ti-align-justify"></span> Excel</a>
                                        </li>
                                    </ul>
                                </nav>
                                <!-- /Export links-->
                                <button type="button" class="btn btn-success mb-3"><span class="ti-pencil-alt"></span> Edit
                                    Appointment</button>
                                <button type="button" class="btn btn-danger mb-3"><span class="ti-trash"></span> Delete
                                    Appointment</button>
                            </div>
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


<!-- Mirrored from www.konnectplugins.com/proclinic/Vertical/about-appointment.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 May 2019 22:54:50 GMT -->
</html>