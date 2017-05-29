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
				$soumission='"'.'paiement_recapitulatif.php?pseudo='.$pseudo.'&id='.$id.'"';	

				include '../includes/produitDb.php';
				
				include '../includes/panierAction.php';

				include '../includes/util.inc.php';

				include '../includes/shopFunction.php';
				
				$prixTotal=0;
				$nbreProduits=0;
			?>
			<!-- <form method=POST action=<?php echo ''.$soumission.''?> > -->
				<h2> JARDINIERE</h2>
				<div class="produit">
				<?php	
					
					$jardinerie= produitJardinerie();

					
					panierClient($panier,$jardinerie, $idPanier, '"Panier.php?pseudo='.$pseudo.'&id='.$id.'"', $prixTotal, $nbreProduits);
				
				?>

				</div>

				<div>
				<?php
					
					$prixTotalJardiniere= prixPanierbyPart($jardinerie, $idPanier);

					$nbreProduitJardiniere= nbreProduitPanierByPart($jardinerie, $idPanier);

					echoP("toto",'Nombre de produit: '.$nbreProduitJardiniere);
					echoP("toto",'Sous total: '.$prixTotalJardiniere.'<i class="fa fa-eur" aria-hidden="true"></i>');
				
				?>

				</div>	

				<h2> LOMBRICOMPOSTEUR</h2>
				<div class="produit">
				<?php	

					$lombricomposteur= produitLombricomposteur();

					panierClient($panier,$lombricomposteur, $idPanier,'"Panier.php?pseudo='.$pseudo.'&id='.$id.'"', $prixTotal, $nbreProduits);
				?>
				</div>

				<div>
				<?php
					
					$prixTotalLombricomposteur= prixPanierbyPart($lombricomposteur, $idPanier);

					$nbreProduitLombricomposteur= nbreProduitPanierByPart($lombricomposteur, $idPanier);

					echoP("toto",'Nombre de produit: '.$nbreProduitLombricomposteur);
					echoP("toto",'Sous total: '.$prixTotalLombricomposteur.'<i class="fa fa-eur" aria-hidden="true"></i>');
				
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

			<!-- </form> -->
	
		</article>
	</main>
	<?php include '../includes/footer.php'; ?>