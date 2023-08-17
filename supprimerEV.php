<?php

//supprimer les infos;
$id=$_GET['id'];
$bdd=new PDO('mysql:host=127.0.0.1:3309;dbname=patients','root','');
$req=$bdd->query("DELETE FROM evacuation where n_evacuation='$id'");
header("location:evacuation.php");
?>