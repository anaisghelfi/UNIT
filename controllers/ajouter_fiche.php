<?php
require("models/fiche.php");
require("core/flash.php");
error_reporting(E_ALL);
ini_set('display_errors', 1);

if(isset($_POST['buttonfr'])) {
	if (($_POST['terme']) !== '') {
		$terme=$_POST['terme'];
		$equivalent=$_POST['equivalent'];
		$categorie_grammaticale=$_POST['categorie_grammaticale'];
		$genre=$_POST['genre'];
		$domaine_iddomaine=str_replace('_',' ',$_POST['domaine']);
		$sousdomaine_idsousdomaine=str_replace('_',' ',$_POST['sous_domaine']);
		$userid=$_SESSION['userid'];
		$date=date('Y-m-d H:i:s');
		$statut=0;

		Fiche::insertfichefr($bdd,$_POST['terme'],$_POST['equivalent'],$_POST['categorie_grammaticale'],$_POST['genre'],$domaine_iddomaine,$sousdomaine_idsousdomaine,$_POST['equivalent'],$_POST['definition'],$_POST['auteur_source_def'],$_POST['titre_source_def'],$_POST['support_source_def'],$_POST['lien_source_def'],$_POST['contexte'],$_POST['auteur_source_contexte'],$_POST['titre_source_contexte'],$_POST['support_source_contexte'],$_POST['lien_source_contexte'],$_POST['note_technique'],$_POST['auteur_source_note_technique'],$_POST['titre_source_note_technique'],$_POST['support_source_note_technique'],$_POST['lien_source_note_technique'],$_POST['note_linguistique'],$_POST['collocation_avec_un_nom'],$_POST['collocation_avec_un_adjectif'],$_POST['collocation_avec_un_verbe'],$_POST['variantes'],$_POST['familles_derivationnelles'],$_POST['concurrents'],$_POST['hyperonyme'],$_POST['hyponyme'],$_POST['meronyme_parties'],$_POST['holonyme_tout'],$userid,$date,$statut);
		setFlash('Votre fiche a été envoyée !', 'success');
		$_POST['buttonfr'] == '';
		unset($_POST);
	}
	else {
		setFlash('Le champs "terme" doit être rempli !', 'danger');
		$_POST['buttonfr'] == '';
		unset($_POST);
	}
	
}
else if (isset($_POST['buttonen'])) {
	if(($_POST['term'])!=='') {

		$domaine=str_replace('_',' ',$_POST['domaineen']);
		$sousdomaine=str_replace('_',' ',$_POST['sous_domaineen']);
		$userid=$_SESSION['userid'];
		$date=date('Y-m-d H:i:s');
		$statut=0;


	$fiche = Fiche::insertficheen($bdd,$_POST['term'],$_POST['translation'],$_POST['part_of_speech'],$_POST['genre'],$domaine,$sousdomaine,$_POST['definition'],$_POST['author_source_def'],$_POST['title_source_def'],$_POST['material_source_def'],$_POST['link_source_def'],$_POST['context'],$_POST['author_source_context'],$_POST['title_source_context'],$_POST['material_source_context'],$_POST['link_source_context'],$_POST['technical_note'],$_POST['author_source_technical_note'],$_POST['title_source_technical_note'],$_POST['material_source_technical_note'],$_POST['link_source_technical_note'],$_POST['linguistic_note'],$_POST['Noun_collocation'],$_POST['Adjective_collocation'],$_POST['Verb_collocation'],$_POST['alternatives'],$_POST['derivational_terms'],$_POST['competing_terms'],$_POST['hyperonym'],$_POST['hyponym'],$_POST['meronym_parties'],$_POST['holonym_whole'],$userid,$date,$statut);
	//var_dump($fiche);
	}
	else {
		setFlash('Le champs "term" doit être rempli !', 'danger');
	}
}
require("views/ajouter_fiche.php");


?>