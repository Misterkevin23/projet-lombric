<?php 
	include '../includes/header.php';
	$connected=false;
?>

<main>
	<aside>
		<div class="asideImage">
			<?php include '../includes/pub.php'; ?>
		</div>
	</aside>

	<article>
		<div class="panierNavigation">
			<ol>
				<li>
					<a href="Panier.html">
						<h3 >PANIER</h3>
					</a>
				</li>

				<li>
					<h3 class="panierNavigationColor">IDENTIFICATION</h3>
				</li>

				<li>
					<h3>PAYEMENT</h3>	
				</li>

				<li>
					<h3>CONFIRMATION</h3>
				</li>

			</ol>
		</div>
		
		<div class="aside">
			<?php include '../includes/inscription.php'; ?>

			</div>	
					
		</div>
				
	</article>

</main>

<?php include '../includes/footer.php'; ?>