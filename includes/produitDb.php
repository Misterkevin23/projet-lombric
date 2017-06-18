<?php

function produitJardinerie(){

	$db = new PDO('mysql:host=localhost;dbname=pump', 'root', '');

	$query = $db->prepare('
		SELECT 
		produitjardinerie.id, 
		produitjardinerie.nom,
		produitjardinerie.abreviation,
		produitjardinerie.resume,
		produitjardinerie.prix,
		produitjardinerie.statue,
		produitjardinerie.lien
		FROM produitjardinerie
	');

	$query->execute();

	$jardinerie= $query ->fetchAll();

	return $jardinerie;
}

function produitLombricomposteur(){

	$db = new PDO('mysql:host=localhost;dbname=pump', 'root', '');

	$query = $db->prepare('
		SELECT
		produitlombricomposteur.id, 
		produitlombricomposteur.nom,
		produitlombricomposteur.abreviation,
		produitlombricomposteur.resume,
		produitlombricomposteur.prix,
		produitlombricomposteur.statue,
		produitlombricomposteur.lien
		 FROM produitlombricomposteur
	');

	$query->execute();

	$lombricomposteur= $query ->fetchAll();

	return $lombricomposteur;
}

function livraisonMode(){

	$db = new PDO('mysql:host=localhost;dbname=pump', 'root', '');

	$query = $db->prepare('SELECT * FROM livraisonmode');

	$query->execute();

	$livraisonMode= $query ->fetchAll();

	return $livraisonMode;
}

function produitLombricomposteurAnnexe($id){

	$db = new PDO('mysql:host=localhost;dbname=pump', 'root', '');

	$query = $db->prepare('
		SELECT

		produitlombricomposteur.id, 
		produitlombricomposteur.nom,
		produitlombricomposteur.abreviation,
		produitlombricomposteur.resume,
		produitlombricomposteur.prix,
		produitlombricomposteur.provenance,
		produitlombricomposteur.lien,
		produitlombricomposteur.lien2, 
		produitlombricomposteur.lien3,
		produitlombricomposteur.cible,
		produitlombricomposteur.materiel,
		produitlombricomposteur.contenu,
		produitlombricomposteur.dimension,
		produitlombricomposteur.contenance
		FROM produitlombricomposteur
		WHERE id= :id
	');

	$query->execute(array(
		':id' =>$id
		)); 

	return $query ->fetchAll();
}
?>