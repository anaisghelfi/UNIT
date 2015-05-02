<?php
require("models/fiche.php");
error_reporting(E_ALL);
ini_set('display_errors', 1);

$ficheattentefr = Fiche::getFrenchFicheAttente($bdd);

$ficheattenteen = Fiche::getEnglishFicheAttente($bdd);


require("views/fiche_attente.php");


?>