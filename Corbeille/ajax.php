<?php
	include '../includes/connexionDb.php';
	include '../includes/mainConnexionChooseSession.php';
	
if($panier==FALSE && isset($_GET) && $panierConnected==FALSE 			&& $idAdmin == 'transit' && $statuePanier == 'transit')
{	
	$users = connectUsersByMailAndFirstname();

	echo json_encode($users);
}	

?>