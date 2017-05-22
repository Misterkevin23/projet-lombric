<?php 
	include '../includes/header.php';
	$connected=false;
?>


	<main>
		<aside>
			<?php 
			if($connected){
				include '../includes/userConnect.php';
			}
			else{
				echo '<div class="aside">';
				include '../includes/inscription.php';
				echo '</div>';
			}
			?>

			<div class="asideImage">
				<?php include '../includes/pub.php'; ?>
			</div>
							
		</aside>

		<article>
			<?php 
			if($connected){
				include '../includes/panierNavigatorUsers.php';
			}
			else{
				include '../includes/panierNavigatorInvit.php';
			}
			?>
			

			<h2> JARDINIERE</h2>
			<div class="produit">
				<div class="panierProduit">	
					<h3>Jardiniere Nom</h3>
					<div class="panierProduitPhoto">
						<img src="../image/shop/jardiniere1.jpg">
					</div>
					<div class="button">
						<a href="" class="produitButton"> Voir le produit </a></br>
						<input type="submit" name="supPrimer" class="panierSuprimButton" value="SUPPRIMER"></a></br>
					</div>	
					<label><span class="panierProduitPrix">QUANTITE :</span></label>
					<input type="number" name="qteProduit" value="5" >
					<p class="panierProduitPrix">XXXX Euro</p>
				</div>
				
				<div class="panierProduit">	
					<h3>Jardiniere Nom</h3>
					<div class="panierProduitPhoto">
						<img src="../image/shop/jardiniere2.jpg">
					</div>
					<div class="button">
						<a href="" class="produitButton"> Voir le produit </a></br>
						<input type="submit" name="supPrimer" class="panierSuprimButton" value="SUPPRIMER"></a></br>
					</div>
					<label><span class="panierProduitPrix">QUANTITE :</span></label>
					<input type="number" name="qteProduit" value="5" >
					<p class="panierProduitPrix">XXXX Euro</p>
				</div>
				
				<div class="panierProduit">	
					<h3>Jardiniere Nom</h3>
					<div class="panierProduitPhoto">
						<img src="../image/shop/jardiniere3.jpg">
					</div>
					<div class="button">
						<a href="" class="produitButton"> Voir le produit </a></br>
						<input type="submit" name="supPrimer" class="panierSuprimButton" value="SUPPRIMER"></a></br>
					</div>
					<label><span class="panierProduitPrix">QUANTITE :</span></label>
					<input type="number" name="qteProduit" value="5" >
					<p class="panierProduitPrix">XXXX Euro</p>
				</div>

				<div class="panierProduit">	
					<h3>Jardiniere Nom</h3>
					<div class="panierProduitPhoto">
						<img src="../image/shop/jardiniere4.jpg">
					</div>
					<div class="button">
						<a href="" class="produitButton"> Voir le produit </a></br>
						<input type="submit" name="supPrimer" class="panierSuprimButton" value="SUPPRIMER"></a></br>
					</div>
					<label><span class="panierProduitPrix">QUANTITE :</span></label>
					<input type="number" name="qteProduit" value="5" >
					<p class="panierProduitPrix">XXXX Euro</p>
				</div>

				<div class="panierProduit">	
					<h3>Jardiniere Nom</h3>
					<div class="panierProduitPhoto">
						<img src="../image/shop/jardiniere5.jpg">
					</div>
					<div class="button">
						<a href="" class="produitButton"> Voir le produit </a></br>
						<input type="submit" name="supPrimer" class="panierSuprimButton" value="SUPPRIMER"></a></br>
					</div>
					<label><span class="panierProduitPrix">QUANTITE :</span></label>
					<input type="number" name="qteProduit" value="5" >
					<p class="panierProduitPrix">XXXX Euro</p>
				</div>

				<div class="panierProduit">	
					<h3>Jardiniere Nom</h3>
					<div class="panierProduitPhoto">
						<img src="../image/shop/jardiniere6.jpg">
					</div>
					<div class="button">
						<a href="" class="produitButton"> Voir le produit </a></br>
						<input type="submit" name="supPrimer" class="panierSuprimButton" value="SUPPRIMER"></a></br>
					</div>
					<label><span class="panierProduitPrix">QUANTITE :</span></label>
					<input type="number" name="qteProduit" value="5" >
					<p class="panierProduitPrix">XXXX Euro</p>
				</div>

				<div class="panierProduit">	
					<h3>Jardiniere Nom</h3>
					<div class="panierProduitPhoto">
						<img src="../image/shop/jardiniere7.jpg">
					</div>
					<div class="button">
						<a href="" class="produitButton"> Voir le produit </a></br>
						<input type="submit" name="supPrimer" class="panierSuprimButton" value="SUPPRIMER"></a></br>
					</div>
					<label><span class="panierProduitPrix">QUANTITE :</span></label>
					<input type="number" name="qteProduit" value="5" >
					<p class="panierProduitPrix">XXXX Euro</p>
				</div>
			</div>

			<h2> LOMBRICOMPOSTEUR</h2>
			<div class="produit">
				<div class="panierProduit">	
					<h3>lombricomposteur Nom</h3>
					<div class="panierProduitPhoto">
						<img src="../image/shop/lombricomposteur1.jpg">
					</div>
					<div class="button">
						<a href="" class="produitButton"> Voir le produit </a></br>
						<input type="submit" name="supPrimer" class="panierSuprimButton" value="SUPPRIMER"></a></br>
					</div>
					<label><span class="panierProduitPrix">QUANTITE :</span></label>
					<input type="number" name="qteProduit" value="5" >
					<p class="panierProduitPrix">XXXX Euro</p>
				</div>
				
				<div class="panierProduit">	
					<h3>lombricomposteur Nom</h3>
					<div class="panierProduitPhoto">
						<img src="../image/shop/lombricomposteur2.jpg">
					</div>
					<div class="button">
						<a href="" class="produitButton"> Voir le produit </a></br>
						<input type="submit" name="supPrimer" class="panierSuprimButton" value="SUPPRIMER"></a></br>
					</div>
					<label><span class="panierProduitPrix">QUANTITE :</span></label>
					<input type="number" name="qteProduit" value="5" >
					<p class="panierProduitPrix">XXXX Euro</p>
				</div>
				
				<div class="panierProduit">	
					<h3>lombricomposteur Nom</h3>
					<div class="panierProduitPhoto">
						<img src="../image/shop/lombricomposteur3.jpg">
					</div>
					<div class="button">
						<a href="" class="produitButton"> Voir le produit </a></br>
						<input type="submit" name="supPrimer" class="panierSuprimButton" value="SUPPRIMER"></a></br>
					</div>
					<label><span class="panierProduitPrix">QUANTITE :</span></label>
					<input type="number" name="qteProduit" value="5" >
					<p class="panierProduitPrix">XXXX Euro</p>
				</div>

				<div class="panierProduit">	
					<h3>lombricomposteur Nom</h3>
					<div class="panierProduitPhoto">
						<img src="../image/shop/lombricomposteur1.jpg">
					</div>
					<div class="button">
						<a href="" class="produitButton"> Voir le produit </a></br>
						<input type="submit" name="supPrimer" class="panierSuprimButton" value="SUPPRIMER"></a></br>
					</div>
					<label><span class="panierProduitPrix">QUANTITE :</span></label>
					<input type="number" name="qteProduit" value="5" >
					<p class="panierProduitPrix">XXXX Euro</p>
				</div>

				<div class="panierProduit">	
					<h3>lombricomposteur Nom</h3>
					<div class="panierProduitPhoto">
						<img src="../image/shop/lombricomposteur2.jpg">
					</div>
					<div class="button">
						<a href="" class="produitButton"> Voir le produit </a></br>
						<input type="submit" name="supPrimer" class="panierSuprimButton" value="SUPPRIMER"></a></br>
					</div>
					<label><span class="panierProduitPrix">QUANTITE :</span></label>
					<input type="number" name="qteProduit" value="5" >
					<p class="panierProduitPrix">XXXX Euro</p>
				</div>

				<div class="panierProduit">	
					<h3>lombricomposteur Nom</h3>
					<div class="panierProduitPhoto">
						<img src="../image/shop/lombricomposteur3.jpg">
					</div>
					<div class="button">
						<a href="" class="produitButton"> Voir le produit </a></br>
						<input type="submit" name="supPrimer" class="panierSuprimButton" value="SUPPRIMER"></a></br>
					</div>
					<label><span class="panierProduitPrix">QUANTITE :</span></label>
					<input type="number" name="qteProduit" value="5" >
					<p class="panierProduitPrix">XXXX Euro</p>
				</div>

				<div class="panierProduit">	
					<h3>lombricomposteur Nom</h3>
					<div class="panierProduitPhoto">
						<img src="../image/shop/lombricomposteur1.jpg">
					</div>
					<div class="button">
						<a href="" class="produitButton"> Voir le produit </a></br>
						<input type="submit" name="supPrimer" class="panierSuprimButton" value="SUPPRIMER"></a></br>
					</div>
					<label><span class="panierProduitPrix">QUANTITE :</span></label>
					<input type="number" name="qteProduit" value="5" >
					<p class="panierProduitPrix">XXXX Euro</p>
				</div>
			</div>

			<h2> TERREAUX</h2>
			<div class="produit">
				<div class="panierProduit">	
					<h3>terreau Nom</h3>
					<div class="panierProduitPhoto">
						<img src="../image/shop/terreau1.jpg">
					</div>
					<div class="button">
						<a href="" class="produitButton"> Voir le produit </a></br>
						<input type="submit" name="supPrimer" class="panierSuprimButton" value="SUPPRIMER"></a></br>
					</div>
					<label><span class="panierProduitPrix">QUANTITE :</span></label>
					<input type="number" name="qteProduit" value="5" >
					<p class="panierProduitPrix">XXXX Euro</p>
				</div>
				
				<div class="panierProduit">	
					<h3>terreau Nom</h3>
					<div class="panierProduitPhoto">
						<img src="../image/shop/terreau2.jpg">
					</div>
					<div class="button">
						<a href="" class="produitButton"> Voir le produit </a></br>
						<input type="submit" name="supPrimer" class="panierSuprimButton" value="SUPPRIMER"></a></br>
					</div>
					<label><span class="panierProduitPrix">QUANTITE :</span></label>
					<input type="number" name="qteProduit" value="5" >
					<p class="panierProduitPrix">XXXX Euro</p>
				</div>
				
				<div class="panierProduit">	
					<h3>terreau Nom</h3>
					<div class="panierProduitPhoto">
						<img src="../image/shop/terreau3.jpg">
					</div>
					<div class="button">
						<a href="" class="produitButton"> Voir le produit </a></br>
						<input type="submit" name="supPrimer" class="panierSuprimButton" value="SUPPRIMER"></a></br>
					</div>
					<label><span class="panierProduitPrix">QUANTITE :</span></label>
					<input type="number" name="qteProduit" value="5" >
					<p class="panierProduitPrix">XXXX Euro</p>
				</div>

				<div class="panierProduit">	
					<h3>terreau Nom</h3>
					<div class="panierProduitPhoto">
						<img src="../image/shop/terreau1.jpg">
					</div>
					<div class="button">
						<a href="" class="produitButton"> Voir le produit </a></br>
						<input type="submit" name="supPrimer" class="panierSuprimButton" value="SUPPRIMER"></a></br>
					</div>
					<label><span class="panierProduitPrix">QUANTITE :</span></label>
					<input type="number" name="qteProduit" value="5" >
					<p class="panierProduitPrix">XXXX Euro</p>
				</div>

				<div class="panierProduit">	
					<h3>terreau Nom</h3>
					<div class="panierProduitPhoto">
						<img src="../image/shop/terreau2.jpg">
					</div>
					<div class="button">
						<a href="" class="produitButton"> Voir le produit </a></br>
						<input type="submit" name="supPrimer" class="panierSuprimButton" value="SUPPRIMER"></a></br>
					</div>
					<label><span class="panierProduitPrix">QUANTITE :</span></label>
					<input type="number" name="qteProduit" value="5" >
					<p class="panierProduitPrix">XXXX Euro</p>
				</div>

				<div class="panierProduit">	
					<h3>terreau Nom</h3>
					<div class="panierProduitPhoto">
						<img src="../image/shop/terreau3.jpg">
					</div>
					<div class="button">
						<a href="" class="produitButton"> Voir le produit </a></br>
						<input type="submit" name="supPrimer" class="panierSuprimButton" value="SUPPRIMER"></a></br>
					</div>
					<label><span class="panierProduitPrix">QUANTITE :</span></label>
					<input type="number" name="qteProduit" value="5" >
					<p class="panierProduitPrix">XXXX Euro</p>
				</div>

				<div class="panierProduit">	
					<h3>terreau Nom</h3>
					<div class="panierProduitPhoto">
						<img src="../image/shop/terreau1.jpg">
					</div>
					<div class="button">
						<a href="" class="produitButton"> Voir le produit </a></br>
						<input type="submit" name="supPrimer" class="panierSuprimButton" value="SUPPRIMER"></a></br>
					</div>
					<label><span class="panierProduitPrix">QUANTITE :</span></label>
					<input type="number" name="qteProduit" value="5" >
					<p class="panierProduitPrix">XXXX Euro</p>
				</div>
			</div>

			<h2> LOMBRICOMPOST</h2>
			<div class="produit">
				<div class="panierProduit">	
					<h3>lombricompost Nom</h3>
					<div class="panierProduitPhoto">
						<img src="../image/shop/lombricompost1.jpg">
					</div>
					<div class="button">
						<a href="" class="produitButton"> Voir le produit </a></br>
						<input type="submit" name="supPrimer" class="panierSuprimButton" value="SUPPRIMER"></a></br>
					</div>
					<label><span class="panierProduitPrix">QUANTITE :</span></label>
					<input type="number" name="qteProduit" value="5" >
					<p class="panierProduitPrix">XXXX Euro</p>
				</div>
				
				<div class="panierProduit">	
					<h3>lombricompost Nom</h3>
					<div class="panierProduitPhoto">
						<img src="../image/shop/lombricompost2.jpg">
					</div>
					<div class="button">
						<a href="" class="produitButton"> Voir le produit </a></br>
						<input type="submit" name="supPrimer" class="panierSuprimButton" value="SUPPRIMER"></a></br>
					</div>
					<label><span class="panierProduitPrix">QUANTITE :</span></label>
					<input type="number" name="qteProduit" value="5" >
					<p class="panierProduitPrix">XXXX Euro</p>
				</div>
				
				<div class="panierProduit">	
					<h3>lombricompost Nom</h3>
					<div class="panierProduitPhoto">
						<img src="../image/shop/lombricompost3.jpg">
					</div>
					<div class="button">
						<a href="" class="produitButton"> Voir le produit </a></br>
						<input type="submit" name="supPrimer" class="panierSuprimButton" value="SUPPRIMER"></a></br>
					</div>
					<label><span class="panierProduitPrix">QUANTITE :</span></label>
					<input type="number" name="qteProduit" value="5" >
					<p class="panierProduitPrix">XXXX Euro</p>
				</div>

				<div class="panierProduit">	
					<h3>lombricompost Nom</h3>
					<div class="panierProduitPhoto">
						<img src="../image/shop/lombricompost1.jpg">
					</div>
					<div class="button">
						<a href="" class="produitButton"> Voir le produit </a></br>
						<input type="submit" name="supPrimer" class="panierSuprimButton" value="SUPPRIMER"></a></br>
					</div>
					<label><span class="panierProduitPrix">QUANTITE :</span></label>
					<input type="number" name="qteProduit" value="5" >
					<p class="panierProduitPrix">XXXX Euro</p>
				</div>

				<div class="panierProduit">	
					<h3>lombricompost Nom</h3>
					<div class="panierProduitPhoto">
						<img src="../image/shop/lombricompost2.jpg">
					</div>
					<div class="button">
						<a href="" class="produitButton"> Voir le produit </a></br>
						<input type="submit" name="supPrimer" class="panierSuprimButton" value="SUPPRIMER"></a></br>
					</div>
					<label><span class="panierProduitPrix">QUANTITE :</span></label>
					<input type="number" name="qteProduit" value="5" >
					<p class="panierProduitPrix">XXXX Euro</p>
				</div>

				<div class="panierProduit">	
					<h3>lombricompost Nom</h3>
					<div class="panierProduitPhoto">
						<img src="../image/shop/lombricompost3.jpg">
					</div>
					<div class="button">
						<a href="" class="produitButton"> Voir le produit </a></br>
						<input type="submit" name="supPrimer" class="panierSuprimButton" value="SUPPRIMER"></a></br>
					</div>
					<label><span class="panierProduitPrix">QUANTITE :</span></label>
					<input type="number" name="qteProduit" value="5" >
					<p class="panierProduitPrix">XXXX Euro</p>
				</div>

				<div class="panierProduit">	
					<h3>lombricompost Nom</h3>
					<div class="panierProduitPhoto">
						<img src="../image/shop/lombricompost1.jpg">
					</div>
					<div class="button">
						<a href="" class="produitButton"> Voir le produit </a></br>
						<input type="submit" name="supPrimer" class="panierSuprimButton" value="SUPPRIMER"></a></br>
					</div>
					<label><span class="panierProduitPrix">QUANTITE :</span></label>
					<input type="number" name="qteProduit" value="5" >
					<p class="panierProduitPrix">XXXX Euro</p>
				</div>
			</div>

			<h2> STYSTEME IRRIGATION</h2>
			<div class="produit">
				<div class="panierProduit">	
					<h3>systeme irrigation Nom</h3>
					<div class="panierProduitPhoto">
						<img src="../image/shop/systeme_irrigation1.jpg">
					</div>
					<div class="button">
						<a href="" class="produitButton"> Voir le produit </a></br>
						<input type="submit" name="supPrimer" class="panierSuprimButton" value="SUPPRIMER"></a></br>
					</div>
					<label><span class="panierProduitPrix">QUANTITE :</span></label>
					<input type="number" name="qteProduit" value="5" >
					<p class="panierProduitPrix">XXXX Euro</p>
				</div>
				
				<div class="panierProduit">	
					<h3>systeme irrigation Nom</h3>
					<div class="panierProduitPhoto">
						<img src="../image/shop/systeme_irrigation2.jpg">
					</div>
					<div class="button">
						<a href="" class="produitButton"> Voir le produit </a></br>
						<input type="submit" name="supPrimer" class="panierSuprimButton" value="SUPPRIMER"></a></br>
					</div>
					<label><span class="panierProduitPrix">QUANTITE :</span></label>
					<input type="number" name="qteProduit" value="5" >
					<p class="panierProduitPrix">XXXX Euro</p>
				</div>
				
				<div class="panierProduit">	
					<h3>systeme irrigation Nom</h3>
					<div class="panierProduitPhoto">
						<img src="../image/shop/systeme_irrigation3.jpg">
					</div>
					<div class="button">
						<a href="" class="produitButton"> Voir le produit </a></br>
						<input type="submit" name="supPrimer" class="panierSuprimButton" value="SUPPRIMER"></a></br>
					</div>
					<label><span class="panierProduitPrix">QUANTITE :</span></label>
					<input type="number" name="qteProduit" value="5" >
					<p class="panierProduitPrix">XXXX Euro</p>
				</div>

				<div class="panierProduit">	
					<h3>systeme irrigation Nom</h3>
					<div class="panierProduitPhoto">
						<img src="../image/shop/systeme_irrigation4.jpg">
					</div>
					<div class="button">
						<a href="" class="produitButton"> Voir le produit </a></br>
						<input type="submit" name="supPrimer" class="panierSuprimButton" value="SUPPRIMER"></a></br>
					</div>
					<label><span class="panierProduitPrix">QUANTITE :</span></label>
					<input type="number" name="qteProduit" value="5" >
					<p class="panierProduitPrix">XXXX Euro</p>
				</div>

				<div class="panierProduit">	
					<h3>systeme irrigation Nom</h3>
					<div class="panierProduitPhoto">
						<img src="../image/shop/systeme_irrigation1.jpg">
					</div>
					<div class="button">
						<a href="" class="produitButton"> Voir le produit </a></br>
						<input type="submit" name="supPrimer" class="panierSuprimButton" value="SUPPRIMER"></a></br>
					</div>
					<label><span class="panierProduitPrix">QUANTITE :</span></label>
					<input type="number" name="qteProduit" value="5" >
					<p class="panierProduitPrix">XXXX Euro</p>
				</div>

				<div class="panierProduit">	
					<h3>systeme irrigation Nom</h3>
					<div class="panierProduitPhoto">
						<img src="../image/shop/systeme_irrigation2.jpg">
					</div>
					<div class="button">
						<a href="" class="produitButton"> Voir le produit </a></br>
						<input type="submit" name="supprimer" class="panierSuprimButton" value="SUPPRIMER"></a></br>
					</div>
					<label><span class="panierProduitPrix">QUANTITE :</span></label>
					<input type="number" name="qteProduit" value="5" >
					<p class="panierProduitPrix">XXXX Euro</p>
				</div>

				<div class="panierProduit">	
					<h3>systeme irrigation Nom</h3>
					<div class="panierProduitPhoto">
						<img src="../image/shop/systeme_irrigation3.jpg">
					</div>
					<div class="button">
						<a href="" class="produitButton"> Voir le produit </a></br>
						<input type="submit" name="supPrimer" class="panierSuprimButton" value="SUPPRIMER"></a></br>
					</div>
					<label><span class="panierProduitPrix">QUANTITE :</span></label>
					<input type="number" name="qteProduit" value="5" >
					<p class="panierProduitPrix">XXXX Euro</p>
				</div>
			</div>
			<h2> S&ECUTELECTIONN&ECUTE votre mode de livraison</h2>
			<form>
				<fieldset>
			       	<div class="panierLivraison">
		       		<label for="collissimo"><span class="form_info">COLLISSIMO :</span></label>
					<input type="radio" id="collissimo" name="livraison" class="form_tape" value="poste" >
						<div class="panierLivraisonContenu">
							<div class="panierLivraisonContenuMode">
								<p class="panierProduitPrix">XXXX Euro</p>
							</div>
							<div class="panierLivraisonContenuMode">
								<p class="panierLivraisonContenuDetail">Delai moyen de livraison : <br> 4 jours ouvrés</p>
							</div>
						</div>
					</div>
					<div class="panierLivraison">
		       		<label for="express"><span class="form_info">Express :</span></label>
					<input type="radio" id="express" name="livraison" class="form_tape" value="poste" >
						<div class="panierLivraisonContenu">
							<div class="panierLivraisonContenuMode">
								<p class="panierProduitPrix">XXXX Euro</p>
							</div>
							<div class="panierLivraisonContenuMode">
								<p class="panierLivraisonContenuDetail">Delai moyen de livraison : <br> 1 jours ouvrés</p>
							</div>
						</div>
					</div>
				</fieldset>
			</form>			
			<h2> TOTAL</h2>
			<p class="panierTotal">NOMBRE D'ARTICLE : XXXXX</p>
			<p class="panierTotal">Total de vos articles hors frais de livraison: XXXX euro</p>
			<p class="panierTotal">Total de vos frais de livraison: XXXX euro</p>
			<p class="panierTotal">Total de votre commande: XXXX euro</p>
			<div class="button">
					<a href="paiement_identification.html" class="asideConexionButton"> S'identifier et payer</a>
				</div>	
		</article>
	</main>
	<?php include '../includes/footer.php'; ?>