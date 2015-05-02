<?php
class Recherche extends Model{

	public static function Subdomain($bdd,$lang,$domaine)  {
		if ($lang == 'fr') {
			$req = $bdd->prepare("SELECT S.titrefrancais FROM sousdomaine S, domaine D WHERE S.domaine_iddomaine=D.iddomaine AND D.titrefrancais=:titre ORDER BY S.titrefrancais ASC");
			$req->bindParam(":titre",$domaine,PDO::PARAM_STR);
		}
		else if ($lang == 'en') {
			$req = $bdd->prepare("SELECT S.titreanglais FROM sousdomaine S, domaine D WHERE S.domaine_iddomaine=D.iddomaine AND D.titreanglais=:titre ORDER BY S.titreanglais ASC");
			$req->bindParam(":titre",$domaine,PDO::PARAM_STR);
		}
	 	$req->execute();
	 	$dn = $req->fetchAll();
	 	return $dn;
	}

	public static function getTermSubdomain($bdd,$subdomain,$lang)  {
		if ($lang == 'fr') {
			$req = $bdd->prepare("SELECT terme,idfichefr FROM fichefr WHERE sousdomaine_idsousdomaine LIKE :domaine AND statut='1' ORDER BY terme ASC");
			$req->bindParam(":domaine",$subdomain,PDO::PARAM_STR);
		}
		else if ($lang == 'en') {
			$req = $bdd->prepare("SELECT term,idficheen FROM ficheen WHERE sousdomaine_idsousdomaine LIKE :domaine AND statut='1' ORDER BY term ASC");
			$req->bindParam(":domaine",$subdomain,PDO::PARAM_STR);
		}
	 	$req->execute();
	 	$dn = $req->fetchAll();
	 	return $dn;
	}

	public static function getAllTerms($bdd,$lang,$terme) {
		if ($lang == 'fr') {
			$req = $bdd->prepare("SELECT terme,idfichefr FROM fichefr WHERE terme LIKE '%".addslashes($terme)."%' AND statut='1' ORDER BY terme ASC");
		}
		else if ($lang == 'en') {
			$req = $bdd->prepare("SELECT term,idficheen FROM ficheen WHERE term LIKE '%".addslashes($terme)."%' AND statut='1' ORDER BY term ASC");
		}
	 	$req->execute();
	 	$dn = $req->fetchAll();
	 	return $dn;
	}
}

?>