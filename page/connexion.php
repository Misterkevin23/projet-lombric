<?php
include '../includes/connexionDb.php';

if(isset($_POST["connexion"])){
	if($_POST["pseudo"]!=NULL AND $_POST["motDePasse"]!=NULL){
		$pseudo=$_POST["pseudo"];
		$motDePasse=$_POST["motDePasse"];

		$db= connectUser();
		
		$query= $db-> prepare('SELECT * FROM preinscription');

		$query->execute();

		$admins= $query ->fetchAll();
		
		foreach ($admins as $admin) {
			if($admin["pseudo"]==$pseudo AND $admin["motDePasse"]==$motDePasse){
					$id= $admin["id"];
					$pseudo= $admin["pseudo"];

				header('location:UserProfil.php?id='.$id.'&connected=TRUE&statue=admin&pseudo='.$pseudo);
			}
			else{
				header('location:Home.php?pseudo='.$pseudo.'&connected=&id='.$pseudo.'&statue=visit');
			}
		}
	}
	else{
		header('location:Home.php');
		$pseudo=$_POST['pseudo'];
		$id=FALSE;
		$statue="visit";
		$connected=FALSE;
	}
}
// elseif(isset($_GET['pseudo'])){
// 	$pseudo=$_GET['pseudo'];
// 	$id=FALSE;
// 	$statue="visit";
// 	$connected=FALSE;
// }
// else{
// 	$pseudo="";
// 	$statue="visit";
// 	$id=FALSE;
// 	$connected=FALSE;
// }


?>