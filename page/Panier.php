<?php 
	include '../includes/header.php';
?>


	<main>
		<aside>
			<?php include '../includes/userOrVisited.php';?>

			<div class="asideImage">
				<?php include '../includes/pub.php'; ?>
			</div>
							
		</aside>

		<article>
			<?php 
		
				include '../includes/panierNavigatorUsers.php';	

				include '../includes/produitDb.php';

				include '../includes/util.inc.php';

				include '../includes/shopFunction.php';
				
				$prixTotal=0;
				$nbreProduits=0;
			?>
			<form method=POST action="paiement_recapitulatif.php">
				<h2> JARDINIERE</h2>
				<div id="theme1" class="produit">
				<?php	
					
					$jardinerie= produitJardinerie();

					
					panierClient($panier,$jardinerie, $idAdmin,$statuePanier);
				
				?>

				</div>

				<div>
				<?php
					
					$prixTotalJardiniere= prixPanierbyPart($jardinerie, $idPanier);

					$nbreProduitJardiniere= nbreProduitPanierByPart($jardinerie, $idPanier);

					echo '<p>Nombre de produit:<span id="nombre1"> '.$nbreProduitJardiniere.'<span></p>';
					echo '<p>Sous total:<span id="sousTotal1"> '.$prixTotalJardiniere.'</span><i class="fa fa-eur" aria-hidden="true"></i></p>';
				
				?>

				</div>	

				<h2> LOMBRICOMPOSTEUR</h2>
				<div id="theme2" class="produit">
				<?php	

					$lombricomposteur= produitLombricomposteur();

					panierClient($panier,$lombricomposteur, $idAdmin, $statuePanier);
				?>
				</div>

				<div>
				<?php
					
					$prixTotalLombricomposteur= prixPanierbyPart($lombricomposteur, $idPanier);

					$nbreProduitLombricomposteur= nbreProduitPanierByPart($lombricomposteur, $idPanier);

					echo '<p>Nombre de produit:<span id="nombre2"> '.$nbreProduitLombricomposteur.'<span></p>';
					echo '<p>Sous total:<span id="sousTotal2"> '.$prixTotalLombricomposteur.'</span><i class="fa fa-eur" aria-hidden="true"></i></p>';
				
				?>

				</div>

				<h2> TERREAUX</h2>
				<div class="produit">
					
				</div>

				<h2> LOMBRICOMPOST</h2>
				<div class="produit">
					
				</div>

				<h2> STYSTEME IRRIGATION</h2>
				<div class="produit">
					
				</div>
				<h2> S&ECUTELECTIONN&ECUTE votre mode de livraison</h2>
				<!-- <form> -->
					<fieldset>
				    	<?php

				       	$livraisonMode=livraisonMode();

				       	panierLivraison($livraisonMode);
						
				       	?>

					</fieldset>
				<!-- </form> -->			
				<h2> TOTAL</h2>
				<?php

					echo panierTotal($nbreProduitJardiniere, $nbreProduitLombricomposteur, $prixTotalJardiniere, $prixTotalLombricomposteur);

					$nbreProduitsTotal= $nbreProduitJardiniere+$nbreProduitLombricomposteur;
					$prixTotalHT= $prixTotalJardiniere + $prixTotalLombricomposteur;
					$prixTotalTTC= $prixTotalHT + (($prixTotalHT*19.6)/100);



					include '../includes/panierPayeButtun.php';
				?>

			</form>
	
		</article>
	</main>
	<?php include '../includes/footer.php'; ?>