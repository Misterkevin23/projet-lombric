<?php

function produits($nom, $resume, $prix, $statue, $lien, $id){			
	echo '<div class="produit">';
	imageMode("produitPhoto","$lien");
	echo '<div class="produitDescription">';
	echo '<h3>'.$nom.'</h3>';
	echoP("produitDescriptionText","$resume");
	echo '</div>';
	echo '<div class="produitAction">';
	echo '<h4>'.$statue.'</h4>';
	echo '<div class="button">';
	// echo '<form>';
	echo '<input type="checkbox" name="'.$id.'"><input type="submit" id="panier" class="panierButton" value="Ajouter au panier"></br>';
	// echo '</form>';
	echo '<form>';
	echo '<a href="" name="'.$id.'" class="produitButton"> Voir le produit </a></br>';
	echo '</form>';
	echo '<form>';
	echo '<input type="checkbox" name="'.$id.'"><input type="submit" class="formButtun" value="Achat direct"></br>';
	echo '</form>';
	echo '</div>';
	echo '<p class="produitPrix">'.$prix.'<i class="fa fa-eur" aria-hidden="true"></i></p>';
	echo '</div></div>'; 
}

function shopProduit($produits){
	foreach($produits as $produit){
		if($produit["nom"]!=NULL AND $produit["resume"]!=NULL AND $produit["prix"]!=NULL AND $produit["statue"]!=NULL AND $produit["lien"]!=NULL AND $produit["id"]!=NULL){
			produits($produit["nom"], $produit["resume"], $produit["prix"], $produit["statue"], $produit["lien"], $produit["id"]);
		}
	}
}

function panier($nom, $lien, $prix, $id){
	echo '<div class="panierProduit">';
	echo '<h3>'.$nom.'</h3>';
	imageMode("panierProduitPhoto","$lien");
	echo '<form>';
	echo '<a href="" name= "'.$id.'" class="produitButton"> Voir le produit </a><br><br><br><br>';
	echo '<p class="panierProduitPrix">Supprimer<i class="fa fa-times" aria-hidden="true"></i></p><br><br><br>';
	echo '<label class="panierProduitPrix">QUANTITE :</label>';
	echo '<input type="number" name="qteProduit" value="" >';
	echo '<p class="panierProduitPrix">'.$prix.'<i class="fa fa-eur" aria-hidden="true"></i></p>';
	echo '</form></div>';
}

function panierClient($paniers){
	foreach ($paniers as $panier){
		if($panier["nom"]!=NULL AND $panier["lien"]!=NULL AND $panier["prix"]!=NULL AND $panier["id"]!= NULL){
			panier($panier["nom"], $panier["lien"], $panier["prix"], $panier["id"]);
		}
	}			
}
?>