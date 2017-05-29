

<div class="asideImage">
	<h3><?php echo $pseudo ?></h3>
	<div class="asideProfilImage">
		<img src="../image/tortue_profil.jpg">
	</div>
	
	<form>
		<div class="asideProfilPanier">
			<?php include '../includes/panierButtunActived.php'; ?>
		</div>

	</form>
	<ul>
		<li>
			<a href="UserProfil.php?<?php echo 'id='.$id.'&pseudo='.$pseudo;?>">Mon profil</a>
		</li>
	</ul>

	<form>	
		<div class="button">
				<a href="Home.php" type="submit">
				<h3 class="asideConexionButton">DECONNEXION</h3>
				</a>
		</div>

	</form>

</div>