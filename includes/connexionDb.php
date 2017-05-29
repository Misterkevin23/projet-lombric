<?php
$db = new PDO('mysql:host=localhost;dbname=pump', 'root', '');

function connectUser(){
	$db = new PDO('mysql:host=localhost;dbname=pump', 'root', '');
	
	$query= $db-> prepare('SELECT * FROM users');

	$query->execute();

	$users= $query ->fetchAll();
	return $users;
}

function connectVisiter(){
	$db = new PDO('mysql:host=localhost;dbname=pump', 'root', '');
	
	$query= $db-> prepare('SELECT * FROM visiteur');

	$query->execute();

	$visits= $query ->fetchAll();
	return $visits;
}



?>