<?php

function jardinerieArticle(){

	$db = new PDO('mysql:host=localhost;dbname=pump', 'root', '');

	$query = $db->prepare('SELECT * FROM jardinerie');

	$query->execute();

	$jardinerie= $query ->fetchAll();

	return $jardinerie;
}

function accueilArticle(){

	$db = new PDO('mysql:host=localhost;dbname=pump', 'root', '');

	$query = $db->prepare('SELECT * FROM accueil');

	$query->execute();

	$accueil= $query ->fetchAll();

	return $accueil;

}

function lombricompostArticle(){

$db = new PDO('mysql:host=localhost;dbname=pump', 'root', '');

$query = $db->prepare('SELECT * FROM lombricompost');

$query->execute();

$lombricompost= $query ->fetchAll();

return $lombricompost;

}

function fruitArticle(){

$db = new PDO('mysql:host=localhost;dbname=pump', 'root', '');

$query = $db->prepare('SELECT * FROM tableauFruit');

$query->execute();

$fruits= $query ->fetchAll();

return $fruits;

}

?>