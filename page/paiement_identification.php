<?php 
	include '../includes/header.php';
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
					<h3 class="panierNavigationColor">IDENTIFICATION</h3>
				</li>

			</ol>
		</div>
		
		<div class="aside">
			<form method="post" name="inscription" action="confirmationInscription.php">
				<fieldset>
					<legend>Mon identifiant et mon mot de passe</legend>
					<div class="form">
						<?php
							include '../includes/form/emailForm.php';
							include '../includes/form/motDePasseForm.php';
							include '../includes/form/emailCheckForm.php';
							include '../includes/form/motpassecheckForm.php';
						?>
					</div>
				</fieldset>

				<fieldset>
			       <legend>Mon adresse de facturation</legend>
					<div class="form">
						<?php
							include '../includes/form/SexForm.php';
							include '../includes/form/prenomForm.php';
							include '../includes/form/nomForm.php';
						?>
					</div>

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

					<div class="form">
						<?php
							include '../includes/form/tel1Form.php';
						?>
					</div>
					
				</fieldset>

				<input type="hidden" name="client">		
				<input type="submit" name="Valider" id="inscription" class="formButtun" value="Envoyer">	
					
			</form>
					
		</div>
				
	</article>

</main>

<?php include '../includes/footer.php'; ?>