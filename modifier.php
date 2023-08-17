
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

