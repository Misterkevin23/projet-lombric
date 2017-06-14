<?php

function produitJardinerie(){

	$db = new PDO('mysql:host=localhost;dbname=pump', 'root', '');

	$query = $db->prepare('SELECT * FROM produitjardinerie');

	$query->execute();

	$jardinerie= $query ->fetchAll();

	return $jardinerie;
}

function produitLombricomposteur(){

	$db = new PDO('mysql:host=localhost;dbname=pump', 'root', '');

	$query = $db->prepare('SELECT * FROM produitlombricomposteur');

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

?>