<?php
//ajouter un employée

$matricule=$_POST['matricule'];
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$code=$_POST['code_sexe'];
$cin=$_POST['cin'];
$deff=$_POST['demb'];
$eaff=$_POST['eaff'];
$laff=$_POST['laff'];

$bdd=new PDO('mysql:host=127.0.0.1:3309;dbname=patients','root','');
$req=$bdd->query("INSERT INTO `personnel` VALUES ('$matricule', '$nom', '$prenom', '$code', '$cin',' $deff','$eaff','$laff')");
header("location:patientslist.php");
 ?>