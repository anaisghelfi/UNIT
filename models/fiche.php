<?php
class Fiche extends Model{

	public static function getInfoTerme($bdd,$id)  {
		$req = $bdd->prepare('SELECT * FROM fichefr WHERE idfichefr=:idfichefr');
	    $req->bindParam(":idfichefr",$id,PDO::PARAM_STR);
	    $req->execute();
	    $dn = $req->fetch();
	    $req->closeCursor();
	    return $dn;
	}
	public static function getInfoTermen($bdd,$id)  {
		$req = $bdd->prepare('SELECT * FROM ficheen WHERE idficheen=:idficheen');
	    $req->bindParam(":idficheen",$id,PDO::PARAM_STR);
	    $req->execute();
	    $dn = $req->fetch();
	    $req->closeCursor();
	    return $dn;
	}
	public static function getFrenchTranslation($bdd,$id)  {
		$id = mysql_real_escape_string($id);
		$id=utf8_encode($id);
		$req = $bdd->prepare('SELECT idfichefr FROM fichefr WHERE terme=:id');
	    $req->bindParam(":id",$id,PDO::PARAM_STR);
	    $req->execute();
	    $dn = $req->fetch();
	    $req->closeCursor();
	    return $dn;
	}
	public static function getFrenchFicheAttente($bdd)  {
		$req = $bdd->prepare('SELECT idfichefr,terme,statut,iduser_ajout,date_ajout FROM fichefr WHERE statut="0"');
	    $req->execute();
	    $dn = $req->fetchAll();
	    $req->closeCursor();
	    return $dn;
	}
	public static function getEnglishFicheAttente($bdd)  {
		$req = $bdd->prepare('SELECT idficheen,term,statut,iduser_ajout,date_ajout FROM ficheen WHERE statut="0"');
	    $req->execute();
	    $dn = $req->fetchAll();
	    $req->closeCursor();
	    return $dn;
	}
	public static function getAllFicheFr($bdd)  {
		$req = $bdd->prepare('SELECT * FROM fichefr ORDER BY terme ASC');
	    $req->execute();
	    $dn = $req->fetchAll();
	    $req->closeCursor();
	    return $dn;
	}	
	public static function getAllFicheEn($bdd)  {
		$req = $bdd->prepare('SELECT * FROM ficheen ORDER BY term ASC');
	    $req->execute();
	    $dn = $req->fetchAll();
	    $req->closeCursor();
	    return $dn;
	}	
	public static function putModifications($bdd,$langue,$idterme,$nom_champs,$old_text,$new_text,$date_modif,$statut)  {
		$req = $bdd->prepare('INSERT INTO modifications(langue, idterme, nom_champs, old_text, new_text, date_modif, statut) VALUES (:langue, :idterme, :nom_champs, :old_text, :new_text, :date_modif, :statut)');
	    $req->bindParam(":langue",$langue,PDO::PARAM_STR);
	    $req->bindParam(":idterme",$idterme,PDO::PARAM_STR);
	    $req->bindParam(":nom_champs",$nom_champs,PDO::PARAM_STR);
	    $req->bindParam(":old_text",$old_text,PDO::PARAM_STR);
	    $req->bindParam(":new_text",$new_text,PDO::PARAM_STR);
	    $req->bindParam(":date_modif",$date_modif,PDO::PARAM_STR);
	    $req->bindParam(":statut",$statut,PDO::PARAM_STR);
	    $req->execute();
	    return $req;
	}

	public static function refuseFiche($bdd,$id, $userid, $date,$lang)  {
		if ($lang == 'fr') {
			$req = $bdd->prepare('UPDATE fichefr SET statut="2", iduser_valid=:user, date_valid=:datevalid WHERE idfichefr=:id');
		}
		else if ($lang == 'en') {
			$req = $bdd->prepare('UPDATE ficheen SET statut="2", iduser_valid=:user, date_valid=:datevalid WHERE idficheen=:id');
		}
	    $req->bindParam(":id",$id,PDO::PARAM_STR);
	    $req->bindParam(":user",$userid,PDO::PARAM_STR);
	    $req->bindParam(":datevalid",$date,PDO::PARAM_STR);
	    $req->execute();
	    return $req;
	}	

