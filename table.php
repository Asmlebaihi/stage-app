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
		width: 100px;
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
    	<!--Search-->
    	<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Matricule...">
<style type="text/css">
#myInput {
  background-image: url('/css/searchicon.png'); /* Add a search icon to input */
  background-position: 10px 12px; /* Position the search icon */
  background-repeat: no-repeat; /* Do not repeat the icon image */
  width: 25%; /* Full-width */
  font-size: 14px; /* Increase font-size */
  padding: 12px 20px 12px 40px; /* Add some padding */
  border: 1px solid #ddd; /* Add a grey border */
  margin-bottom: 17px 17px; /* Add some space below the input */
}
</style>
<script>
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>
    	<!--Search-->
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                	
                    <div class="col-sm-6">
						<h2>Manage <b>Employees</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i><span>Add New Employee</span></a>
												
					</div>
                </div>
            </div>
            
                
	<!-- Edit Modal HTML -->
	<div id="addEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form method="post" action="ajouterE.php" >
					
					<div class="modal-header">						
						<h4 class="modal-title">Ajouter un employée</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true" name="add">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<label>Matricule</label>
							<input type="number" class="form-control" name="matricule" required >
						</div>
						<div class="form-group">
							<label>Nom</label>
							<input type="text" class="form-control" name="nom" required>
						</div>
						<div class="form-group">
							<label>Prenom</label>
							<input type="text" class="form-control" name="prenom" required>
						</div>
						<div class="form-group">
							<label>Code_sexe</label>
							<select type="text" class="form-control" name="code_sexe" required  >
								<option value="f">Feminin</option>
								<option value="m">Masculin</option>
							</select> 
						</div>
						<div class="form-group">
							<label>Cin</label>
							<input type="text" class="form-control" name="cin" required>
						</div>
						<div class="form-group">
							<label>Date-embauche</label>
							<input  type="date" class="form-control" name="demb" required>
						</div>
						<div class="form-group">
							<label>En-affect</label>
							<input  type="text" class="form-control" name="eaff" required>
						</div>
						<div class="form-group">
							<label>Lieu-affect</label>
							<select type="text" class="form-control" name="laff" required  >
								<option>LAAYOUNE</option>
								<option>PLAGE</option>
								<option>BOUKRAA</option>
							</select> 
						</div>					
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Annuler">
						<input type="submit" class="btn btn-success" value="Ajouter" name="add">
					</div>
				</form>
			</div>
		</div>
	</div>











	<!-- Edit Modal HTML -->
	<div id="editEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form method="post" action="modifier.php">
					<div class="modal-header">						
						<h4 class="modal-title">Modifier un employée</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<label>Matricule</label>
							<input type="number" class="form-control" name="matricule" required >
						</div>
						<div class="form-group">
							<label>Nom</label>
							<input type="text" class="form-control" name="nom" required>
						</div>
						<div class="form-group">
							<label>Prenom</label>
							<input type="text" class="form-control" name="prenom" required>
						</div>
						<div class="form-group">
							<label>Code_sexe</label>
							<select type="text" class="form-control" name="code_sexe" required  >
								<option>Feminin</option>
								<option>Masculin</option>
							</select> 
						</div>
						<div class="form-group">
							<label>Cin</label>
							<input type="text" class="form-control" name="cin" required>
						</div>
						<div class="form-group">
							<label>Date-embauche</label>
							<input  type="date" class="form-control" name="dem" required>
						</div>
						<div class="form-group">
							<label>En-affect</label>
							<input  type="text" class="form-control" name="eeff" required>
						</div>
						<div class="form-group">
							<label>Lieu-affect</label>
							<select type="text" class="form-control" name="leff" required  >
								<option>LAAYOUNE</option>
								<option>PLAGE</option>
								<option>BOUKRAA</option>
							</select> 
						</div>					
					</div>
					<div class="modal-footer">
						<input type="reset" class="btn btn-default" data-dismiss="modal" value="Annuler">
						<input type="submit" class="btn btn-info" value="Enregistrer" name="modifier">
					</div>

				</form>
			</div>
		</div>
	</div>
	<!-- Delete Modal HTML -->
	<div id="deleteEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form method="post" action="supprimer.php">
					<div class="modal-header">						
						<h4 class="modal-title">Supprimer un employée</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					
				</form>
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
                        <th>Matricule</th>
                        <th>Nom</th>
						<th>Prenom</th>
                        <th>Code-sexe</th>
                        <th>Cin</th>
                        <th>Date-embauche</th>
                        <th>En-affect</th>
                        <th>Lieu-affect</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        <?php 
                                           $bdd=new PDO('mysql:host=127.0.0.1:3309;dbname=patients','root','');
                                            $req=$bdd->query("SELECT * from personnel");
                                            
                                            while($data=$req->fetch()){
                                                    
                                        ?>

                                        	<td><?php echo $data['0']; ?></td>
                                        	<td><?php echo $data['1']; ?></td>
                                        	<td><?php echo $data['2']; ?></td>
                                        	<td><?php echo $data['3']; ?></td>
                                        	<td><?php echo $data['4']; ?></td>
                                          	<td><?php echo $data['5']; ?></td>
                                          	<td><?php echo $data['6']; ?></td>
                                          	<td><?php echo $data['7']; ?></td>
                        <td><a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                            <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a></td>

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