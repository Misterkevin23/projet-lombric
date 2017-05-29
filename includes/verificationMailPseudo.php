<?php
function VerifMailPseudo($email, $pseudo, $location){
	var_dump($_POST);
	$admins=connectUser();
	$visits=connectVisiter();
	foreach($admins as $admin){
		if($email==$admin['email'] OR $pseudo==$admin['pseudo']){
			echo '142552';
			header('location:$location');
			break;
		}
	}
	foreach($visits as $visit){
		if($email==$visit['email']){
			echo 'AZSDDDSD';
			header('location:$location');
			break;
		}
	}
}	
?>