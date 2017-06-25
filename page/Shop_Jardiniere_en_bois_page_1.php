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

	<article id="modeleBois">
		<div class="shopNavigateur">
			<div class="shopNavigateurList">
				<ul>
					<li>
						<h3>Magasin</h3>
					</li>

					<li>
						<h3>jardinière</h3>
					</li>

					<li>
						<h3>BOIS</h3>
					</li>

					<?php 
						if(!$connected AND !$panierConnected)
						{
							include '../includes/panierButtunActivator.php';
						}	
					?>
			</div>			
		</div>

		<h2> JARDINIERE BOIS</h2>
			<?php	
		
				include '../includes/util.inc.php';
				include '../includes/shopFunction.php';
				include '../includes/produitDb.php';

				$jardinerie= produitJardinerie();
				// var_dump($jardinerie);
				shopProduit($jardinerie,"pspj","produitjardinerie", $statuePanier, $idAdmin, $panier);
			?>
		</div>
		<div class="page">
			<ul>
				<li>
					<h5> : PAGE </h5>
				</li>

				<li>
					<a href="">1</a>
				</li>

				<li>
					<a href="">2</a>
				</li>

				<li>
					<a href="">3</a>
				</li>

				<li>
					<a href="">4</a>
				</li>

				<li>
					<a href="">5</a>
				</li>

				<li>
					<a href="">6</a>
				</li>

				<li>
					<a href="">7</a>
				</li>
			</ul>
		</div>
	</article>

</main>
<?php include '../includes/footer.php'; ?>