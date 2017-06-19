<?php
include '../includes/mainConnexionChooseSession.php';
if($panier!=FALSE && isset($_GET) && $_GET['action']=='panierUser')
{
	$db = new PDO('mysql:host=localhost;dbname=pump', 'root', '');
		
	$query=$db->prepare('SELECT * FROM panier WHERE id= :id');

	$query->execute(array(
			':id' => $idPanier
		));

	$panier= $query->fetch();

	echo json_encode($panier);
}
else
{
	$nonActive[0]=FALSE;
	echo json_encode($nonActive);

}	

?>