<?php
include '../includes/produitDb.php';
if(isset($_GET) && isset($_GET['action']) 
	&& isset($_GET['id']) && $_GET['action']=='produit' )
{	
	$annexe=produitLombricomposteurAnnexe($_GET['id']);

	echo json_encode($annexe);
}	

?>