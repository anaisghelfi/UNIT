<?php
require("models/fiche.php");
error_reporting(E_ALL);
ini_set('display_errors', 1);

$id = $_GET['id'];

$infos = Fiche::getInfoTermen($bdd,$id);
$translation = Fiche::getFrenchTranslation($bdd,$infos['translation']);



require("views/ficheen.php");


?>