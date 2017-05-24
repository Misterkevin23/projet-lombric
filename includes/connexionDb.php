<?php
function connectUser(){
	$db = new PDO('mysql:host=localhost;dbname=pump', 'root', '');

	$query= $db-> prepare('SELECT * FROM preinscription');

	$query->execute();

	$admins= $query ->fetchAll();
	return $admins;
}

?>