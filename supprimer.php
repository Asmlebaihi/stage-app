<?php

//supprimer les infos;

$bdd=new PDO('mysql:host=127.0.0.1:3309;dbname=patients','root','');
$req=$bdd->query("DELETE FROM patients");

?>