<?php 
	include '../includes/header.php';
	$connected=true;
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

		<h2> LOMBRICOMPOSTEUR </h2>
		<div class="produit">
			<div class="produitPhoto">
				<img src="../image/shop/lombricomposteur1.jpg">
			</div>
			
			<div class="produitDescription">
				<h3>Lombricompost NOM</h3>
				<p class="produitDescriptionText"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
			</div>
			
			<div class="produitAction">
				<h4>En stock</h4>
				<div class="button">
					<form>
						<input type="submit" name="ajoutPanier" class="panierButton" value="Ajouter au panier"></a></br>
					</form>	
					<a href="" class="produitButton"> Voir le produit </a></br>
					<form>
						<input type="submit" name="Achat" class="formButtun" value="Achat direct"></br>
					</form>	
				</div>
				<p class="produitPrix">XXXX Euro</p>		
			</div>
		</div>
		<div class="produit">
			<div class="produitPhoto">
				<img src="../image/shop/lombricomposteur2.jpg">
			</div>
			
			<div class="produitDescription">
				<h3>Lombricompost NOM</h3>
				<p class="produitDescriptionText"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
			</div>
			
			<div class="produitAction">
				<h4>En stock</h4>
				<div class="button">
					<form>
						<input type="submit" name="ajoutPanier" class="panierButton" value="Ajouter au panier"></a></br>
					</form>	
					<a href="" class="produitButton"> Voir le produit </a></br>
					<form>
						<input type="submit" name="Achat" class="formButtun" value="Achat direct"></br>
					</form>	
				</div>
				<p class="produitPrix">XXXX Euro</p>		
			</div>
		</div>	
		<div class="produit">
			<div class="produitPhoto">
				<img src="../image/shop/lombricomposteur3.jpg">
			</div>
			
			<div class="produitDescription">
				<h3>Lombricompost NOM</h3>
				<p class="produitDescriptionText"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
			</div>
			
			<div class="produitAction">
				<h4>En stock</h4>
				<div class="button">
					<form>
						<input type="submit" name="ajoutPanier" class="panierButton" value="Ajouter au panier"></a></br>
					</form>	
					<a href="" class="produitButton"> Voir le produit </a></br>
					<form>
						<input type="submit" name="Achat" class="formButtun" value="Achat direct"></br>
					</form>	
				</div>
				<p class="produitPrix">XXXX Euro</p>		
			</div>
		</div>	
		<div class="produit">
			<div class="produitPhoto">
				<img src="../image/shop/fibre_de_chanvre_litière.jpg">
			</div>
			
			<div class="produitDescription">
				<h3>Lombricompost NOM</h3>
				<p class="produitDescriptionText"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
			</div>
			
			<div class="produitAction">
				<h4>En stock</h4>
				<div class="button">
					<form>
						<input type="submit" name="ajoutPanier" class="panierButton" value="Ajouter au panier"></a></br>
					</form>	
					<a href="" class="produitButton"> Voir le produit </a></br>
					<form>
						<input type="submit" name="Achat" class="formButtun" value="Achat direct"></br>
					</form>	
				</div>
				<p class="produitPrix">XXXX Euro</p>		
			</div>
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