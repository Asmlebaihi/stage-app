<!DOCTYPE html>
<html>


<!-- Mirrored from www.konnectplugins.com/proclinic/Vertical/patients.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 May 2019 22:54:48 GMT -->
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
					<h3 class="block-title">Patients</h3>
				</div>
				<div class="col-md-6">
					<ol class="breadcrumb">						
						<li class="breadcrumb-item">
							<a href="index.html">
								<span class="ti-home"></span>
							</a>
                        </li>
                        <li class="breadcrumb-item">Patients</li>
						<li class="breadcrumb-item active">All Patients</li>
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
							<h3 class="widget-title">Patients List</h3>							
							<div class="table-responsive mb-3">
								<table id="tableId" class="table table-bordered table-striped">
									<thead>
										<tr>
											<th class="no-sort">
												<div class="custom-control custom-checkbox">
													<input class="custom-control-input" type="checkbox" id="select-all">
													<label class="custom-control-label" for="select-all"></label>
												</div>
											</th>
											<th>Patient ID</th>
											<th>Patient Name</th>
											<th>Age</th>
											<th>Phone</th>
											<th>last Visit</th>
											<th>Status</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												<div class="custom-control custom-checkbox">
													<input class="custom-control-input" type="checkbox" id="1">
													<label class="custom-control-label" for="1"></label>
												</div>
											</td>
											<td>1</td>
											<td>Manoj Kumar</td>
											<td>30</td>
											<td>333-444-7777</td>
											<td>12-03-2018</td>
											<td>
												<span class="badge badge-success">Completed</span>
											</td>
										</tr>
										<tr>
											<td>
												<div class="custom-control custom-checkbox">
													<input class="custom-control-input" type="checkbox" id="2">
													<label class="custom-control-label" for="2"></label>
												</div>
											</td>
											<td>2</td>
											<td>Riya </td>
											<td>26</td>
											<td>3423-232-987</td>
											<td>12-10-2018</td>
											<td>
												<span class="badge badge-warning">Pending</span>
											</td>
										</tr>
										<tr>
											<td>
												<div class="custom-control custom-checkbox">
													<input class="custom-control-input" type="checkbox" id="3">
													<label class="custom-control-label" for="3"></label>
												</div>
											</td>
											<td>3</td>
											<td>Paul</td>
											<td>46</td>
											<td>3423-132-987</td>
											<td>45-10-2018</td>
											<td>
												<span class="badge badge-danger">Cancelled</span>
											</td>
										</tr>
										<tr>
											<td>
												<div class="custom-control custom-checkbox">
													<input class="custom-control-input" type="checkbox" id="4">
													<label class="custom-control-label" for="4"></label>
												</div>
											</td>
											<td>4</td>
											<td>Manoj Kumar</td>
											<td>30</td>
											<td>333-444-7777</td>
											<td>12-03-2018</td>
											<td>
												<span class="badge badge-success">Completed</span>
											</td>
										</tr>
										<tr>
											<td>
												<div class="custom-control custom-checkbox">
													<input class="custom-control-input" type="checkbox" id="5">
													<label class="custom-control-label" for="5"></label>
												</div>
											</td>
											<td>5</td>
											<td>Riya </td>
											<td>26</td>
											<td>3423-232-987</td>
											<td>12-10-2018</td>
											<td>
												<span class="badge badge-warning">Pending</span>
											</td>
										</tr>
										<tr>
											<td>
												<div class="custom-control custom-checkbox">
													<input class="custom-control-input" type="checkbox" id="6">
													<label class="custom-control-label" for="6"></label>
												</div>
											</td>
											<td>6</td>
											<td>Paul</td>
											<td>46</td>
											<td>3423-132-987</td>
											<td>45-10-2018</td>
											<td>
												<span class="badge badge-danger">Cancelled</span>
											</td>
										</tr>
										<tr>
											<td>
												<div class="custom-control custom-checkbox">
													<input class="custom-control-input" type="checkbox" id="7">
													<label class="custom-control-label" for="7"></label>
												</div>
											</td>
											<td>7</td>
											<td>Manoj Kumar</td>
											<td>30</td>
											<td>333-444-7777</td>
											<td>12-03-2018</td>
											<td>
												<span class="badge badge-success">Completed</span>
											</td>
										</tr>
										<tr>
											<td>
												<div class="custom-control custom-checkbox">
													<input class="custom-control-input" type="checkbox" id="8">
													<label class="custom-control-label" for="8"></label>
												</div>
											</td>
											<td>8</td>
											<td>Riya </td>
											<td>26</td>
											<td>3423-232-987</td>
											<td>12-10-2018</td>
											<td>
												<span class="badge badge-warning">Pending</span>
											</td>
										</tr>
										<tr>
											<td>
												<div class="custom-control custom-checkbox">
													<input class="custom-control-input" type="checkbox" id="9">
													<label class="custom-control-label" for="9"></label>
												</div>
											</td>
											<td>9</td>
											<td>Paul</td>
											<td>46</td>
											<td>3423-132-987</td>
											<td>45-10-2018</td>
											<td>
												<span class="badge badge-danger">Cancelled</span>
											</td>
										</tr>
										<tr>
											<td>
												<div class="custom-control custom-checkbox">
													<input class="custom-control-input" type="checkbox" id="10">
													<label class="custom-control-label" for="10"></label>
												</div>
											</td>
											<td>10</td>
											<td>Manoj Kumar</td>
											<td>30</td>
											<td>333-444-7777</td>
											<td>12-03-2018</td>
											<td>
												<span class="badge badge-success">Completed</span>
											</td>
										</tr>
										<tr>
											<td>
												<div class="custom-control custom-checkbox">
													<input class="custom-control-input" type="checkbox" id="11">
													<label class="custom-control-label" for="11"></label>
												</div>
											</td>
											<td>11</td>
											<td>Riya </td>
											<td>26</td>
											<td>3423-232-987</td>
											<td>12-10-2018</td>
											<td>
												<span class="badge badge-warning">Pending</span>
											</td>
										</tr>
										<tr>
											<td>
												<div class="custom-control custom-checkbox">
													<input class="custom-control-input" type="checkbox" id="12">
													<label class="custom-control-label" for="12"></label>
												</div>
											</td>
											<td>12</td>
											<td>Paul</td>
											<td>46</td>
											<td>3423-132-987</td>
											<td>45-10-2018</td>
											<td>
												<span class="badge badge-danger">Cancelled</span>
											</td>
										</tr>
									</tbody>
								</table>
								<!--Export links-->
								<nav aria-label="Page navigation example">
									<ul class="pagination justify-content-center export-pagination">
										<li class="page-item">
											<a class="page-link" href="#"><span class="ti-download"></span> csv</a>
										</li>
										<li class="page-item">
											<a class="page-link" href="#"><span class="ti-printer"></span>  print</a>
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
								<button type="button" class="btn btn-danger mt-3 mb-0"><span class="ti-trash"></span> DELETE</button>
								<button type="button" class="btn btn-primary mt-3 mb-0"><span class="ti-pencil-alt"></span> EDIT</button>
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
	<script src="js/custom-datatables.js"></script>
</body>


<!-- Mirrored from www.konnectplugins.com/proclinic/Vertical/patients.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 May 2019 22:54:49 GMT -->
</html>