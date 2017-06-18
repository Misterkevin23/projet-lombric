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

			
		}			
	}
	elseif(isset($_POST) 				 										&& (isset($_POST['inscription'])									 || isset($_POST['activator'])))
	{
		if(isset($_POST['email']) && isset($_POST['pseudo'])					&& isset($_POST['motDePasse']) 									&& $_POST['inscription']=='INSCRIPTION')
		{
		$connected=FALSE;
		$panierConnected=FALSE;
		$statuePanier='transit';
		$idAdmin='transit';
		$panier=FALSE;
		$pseudo=$_POST['pseudo'];
		$email=$_POST['email'];
		$motDePasse=$_POST['motDePasse'];
		$numeros='';
		$nomDeRue='';
		$appartement='';
		$batiment='';
		$lieuDit='';
		$CodePostal='';
		$ville='';
		$pays='';
		}
		elseif($_POST['activator']=='activator')
		{
		$connected=FALSE;
		$panierConnected=FALSE;
		$statuePanier='transit';
		$idAdmin='transit';
		$panier=FALSE;
		$pseudo='';
		$email='';
		$motDePasse='';
		$numeros='';
		$nomDeRue='';
		$appartement='';
		$batiment='';
		$lieuDit='';
		$CodePostal='';
		$ville='';
		$pays='';
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
		$email="";
		$motDePasse="";
	}
?>	
