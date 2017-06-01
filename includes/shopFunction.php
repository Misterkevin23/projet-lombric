<?php

function produits($nom, $resume, $prix, $statue, $lien, $id, $idAdmin,$abrev,$envoi, $produitTable, $statuePanier){			
	echo '<div class="produit">';
	imageMode("produitPhoto","$lien");
	echo '<div class="produitDescription">';
	echo '<h3>'.$nom.'</h3>';
	echoP("produitDescriptionText","$resume");
	echo '</div>';
	echo '<div class="produitAction">';
	echo '<h4>'.$statue.'</h4>';
	echo '<div class="button">';
	// echo '<form method= POST action="'.$envoi.'">';
	$panierName=$abrev.$id;
	$panierQte= 'qte_'.$panierName;
	echo '<input type="checkbox" name="'.$panierName.'" value="TRUE"><input type="submit" id="panier" class="panierButton" value="Ajouter au panier"><input type="hidden" name="'.$panierQte.'" class="panierButton" value="1"><input type="hidden" name="'.$statuePanier.'" class="panierButton" value="'.$idAdmin.'"></br>';
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
	$db = new PDO('mysql:host=localhost;dbname=pump', 'root', '');
	$query = $db->prepare("ALTER TABLE panier ADD $panierName VARCHAR(99) NULL");
	$query->execute();
	$query = $db->prepare("ALTER TABLE panier ADD $panierQte VARCHAR(99) NULL");
	$query->execute();
	$query=$db->prepare('UPDATE '.$produitTable.' SET abreviation= :abreviation WHERE id = :id');

	$query->execute(array(
			':abreviation'		=>$panierName,
			':id'				=>$id
		)); 

}

function shopProduit($produits, $abrev,$envoi,$produitTable, $statuePanier, $idAdmin){
	foreach($produits as $produit){
		if($produit["nom"]!=NULL AND $produit["resume"]!=NULL AND $produit["prix"]!=NULL AND $produit["statue"]!=NULL AND $produit["lien"]!=NULL AND $produit["id"]!=NULL){
			produits($produit["nom"], $produit["resume"], $produit["prix"], $produit["statue"], $produit["lien"], $produit["id"], $idAdmin,$abrev,$envoi,$produitTable, $statuePanier);
		}
	}
}

function panier($nom, $lien, $prix, $id, $abrev, $idPanier){
	echo '<div class="panierProduit">';
	echo '<h3>'.$nom.'</h3>';
	imageMode("panierProduitPhoto","$lien");
	echo '<a href="" name= "'.$id.'" class="produitButton"> Voir le produit </a><br><br><br><br>';
	// echo '<form method=POST action="panierAction.php">';
	echo '<input type="hidden" name="'.$abrev.'" value="NULL"><input type="submit" name="'.$idPanier.'" class="panierSuprimButton" value="Supprimer"><i class="fa fa-times" aria-hidden="true"></i><br><br><br>';
	echo '<label class="panierProduitPrix">QUANTITE :</label>';
	echo '<input type="number" name="qte_'.$abrev.'" value="<?php echo $panierQte; ?>" ><input type="submit" name="'.$idPanier.'" class="" value="Ajouter">';
	// echo '</form>';
	echo '<p class="panierProduitPrix">'.$prix.'<i class="fa fa-eur" aria-hidden="true"></i></p>';
	echo '</div>';

}

function panierClient($panier, $produits, $idPanier){
	
	$nbreProduits=0;
	foreach ($produits as $produit){
		if($panier[$produit["abreviation"]]=="TRUE"){
		panier($produit["nom"], $produit["lien"], $produit["prix"], 			$produit["id"],$produit["abreviation"], $idPanier);
		}
	}
}

function prixPanierbyPart($produits, $idpanier){
	$prixTotal=0;
	$panier=panierSelected($idpanier);
	foreach ($produits as $produit){
		if($panier[$produit["abreviation"]]=="TRUE"){
			$prixTotal+= $panier['qte_'.$produit["abreviation"]]*$produit["prix"];	
		}
	}
	return $prixTotal;	
}

function nbreProduitPanierByPart($produits, $idpanier){
	$nbreProduits=0;
	$panier=panierSelected($idpanier);
	foreach ($produits as $produit){
		if($panier[$produit["abreviation"]]=="TRUE"){
			$nbreProduits++;	
		}
	}
	return $nbreProduits;	
}

