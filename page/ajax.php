<?php
include '../includes/mainConnexionChooseSession.php';
include '../includes/produitDb.php';
include '../includes/connexionDb.php';



$req_method = $_SERVER['REQUEST_METHOD'];

if ($req_method == 'GET')
{
	//Requete ajax afin d'avoir la liste des mail
	//et pseudo pour verification
	if($panier==FALSE && $panierConnected==FALSE && $idAdmin == 'transit' && $statuePanier == 'transit')
	{	
		$users = connectUsersByMailAndFirstname();

		echo json_encode($users);
	}

	//Requete permetant l'affichage des fiche produit dans shop
	elseif(isset($_GET['action']) && isset($_GET['id'])				 && $_GET['action']=='produit' )
	{	
		$annexe=produitLombricomposteurAnnexe($_GET['id']);

		echo json_encode($annexe);
	}
	//Requete permettant de lier les produits du shop
	//et du panier a l'utilisateur connecté si il est inscrit
	elseif($panier==TRUE && $_GET['action']=='panierUser')
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
}	
elseif ($req_method == 'POST')
{
	//requete ajax permettant l'ajout ou la suppression
	//de produit dans le panier de l'utilisateur
	//valable dans la page shop et panier
	if($panier == TRUE && isset($_POST['actionPanier']))
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
}	








?>