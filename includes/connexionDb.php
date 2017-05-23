<?php
function connectUser(){
	$db = new PDO('mysql:host=localhost;dbname=pump', 'root', '');
	return $db;
}

?>