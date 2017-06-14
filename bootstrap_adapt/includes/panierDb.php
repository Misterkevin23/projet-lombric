<?php

function panierUser(){
	$db = new PDO('mysql:host=localhost;dbname=pump', 'root', '');
	
	$query= $db-> prepare('SELECT * FROM panier');

	$query->execute();

	$paniers= $query ->fetchAll();
	return $paniers;
}

function panierSelected($id){
	$db = new PDO('mysql:host=localhost;dbname=pump', 'root', '');
	
	$query=$db->prepare('SELECT * FROM panier WHERE id= :id');
	
	$query->execute(array(
		':id' => $id
	));

	$panier= $query->fetch();
	
	return $panier;
}

?>