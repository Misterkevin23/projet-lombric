<?php
include '../includes/connexionDb.php';

if(isset($_POST["connexion"])){
	if($_POST["pseudo"]!=NULL AND $_POST["motDePasse"]!=NULL){
		$pseudo=$_POST["pseudo"];
		$motDePasse=$_POST["motDePasse"];
		$id=NULL;
		$statue="visit";
		$connected=FALSE;
		$pseudo=$_POST['pseudo'];
		
		$admins= connectUser();
				
		foreach ($admins as $admin) {
			if($admin["pseudo"]==$pseudo AND $admin["motDePasse"]==$motDePasse){
				$id= $admin["id"];
				$pseudo= $admin["pseudo"];
				$connected=TRUE;
				$statue=$admin["nom"];	
			}
		}
		if($connected){
			
			header('location:UserProfil.php?id='.$id.'&connected='.$connected.'&statue='.$statue.'&pseudo='.$pseudo);
		}
		else{

			header('location:Home.php?pseudo='.$pseudo.'&connected='.$connected.'&id='.$id.'&statue='.$statue);
		}	
	}
	else{
		$pseudo=$_POST['pseudo'];
		$id=NULL;
		$statue="visit";
		$connected=FALSE;
		
		header('location:Home.php?pseudo='.$pseudo.'&connected='.$connected.'&id='.$id.'&statue='.$statue);
	}
}
else{
	$pseudo=NULL;
	$id=NULL;
	$statue="visit";
	$connected=FALSE;
	echo 'ok4';
	
	header('location:Home.php?pseudo='.$pseudo.'&connected='.$connected.'&id='.$id.'&statue='.$statue);
}


?>