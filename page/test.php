<?php

$shopProduit= array_search('TRUE', $_POST);
		$produitQte= 'qte_'.$shopProduit;

var_dump($_POST);
		echo $shopProduit;
		echo $produitQte;
		echo $_POST[$shopProduit];
		echo $_POST[$produitQte];
		echo $_POST[''.$statuePanier.''];



// $db = new PDO('mysql:host=localhost;dbname=pump', 'root', '');

// $query= $db-> prepare('SELECT * FROM produitjardinerie');

// $query->execute();

// $jardinerie= $query ->fetchAll();



// $db = new PDO('mysql:host=localhost;dbname=playground', 'root', '');

//  $query = "CREATE TABLE panier_jardinerie (
//     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
//     idvisit VARCHAR(99) NULL ,
//     idadmin VARCHAR(99)	NULL
//     )";

// $db->exec($query);
// echo "Table MyGuests created successfully";
// // var_dump($jardinerie);
// $id=1;
// $idadmin=NULL;

// $statue=TRUE;
// foreach($jardinerie as $produit){
// 	$blu='pspj'.$produit['id'];
// 	echo '<form method= POST action="test.php?id='.$id.'&statue='.$statue.'">';
// 	echo '<input type="checkbox" name="'.$blu.'" value="TRUE"><input type="submit" id="panier" class="panierButton" value="Ajouter au panier"><input type="hidden" id="panier" name="id" class="panierButton" value="'.$id.'"></br>';
// 	echo '</form>';
// 	$query = $db->prepare("ALTER TABLE panier_jardinerie ADD $blu VARCHAR(99) NULL");
// 	$query->execute();
// 		// ':id'=>$blu
// 		// ));

// 	echo "$blu<br>";
// 	echo 'ro '.$idadmin.' ro';	
// }


// if(isset($_) && $idadmin==NULL){
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

// if(isset($_POST) && $idadmin!=NULL && !isset($idvisit)){
// 	var_dump($_POST);
// 	$key= array_search('TRUE', $_POST);
	
// 			echo $key;
// 			echo $_POST[$key];
// 			echo $_POST['idadmin'];

// 			$query=$db->prepare('UPDATE panier_jardinerie SET '.$key.'= :key WHERE idadmin = :idadmin');

// 			$query->execute(array(
// 				':key'=>	$_POST[''.$key.''],
// 				':idadmin'=>	$_POST['idadmin']

// 				));
		
	// }
// }		





?>