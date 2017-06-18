<?php
$panierName='';
//function génératrice du button action panier
function produitActionPanierButton($statue, $id, $abrev, $statuePanier, $idAdmin, $quantite, $panierName, $panierQte){
	echo '<h4>'.$statue.'</h4>';
	echo '<div class="produitPanier">';
	echo '<div class="produitPanierAdd button'.$id.'">';
	echo '<input type="hidden" name="'.$panierName.'" value="TRUE">';
	echoP("panierButton","Ajouter au panier");
	echo '<input type="hidden" id="panier" value="Ajouter au panier">';
	echo '<input type="hidden" name="'.$statuePanier.'" value="'.$idAdmin.'"></br>';
	echo '</div>';
	echo '<select class="produitPanierQuantiteAdd" name="'.$panierQte.'" value="1">';
	for($i=1; $i<50; $i++)
	{
		if($i==$quantite)
		{
			echo '<option selected>'.$i.'</option>';
		}
		else
		{
			echo '<option>'.$i.'</option>';
		}
	}
	echo '</select>';
	echo '</div>';
}

//function génératrice du button action achat Direct
function produitActionDirectButton($statuePanier, $prix, $quantite, $panierName, $panierQte){
	echo '<form method="post" action="paiement_recapitulatif.php">';
	echo '<div class="produitPanierForm">';
	echo '<input type="submit" class="produitPanierDirectButton" name="'.$statuePanier.'" value="Achat direct">';
	echo '<input type="hidden" class="produitPanierDirectButton" name="prix" value="'.$prix.'">';
	echo '<input type="hidden" class="produitPanierDirectButton" name="'.$panierName.'" value="'.$statuePanier.'">';
	echo '<select class="produitPanierQuantiteAdd" name="qte" value="'.$panierQte.'">';
	for($i=1; $i<50; $i++)
	{
		if($i==$quantite)
		{
			echo '<option selected>'.$i.'</option>';
		}
		else
		{
			echo '<option>'.$i.'</option>';
		}
	}
	echo '</select>';
	echo '</div></form>';

}

