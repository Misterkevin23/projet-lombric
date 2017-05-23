<?php 
	include '../includes/header.php';
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
				</ul>	
			</div>
			<?php 
				if(!$connected){
					echo '<div class="shopNavigateurPanier">';
					include '../includes/panierButtun.php';
					echo'</div>';
				}	
			?>			
		</div>

		<h2> JARDINIERE BOIS</h2>
			<?php	
				include '../includes/util.inc.php';
				include '../includes/shopFunction.php';

				$db = new PDO('mysql:host=localhost;dbname=pump', 'root', '');

				$query = $db->prepare('SELECT * FROM produitlombricomposteur');

				$query->execute();

				$jardinerie= $query ->fetchAll();

				shopProduit($jardinerie);
			?>


		
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