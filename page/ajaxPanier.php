<?php
include '../includes/mainConnexionChooseSession.php';

$db = new PDO('mysql:host=localhost;dbname=pump', 'root', '');
	
$query=$db->prepare('SELECT * FROM panier WHERE id= :id');

$query->execute(array(
		':id' => $idPanier
	));

$panier= $query->fetch();

echo json_encode($panier);

?>