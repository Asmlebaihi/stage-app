<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>TABLE</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<?php
include("index.php");
?>
<style type="text/css">
    body {
        color: #566787;
		background: #f5f5f5;
		font-family: 'Varela Round', sans-serif;
		font-size: 13px;
	}
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
    .pagination {
        float: right;
        margin: 0 0 5px;
    }
    .pagination li a {
        border: none;
        font-size: 13px;
        min-width: 30px;
        min-height: 30px;
        color: #999;
        margin: 0 2px;
        line-height: 30px;
        border-radius: 2px !important;
        text-align: center;
        padding: 0 6px;
    }
    .pagination li a:hover {
        color: #666;
    }	
    .pagination li.active a, .pagination li.active a.page-link {
        background: #03A9F4;
    }
    .pagination li.active a:hover {        
        background: #0397d6;
    }
	.pagination li.disabled i {
        color: #ccc;
    }
    .pagination li i {
        font-size: 16px;
        padding-top: 6px
    }
    .hint-text {
        float: left;
        margin-top: 10px;
        font-size: 13px;
    }    
	/* Custom checkbox */
	.custom-checkbox {
		position: relative;
	}
	.custom-checkbox input[type="checkbox"] {    
		opacity: 0;
		position: absolute;
		margin: 5px 0 0 3px;
		z-index: 9;
	}
	.custom-checkbox label:before{
		width: 18px;
		height: 18px;
	}
	.custom-checkbox label:before {
		content: '';
		margin-right: 10px;
		display: inline-block;
		vertical-align: text-top;
		background: white;
		border: 1px solid #bbb;
		border-radius: 2px;
		box-sizing: border-box;
		z-index: 2;
	}
	.custom-checkbox input[type="checkbox"]:checked + label:after {
		content: '';
		position: absolute;
		left: 6px;
		top: 3px;
		width: 6px;
		height: 11px;
		border: solid #000;
		border-width: 0 3px 3px 0;
		transform: inherit;
		z-index: 3;
		transform: rotateZ(45deg);
	}
	.custom-checkbox input[type="checkbox"]:checked + label:before {
		border-color: #03A9F4;
		background: #03A9F4;
	}
	.custom-checkbox input[type="checkbox"]:checked + label:after {
		border-color: #fff;
	}
	.custom-checkbox input[type="checkbox"]:disabled + label:before {
		color: #b8b8b8;
		cursor: auto;
		box-shadow: none;
		background: #ddd;
	}
	/* Modal styles */
	.modal .modal-dialog {
		max-width: 500px;
	}
	.modal .modal-header, .modal .modal-body, .modal .modal-footer {
		padding: 20px 30px;
	}
	.modal .modal-content {
		border-radius: 3px;
	}
	.modal .modal-footer {
		background: #ecf0f1;
		border-radius: 0 0 3px 3px;
	}
    .modal .modal-title {
        display: inline-block;
    }
	.modal .form-control {
		border-radius: 2px;
		box-shadow: none;
		border-color: #dddddd;
	}
	.modal textarea.form-control {
		resize: vertical;
	}
	.modal .btn {
		border-radius: 2px;
		min-width: 100px;
	}	
	.modal form label {
		font-weight: normal;
	}	
</style>
<script type="text/javascript">
$(document).ready(function(){
	// Activate tooltip
	$('[data-toggle="tooltip"]').tooltip();
	
	// Select/Deselect checkboxes
	var checkbox = $('table tbody input[type="checkbox"]');
	$("#selectAll").click(function(){
		if(this.checked){
			checkbox.each(function(){
				this.checked = true;                        
			});
		} else{
			checkbox.each(function(){
				this.checked = false;                        
			});
		} 
	});
	checkbox.click(function(){
		if(!this.checked){
			$("#selectAll").prop("checked", false);
		}
	});
});
</script>
</head>
<body>
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
						<h2>Manage <b>Employees</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i><span>Add New Employee</span></a>
						<button data-target="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Delete</span></button>						
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
					<div class="modal-body">					
						<p>Are you sure you want to delete these Records?</p>
						<p class="text-warning"><small>This action cannot be undone.</small></p>
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<input type="submit" class="btn btn-danger" value="Delete" name="supprimer">
					</div>
				</form>
			</div>
		</div>
	</div>
   <table class="table table-striped table-hover">
                <thead>
                    <tr>
						<th>
							<span class="custom-checkbox">
								<input type="checkbox" id="selectAll">
								<label for="selectAll"></label>
							</span>
						</th>
                        <th>Matricule</th>
                        <th>Nom</th>
						<th>Prenom</th>
                        <th>Code-sexe</th>
                        <th>Cin</th>
                        <th>Date-embauche</th>
                        <th>En-affect</th>
                        <th>Lieu-affect</th>
                    </tr>
                </thead>
                <tbody>
                   <tr>
							
<?php
$bdd=new PDO('mysql:host=127.0.0.1:3309;dbname=patients','root','');
$req=$bdd->query("SELECT matricule, nom, prenom, code_sexe, cin, date_embauche, en_effect, lieu_effect  FROM personnel ");
                while($row=$req->fetch()){
           ?>
                   	<td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox1" name="options[]" value="1">
								<label for="checkbox1"></label>
							</span>
						</td>
                        <td><?php $row['0']; ?></td>
                        <td><?php $row['1']; ?></td>
                        <td><?php $row['2']; ?></td>
                        <td><?php $row['3']; ?></td>
                        <td><?php $row['4']; ?></td>
                        <td><?php $row['5']; ?></td>
                        <td><?php $row['6']; ?></td>
                        <td><?php $row['7']; ?></td>
						<td>
                            <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                            <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                        </td>
                    </tr>
<?php
}
?>
                    
                             </tbody>
                         </table>
                     </body>



					</html> 
       				

				
