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
		<div style="background:#F0F2DD" class="container-fluid produit">
			<div class="row">
				<div class="col-lg-3 col-sm-3">
					<img style="border: 3px solid grey; width:100%; max-width:100%" src="../image/shop/lombricomposteur1.jpg">
					<img style="width:75px" src="../image/shop/lombricomposteur1.jpg">
					<img style="width:75px" src="../image/shop/lombricomposteur1.jpg">
					<img style="width:75px" src="../image/shop/lombricomposteur1.jpg">
					<img style="width:75px" src="../image/shop/lombricomposteur1.jpg">
				</div>
				<div class="col-lg-1 col-sm-1">
					<img style="width:42px" src="../image/shop/lombricomposteur1.jpg">
				</div>
				<div class="col-lg-7 col-sm-7">
					<h3>Nom produit</h3>
					<p style="box-shadow: 10px 10px 5px #656565">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
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
					<p class="produitPrix">Prix<i class="fa fa-eur" aria-hidden="true"></i></p>
				</div>
				<div class="col-lg-1 col-sm-1">
					<img style="width:42px" src="../image/shop/lombricomposteur1.jpg">
				</div>		
			</div>
			<div class="row">
					<div class="col-lg-offset-5 col-lg-4 col-sm-offset-5 col-sm-4">
					<h4>statue</h4>
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
						<p class="produitButton">Retour aux produits</p>
						<input type="hidden" id="panier" value="Ajouter au panier">
						<input type="hidden" name="" value=""></br>
					</div>
				</div>
			</div><br>
			<div style="border: 7px solid red; background:blue" class="row">
				<ul class="col-lg-11 col-sm-11" style="display:inline-block">
					<li class="col-lg-offset-1 col-lg-3 col-sm-offset-1 col-sm-3" style="display:inline-block; border: 3px black solid; background:grey">CARACTERISTIQUE</li>
					<li class="col-lg-offset-1 col-lg-3 col-sm-offset-1 col-sm-3" style="display:inline-block; border: 3px black solid; background:grey">ACCESSOIRE</li>
					<li class="col-lg-offset-1 col-lg-3 col-sm-offset-1 col-sm-3" style="display:inline-block; border: 3px black solid; background:grey">CONTENU DU PAQUET</li>
				</ul>
			</div><br>
			<div style="border: 3px solid green" class="row">
				<ul class="col-lg-11 col-sm-11">
					<li class="col-lg-offset-4 col-lg-7 col-sm-offset-4 col-sm-7">Dimension: </li>
					<li class="col-lg-offset-4 col-lg-7 col-sm-offset-4 col-sm-7">Provenance: </li>
					<li class="col-lg-offset-4 col-lg-7 col-sm-offset-4 col-sm-7">Cible: </li>
					<li class="col-lg-offset-4 col-lg-7 col-sm-offset-4 col-sm-7">Contenance: </li>
					<li class="col-lg-offset-4 col-lg-7 col-sm-offset-4 col-sm-7">Materiel: </li>
				</ul>
			</div><br>
			<div style="border: 3px solid green" class="row">
				<div class="col-lg-4 col-sm-4">
					<img style="width:200px; border: 3px solid grey" src="../image/shop/lombricomposteur1.jpg">
				</div>
				<div class="col-lg-5 col-sm-5">
					<p style="box-shadow: 10px 10px 5px #656565"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
				</div>
				<div class="col-lg-3 col-sm-3">
					<h4>statue</h4>
					<p class="produitPrix">Prix<i class="fa fa-eur" aria-hidden="true"></i></p>
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
			<br>
			<div style="border: 3px solid green" class="row">
				<p class="col-lg-11 col-sm-11" style="box-shadow: 10px 10px 5px #656565"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>	
			</div>
		</div>
		<div>
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