//fonction créant le modèle de la présentation d'un produit
//on utilise les informations contenu dans la table produit
//ainsi que des information des utilisateurs pour lier la requeté a l'utilisateur donnée par la SESSION($statuePanier, $IdAdmin)
//Une connexion a la base de donnée sera faite afin de crée une colonne correspondant  à l'abreviation ($panierName) et la quantité ($panierQte) du produit. 
//Une connexion a la base de donnée sera faite afin d'y affilier l'abreviation spécifique au produit.
function produits($nom, $resume, $prix, $statue, $lien, $id, $idAdmin,$abrev, $produitTable, $statuePanier,$quantite, $exist){			
	$panierName=$abrev.$id;
	$panierQte= 'qte_'.$panierName;
	echo '<div style="background:#F0F2DD" class="container-fluid produit annexe annexe'.$id.'">';
	echo '<div id="MainAnnexe'.$id.'" class="row"><div class="col-lg-6 col-sm-6">';
	echo produitActionPanierButton($statue, $id, $abrev, $statuePanier, $idAdmin, $quantite, $panierName, $panierQte);
	echo '</div><div id="returnList'.$id.'" class="col-lg-6 col-sm-6">';
	echo '<p class="produitButton">Retour aux produits</p>';
	echo '</div><div class="col-lg-6 col-sm-6">';
	echo produitActionDirectButton($statuePanier, $prix, $quantite, $panierName, $panierQte);
	echo '</div></div><br>';
	echo '<div id="1annexe'.$id.'" style="border: 7px solid red; background:blue" class="row">';
	echo '<ul class="col-lg-11 col-sm-11" style="display:inline-block"><li class="col-lg-offset-1 col-lg-3 col-sm-offset-1 col-sm-3" style="display:inline-block; border: 3px black solid; background:grey">CARACTERISTIQUE</li>';
	echo '<li class="col-lg-offset-1 col-lg-3 col-sm-offset-1 col-sm-3" style="display:inline-block; border: 3px black solid; background:grey">ACCESSOIRE</li>';
	echo '<li class="col-lg-offset-1 col-lg-3 col-sm-offset-1 col-sm-3" style="display:inline-block; border: 3px black solid; background:grey">CONTENU DU PAQUET</li></ul>';
	echo '</div><br>';
	echo '<div id="3annexe'.$id.'" style="border: 3px solid green" class="row">';
	echo '</div><br>';
	echo '</div><div class="produit produit'.$id.'">';
	imageMode("produitPhoto","$lien");
	echo '<div class="produitDescription">';
	echo '<h3>'.$nom.'</h3>';
	echoP("produitDescriptionText","$resume");
	echo '</div>';
	echo '<div class="produitAction">';
	echo produitActionPanierButton($statue, $id, $abrev, $statuePanier, $idAdmin, $quantite, $panierName, $panierQte);
	echo '<div>';
	echo '<p id="annexe'.$id.'" name="id" class="produitButton" value="'.$id.'"> Voir le produit </p></br>';
	echo '</div>';
	echo produitActionDirectButton($statuePanier, $prix, $quantite, $panierName, $panierQte);
	echo '<p class="produitPrix">'.$prix.'<i class="fa fa-eur" aria-hidden="true"></i></p>';
	echo '</div></div>';
	if($exist==FALSE)
	{
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
}

//fonction générant les div produit en fonction de la table produit choisie
//$abrev sera defini lors de l'appelle de cette fonction afin de permetre une discrimination du produit.
//l'existance de l'article dans le panier engendrera sa création ou non
//PAS de panier, PAS de creation
function shopProduit($produits, $abrev,$produitTable, $statuePanier, $idAdmin, $panier){
	foreach($produits as $produit){
		if($produit["nom"]!=NULL AND $produit["resume"]!=NULL AND $produit["prix"]!=NULL AND $produit["statue"]!=NULL AND $produit["lien"]!=NULL AND $produit["id"]!=NULL AND isset($panier))
		{
			if(isset($panier[$produit["abreviation"]]))
			{	
				$exist=TRUE;
				if($panier['qte_'.$produit["abreviation"]]!=NULL)
				{
					$quantite= $panier['qte_'.$produit["abreviation"]];
				}
				else
				{
					$quantite="1";
				}
			}
			else
			{
			$quantite="1";	
			$exist=FALSE;	
			}
		}
		elseif($produit["nom"]!=NULL AND $produit["resume"]!=NULL AND $produit["prix"]!=NULL AND $produit["statue"]!=NULL AND $produit["lien"]!=NULL AND $produit["id"]!=NULL)
		{
			$quantite="0";
			$exist=TRUE;
		}	
		produits($produit["nom"], $produit["resume"], $produit["prix"], $produit["statue"], $produit["lien"], $produit["id"], $idAdmin,$abrev,$produitTable, $statuePanier, $quantite, $exist);
	}
}

//fonction créant le modèle de la présentation d'un des produit present
//dans le panier
//on utilise les informations contenu dans la table produit
//ainsi que des information des utilisateurs pour lier la requeté a l'utilisateur
//$abrev est déjà defini dans la base de donnée à cette étape
//$nbreProduits permet de discriminer chaque produit du panier.
function panier($nom, $lien, $prix, $id, $abrev, $idAdmin,$nbreProduits,$statuePanier, $quantite){
	echo '<div id="panier'.$nbreProduits.'" class="panierProduit">';
	echo '<h3>'.$nom.'</h3>';
	imageMode("panierProduitPhoto","$lien");
	echo '<a href="" name= "'.$id.'" class="produitButton"> Voir le produit </a><br><br><br><br>';
	echo '<div class="supprimer'.$nbreProduits.'">';
	$panierName=$abrev;
	$panierQte= 'qte_'.$panierName;
	echo '<input type="hidden" name="'.$panierName.'" value="NULL">';
	echo '<input type="text" id="panier" class="panierSuprimButton" value="Supprimer"><i class="fa fa-times" aria-hidden="true"></i><br><br><br>';
	echo '<input type="hidden" name="'.$statuePanier.'" value="'.$idAdmin.'"></br>';
	echo '<label class="panierProduitPrix" name="addQuantite">QUANTITE :</label>';
	echo '</div>';
	echo '<select name="'.$panierQte.'" value="'.$quantite.'">';
	for($i=1; $i<50; $i++)
	{
		if($i==$quantite)
		{
			echo '<option selected>'.$i.'</option>';
		}
		else
		{
			echo '<option>'.$i.'</option>';
		}
	}	
	echo '</select>';
	echo '<p class="panierProduitPrix">'.$prix.'<i class="fa fa-eur" aria-hidden="true"></i></p>';
	echo '</div>';
}

//fonction générant les div produit en fonction de la table panier spécifique à l'utilisateur identifié
function panierClient($panier, $produits, $idAdmin, $statuePanier){
	$nbreProduits=0;
	foreach ($produits as $produit){
		if($panier[$produit["abreviation"]]=="TRUE")
		{
		$nbreProduits++;
		panier($produit["nom"], $produit["lien"], $produit["prix"], 			$produit["id"],$produit["abreviation"], $idAdmin, $nbreProduits, $statuePanier, $panier['qte_'.$produit["abreviation"]] );
		}
	}
}

//fonction calculant le prix des sous partie du panier grace au discriminant abréviation et TRUE indiquant que l'utilisateur a choisie ce produit
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

//fonction calculant le nombre de produit présend dans les sous partie du panier grace au discriminant abréviation et TRUE indiquant que l'utilisateur a choisie ce produit
function nbreProduitPanierByPart($produits, $idpanier){
	$nbreProduits=0;
	$panier=panierSelected($idpanier);
	foreach ($produits as $produit){
		if($panier[$produit["abreviation"]]=="TRUE"){
			$nbreProduits+= $panier['qte_'.$produit["abreviation"]];	
		}
	}
	return $nbreProduits;	
}

//fonction créant le modèle de la présentation du choix de livraison
//on utilise les informations contenu dans la table livraison
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


//fonction générant les div livraison en fonction de la table livraison
function panierLivraison($livraisons){
	foreach($livraisons as $livraison){
		if($livraison['nom']!=NULL && $livraison['prix']!=NULL && $livraison['delai']!=NULL){
			livraison($livraison['nom'], $livraison['prix'], 					$livraison['delai']);
		}
	}
}

//fonction calculant le nombre de produit total ainsi que les differant prix du panier de l'utilisateur
function panierTotal($sousTotalNumber1, $sousTotalNumber2, $sousPrix1, $sousPrix2){
	$nbreProduitsTotal= $sousTotalNumber1+$sousTotalNumber2;
	$prixTotalHT= $sousPrix1 + $sousPrix2;
	$prixTotalTTC= $prixTotalHT + (($prixTotalHT*19.6)/100);
	$output="";
	$output.= '<p class="panierTotal">NOMBRE D\'ARTICLE :'. $nbreProduitsTotal. '</p>';
	$output.= '<p class="panierTotal">Total de vos articles hors frais de livraison: '.$prixTotalHT.' <i class="fa fa-eur" aria-hidden="true"></i></p>';
	$output.= '<p class="panierTotal">Total de vos frais de livraison: <span id="fraisLivraison"> 0 </span><i class="fa fa-eur" aria-hidden="true"></i></p>';
	$output.= '<p class="panierTotal">Total de votre commande: <span id="prixTTC">'.$prixTotalTTC. '</span><i class="fa fa-eur" aria-hidden="true"></i></p>';

	return $output;
}

//fonction générant un tableau récapitulatif du contenu du panier de l'utilisateur(devis)
function panierTableRecapitulatif($post, $statuePanier, $panier, $produits, $prixTTC, $prixLivraison){
	$output='<br><br><br><table><thead><tr><th colspan="3">Recapitulatif de la commande</th></tr>';
	$output .='<tr><th>PRODUIT</th><th>QUANTITE</th><th>PRIX</th></tr>';
	$output.='</thead>';
	$output.='<tbody>';
	foreach ($produits as $produit){
		$nomPanier=$panier[$produit["abreviation"]];
		$QtePanier=$panier['qte_'.$produit["abreviation"]];
		$statue="TRUE";

		if($statuePanier=='visit' 
			&& isset($post) && isset($post[$produit["abreviation"]]) 						&& $post[$statuePanier]=="Achat direct")
		{
			$nomPanier=array_search('visit', $post);
			$QtePanier=$post['qte'];
			$statue=$produit["abreviation"];
		}
		if($nomPanier==$statue){	
			$output.= '<tr>';
			$output.='<td><h3>' . $produit["nom"] . ' ' .'</h3></td>';
			$output.='<td><p class="panierProduitPrix">';
			$output.= $QtePanier.'</td>';
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