<?php

if(isset($_POST["connexion"]) or isset($_POST["panier"]) ) 					
{
	session_start();

	$condition1=isset($_POST["pseudo"]) && isset($_POST["motDePasse"])		 && $_POST["pseudo"]!=NULL && $_POST["motDePasse"]!=NULL;

	if($condition1)
	{
		$db = new PDO('mysql:host=localhost;dbname=pump', 'root', '');

		$query= $db->prepare(
			'SELECT * FROM users WHERE pseudo = :pseudo AND motDePasse = :motDePasse'
		);

		$query->execute(array(
			':pseudo' 		=>$_POST["pseudo"],
			':motDePasse'	=>$_POST["motDePasse"]
		));	

		$admin = $query->fetch();

		if($admin)
		{
			$_SESSION['user']= $admin;

			if($_SESSION['user']['statue']=='admin')
			{
				$connected=TRUE;
				$panierConnected=TRUE;
			}	

		}
		else
		{
			echo 'Verifier les identifiants';
		}
	}

	$condition2=isset($_POST["email"]) && isset($_POST["motDePasse"])		 && $_POST["email"]!=NULL && $_POST["motDePasse"]!=NULL ;

	if($condition2)
	{
		$db = new PDO('mysql:host=localhost;dbname=pump', 'root', '');

		$query= $db->prepare(
			'SELECT * FROM users WHERE email = :email AND motDePasse = :motDePasse'
		);

		$query->execute(array(
			':email' 		=>$_POST["email"],
			':motDePasse'	=>$_POST["motDePasse"]
		));	

		$client = $query->fetch();

		if($client)
		{
			$_SESSION['user']= $client;

			if($_SESSION['user']['statue']=='client')
			{
				$connected=FALSE;
				$panierConnected=TRUE;
			}	

		}
		else
		{
			echo 'Verifier les identifiants';
		}
	}
	if($connected==TRUE && $panierConnected==TRUE)
	{
		header('location:UserProfil.php');
	}
	elseif($connected==FALSE && $panierConnected==TRUE)
	{
		header('location:Shop.php');
	}	
	else
	{	
		header('location:Home.php');	
		echo 'Probleme identifiants';
		$connected=FALSE;
		$panier=FALSE;
	}
}
else
{
	header('location:Home.php');
	echo 'Connecxion non validé';
	$connected=FALSE;
	$panier=FALSE;
}

?>