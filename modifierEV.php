<?php               
//modifier les infos;
if(isset($_POST['modifier'])){
$num_ev=$_POST['num_ev'];
$type_ev=$_POST['type_ev'];
$n_et_p=$_POST['n_et_p'];
$serv=$_POST['serv'];
$date_ness=$_POST['date_ness'];
$bnf=$_POST['bnf'];
$n_tel=$_POST['n_tel'];
$acc=$_POST['acc'];
$c_hosp=$_POST['c_hosp'];
$ville=$_POST['ville'];
$dd=$_POST['dd'];
$dr=$_POST['dr'];
$desc=$_POST['dec'];
$tr_ev=$_POST['tr_ev'];
$obs=$_POST['obs'];


//connection;
try{
$bdd=new PDO('mysql:host=127.0.0.1:3308;dbname=patients','root','');
$req=$bdd->query("UPDATE 'evacuation' set n_evacuation=$num_ev,type_evacuation='$type_ev',nom_et_prenom='$n_et_p',service='$serv',date_naissance='$date_ness',benificaire='$bnf',n_telephone='$n_tel',accompagnateur='acc',centre_hospitalier='$c_hosp',ville='$ville',date_depart='$dd',date_retoure='$dr',decision_cmi='dec',trai_evacuation='$tr_ev',observation='$obs'");
}

catch (Exception $e) 
{
    die($e->getMessage());
}

}
?>

