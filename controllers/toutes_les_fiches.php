<?php
require("models/fiche.php");
error_reporting(E_ALL);
ini_set('display_errors', 1);

$fichefr = Fiche::getAllFicheFr($bdd);
$ficheen = Fiche:: getAllFicheEn($bdd);


require("views/toutes_les_fiches.php");


?>