<?php
require("models/users.php");
require("core/crypt.php");
require("core/flash.php");




if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email']) && isset($_POST['mdp'])) {
		$statut = $_POST['type'];
		$nom = $_POST['nom']; 
		$prenom = $_POST['prenom'];
		$email = $_POST['email'];
		$universite = $_POST['universite'];
		$mdp = cryptPass($_POST['mdp']); 
		$type =  1;

		$req = Users:: inscriptionMembre($bdd, $email, $mdp, $nom, $prenom, $universite, $type,$statut);
		setFlash('Vous êtes inscrit ! Connectez-vous', 'success');

}

		
require("views/inscription.php");
?>