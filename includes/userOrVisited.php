<?php 
include '../includes/connexionDb.php';

if($connected){

	$admins= connectUser();

	foreach ($admins as $admin) {
		if($statue==$admin["nom"] AND $pseudo==$admin["pseudo"] && $id==$admin["id"]){
			$id= $admin["id"];
			$pseudo= $admin["pseudo"];
			$connected=TRUE;
			$statue="admin";
		}
	}
	if($connected==TRUE && $statue=="admin"){
		include '../includes/userConnect.php';
	}
	else{
		echo '<div class="aside">';
		include '../includes/inscription.php';
		echo '</div>';
	}
}	
else{
	$pseudo=NULL;
	$id=NULL;
	$statue="visit";
	$connected=FALSE;
	echo '<div class="aside">';
	include '../includes/inscription.php';
	echo '</div>';
}

?>