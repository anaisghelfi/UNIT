<?php
require("models/home.php");
require("models/users.php");
require("core/crypt.php");
require("core/flash.php");

error_reporting(E_ALL);
ini_set('display_errors', 1);


/*$fich = "integration_en.txt";
$arr = Home::lire_csv_en($bdd,$fich);
var_dump($arr);*/

	if(isset($_POST['mail']) && isset($_POST['password'])){
		
		$email = $_POST['mail'];
		$mdp = cryptPass($_POST['password']);
		$id = Users::userid($bdd,$email);

		
		if(Users::verifierEmailMdp($bdd,$email,$mdp))
        {
            $_SESSION['userid'] = $id['iduser'];
            $_SESSION['type'] = $id['type'];
           	$_SESSION['token'] = sha1(md5(time()*rand(175,658)));

           	setFlash('Vous êtes connecté !', 'success');
        }
        else {
        	setFlash('Erreur de connexion ! Login ou mot de passe incorrect(s)', 'danger');
        }
	}



require("views/home.php");

?>