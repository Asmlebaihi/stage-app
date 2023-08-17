<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

</head>
<style >
	.table-wrapper {
        background: #fff;
        padding: 20px 25px;
        margin: 30px 0;
		border-radius: 3px;
        box-shadow: 0 1px 1px rgba(0,0,0,.05);
    }
	.table-title {        
		padding-bottom: 15px;
		background: #435d7d;
		color: #fff;
		padding: 16px 30px;
		margin: -20px -25px 10px;
		border-radius: 3px 3px 0 0;
    }
    .table-title h2 {
		margin: 5px 0 0;
		font-size: 24px;
	}
	.table-title .btn-group {
		float: right;
	}
	.table-title .btn {
		color: #fff;
		float: right;
		font-size: 13px;
		border: none;
		min-width: 50px;
		border-radius: 2px;
		border: none;
		outline: none !important;
		margin-left: 10px;
	}
	.table-title .btn i {
		float: left;
		font-size: 21px;
		margin-right: 5px;
	}
	.table-title .btn span {
		float: left;
		margin-top: 2px;
	}
    table.table tr th, table.table tr td {
        border-color: #e9e9e9;
		padding: 12px 15px;
		vertical-align: middle;
    }
	table.table tr th:first-child {
		width: 60px;
	}
	table.table tr th:last-child {
		width: 50px;
	}
    table.table-striped tbody tr:nth-of-type(odd) {
    	background-color: #fcfcfc;
	}
	table.table-striped.table-hover tbody tr:hover {
		background: #f5f5f5;
	}
    table.table th i {
        font-size: 13px;
        margin: 0 5px;
        cursor: pointer;
    }	
    table.table td:last-child i {
		opacity: 0.9;
		font-size: 22px;
        margin: 0 5px;
    }
	table.table td a {
		font-weight: bold;
		color: #566787;
		display: inline-block;
		text-decoration: none;
		outline: none !important;
	}
	table.table td a:hover {
		color: #2196F3;
	}
	table.table td a.edit {
        color: #FFC107;
    }
    table.table td a.delete {
        color: #F44336;
    }
    table.table td i {
        font-size: 19px;
    }
	table.table .avatar {
		border-radius: 50%;
		vertical-align: middle;
		margin-right: 10px;
	}
	#myInput {
  background-image: url('/css/searchicon.png'); /* Add a search icon to input */
  background-position: 10px 12px; /* Position the search icon */
  background-repeat: no-repeat; /* Do not repeat the icon image */
  width: 100%; /* Full-width */
  font-size: 16px; /* Increase font-size */
  padding: 12px 20px 12px 40px; /* Add some padding */
  border: 1px solid #ddd; /* Add a grey border */
  margin-bottom: 12px; /* Add some space below the input */
}

</style>
<script>
  window.console = window.console || function(t) {};
</script>
<script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script>

<body>
	<?php
