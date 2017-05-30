<?php

include '../includes/mainConnexionChooseSession.php';

if(isset($_POST))
{
	if($_POST!=NULL && isset($idAdmin))
	{
		$shopProduit= array_search('TRUE', $_POST);
		$produitQte= 'qte_'.$shopProduit;
		$key=substr($shopProduit, 0, 4);
		
		var_dump($_POST);
		echo $shopProduit;
		echo $produitQte;
		echo $_POST[$shopProduit];
		echo $_POST[$produitQte];
		echo $_POST[''.$statuePanier.''];

		$db = new PDO('mysql:host=localhost;dbname=pump', 'root', '');

		$query=$db->prepare('UPDATE panier SET '.$shopProduit.'= :shopProduit, '.$produitQte.'= :produitQte WHERE '.$statuePanier.' = :idpanier');

		$query->execute(array(
			':shopProduit'			=>$_POST[''.$shopProduit.''],
			':produitQte'		=>$_POST[''.$produitQte.''],
			':idpanier'		=>$_POST[''.$statuePanier.'']
		));

		$panierNumber=0;
		$count="";
		$lenght= count($panier);

		for($count=0; $count < $lenght; $count++ )
		{
			if (isset($panier[$count]))
			{	
				if($panier[$count]=="TRUE")
				{
					$panierNumber++;
				}
			}	
		}
		if($key=='pspj')
		{	
		header('location:Shop_Jardiniere_en_bois_page_1.php');
		}
		elseif($key=='pspl')
		{
			header('location:Shop_lombricomposteur_standard_page_1');
		}
	}					
	else
	{
		echo "Panier non activé!";
	}
}		

?>