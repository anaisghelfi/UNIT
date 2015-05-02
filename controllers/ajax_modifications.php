<?php
require("models/modif.php");
require("models/fiche.php");
require("models/users.php");

$type = $_POST['type'];



if ($type == 'refuse') {
	$id = $_POST['id'];
	$iduser = $_SESSION['userid'];
	$date = date('Y-m-d H:i:s');
	Modif::refuseModif($bdd,$id,$date,$iduser);
}

if ($type == 'accept') {
	$id = $_POST['id'];
	$date = date('Y-m-d H:i:s');
	$champ = $_POST['champ']; 
	$lang = $_POST['lang'];
	$value = $_POST['value'];
	$idterme = $_POST['idterme'];
	$iduser = $_SESSION['userid'];

	$req = Modif::acceptModif($bdd,$id,$date,$iduser);
	
	Modif::updateTerm($bdd,$lang,$idterme,$value,$champ);
	echo json_encode($req);
}

if($type == 'getname') {
	$id = $_POST['id'];
	$lang = $_POST['lang'];
	$name = Modif::getTermName($bdd,$lang,$id);
	echo json_encode($name);
}

if ($type == 'getusername') {
	$id = $_POST['id'];
	$name = Users::getUserName($bdd,$id);
	echo json_encode($name);
}


?>