include("index.php");
?>
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
						<h2><b>Evacuation</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i><span>Ajouter une nouvelle évacuation</span></a>						
					</div>
                </div>
            </div>
            
                
	<!-- Edit Modal HTML -->
	<div id="addEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form method="post" action="ajouterEV.php" >
					
					<div class="modal-header">						
						<h4 class="modal-title">Ajouter une évacuation</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true" name="add">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<label>Evacuation N</label>
							<input type="text" class="form-control" name="num_ev" required >
						</div>
						<div class="form-group">
							<label>Type évacuation</label>
							<select name="type_ev">
								<option value="OCP">OCP</option>
								<option value="MAI">MAI</option>

							</select>

						</div>
						<div class="form-group">
							<label>Matricule</label>
							<input type="text" class="form-control" name="matricule" required>
						</div>
						<div class="form-group">
							<label>Date de naissance</label>
							<input type="Date" class="form-control" name="date_ness" required>
						</div>
						<div class="form-group">
							<label>Bénificiaires</label>
							<select type="text" class="form-control" name="bnf" required  >
								<option value="ag">Agent</option>
								<option value="enf">Enfant</option>
							</select> 
						</div>
						<div class="form-group">
							<label>N telephone</label>
							<input  type="number" class="form-control" name="n_tel" required>
						</div>
						<div class="form-group">
							<label>Accompagnateur</label>
							<input type="text" class="form-control" name="acc" required>
						</div>
						<div class="form-group">
							<label>Centre hospitalier</label>
							<input type="text" class="form-control" name="c_hosp" required>
						</div>
						<div class="form-group">
							<label>Ville</label>
							<input type="text" class="form-control" name="ville" required>
						</div>	
						<div class="form-group">
							<label>Date départ</label>
							<input type="Date" class="form-control" name="dd" required>
						</div>	
						<div class="form-group">
							<label>Date retour</label>
							<input type="Date" class="form-control" name="dr" required>
						</div>
						<div class="form-group">
							<label>Décision/CMI</labenl>
							<select name="dec">
								<option value="Favorable">Favorable</option>
								<option value="Défavorable">Défavorable</option>

							</select>
						</div>
						<div class="form-group">
							<label>Trai/Evacuation</label>
							<input type="text" class="form-control" name="tr_ev" required>
						</div>	
						<div class="form-group">
							<label>Observation</label>
							<input type="text" class="form-control" name="obs" required>
						</div>	
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Annuler">
						<input type="submit" class="btn btn-success" value="Ajouter" name="ajouter">
					</div>
				</form>
			</div>
		</div>
	</div>











	<!-- Edit Modal HTML -->
	<div id="editEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form method="post" action="modifierEV.php">
					<div class="modal-header">						
						<h4 class="modal-title">Modifier une évacuation</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<label>Evacuation N</label>
							<input type="number" class="form-control" name="num_ev" required >
						</div>
						<div class="form-group">
							<label>Type évacuation</label>
							<input type="text" class="form-control" name="type_ev" required>
						</div>
						<div class="form-group">
							<label>Nom et prenom</label>
							<input type="text" class="form-control" name="n_et_p" required>
						</div>
						<div class="form-group">
							<label>Service</label>
							<input type="text" class="form-control" name="serv" required>
						</div>
						<div class="form-group">
							<label>Date de naissance</label>
							<input type="Date" class="form-control" name="date_ness" required>
						</div>
						<div class="form-group">
							<label>Bénificiaires</label>
							<select type="text" class="form-control" name="bnf" required  >
								<option value="ag">Agent</option>
								<option value="enf">Enfant</option>
							</select> 
						</div>
						<div class="form-group">
							<label>N telephone</label>
							<input  type="number" class="form-control" name="n_tel" required>
						</div>
						<div class="form-group">
							<label>Accompagnateur</label>
							<input type="text" class="form-control" name="acc" required>
						</div>
						<div class="form-group">
							<label>Centre hospitalier</label>
							<input type="text" class="form-control" name="c_hosp" required>
						</div>
						<div class="form-group">
							<label>Ville</label>
							<input type="text" class="form-control" name="ville" required>
						</div>	
						<div class="form-group">
							<label>Date départ</label>
							<input type="Date" class="form-control" name="dd" required>
						</div>	
						<div class="form-group">
							<label>Date retour</label>
							<input type="Date" class="form-control" name="dr" required>
						</div>
						<div class="form-group">
							<label>Décision/CMI</labenl>
							<input type="text" class="form-control" name="dec" required>
						</div>
						<div class="form-group">
							<label>Trai/Evacuation</label>
							<input type="text" class="form-control" name="tr_ev" required>
						</div>	
						<div class="form-group">
							<label>Observation</label>
							<input type="text" class="form-control" name="obs" required>
						</div>	
					</div>

				</form>
			</div>
		</div>
	</div>
	<!-- Delete Modal HTML -->
	<div id="deleteEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
			</div>
		</div>
	</div>


                    <div class="col-md-12">
                        <div class="card">
                            
                            <div align="right"> 

                          
                         
                     </div>
                     
                            <div class="content table-responsive table-full-width">

                                <table class="table table-striped table-hover" id="myTable">
                                    <thead>
                        <th>Evacuation N</th>
                        <th>Type évacuation</th>
                        <th>Matricule</th>
						<th>Nom et prénom</th>
                        <th>Service</th>
                        <th>Date de naissance</th>
                        <th>Bénificiaire</th>
                        <th>N telephone</th>
                        <th>Accompagnateur</th>
                        <th>Centre hospitalier</th>
                        <th>Ville</th>
                        <th>Date départ</th>
                        <th>Date retour</th>
                        <th>Décision CMI</th>
                        <th>Trai/Evacuation</th>
                        <th>Observation</th>
                        <th>Action</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                     <?php 
 $bdd=new PDO('mysql:host=127.0.0.1:3309;dbname=patients','root','');
 $r="SELECT n_evacuation, type_evacuation, matricule, nom, prenom, en_effect, date_naissance, benificaire, n_telephone, accompagnateur, centre_hospitalier, ville, date_depart, date_retour, decision_cmi, trai_evacuation, observation
 	from evacuation, personnel
 	where matriculeE=matricule ";
 	
 $req=$bdd->query($r);
  while($data=$req->fetch()){
                                                    
    ?>

                      <td><?php echo $data['0']; ?></td>
                      <td><?php echo $data['1']; ?></td>
                                          
                      <td><?php echo $data['2']; ?></td>
                      <td><?php echo $data['3']." ".$data['4']; ?></td>
                     
                      <td><?php echo $data['5']; ?></td>
                    <td><?php echo $data['6']; ?></td>
                   <td><?php echo $data['7']; ?></td>
                    <td><?php echo $data['8']; ?></td>
                     <td><?php echo $data['9']; ?></td>
                       <td><?php echo $data['10']; ?></td>
                      <td><?php echo $data['11']; ?></td>
                     <td><?php echo $data['12']; ?></td>
                     <td><?php echo $data['13']; ?></td>
                      <td><?php echo $data['14']; ?></td>
                      <td><?php echo $data['15']; ?></td>
                      <td><?php echo $data['16']; ?></td>
                        <td><button data-toggle="modal" class="btn btn-info btn-xs edit_data"><a href="edit-patient.php?id=<?php echo $data['0']; ?>">Modifier</a></button>
                        
                        <button data-toggle="modal"  class="btn btn-info btn-xs delete_data"><a href="supprimerEV.php?id=<?php echo $data['0']; ?>">Supprimer</a></button></td>

                                           </tr>    
       <?php  
}   
                
?>
    </tbody>
    </table>
                              </div>
                        </div>
          </div>

</body>



</html>