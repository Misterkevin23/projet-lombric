<?php
	include '../includes/connexionDb.php';
	include '../includes/mainConnexionChooseSession.php';

	$users = connectUsersByMailAndFirstname();

	echo json_encode($users);

?>