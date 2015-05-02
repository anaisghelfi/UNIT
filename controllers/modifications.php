<?php
require("models/modif.php");
error_reporting(E_ALL);
ini_set('display_errors', 1);

if (($_SESSION['type']) == '2' || ($_SESSION['type']) == '3') {
	$modif = Modif::getModifAttente($bdd);
}
else {
	header('Location: views/404.php');
}

require("views/modifications.php");


?>