<?php 
	include '../includes/header.php';
?>

<main class="container">
	
	<article class="col-lg-10 col-sm-10" id="modeleBois">
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
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-sm-4">
					<img src="../image/shop/lombricomposteur1.jpg">
				</div>
				<div class="col-lg-1 col-sm-1">
					<img style="width:30px" src="../image/shop/lombricomposteur1.jpg">
				</div>
				<div class="col-lg-6 col-sm-6">
					<h3>Nom produit</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					<h3>Prix</h3>
				</div>
				<div class="col-lg-1 col-sm-1">
					<img style="width:30px" src="../image/shop/lombricomposteur1.jpg">
				</div>		
			</div>
			<div class="row">
				<div class="col-lg-4 col-sm-4">
					<img style="width:100px" src="../image/shop/lombricomposteur1.jpg">
					<img style="width:100px" src="../image/shop/lombricomposteur1.jpg">
					<img style="width:100px" src="../image/shop/lombricomposteur1.jpg">
				</div>
				<div class="col-lg-offset-2 col-lg-4 col-lg-offset-2 col-sm-offset-2 col-sm-4 col-sm-offset-2">
					<div class="produitPanierAdd">;
						<input type="hidden" name="" value="TRUE">;
						<p class="panierButton">Ajouter au panier</p>
						<input type="hidden" id="panier" value="Ajouter au panier">
						<input type="hidden" name="" value=""></br>
					</div>
					<select class="produitPanierQuantiteAdd" name="" value="1">
						<option selected>1</option>
						<option>2</option>
					</select>
					<div class="produitPanierAdd">;
						<input type="hidden" name="" value="TRUE">;
						<p class="panierButton">Retour</p>
						<input type="hidden" id="panier" value="Ajouter au panier">
						<input type="hidden" name="" value=""></br>
					</div>
				</div>
			</div>
			<div class="row">
				<ul class="col-lg-12 col-sm-12" style="display:inline-block">
					<li style="display:inline-block">CARACTERISTIQUE</li>
					<li style="display:inline-block">ACCESSOIRE</li>
					<li style="display:inline-block">CONTENU DU PAQUET</li>
				</ul>
			</div>
			<div class="row">
				<ul>
					<li>Dimention: </li>
					<li>Provenance: </li>
					<li>Cible: </li>
					<li>Contenance: </li>
					<li>Materiel: </li>
				</ul>
			</div>
			<div class="row">
				<div class="col-lg-2 col-sm-2">
					<img style="width:200px" src="../image/shop/lombricomposteur1.jpg">
				</div>
				<div class="col-lg-8">
					<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
				</div>
				<div class="col-lg-2 col-sm-2">
					<p>Prix</p>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-offset-4 col-lg-4 col-lg-offset-4 col-sm-offset-4 col-sm-4 col-sm-offset-4">
					<div class="produitPanierAdd">;
						<input type="hidden" name="" value="TRUE">;
						<p class="panierButton">Ajouter au panier</p>
						<input type="hidden" id="panier" value="Ajouter au panier">
						<input type="hidden" name="" value=""></br>
					</div>
					<select class="produitPanierQuantiteAdd" name="" value="1">
						<option selected>1</option>
						<option>2</option>
					</select>
				</div>	
			</div>
			<div class="row">
				<p class="col-lg-12 col-sm-12"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>	
			</div>
		</div>

			<?php	
		
				include '../includes/util.inc.php';
				include '../includes/shopFunction.php';
				include '../includes/produitDb.php';

				$jardinerie= produitJardinerie();
				// var_dump($jardinerie);
				shopProduit($jardinerie,"pspj","produitjardinerie", $statuePanier, $idAdmin, $panier);
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

	<aside class="col-lg-2 col-sm-3">
		<?php include '../includes/userOrVisited.php';?>

		<div class="asideImage">
			<?php include '../includes/pub.php'; ?>
		</div>
						
	</aside>
</main>
<?php include '../includes/footer.php'; ?>