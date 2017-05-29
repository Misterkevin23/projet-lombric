<?php

 var_dump($_POST);




$db = new PDO('mysql:host=localhost;dbname=pump', 'root', '');

$query= $db-> prepare('SELECT * FROM produitjardinerie');

$query->execute();

$jardinerie= $query ->fetchAll();



$db = new PDO('mysql:host=localhost;dbname=playground', 'root', '');

 $query = "CREATE TABLE panier_jardinerie (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    idvisit VARCHAR(99) NULL ,
    idadmin VARCHAR(99)	NULL
    )";

$db->exec($query);
echo "Table MyGuests created successfully";
// var_dump($jardinerie);
$id=1;
$idadmin=$id;

$statue=TRUE;
foreach($jardinerie as $produit){
	$blu='pspj'.$produit['id'];
	echo '<form method= POST action="test.php?id='.$id.'&statue='.$statue.'">';
	echo '<input type="checkbox" name="'.$blu.'" value="TRUE"><input type="submit" id="panier" class="panierButton" value="Ajouter au panier"><input type="hidden" id="panier" name="id" class="panierButton" value="'.$idadmin.'"></br>';
	echo '</form>';
	$query = $db->prepare("ALTER TABLE panier_jardinerie ADD $blu VARCHAR(99) NULL");
	$query->execute();
		// ':id'=>$blu
		// ));

	echo "$blu<br>";
	echo 'ro '.$idadmin.' ro';	
}


// if($_POST!=NULL && $idadmin==NULL){
// 	$idadmin=$_POST['id'];
// 	echo 'ri '.$idadmin.' ri';
// 	var_dump($_POST);
// 	$key= array_search('TRUE', $_POST);
// 		echo $key;
// 		echo $_POST[$key];
// 	$query=$db->prepare(
// 	'INSERT INTO panier_jardinerie ('.$key.',idadmin)
// 	VALUES (:key, :idadmin)'
// 	);

// 	$query->execute(array(
// 		':idadmin'	=>$idadmin,
// 		':key'		=>$_POST[$key]
// 	));

// }

if($_POST!=NULL && $idadmin!=NULL && !isset($idvisit)){
	var_dump($_POST);
	$key= array_search('TRUE', $_POST);
	
	echo $key;
	echo $_POST[$key];
	echo $_POST['id'];

	$query=$db->prepare('UPDATE panier_jardinerie SET '.$key.'= :key WHERE idadmin = :idadmin');

	$query->execute(array(
		':key'=>	$_POST[''.$key.''],
		':idadmin'=>	$_POST['id']

		));
}		





?>