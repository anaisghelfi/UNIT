<?php
require("models/fiche.php");
$langue = $_POST['lang'];
$idterme = $_POST['idterme'];
$nom_champs = $_POST['nom_champs'];
$old_text = $_POST['old_text'];
$new_text = $_POST['new_text'];
$date_modif = date('Y-m-d H:i:s');
$statut = 0;

$req = Fiche::putModifications($bdd,$langue,$idterme,$nom_champs,$old_text,$new_text,$date_modif,$statut);
?>