	public static function acceptFiche($bdd,$id, $userid, $date,$lang)  {
		if ($lang == 'fr') {
			$req = $bdd->prepare('UPDATE fichefr SET statut="1", iduser_valid=:user, date_valid=:datevalid WHERE idfichefr=:id');
		}
		else if ($lang == 'en') {
			$req = $bdd->prepare('UPDATE ficheen SET statut="1", iduser_valid=:user, date_valid=:datevalid WHERE idficheen=:id');
		}
	    $req->bindParam(":id",$id,PDO::PARAM_STR);
	    $req->bindParam(":user",$userid,PDO::PARAM_STR);
	    $req->bindParam(":datevalid",$date,PDO::PARAM_STR);
	    $req->execute();
	    return $req;
	}	

	public static function insertfichefr($bdd,$terme,$equivalent,$categorie_grammaticale,$genre,$domaine_iddomaine,$sousdomaine_idsousdomaine,$equivalent,$definition,$auteur_source_def,$titre_source_def,$support_source_def,$lien_source_def,$contexte,$auteur_source_contexte,$titre_source_contexte,$support_source_contexte,$lien_source_contexte,$note_technique,$auteur_source_technique,$titre_source_technique,$support_source_technique,$lien_source_technique,$note_linguistique,$collocation_avec_un_nom,$collocation_avec_un_adjectif,$collocation_avec_un_verbe,$variantes,$familles_derivationnelles,$concurrent,$hyperonyme,$hyponyme,$meronymeparties,$holonymetout,$userid,$date,$statut)  {
	//public static function insertfichefr($bdd,$terme,$userid,$date,$statut)  {
		$req = $bdd->prepare('INSERT INTO fichefr(terme, equivalent,categorie_grammaticale,genre,domaine_iddomaine,sousdomaine_idsousdomaine,definition,auteur_source_def,titre_source_def,support_source_def,lien_source_def,contexte,auteur_source_contexte,titre_source_contexte,support_source_contexte,lien_source_contexte,note_technique,auteur_source_note_technique,titre_source_note_technique,support_source_note_technique,lien_source_note_technique,note_linguistique,collocation_avec_un_nom,collocation_avec_un_adjectif,collocation_avec_un_verbe,variantes,familles_derivationnelles,concurrents,hyperonyme,hyponyme,meronymeparties,holonymetout,iduser_ajout,date_ajout,statut) VALUES (:terme, :equivalent, :categorie_grammaticale, :genre, :domaine_iddomaine, :sousdomaine_idsousdomaine, :definition,:auteur_source_def,:titre_source_def,:support_source_def,:lien_source_def,:contexte,:auteur_source_contexte,:titre_source_contexte,:support_source_contexte,:lien_source_contexte,:note_technique,:auteur_source_note_technique,:titre_source_note_technique,:support_source_note_technique,:lien_source_note_technique,:note_linguistique,:collocation_avec_un_nom,:collocation_avec_un_adjectif,:collocation_avec_un_verbe,:variantes,:familles_derivationnelles,:concurrents,:hyperonyme,:hyponyme,:meronymeparties,:holonymetout,:iduser_ajout, :date_ajout, :statut)');
		//$req = $bdd->prepare('INSERT INTO fichefr(terme,iduser_ajout,date_ajout,statut) VALUES (:terme, :iduser_ajout, :date_ajout, :statut)');


	    $req->bindParam(":terme",$terme,PDO::PARAM_STR);
	    $req->bindParam(":equivalent",$equivalent,PDO::PARAM_STR);
	    $req->bindParam(":categorie_grammaticale",$categorie_grammaticale,PDO::PARAM_STR);
	    $req->bindParam(":genre",$genre,PDO::PARAM_STR);
	    $req->bindParam(":domaine_iddomaine",$domaine_iddomaine,PDO::PARAM_STR);
	    $req->bindParam(":sousdomaine_idsousdomaine",$domaine_iddomaine,PDO::PARAM_STR);
	    $req->bindParam(":definition",$definition,PDO::PARAM_STR);
	    $req->bindParam(":auteur_source_def",$auteur_source_def,PDO::PARAM_STR);
	    $req->bindParam(":titre_source_def",$titre_source_def,PDO::PARAM_STR);
	    $req->bindParam(":support_source_def",$support_source_def,PDO::PARAM_STR);
	    $req->bindParam(":lien_source_def",$lien_source_def,PDO::PARAM_STR);
	    $req->bindParam(":contexte",$contexte,PDO::PARAM_STR);
	    $req->bindParam(":auteur_source_contexte",$auteur_source_contexte,PDO::PARAM_STR);
	    $req->bindParam(":titre_source_contexte",$titre_source_contexte,PDO::PARAM_STR);
	    $req->bindParam(":support_source_contexte",$support_source_contexte,PDO::PARAM_STR);
	    $req->bindParam(":lien_source_contexte",$lien_source_contexte,PDO::PARAM_STR);
	    $req->bindParam(":note_technique",$note_technique,PDO::PARAM_STR);
	    $req->bindParam(":auteur_source_note_technique",$auteur_source_note_technique,PDO::PARAM_STR);
	    $req->bindParam(":titre_source_note_technique",$titre_source_note_technique,PDO::PARAM_STR);
	    $req->bindParam(":lien_source_note_technique",$lien_source_note_technique,PDO::PARAM_STR);
	    $req->bindParam(":support_source_note_technique",$support_source_note_technique,PDO::PARAM_STR);
	    $req->bindParam(":note_linguistique",$note_linguistique,PDO::PARAM_STR);
	    $req->bindParam(":collocation_avec_un_nom",$collocation_avec_un_nom,PDO::PARAM_STR);
	    $req->bindParam(":collocation_avec_un_adjectif",$collocation_avec_un_adjectif,PDO::PARAM_STR);
	    $req->bindParam(":collocation_avec_un_verbe",$collocation_avec_un_verbe,PDO::PARAM_STR);
	    $req->bindParam(":variantes",$variantes,PDO::PARAM_STR);
	    $req->bindParam(":familles_derivationnelles",$familles_derivationnelles,PDO::PARAM_STR);
	    $req->bindParam(":concurrents",$concurrents,PDO::PARAM_STR);
	    $req->bindParam(":hyperonyme",$hyperonyme,PDO::PARAM_STR);
	    $req->bindParam(":hyponyme",$hyponyme,PDO::PARAM_STR);
	    $req->bindParam(":meronymeparties",$meronymeparties,PDO::PARAM_STR);
	    $req->bindParam(":holonymetout",$holonymetout,PDO::PARAM_STR);
	    $req->bindParam(":iduser_ajout",$userid,PDO::PARAM_STR);
	    $req->bindParam(":date_ajout",$date,PDO::PARAM_STR);
	    $req->bindParam(":statut",$statut,PDO::PARAM_STR);

	    $req->execute();
	    return $req;
	}
	public static function insertficheen($bdd,$term,$translation,$part_of_speech,$genre,$domaine_iddomaine,$sousdomaine_idsousdomaine,$definition,$author_source_def,$title_source_def,$material_source_def,$link_source_def,$context,$auteur_source_context,$title_source_context,$material_source_context,$link_source_context,$technical_note,$author_source_technical_note,$title_source_technical_note,$material_source_technical_note,$link_source_technical_note,$linguistic_note,$Noun_collocation,$Adjective_collocation,$Verb_collocation,$alternatives,$derivational_terms,$competing_terms,$hyperonym,$hyponym,$meronym_parties,$holonym_whole,$userid,$date,$statut)  {
		$req = $bdd->prepare('INSERT INTO ficheen(term, translation,part_of_speech,genre,domaine_iddomaine,sousdomaine_idsousdomaine,definition,author_source_def,title_source_def,material_source_def,link_source_def,context,author_source_context,title_source_context,material_source_context,link_source_context,technical_note,author_source_technical_note,title_source_technical_note,material_source_technical_note,link_source_technical_note,linguistic_note,Noun_collocation,Adjective_collocation,Verb_collocation,alternatives,derivational_terms,competing_terms,hyperonym,hyponym,meronym_parties,holonym_whole,iduser_ajout,date_ajout,statut) VALUES (:term,:translation,:part_of_speech,:genre,:domaine_iddomaine,:sousdomaine_idsousdomaine,:definition,:author_source_def,:title_source_def,:material_source_def,:link_source_def,:context,:author_source_context,:title_source_context,:material_source_context,:link_source_context,:technical_note,:author_source_technical_note,:title_source_technical_note,:material_source_technical_note,:link_source_technical_note,:linguistic_note,:Noun_collocation,:Adjective_collocation,:Verb_collocation,:alternatives,:derivational_terms,:competing_terms,:hyperonym,:hyponym,:meronym_parties,:holonym_whole,:iduser_ajout,:date_ajout,:statut)');
		//$req = $bdd->prepare('INSERT INTO ficheen(term, translation,part_of_speech,genre,domaine_iddomaine,sousdomaine_idsousdomaine,definition,author_source_def,title_source_def,material_source_def,link_source_def,context,auteur_source_context,title_source_context,material_source_context,link_source_context,technical_note,author_source_technical_note,title_source_technical_note,support_source_technical_note,link_source_technical_note,linguistic_note,Noun_collocation,Adjective_collocation,Verb_collocation,alternatives,derivational_terms,competing_terms,hyperonym,hyponym,meronym_parties,holonym_whole,iduser_ajout,date_ajout,statut) VALUES ($term,$translation,$part_of_speech,$genre,$domaine_iddomaine,$sousdomaine_idsousdomaine,$definition,$author_source_def,$title_source_def,$material_source_def,$link_source_def,$context,$auteur_source_context,$title_source_context,$material_source_context,$link_source_context,$technical_note,$author_source_technical_note,$title_source_technical_note,$support_source_technical_note,$link_source_technical_note,$linguistic_note,$Noun_collocation,$Adjective_collocation,$Verb_collocation,$alternatives,$derivational_terms,$competing_terms,$hyperonym,$hyponym,$meronym_parties,$holonym_whole,$iduser_ajout,$date_ajout,$statut)');
	    $req->bindParam(":term",$term,PDO::PARAM_STR);
	    $req->bindParam(":translation",$translation,PDO::PARAM_STR);
	    $req->bindParam(":part_of_speech",$part_of_speech,PDO::PARAM_STR);
	    $req->bindParam(":genre",$genre,PDO::PARAM_STR);
	    $req->bindParam(":domaine_iddomaine",$domaine_iddomaine,PDO::PARAM_STR);
	    $req->bindParam(":sousdomaine_idsousdomaine",$domaine_iddomaine,PDO::PARAM_STR);
	    $req->bindParam(":definition",$definition,PDO::PARAM_STR);
	    $req->bindParam(":author_source_def",$author_source_def,PDO::PARAM_STR);
	    $req->bindParam(":title_source_def",$tilre_source_def,PDO::PARAM_STR);
	    $req->bindParam(":material_source_def",$material_source_def,PDO::PARAM_STR);
	    $req->bindParam(":link_source_def",$link_source_def,PDO::PARAM_STR);
	    $req->bindParam(":context",$context,PDO::PARAM_STR);
	    $req->bindParam(":author_source_context",$author_source_context,PDO::PARAM_STR);
	    $req->bindParam(":title_source_context",$title_source_context,PDO::PARAM_STR);
	    $req->bindParam(":material_source_context",$material_source_context,PDO::PARAM_STR);
	    $req->bindParam(":link_source_context",$link_source_context,PDO::PARAM_STR);
	    $req->bindParam(":technical_note",$technical_note,PDO::PARAM_STR);
	    $req->bindParam(":author_source_technical_note",$author_source_technical_note,PDO::PARAM_STR);
	    $req->bindParam(":title_source_technical_note",$title_source_technical_note,PDO::PARAM_STR);
	    $req->bindParam(":link_source_technical_note",$link_source_technical_note,PDO::PARAM_STR);
	    $req->bindParam(":material_source_technical_note",$material_source_technical_note,PDO::PARAM_STR);
	    $req->bindParam(":linguistic_note",$linguistic_note,PDO::PARAM_STR);
	    $req->bindParam(":Noun_collocation",$Noun_collocation,PDO::PARAM_STR);
	    $req->bindParam(":Adjective_collocation",$Adjective_collocation,PDO::PARAM_STR);
	    $req->bindParam(":Verb_collocation",$Verb_collocation,PDO::PARAM_STR);
	    $req->bindParam(":alternatives",$alternatives,PDO::PARAM_STR);
	    $req->bindParam(":derivational_terms",$derivational_terms,PDO::PARAM_STR);
	    $req->bindParam(":competing_terms",$competing_terms,PDO::PARAM_STR);
	    $req->bindParam(":hyperonym",$hyperonym,PDO::PARAM_STR);
	    $req->bindParam(":hyponym",$hyponym,PDO::PARAM_STR);
	    $req->bindParam(":meronym_parties",$meronym_parties,PDO::PARAM_STR);
	    $req->bindParam(":holonym_whole",$holonym_whole,PDO::PARAM_STR);
	    $req->bindParam(":iduser_ajout",$userid,PDO::PARAM_STR);
	    $req->bindParam(":date_ajout",$date,PDO::PARAM_STR);
	    $req->bindParam(":statut",$statut,PDO::PARAM_STR);

	    $req->execute();
	    return $req;
	}}

?>