function livraison($nom, $prix, $delai){
	$output="";
	$output.= '<div class="panierLivraison">';
	$output.= '<label for="'.$nom.'"><span class="form_info">'.$nom.' :</span></label>';
	$output.= '<input type="radio" id="'.$nom.'" name="livraison" class="form_tape" value="'.$prix.'" >';
	$output.= '<div class="panierLivraisonContenu">';
	$output.= '<div class="panierLivraisonContenuMode">';
	$output.= '<p class="panierProduitPrix">'.$prix.'<i class="fa fa-eur" aria-hidden="true"></i></p>';
	$output.= '</div><div class="panierLivraisonContenuMode">';
	$output.= '<p class="panierLivraisonContenuDetail">Delai moyen de livraison : <br> '.$delai.' jours ouvrés</p>';
	$output.= '</div></div></div>';
	echo $output;
}

function panierLivraison($livraisons){
	foreach($livraisons as $livraison){
		if($livraison['nom']!=NULL && $livraison['prix']!=NULL && $livraison['delai']!=NULL){
			livraison($livraison['nom'], $livraison['prix'], 					$livraison['delai']);
		}
	}
}

function panierTotal($sousTotalNumber1, $sousTotalNumber2, $sousPrix1, $sousPrix2){
	$nbreProduitsTotal= $sousTotalNumber1+$sousTotalNumber2;
	$prixTotalHT= $sousPrix1 + $sousPrix2;
	$prixTotalTTC= $prixTotalHT + (($prixTotalHT*19.6)/100);
	$output="";
	$output.= '<p class="panierTotal">NOMBRE D\'ARTICLE :'. $nbreProduitsTotal. '</p>';
	$output.= '<p class="panierTotal">Total de vos articles hors frais de livraison: '.$prixTotalHT.' <i class="fa fa-eur" aria-hidden="true"></i></p>';
	$output.= '<p class="panierTotal">Total de vos frais de livraison: XXXX euro</p>';
	$output.= '<p class="panierTotal">Total de votre commande: '.$prixTotalTTC. '<i class="fa fa-eur" aria-hidden="true"></i></p>';

	return $output;
}

function panierTableRecapitulatif($panier, $idpanier, $produits1, $produits2, $prixTTC, $prixLivraison){
	$output='<table><thead><tr><th colspan="3">Recapitulatif de la commande</th></tr>';
	$output .='<tr><th>PRODUIT</th><th>QUANTITE</th><th>PRIX</th></tr>';
	$output.='</thead>';
	$output.='<tbody>';
	$panier=panierSelected($idpanier);
	foreach ($produits1 as $produit){
		if($panier[$produit["abreviation"]]=="TRUE"){	
			$output.= '<tr>';
			$output.='<td><h3>' . $produit["nom"] . ' ' .'</h3></td>';
			$output.='<td><p class="panierProduitPrix">';
			$output.= $panier['qte_'.$produit["abreviation"]].'</td>';
			$output.='<td class="panierProduitPrix">'.$produit["prix"];
			$output.='</td>';
		}
	}
	foreach ($produits2 as $produit){
		if($panier[$produit["abreviation"]]=="TRUE"){	
			$output.= '<tr>';
			$output.='<td><h3>' . $produit["nom"] . ' ' .'</h3></td>';
			$output.='<td><p class="panierProduitPrix">';
			$output.= $panier['qte_'.$produit["abreviation"]].'</td>';
			$output.='<td class="panierProduitPrix">'.$produit["prix"];
			$output.='</td>';
		}
	}
	$output.= '</tr></tbody>';	
	$output.='<tfoot>';
	$output.='<tr>';
	$output.='<td colspan="2" class="panierTotal">Total de vos articles hors frais de livraison:</td>';
	$output.='<td class="panierProduitPrix">';
	$output.=''.$prixTTC.'<i class="fa fa-eur" aria-hidden="true"></i></tr><tr>';
	$output.='<td colspan="2" class="panierTotal">Total de vos frais de livraison: </td>';
	$output.='<td class="panierProduitPrix">'.$prixLivraison.'<i class="fa fa-eur" aria-hidden="true"></i></td>';
	$output.='</tr><tr>';
	$output.='<td colspan="2" class="panierTotal">Total de votre commande:</td>';
	$prixTotal=$prixTTC+$prixLivraison;
	$output.= '<td class="panierProduitPrix">'.$prixTotal.'<i class="fa fa-eur" aria-hidden="true"></i></td>';
	$output.= '</tr></tfoot></table>';

	return $output;
}
	

?>