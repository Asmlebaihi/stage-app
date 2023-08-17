<?php 
//ajouter des docteurs;
if(isset($_POST['ajouter']) ){
$nom=$_POST['nom'];
$email=$_POST['email'];
$adresse=$_POST['adresse'];
$telephone=$_POST['telephone'];
$bdd=mysqli_connect('localhost','root','','gestion des patients');
$req="insert into docteur values($nom,'$email','$adresse',$telephone,)";
$resultat=mysqli_query($bdd,$req);

}

?>




<?php
//afficher les infos des patients;

//connection à la base de données;
$bdd=mysqli_connect('localhost','root','','gestion des patients');
$req="select * from docteur";
$resultat=mysqli_query($bdd,$req);

                while($row=mysql_fetch_array($resutat)){

             ?>
                        <td><?php echo $row['0']; ?></td>
						<td><?php echo $row['1']; ?></td>
                        <td><?php echo $row['2']; ?></td>
                        <td><?php echo $row['3']; ?></td>
                            <td>
                            <button data-target="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i>Modifier</button></td>
                            <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a></td></tr>
                             
       				<?php	} ?>

				</tbody></table>




<?php
//modifier les infos;
if(isset($_POST['modifier'])){
$nom=$_POST['nom'];
$email=$_POST['email'];
$adresse=$_POST['adresse'];
$telephone=$_POST['telephone'];
//connection;
$bdd=mysqli_connect('localhost','root','','gestion des patients');
$req="update docteur set nom=$nom,nom='$nom',email='$email',adresse=$adresse,telephone='$telephone')";
$resultat=mysqli_query($bdd,$req);


}
?>
<?php
//supprimer les infos;
if(isset($_POST['supprimer'])){
$bdd=mysqli_connect('localhost','root','','gestion des patients');
$req="delete from pers";
$resultat=mysqli_query($bdd,$req);

}

?>

</body>
</html> 