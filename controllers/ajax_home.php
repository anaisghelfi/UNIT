<?php
require("models/home.php");
require("models/users.php");
require("models/recherche.php");
require("models/modif.php");
require("models/fiche.php");

error_reporting(E_ALL);
ini_set('display_errors', 1);

$type = $_POST["type"];

if ($type == 'getdomaine') {
	$lang = $_POST["lang"];
	$domaine = Home::getAllDomains($bdd,$lang);

	echo json_encode($domaine);
}

if ($type == 'mailexist') {
	$email = $_POST["name"];
	$dn = Users::compterMembre($bdd, $email);
	echo $dn;
}

if ($type == 'getsousdomaine') {
	$lang = $_POST["lang"];
	$domaine = $_POST["domaine"];
	$domain = Recherche::Subdomain($bdd,$lang,$domaine);

	echo json_encode($domain);
}

if ($type == 'refusefiche') {
	$id = $_POST['id'];
	$userid = $_SESSION['userid'];
	$date = date('Y-m-d H:i:s');
	$lang = $_POST['lang'];
	$req = Fiche::refuseFiche($bdd,$id,$userid,$date,$lang);
	echo json_encode($req);
}

if ($type == 'acceptfiche') {
	$id = $_POST['id'];
	$userid = $_SESSION['userid'];
	$date = date('Y-m-d H:i:s');
	$lang = $_POST['lang'];
	$req = Fiche::acceptFiche($bdd,$id, $userid, $date,$lang);	
	echo json_encode($req);
}


?>