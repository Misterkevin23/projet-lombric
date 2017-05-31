<?php

?>

<h3>INSCRIPTION/ CONNEXION</h3>

<p>Envie  de vous faire livrer vos produit ou de participer au forum afin de partager vos experiences</p><br>
<p><input type="radio" name="compte" value="non" class="nonInscrit">Vous n'avez pas de compte PUMPCrew</p><br>
<p><input type="radio" name="compte" value="yes" class="inscrit" checked="checked">Vous avez un compte PUMPCrew</p><br><br>
<p><input type="radio" name="compte" value="non" class="inscritPanier">Acceder à votre panier</p><br>
<div>
	<form method="post" name="connexion" onSubmit="return connexion_form();" action="connexion.php" class="connexionCadre">
		<?php
			include '../includes/form/pseudoForm.php';
			include '../includes/form/motDePasseForm.php';
		?>	
		<div class="button">
			<input type="submit" name="connexion" class="asideConexionButton" value="CONNEXION">	
		</div>
	</form>

</div>

<div>
	<form method="post" name="inscription" onSubmit="return verification_form();" action="inscriptionForm.php" 						class="inscriptionCadre">		
		<?php
			include '../includes/form/emailForm.php';
			include '../includes/form/pseudoForm.php';
			include '../includes/form/motDePasseForm.php';
		?>
		<div class="button">
			<input type="submit" href="inscription.php"  name="inscription" class="asideConexionButton" value="INSCRIPTION">
		</div>

	</form>

</div>

<div>
	<form method="post" name="connexion" onSubmit="return connexion_form();" action="connexion.php" class="connexionPanierCadre">
		<?php
			include '../includes/form/emailForm.php';
			include '../includes/form/motDePasseForm.php';
		?>
		<div class="button">
			<input type="submit" name="panier" class="asideConexionButton" value="PANIER">	
		</div>

	</form>			
