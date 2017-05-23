<?php 
	include '../includes/header.php';
?>

<main>
	<aside>
		<?php include '../includes/userConnect.php'; ?>

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
					<h3>IDENTIFICATION</h3>
				</li>

				<li>
					<h3>PAYEMENT</h3>	
				</li>

				<li>
					<h3 class="panierNavigationColor">CONFIRMATION</h3>
				</li>

			</ol>
		</div>
	</article>
</main>
<?php include '../includes/footer.php'; ?>