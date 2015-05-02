<?php


class Modif extends Model{

public static function getModifAttente($bdd) {
		$statut = 0;
		$req = $bdd->prepare("SELECT * FROM modifications WHERE statut=:statut ORDER BY date_modif ASC");
		$req->bindParam(":statut",$statut,PDO::PARAM_STR);
	 	$req->execute();
	 	$dn = $req->fetchAll();
	 	return $dn;
}

public static function getAllModif($bdd) {
		$statut = 0;
		$req = $bdd->prepare("SELECT * FROM modifications ORDER BY date_modif ASC");
	 	$req->execute();
	 	$dn = $req->fetchAll();
	 	return $dn;
}

public static function refuseModif($bdd,$id,$date,$iduser) {
		$statut = 2;
		$req = $bdd->prepare("UPDATE modifications SET statut=:statut, date_accept=:dateaccept, id_useraccept=:id_useraccept WHERE idmodifications=:id");
		$req->bindParam(":statut",$statut,PDO::PARAM_STR);
		$req->bindParam(":id",$id,PDO::PARAM_STR);
		$req->bindParam(":dateaccept",$date,PDO::PARAM_STR);
		$req->bindParam(":id_useraccept",$iduser,PDO::PARAM_STR);
	 	$req->execute();
	 	return $req;
}

public static function acceptModif($bdd,$id,$date,$iduser) {
		$statut = 1;
		$req = $bdd->prepare("UPDATE modifications SET statut=:statut, date_accept=:dateaccept, id_useraccept=:id_useraccept WHERE idmodifications=:id");
		$req->bindParam(":statut",$statut,PDO::PARAM_STR);
		$req->bindParam(":id",$id,PDO::PARAM_STR);
		$req->bindParam(":dateaccept",$date,PDO::PARAM_STR);
		$req->bindParam(":id_useraccept",$iduser,PDO::PARAM_STR);
	 	$req->execute();
	 	return $req;
}

	public static function updateTerm($bdd,$lang,$id,$value,$champ)  {
		if ($lang == 'fr') {
			$req = $bdd->prepare("UPDATE fichefr SET $champ=:value WHERE idfichefr=:id");
			$req->bindParam(":value",$value,PDO::PARAM_STR);
			$req->bindParam(":id",$id,PDO::PARAM_STR);
			$req->execute();
		}
		else if ($lang == 'en') {
			$req = $bdd->prepare("UPDATE ficheen SET $champ=:value WHERE idficheen=:id");
			$req->bindParam(":value",$value,PDO::PARAM_STR);
			$req->bindParam(":id",$id,PDO::PARAM_STR);
			$req->execute();
		}
	 	return $req;
	}

	public static function getTermName($bdd,$lang,$id)  {
		if ($lang == 'fr') {
			$req = $bdd->prepare("SELECT terme FROM fichefr WHERE idfichefr=:id");
			$req->bindParam(":id",$id,PDO::PARAM_STR);
			$req->execute();
		}
		else if ($lang == 'en') {
			$req = $bdd->prepare("SELECT term FROM ficheen WHERE idficheen=:id");
			$req->bindParam(":id",$id,PDO::PARAM_STR);
			$req->execute();
		}
	 	$dn = $req->fetchAll();
	 	return $dn;
	}	


}

?>