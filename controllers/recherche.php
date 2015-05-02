<?php
require("models/recherche.php");

error_reporting(E_ALL);
ini_set('display_errors', 1);

$type = $_POST['type'];
$langue = $_POST['langue'];




if ($type == 'domaine') {
$domaine = str_replace('_', ' ',$_POST['domaine']);


$subdomain = Recherche::Subdomain($bdd,$langue,$domaine);
}
if($type == 'terme') {

	$terme = $_POST['terme'];
	$terms = Recherche::getAllTerms($bdd,$langue,$terme);
}

require("views/recherche.php");


?>