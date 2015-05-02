<?php
require("models/recherche.php");
$type = $_POST['type'];
$term = $_POST['terme'];
$lang=$_POST['langue'];

if($type=='getTerm') {
	$mot = Recherche::getTermSubdomain($bdd,$term,$lang);
	echo json_encode($mot);
}
?>