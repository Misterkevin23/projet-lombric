<?php
$panierQte=1;

if($_POST!=NULL)
{
	if(isset($idPanier))
	{
	

		if($_POST!=NULL && isset($idPanier))
		{
			$panierSupprimer= array_search('Supprimer', $_POST);
			$panierAjouter= array_search('Ajouter', $_POST);
			$panierProduit= array_search('NULL', $_POST);
			var_dump($panierSupprimer);
			var_dump($panierAjouter);
			var_dump($panierProduit);
			var_dump($_POST);
			
			if($_POST[$panierSupprimer]=='Supprimer'						 && $_POST[$panierProduit]=='NULL')
			{	
				$query=$db->prepare(
					'UPDATE panier SET '.$panierProduit.'= :panierProduit WHERE id = :id'
				);

				$query->execute(array(
					':panierProduit'		=>$_POST[''.$panierProduit.''],
					':id'					=>$panierSupprimer
				));			
			}
			elseif($_POST[$panierAjouter]=='Ajouter' 							&& $_POST[$panierProduit]=='NULL')
			{
				$key='qte_'.$panierProduit;
				$panierQte=$_POST[$key];
				var_dump($key);
				var_dump($panierQte);
			
				$query=$db->prepare(
					'UPDATE panier SET '.$key.'= :Qteproduit WHERE id = :id'
				);

				$query->execute(array(
					':Qteproduit'			=>$panierQte,
					':id'					=>$panierAjouter
				));
			}				
		}
	}
}		


?>