<?php
//ajouter un employée
$bdd=new PDO('mysql:host=127.0.0.1:3309;dbname=patients','root','');
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



$req=$bdd->query("INSERT INTO `evacuation` VALUES ('$num_ev','$type_ev', '$matricule', '$date_ness', '$bnf','$n_tel','$acc','$c_hosp','$ville','$dd','$dr','$dec','$tr_ev','$obs')");
header("location:evacuation.php");
 ?>