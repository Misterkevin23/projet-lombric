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
			include '../includes/panierNavigatorInvit.php';
		
			include '../includes/produitDb.php';

			include '../includes/shopFunction.php';
			
		?>

	
		<div class="panierRecapitulatif">
			<fieldset>
				<legend>Adresse de livraison</legend>
				<div class="form">
				<?php
					include '../includes/form/numerosForm.php';
					include '../includes/form/nomDeRueForm.php';
					include '../includes/form/appartementForm.php';
					include '../includes/form/batimentForm.php';
					include '../includes/form/lieuDitForm.php';
					include '../includes/form/CodePostalForm.php';
					include '../includes/form/villeForm.php';
					include '../includes/form/paysForm.php';
				?>	
				</div>
			</fieldset>
		</div>

		<div class="panierRecapitulatif">
			<?php
				if($panierConnected==TRUE && isset($_POST) 						&& isset($_POST['idPanier']) && $_POST['idPanier']=='Payer')
				{
					$jardinerie= produitJardinerie();

					$lombricomposteur= produitLombricomposteur();

					$prixTTC= $_POST['prixTTC'];

					$prixLivraison= $_POST['livraison'];

					echo panierTableRecapitulatif($_POST, $statuePanier, $panier, $jardinerie, $lombricomposteur, $prixTTC, $prixLivraison);
				}
				elseif($panierConnected==TRUE && isset($_POST) && $_POST[$statuePanier]=="Achat direct")
				{
			       	panierLivraison(livraisonMode());

					$jardinerie= produitJardinerie();

					$lombricomposteur= produitLombricomposteur();

					$price= $_POST["prix"]*$_POST["qte"];

					$prixTTC=(($price*19.6)/100)+$price;

					$prixLivraison=0;

					echo panierTableRecapitulatif($_POST, $statuePanier, $panier, $jardinerie, $lombricomposteur, $prixTTC, $prixLivraison);
					var_dump($_POST);
				}
				elseif($panierConnected==FALSE && isset($_POST) && $_POST[$statuePanier]=="Achat direct")
				{
			       	panierLivraison(livraisonMode());

					$jardinerie= produitJardinerie();

					$lombricomposteur= produitLombricomposteur();

					$price= $_POST["prix"]*$_POST["qte"];

					$prixTTC=(($price*19.6)/100)+$price;

					$prixLivraison=0;

					echo panierTableRecapitulatif($_POST, $statuePanier, $panier, $jardinerie, $lombricomposteur, $prixTTC, $prixLivraison);
					var_dump($_POST);
				}
			?>
		</div>

		<div class="panierRecapitulatif">
			<fieldset>
				<legend>Paiement</legend>
				<div class="form">
					<label for="carte"> <span class="formInfo"> Numéro de carte:</span></label>
					<input type="text" id="carte" class="formTape" name="numerosDeCarte" required=""><br><br>
					<label for="mastercard" for="visa"><span class="formInfo">Type de paiement :</span></label><br><br>
					<input type="radio" id="visa" name="paiement" value="visa" checked=""><span class="formInfo"><i class="fa fa-cc-visa" aria-hidden="true"></i></span>	
					<input type="radio" id="mastercard" name="paiement" value="mastercard"><span class="formInfo"><i class="fa fa-cc-mastercard" aria-hidden="true"></i></span><br><br>
					<label for="date"> <span class="formInfo"> Date d'expiration :</span></label><br><br>
					<input type="text" id="date" class="formTapeSmall" name="date2"><br><br>
					<label for="crypto"> <span class="formInfo"> Cryptogramme visuel :</span></label><br><br>
					<input type="text" id="crypto" class="formTapeSmall" name="cryptogramme"><br>
				</div>
			</fieldset>
			<br>
			<div class="button">
				<a href="paiement_identification.html" class="asideConexionButton"> PAYER</a>
			</div>
		</div>
				
	</article>
	
</main>
<?php include '../includes/footer.php'; ?>