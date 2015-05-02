<?php
require("models/users.php");
error_reporting(E_ALL);
ini_set('display_errors', 1);

if (($_SESSION['type']) == '3') {
	$utilisateurs = Users::getAllUser($bdd); }
else {
	header('Location: views/404.php');
}




require("views/utilisateurs.php");


?>