<?php
	session_start();

	if($_SESSION!=NULL && isset($_SESSION['user']))
	{
		include '../includes/panierDb.php';

		if($_SESSION['user']['statue']=='admin')
		{
			$connected=TRUE;
			$panierConnected=TRUE;
			$id= $_SESSION['user']['id'];
			$idAdmin=$_SESSION['user']['id'];
			$idPanier=$_SESSION['user']['idpanier'];
			$nom=$_SESSION['user']['nom'];
			$numeros=$_SESSION['user']['numeros'];
			$nomDeRue=$_SESSION['user']['nomDeRue'];
			$appartement=$_SESSION['user']['appartement'];
			$batiment=$_SESSION['user']['batiment'];
			$lieuDit=$_SESSION['user']['lieuDit'];
			$CodePostal=$_SESSION['user']['CodePostal'];
			$ville=$_SESSION['user']['ville'];
			$pays=$_SESSION['user']['pays'];
			$pseudo=$_SESSION['user']['pseudo'];
			$tel1=$_SESSION['user']['tel1'];
			$tel2=$_SESSION['user']['tel2'];
			$description=$_SESSION['user']['description'];
			$prenom=$_SESSION['user']['prenom'];
			$Sex=$_SESSION['user']['Sex'];
			$email=$_SESSION['user']['email'];
			$situation=$_SESSION['user']['situation'];
			$exterieur=$_SESSION['user']['exterieur'];
			$habitant=$_SESSION['user']['habitant'];

			$panier=panierSelected($idPanier);
			$statuePanier='idadmin';
		}

		elseif($_SESSION['user']['statue']=='client')
		{
			$connected=FALSE;
			$panierConnected=TRUE;
			$id= $_SESSION['user']['id'];
			$idAdmin=$_SESSION['user']['id'];
			$idPanier=$_SESSION['user']['idpanier'];
			$nom=$_SESSION['user']['nom'];
			$numeros=$_SESSION['user']['numeros'];
			$nomDeRue=$_SESSION['user']['nomDeRue'];
			$appartement=$_SESSION['user']['appartement'];
			$batiment=$_SESSION['user']['batiment'];
			$lieuDit=$_SESSION['user']['lieuDit'];
			$CodePostal=$_SESSION['user']['CodePostal'];
			$ville=$_SESSION['user']['ville'];
			$pays=$_SESSION['user']['pays'];
			$pseudo=$_SESSION['user']['pseudo'];

			$panier=panierSelected($idPanier);
			$statuePanier='idclient';
			$pseudo=$nom;
		}
		else
		{
			$connected=FALSE;
			$panierConnected=FALSE;
			$statuePanier='visit';
			$idAdmin='visit';
			$panier=FALSE;
			$pseudo='';
		}		
	}
	else
	{
		$connected=FALSE;
		$panierConnected=FALSE;
		$statuePanier='visit';
		$idAdmin='visit';
		$panier=0;
		$pseudo='';
		$nom="";
		$numeros="";
		$nomDeRue="";
		$appartement="";
		$batiment="";
		$lieuDit="";
		$CodePostal="";
		$ville="";
		$pays="";
	}
?>	