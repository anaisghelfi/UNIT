<?php
require("models/users.php");
 $type = $_POST['type'];

 if($type == 'changestatut') {
 	
 	$id = $_POST['id'];
 	$statut = $_POST['statut'];
 	if ($statut == 'etudiant') {
 		$status = 1;
 	}
 	else if ($statut == 'terminologue') {
 		$status = 2;
 	}
 	 else if ($statut == 'administrateur') {
 		$status = 3;
 	}

 	Users::changeStatusUser($bdd,$id,$status);
 	echo json_encode($id);
 }

