<?php
$db = new PDO('mysql:host=localhost;dbname=pump', 'root', '');

//fonction de connexion a la base de donne contenant
//toute les informations des utilisateur sans filtre
function connectUser(){
	$db = new PDO('mysql:host=localhost;dbname=pump', 'root', '');
	
	$query= $db-> prepare('SELECT * FROM users');

	$query->execute();

	$users= $query ->fetchAll();
	return $users;
}


?>