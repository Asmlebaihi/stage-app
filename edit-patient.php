<?php 
$id=$_GET['id'];
$con=new PDO('mysql:host=127.0.0.1:3309;dbname=patients','root',''); 
 $re=$con->query("SELECT * from evacuation where n_evacuation='$id'"); 
   $row=$re->fetch();
 
   if(isset($_POST['md'])){
  $num_ev=$_POST['num_ev'];
$type_ev=$_POST['type_ev'];
$matricule=$_POST['matricule'];
$date_ness=$_POST['date_ness'];
$bnf=$_POST['bnf'];
$n_tel=$_POST['n_tel'];
$acc=$_POST['acc'];
$c_hosp=$_POST['c_hosp'];
$ville=$_POST['ville'];
$dd=$_POST['dd'];
$dr=$_POST['dr'];
$dec=$_POST['dec'];
$tr_ev=$_POST['tr_ev'];
$obs=$_POST['obs'];   	
$r2="UPDATE 'evacuation' set type_evacuation='$type_ev',matricule=$matricule, date_naissance='$date_ness', benificaire='$bnf', n_telephone='$n_tel', accompagnateur='$acc', centre_hospitalier='$c_hosp', ville='$ville', date_depart='$dd', date_retoure='$dr', decision_cmi='$dec', trai_evacuation='$tr_ev', observation='$obs' where n_evacuation='$id";

if($req=$con->query($r2)){
  header("location:evacuation.php");
}}

?>
<!DOCTYPE html>
<html>


<!-- Mirrored from www.konnectplugins.com/proclinic/Vertical/edit-patient.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 May 2019 22:54:49 GMT -->
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
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
					<h3 class="block-title">Modifier patient</h3>
				</div>
				<div class="col-md-6">
					<ol class="breadcrumb">						
						<li class="breadcrumb-item">
							<a href="index.php">
								<span class="ti-home"></span>
							</a>
                        </li>
                        <li class="breadcrumb-item">Patients</li>
						<li class="breadcrumb-item active">Modifier patient</li>
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
							<h3 class="widget-title">Modifier patient</h3>
		<form method="post" action="">
					<div class="modal-header">						
						<h4 class="modal-title">Modifier une évacuation</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<label>N Evacuation </label>
							<input type="text" class="form-control" name="num_ev" value="<?php echo $row['0'];  ?>" required>
						</div>						
						<div class="form-group">
							<label>Type évacuation</label>
							<input type="text" class="form-control" name="type_ev" value="<?php echo $row['1'];  ?>" required>
						</div>
						<div class="form-group">
							<label>Matricule</label>
							<input type="text" class="form-control" name="matricule" value="<?php echo $row['2'];  ?>"  required>
						</div>

						<div class="form-group">
							<label>Date de naissance</label>
							<input type="Date" class="form-control" name="date_ness" value="<?php echo $row['3'];  ?>"  required>
						</div>
						<div class="form-group">
							<label>Bénificiaires</label>
							<select type="text" class="form-control" name="bnf" value="<?php echo $row['4'];  ?>"  required  >
								<option value="ag">Agent</option>
								<option value="enf">Enfant</option>
							</select> 
						</div>
						<div class="form-group">
							<label>N telephone</label>
							<input  type="number" class="form-control" name="n_tel" value="<?php echo $row['5'];  ?>" required>
						</div>
						<div class="form-group">
							<label>Accompagnateur</label>
							<input type="text" class="form-control" name="acc" value="<?php echo $row['6'];  ?>"  required>
						</div>
						<div class="form-group">
							<label>Centre hospitalier</label>
							<input type="text" class="form-control" name="c_hosp" value="<?php echo $row['7'];  ?>" required>
						</div>
						<div class="form-group">
							<label>Ville</label>
							<input type="text" class="form-control" name="ville" value="<?php echo $row['8'];  ?>" required>
						</div>	
						<div class="form-group">
							<label>Date départ</label>
							<input type="Date" class="form-control" name="dd" value="<?php echo $row['9'];  ?>"  required>
						</div>	
						<div class="form-group">
							<label>Date retour</label>
							<input type="Date" class="form-control" name="dr" value="<?php echo $row['10'];  ?>"  required>
						</div>

		                <div class="form-group">
							<label>Décision/CMI</label>
							<input type="text" class="form-control" name="dec" value="<?php echo $row['11'];  ?>" required>
						</div>	
						<div class="form-group">
							<label>Trai/Evacuation</label>
							<input type="text" class="form-control" name="tr_ev" value="<?php echo $row['12'];  ?>" required>
						</div>	
						<div class="form-group">
							<label>Observation</label>
							<input type="text" class="form-control" name="obs" value="<?php echo $row['13'];  ?>"  required>
						</div>	
						<DIV><input type="submit" name="md"  value="Modifier" class="btn btn-success" /></DIV>
					</div>

				</form>
							
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


<!-- Mirrored from www.konnectplugins.com/proclinic/Vertical/edit-patient.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 May 2019 22:54:49 GMT -->
</html>