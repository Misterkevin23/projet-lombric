<?php
$db = new PDO('mysql:host=localhost;dbname=pump', 'root', '');

function connectUser(){
	$db = new PDO('mysql:host=localhost;dbname=pump', 'root', '');
	
	$query= $db-> prepare('SELECT * FROM preinscription');

	$query->execute();

	$admins= $query ->fetchAll();
	return $admins;
}

function connectVisiter(){
	$db = new PDO('mysql:host=localhost;dbname=pump', 'root', '');
	
	$query= $db-> prepare('SELECT * FROM visiteur');

	$query->execute();

	$visits= $query ->fetchAll();
	return $visits;
}

?>