<?php 
session_start();
setlocale (LC_TIME, 'fr_FR.utf8','fra');
date_default_timezone_set('Europe/Paris');
require("core/database_connect.php");
require("core/model.php");


$route = array("home" => "home.php",
	"ajax_home" => "ajax_home.php",
	"fiche" => "fiche.php",
	"recherche" => "recherche.php",
	"ajax_recherche" => "ajax_recherche.php",
	"ficheen" => "ficheen.php",
	"ajax_fiche" => "ajax_fiche.php",
	"modifications" => "modifications.php",
	"ajax_modifications" => "ajax_modifications.php",
	"historique_modifications" => "historique_modifications.php",
	"inscription" => "inscription.php",
	"ajax_inscription" => "ajax_inscription.php",
	"deconnexion" => "deconnexion.php",
	"ajouter_fiche" => "ajouter_fiche.php",
	"utilisateurs" => "utilisateurs.php",
	"ajax_users" => "ajax_users.php",
	"fiche_attente" => "fiche_attente.php",
	"toutes_les_fiches" => "toutes_les_fiches.php",
	);

?>

<?php 
if (!isset($_GET["page"]) || $_GET["page"] == "") {
	include("controllers/home.php");
}
else if (array_key_exists($_GET["page"], $route)) {
	include("controllers/".$route[$_GET["page"]]);
}
else {
	include("views/404.php");
}

?>
 
    


