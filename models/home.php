<?php
class Home extends Model{

	public static function getAllDomains($bdd,$lang) {
		$req = $bdd->prepare("SELECT :titre FROM domaine");
		if ($lang == 'fr') {
			$req = $bdd->prepare("SELECT titrefrancais FROM domaine");
		}
		else if ($lang == 'en') {
			$req = $bdd->prepare("SELECT titreanglais FROM domaine");
		}
	 	$req->execute();
	 	$dn = $req->fetchAll();
	 	return $dn;
	}

	public static function lire_csv($bdd,$nom_fichier){
		$bigArray =array();
		$array = explode(";", file_get_contents($nom_fichier));
		$tab=array();

		for ($i = 0; $i < count($array); $i++) {
			$array[$i] = mysql_real_escape_string($array[$i]);
			$array[$i] = utf8_encode($array[$i]);
			array_push($tab,$array[$i]);
			if($i==31) {
				array_push($bigArray,$tab);
				$sql = "INSERT INTO fichefr(terme,titre_source_note_technique,support_source_note_technique,lien_source_note_technique,note_linguistique, categorie_grammaticale, genre, domaine_iddomaine,sousdomaine_idsousdomaine,equivalent,definition,auteur_source_def,titre_source_def,support_source_def,lien_source_def,contexte,auteur_source_contexte,titre_source_contexte,support_source_contexte,lien_source_contexte,note_technique,auteur_source_note_technique,collocation_avec_un_nom,collocation_avec_un_adjectif,collocation_avec_un_verbe,variantes,familles_derivationnelles,concurrents,hyperonyme,hyponyme,meronymeparties,holonymetout) VALUES('$tab[0]', '$tab[18]', '$tab[19]', '$tab[20]','$tab[21]', '$tab[1]', '$tab[2]', '$tab[3]','$tab[4]','$tab[5]','$tab[6]','$tab[7]','$tab[8]','$tab[9]','$tab[10]','$tab[11]','$tab[12]','$tab[13]','$tab[14]','$tab[15]','$tab[16]','$tab[17]','$tab[22]','$tab[23]','$tab[24]','$tab[25]','$tab[26]','$tab[27]','$tab[28]','$tab[29]','$tab[30]','$tab[31]')";
				var_dump($sql);
				$bdd->query($sql);
				$tab=array();
			}
			else if($i>0 && $i!=32 && count($tab) == 32) {
				array_push($bigArray,$tab);
				$sql = "INSERT INTO fichefr(terme,titre_source_note_technique,support_source_note_technique,lien_source_note_technique,note_linguistique, categorie_grammaticale, genre, domaine_iddomaine,sousdomaine_idsousdomaine,equivalent,definition,auteur_source_def,titre_source_def,support_source_def,lien_source_def,contexte,auteur_source_contexte,titre_source_contexte,support_source_contexte,lien_source_contexte,note_technique,auteur_source_note_technique,collocation_avec_un_nom,collocation_avec_un_adjectif,collocation_avec_un_verbe,variantes,familles_derivationnelles,concurrents,hyperonyme,hyponyme,meronymeparties,holonymetout) VALUES('$tab[0]', '$tab[18]', '$tab[19]', '$tab[20]','$tab[21]', '$tab[1]', '$tab[2]', '$tab[3]','$tab[4]','$tab[5]','$tab[6]','$tab[7]','$tab[8]','$tab[9]','$tab[10]','$tab[11]','$tab[12]','$tab[13]','$tab[14]','$tab[15]','$tab[16]','$tab[17]','$tab[22]','$tab[23]','$tab[24]','$tab[25]','$tab[26]','$tab[27]','$tab[28]','$tab[29]','$tab[30]','$tab[31]')";
				var_dump($sql);
				$bdd->query($sql);
				$tab=array();				
			}
		}
		return $bigArray;

	}

	public static function lire_csv_en($bdd,$nom_fichier){
		$bigArray =array();
		$array = explode(";", file_get_contents($nom_fichier));
		$tab=array();

		for ($i = 0; $i < count($array); $i++) {
			$array[$i] = mysql_real_escape_string($array[$i]);
			$array[$i] = utf8_encode($array[$i]);
			array_push($tab,$array[$i]);
			if($i==31) {
				array_push($bigArray,$tab);
				$sql = "INSERT INTO ficheen(term,title_source_technical_note,material_source_technical_note,link_source_technical_note,linguistic_note, part_of_speech, genre, domaine_iddomaine,sousdomaine_idsousdomaine,translation,definition,author_source_def,title_source_def,material_source_def,link_source_def,context,author_source_context,title_source_context,material_source_context,link_source_context,technical_note,author_source_technical_note,Noun_collocation,Adjective_collocation,Verb_collocation,alternatives,derivational_terms,competing_terms,hyperonym,hyponym,meronym_parties,holonym_whole) VALUES('$tab[0]', '$tab[18]', '$tab[19]', '$tab[20]','$tab[21]', '$tab[1]', '$tab[2]', '$tab[3]','$tab[4]','$tab[5]','$tab[6]','$tab[7]','$tab[8]','$tab[9]','$tab[10]','$tab[11]','$tab[12]','$tab[13]','$tab[14]','$tab[15]','$tab[16]','$tab[17]','$tab[22]','$tab[23]','$tab[24]','$tab[25]','$tab[26]','$tab[27]','$tab[28]','$tab[29]','$tab[30]','$tab[31]')";
				var_dump($sql);
				$bdd->query($sql);
				$tab=array();
			}
			else if($i>0 && $i!=32 && count($tab) == 32) {
				array_push($bigArray,$tab);
				$sql = "INSERT INTO ficheen(term,title_source_technical_note,material_source_technical_note,link_source_technical_note,linguistic_note, part_of_speech, genre, domaine_iddomaine,sousdomaine_idsousdomaine,translation,definition,author_source_def,title_source_def,material_source_def,link_source_def,context,author_source_context,title_source_context,material_source_context,link_source_context,technical_note,author_source_technical_note,Noun_collocation,Adjective_collocation,Verb_collocation,alternatives,derivational_terms,competing_terms,hyperonym,hyponym,meronym_parties,holonym_whole) VALUES('$tab[0]', '$tab[18]', '$tab[19]', '$tab[20]','$tab[21]', '$tab[1]', '$tab[2]', '$tab[3]','$tab[4]','$tab[5]','$tab[6]','$tab[7]','$tab[8]','$tab[9]','$tab[10]','$tab[11]','$tab[12]','$tab[13]','$tab[14]','$tab[15]','$tab[16]','$tab[17]','$tab[22]','$tab[23]','$tab[24]','$tab[25]','$tab[26]','$tab[27]','$tab[28]','$tab[29]','$tab[30]','$tab[31]')";
				var_dump($sql);
				$bdd->query($sql);
				$tab=array();				
			}
		}
		return $bigArray;

	}

}

?>