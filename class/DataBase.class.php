<?php

class DataBase
{

public function dataBase()
{
	$db = new PDO('mysql:host=localhost;dbname=pump', 'root', '');
	return $db;
}

//fonction de connexion a la base de donne contenant
//toute les informations des utilisateur sans filtre
 public function connectUser()
 {

	$db = dataBase();
	
	$query= $db-> prepare('SELECT * FROM users');

	$query->execute();

	$users= $query ->fetchAll();
	return $users;
}

public function inscriptionAdmin($data)
{
	$query = $db->prepare(
						'INSERT INTO users (email, pseudo, motDePasse, Sex, prenom, nom, numeros, nomDeRue, appartement, batiment, lieuDit, CodePostal, ville, pays, tel1, tel2, age, situation, exterieur, habitant, description, statue) 									VALUES (:email, :pseudo, :motDePasse, :Sex, :prenom, :nom, :numeros, :nomDeRue, :appartement, :batiment, :lieuDit, :CodePostal, :ville, :pays, :tel1, :tel2, :age, :situation, :exterieur, :habitant, :description, :statue)'
					);

					$query->execute(array(
						':email'		=>$data['email'],
						':pseudo'		=>$data['pseudo'],
						':motDePasse'	=>$data['motDePasse'],
						':Sex'			=>$data['Sex'],
						':prenom'		=>$data['prenom'],
						':nom'			=>$data['nom'],
						':numeros'		=>$data['numeros'],
						':nomDeRue'		=>$data['nomDeRue'],
						':appartement'	=>$data['appartement'],
						':batiment'		=>$data['batiment'],
						':lieuDit'		=>$data['lieuDit'],
						':CodePostal'	=>$data['CodePostal'],
						':ville'		=>$data['ville'],
						':pays'			=>$data['pays'],
						':tel1'			=>$data['tel1'],
						':tel2'			=>$data['tel2'],
						':age'			=>$data['age'],
						':situation'	=>$data['situation'],
						':exterieur'	=>$data['exterieur'],
						':habitant'		=>$data['habitant'],
						':description'	=>$data['description'],
						':statue'		=>'admin'
					));
}

public function inscriptionClient($data)
{
	$query = $db->prepare(
						'INSERT INTO users (email, motDePasse, Sex, prenom, nom, numeros, nomDeRue, appartement, batiment, lieuDit, CodePostal, ville, pays, tel1, statue, pseudo)	VALUES (:email, :motDePasse, :Sex, :prenom, :nom, :numeros, :nomDeRue, :appartement, :batiment, :lieuDit, :CodePostal, :ville, :pays, :tel1, :statue, :pseudo)'
					);
		 			echo 'eee';
					$query->execute(array(
						':email'		=>$data['email'],
						':motDePasse'	=>$data['motDePasse'],
						':Sex'			=>$data['Sex'],
						':prenom'		=>$data['prenom'],
						':nom'			=>$data['nom'],
						':numeros'		=>$data['numeros'],
						':nomDeRue'		=>$data['nomDeRue'],
						':appartement'	=>$data['appartement'],
						':batiment'		=>$data['batiment'],
						':lieuDit'		=>$data['lieuDit'],
						':CodePostal'	=>$data['CodePostal'],
						':ville'		=>$data['ville'],
						':pays'			=>$data['pays'],
						':tel1'			=>$data['tel1'],
						':statue'		=>'client',
						':pseudo'		=>$data['nom']
					));
} 
public function connectUsersByMailAndFirstname()
{
	$db = dataBase();
	
	$query= $db-> prepare('SELECT email, pseudo FROM users');

	$query->execute();

	$users= $query ->fetchAll();
	return $users;
}

public function panierUser()
{
	$db = dataBase();
	
	$query= $db-> prepare('SELECT * FROM panier');

	$query->execute();

	$paniers= $query ->fetchAll();
	return $paniers;
}

public function panierSelected($id)
{
	$db = dataBase();
	
	$query=$db->prepare('SELECT * FROM panier WHERE id= :id');
	
	$query->execute(array(
		':id' => $id
	));

	$panier= $query->fetch();
	
	return $panier;
}

public function produitJardinerie(){

	$db = dataBase();

	$query = $db->prepare('
		SELECT 
		produitjardinerie.id, 
		produitjardinerie.nom,
		produitjardinerie.abreviation,
		produitjardinerie.resume,
		produitjardinerie.prix,
		produitjardinerie.statue,
		produitjardinerie.lien
		FROM produitjardinerie
	');

	$query->execute();

	$jardinerie= $query ->fetchAll();

	return $jardinerie;
}

public function produitLombricomposteur()
{

	$db = dataBase();

	$query = $db->prepare('
		SELECT
		produitlombricomposteur.id, 
		produitlombricomposteur.nom,
		produitlombricomposteur.abreviation,
		produitlombricomposteur.resume,
		produitlombricomposteur.prix,
		produitlombricomposteur.statue,
		produitlombricomposteur.lien
		 FROM produitlombricomposteur
	');

	$query->execute();

	$lombricomposteur= $query ->fetchAll();

	return $lombricomposteur;
}

public function livraisonMode()
{

	$db = dataBase();

	$query = $db->prepare('SELECT * FROM livraisonmode');

	$query->execute();

	$livraisonMode= $query ->fetchAll();

	return $livraisonMode;
}

function produitLombricomposteurAnnexe($id)
{

	$db = dataBase();

	$query = $db->prepare('
		SELECT
		produitlombricomposteur.id, 
		produitlombricomposteur.nom,
		produitlombricomposteur.abreviation,
		produitlombricomposteur.resume,
		produitlombricomposteur.prix,
		produitlombricomposteur.provenance,
		produitlombricomposteur.lien,
		produitlombricomposteur.lien2, 
		produitlombricomposteur.lien3,
		produitlombricomposteur.cible,
		produitlombricomposteur.materiel,
		produitlombricomposteur.contenu,
		produitlombricomposteur.dimension,
		produitlombricomposteur.contenance
		FROM produitlombricomposteur
		WHERE id= :id
	');

	$query->execute(array(
		':id' =>$id
		)); 

	return $query ->fetchAll();
}


}

?>