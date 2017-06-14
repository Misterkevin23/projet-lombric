<?php
	include '../includes/connexionDb.php';
	include '../includes/mainConnexionChooseSession.php';

	$users = connectUser();

	echo json_encode($users);

?>