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
		<div class="shopBaniere">
			<div class="shopBanierePhoto">
				<img src="../image/shop/baniere_accueil/potager-en-hauteur-legumes-bio.jpg">
			</div>

			<div class="shopBanierePhoto">
				<img src="../image/shop/baniere_accueil/legume_panier.jpg">
			</div>

			<div class="shopBanierePhoto">
				<img src="../image/shop/baniere_accueil/mix_legume.jpg">
			</div>
		</div>
		<p class="shopSlogan">CULTIVER SON POTAGER EN TOUTE SIMPLICIT&Eacute !! </p>
		<h2> LES PRODUITS DE SAISON</h2>
		<div class="shopSaison">
			<div class="shopProduit">
				<div class="shopProduitPhoto">
					<img src="../image/Composteur_type.png">
				</div>
				<div class="shopSold">
					<p>-10%</p>
				</div>
				<h3>Lombricomposteur Nom </h3>
				<p class="shopProduitPrix">XXXX Euro</p>
				<form>
					<input type="submit" name="Achat" class="formButtun" value="Achat direct"></br>
				</form>
			</div>

			<div class="shopProduit">
				<div class="shopProduitPhoto">
					<img src="../image/shop/jardiniere7.jpg">
				</div>
				<div class="shopSold">
					<p>- 20%</p>
				</div>
				<h3>Jardiniere Nom </h3>
				<p class="shopProduitPrix">XXXX Euro</p>
				<form>
					<input type="submit" name="Achat" class="formButtun" value="Achat direct"></br>
				</form>
			</div>
		</div>	
		<div class="shopLivraison">
			<div class="shopLivraisonPhoto">
				<img src="../image/livraison.png">
			</div>
			<div class="shopLivraisonChrono">
				<p class="shopLivraisonText"> LIVRAISON RAPIDE GARANTIE SUR L'ENSEMBLE DES PRODUITS </p>
			</div>
		</div>
				
	</article>
</main>
<?php include '../includes/footer.php'; ?>	