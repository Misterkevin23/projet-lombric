<?php
include '../includes/connexionDb.php';

if(isset($_POST["connexion"]) 													or isset($_POST["panier"]) or isset($_POST["email"]))

{

	if($_POST["pseudo"]!=NULL or $_POST["motDePasse"]!=NULL 					or $_POST["email"]!=NULL )
	{	
		$motDePasse=$_POST["motDePasse"];
		$id=NULL;
		$pseudo=$_POST["pseudo"];
		$connected=FALSE;
		$panier=FALSE;
		
		$users= connectUser();
				
		foreach ($users as $user)
		{
			if($user["pseudo"]==$pseudo && $user["motDePasse"]==$motDePasse 	&& $user["statue"]=='admin')
			{
				$id= $user["id"];
				$pseudo= $user["pseudo"];
				$connected=TRUE;
				$panierConnected=TRUE;
			break;
			}
			elseif($motDePasse=$_POST["motDePasse"] AND $user["email"]==$_POST["email"] && $user["statue"]=='client')
			{
				$id= $user["id"];
				$pseudo= $user["nom"];
				$panierConnected=TRUE;
				$connected=FALSE;
			break;		
			}

		}
		if($connected==TRUE && $panierConnected==TRUE)
		{
			header('location:UserProfil.php?id='.$id.'&pseudo='.$pseudo);
		}
		elseif($connected==FALSE && $panierConnected==TRUE)
		{
			header('location:Shop.php?pseudo='.$pseudo.'&id='.$id);
		}	
		else
		{
			$pseudo=$_POST['pseudo'];
			$id=2;
			$connected=FALSE;
			$panier=FALSE;
			header('location:Home.php?pseudo='.$pseudo.'&id='.$id);
		}	
	}
	else
	{
	header('location:Home.php');
	}
}
else
{
header('location:Home.php');	
}	

?>