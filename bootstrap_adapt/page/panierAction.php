<?php
include '../includes/mainConnexionChooseSession.php';

$panierQte=1;

if($_POST!=NULL)
{
	if(isset($idPanier))
	{
		$panierSupprimer= array_search('Supprimer', $_POST);
		$panierAjouter= array_search('Ajouter', $_POST);
		$panierProduit= array_search('NULL', $_POST);
		// var_dump($panierSupprimer);
		// var_dump($panierAjouter);
		// var_dump($panierProduit);
		// var_dump($_POST);
		
		if($panierSupprimer)
		{
			if($_POST[$panierSupprimer]=='Supprimer'						 && $_POST[$panierProduit]=='NULL')
			{	
				$db = new PDO('mysql:host=localhost;dbname=pump', 'root', '');

				$query=$db->prepare(
					'UPDATE panier SET '.$panierProduit.'= :panierProduit WHERE id = :id'
				);

				$query->execute(array(
					':panierProduit'		=>$_POST[''.$panierProduit.''],
					':id'					=>$panierSupprimer
				));			
			}
		}
		elseif($panierAjouter)
		{	
			if($_POST[$panierAjouter]=='Ajouter' 								&& $_POST[$panierProduit]=='NULL')
			{
				$key='qte_'.$panierProduit;
				$panierQte=$_POST[$key];
				// var_dump($key);
				// var_dump($panierQte);
			
				$query=$db->prepare(
					'UPDATE panier SET '.$key.'= :Qteproduit WHERE id = :id'
				);

				$query->execute(array(
					':Qteproduit'			=>$panierQte,
					':id'					=>$panierAjouter
				));
			}
		}
	header('location:Panier.php');						
	}
}		


?>