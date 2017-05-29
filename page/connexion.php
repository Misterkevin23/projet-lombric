<?php
include '../includes/connexionDb.php';

if(isset($_POST["connexion"])){
	if($_POST["pseudo"]!=NULL AND $_POST["motDePasse"]!=NULL){
		$motDePasse=$_POST["motDePasse"];
		$id=NULL;
		$pseudo=$_POST["pseudo"];
		$connected=FALSE;
		$panier=FALSE;
		
		$admins= connectUser();
				
		foreach ($admins as $admin) {
			if($admin["pseudo"]==$pseudo AND $admin["motDePasse"]==$motDePasse){
				$id= $admin["id"];
				$pseudo= $admin["pseudo"];
				$connected=TRUE;
				$panier=TRUE;

			}
		}
		if($connected){
			
			header('location:UserProfil.php?id='.$id.'&pseudo='.$pseudo);
		}
		else{

			header('location:Home.php?pseudo='.$pseudo.'&id='.$id);
		}	
	}
	else{
		$pseudo=$_POST['pseudo'];
		$id=2;
		$connected=FALSE;
		$panier=FALSE;
		
		header('location:Home.php?pseudo='.$pseudo.'&id='.$id);
	}
}
elseif(isset($_POST["panier"])){
	var_dump($_POST);
	if($_POST["email"]!=NULL AND $_POST["motDePasse"]!=NULL){
		$motDePasse=$_POST["motDePasse"];
		$id=NULL;
		$pseudo=NULL;
		$email=$_POST["email"];
		$connected=FALSE;
		$panier=FALSE;
		echo '111';
		$visits= connectVisiter();
				
		foreach ($visits as $visit) {
			echo '222';
			if($visit["email"]==$email AND $visit["motDePasse"]==$motDePasse){
				$id= $visit["id"];
				$pseudo= $visit["nom"];
				$panier=TRUE;
				$connected=FALSE;
				echo '333';
			break;	
			}
		}
		if($panier){
			
			header('location:Shop.php?id='.$id.'&pseudo='.$pseudo);
		}
		else{

			header('location:Home.php?pseudo='.$pseudo.'&id='.$id);
		}	
	}
	else{
		$email=$_POST['email'];
		$id=2;
		$connected=FALSE;
		$panier=FALSE;
		
		header('location:Home.php?pseudo='.$pseudo.'&id='.$id);
	}
}
else{
	$pseudo=NULL;
	$id=3;
	$connected=FALSE;
	
	
	header('location:Home.php?pseudo='.$pseudo.'&id='.$id);
}


?>