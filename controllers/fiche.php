<?php
require("models/fiche.php");
$id = $_GET['id'];

$infos = Fiche::getInfoTerme($bdd,$id);

require("views/fiche.php");


?>