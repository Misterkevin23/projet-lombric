<?php
include '../includes/mainConnexionChooseSession.php';



if($panier!=FALSE && isset($_POST) && isset($_POST['actionPanier']))
{

	if($_POST['actionPanier']=='Ajouter au panier' 
		|| $_POST['actionPanier']=='Annuler' || $_POST['actionPanier']=='Supprimer')
	{
		if($idAdmin==$_POST['id'] 
			&& $statuePanier==$_POST['nomIdPanier'] )
		{

			$shopProduit=$_POST['nomProduit'];
			$produitQte=$_POST['nomQuantite'];
			$statuePanier=$_POST['nomIdPanier'];
			$idAdmin=$_POST['id'];

			$db = new PDO('mysql:host=localhost;dbname=pump', 'root', '');

			$query=$db->prepare('UPDATE panier SET '.$shopProduit.'= :shopProduit, '.$produitQte.'= :produitQte WHERE '.$statuePanier.' = :idpanier');

			$query->execute(array(
				':shopProduit'			=>$_POST['etatPanier'],
				':produitQte'		=>$_POST['quantite'],
				':idpanier'		=>$idAdmin
			));

			$panierNumber=1;
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
			echo json_encode($panierNumber);
		}	
	}
	else if($_POST['actionPanier']=='addQuantite')
	{
		echo json_encode($_POST);
		
		if($idAdmin==$_POST['id'] 
			&& $statuePanier==$_POST['nomIdPanier'] )
		{
			$produitQte=$_POST['nomQuantite'];
			$statuePanier=$_POST['nomIdPanier'];
			$idAdmin=$_POST['id'];

			$db = new PDO('mysql:host=localhost;dbname=pump', 'root', '');

			$query=$db->prepare('UPDATE panier SET '.$produitQte.'= :produitQte WHERE '.$statuePanier.' = :idpanier');

			$query->execute(array(
				':produitQte'	=>$_POST['quantite'],
				':idpanier'		=>$idAdmin
			));

			$panierNumber=1;
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
			echo json_encode($panierNumber);
		}	
	}					
	else
	{
		echo json_encode("Panier non activé!");
	}
}
else
{
	echo 'non activer';
}		


?>