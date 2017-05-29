<?php
function VerifMailPseudo($email, $pseudo){
	var_dump($_POST);
	$users=connectUser();
	foreach($users as $user){
		if($email==$user['email'] OR $pseudo==$user['pseudo']){
			echo '142552';
			header('location:inscriptionForm.php');
			break;
		}
	}
}	
?>