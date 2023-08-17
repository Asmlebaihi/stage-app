<?php

//ajouter un employée

if(isset($_POST['addd'])){
$matricule=$_POST['matricule'];
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$code=$_POST['code'];
$cin=$_POST['cin'];
$deff=$_POST['demb'];
$eaff=$_POST['eaff'];
$laff=$_POST['laff'];

$bdd=new PDO('mysql:host=127.0.0.1:3309;dbname=patients','root','');
$req=$bdd->query("INSERT INTO `personnel` VALUES ('$matricule','$nom','$prenom','$code','$cin','$demb','$eaff','$laff')");
}


 ?>
<?php
try{

$bdd=new PDO('mysql:host=127.0.0.1:3309;dbname=patients','root','');
$req=$bdd->query("SELECT * FROM 'personnel'");
                while($row=$req->fetch()){

           ?>
                        <td><?php $row['0']; ?></td>
                        <td><?php $row['1']; ?></td>
                        <td><?php $row['2']; ?></td>
                        <td><?php $row['3']; ?></td>
                        <td><?php $row['4']; ?></td>
                        <td><?php $row['5']; ?></td>
                        <td><?php $row['6']; ?></td>
                        <td><?php $row['7']; ?></td>
<?php
}}catch(Exception $e) 
{
    die($e->getMessage());
}
?>
<?php

                
//modifier les infos;
if(isset($_POST['modifier'])){
$matricule=$_POST['matricule'];
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$code=$_POST['code'];
$cin=$_POST['cin'];
$deff=$_POST['demb'];
$eaff=$_POST['eaff'];
$laff=$_POST['laff'];

//connection;
try{
$bdd=new PDO('mysql:host=127.0.0.1:3309;dbname=patients','root','');
$req=$bdd->query("UPDATE 'personnel' set matricule=$matricule,nom='$nom',prenom='$prenom',code_sexe=$code,cin='$cin',date_embauche=$demb,en_affect='$eaff',lieu_affect='$laff'");
}

catch (Exception $e) 
{
    die($e->getMessage());
}

}
?>
<?php

//supprimer les infos;

if(isset($_POST['supprimer'])){
try{
$bdd=new PDO('mysql:host=127.0.0.1:3309;dbname=patients','root','');
$req=$bdd->query("DELETE FROM patients");
}

catch (Exception $e) 
{
    die($e->getMessage());
}
}
?>
