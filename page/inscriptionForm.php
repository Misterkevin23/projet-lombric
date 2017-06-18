<?php 
	include '../includes/header.php';
	
	if(isset($_POST["inscription"])){
		$email=$_POST["email"];
		$pseudo=$_POST["pseudo"];
		$motDePasse=$_POST["motDePasse"];
	}
	else{
		$email="";
		$pseudo="";
		$motDePasse="";
	}
// var_dump($_POST);	
?>

<main>
	<aside>	
		<div class="asideImage">
			<?php include '../includes/pub.php'; ?>
		</div>		
	</aside>

	<article>
		<form method="post" name="inscription" onsubmit="" action="#">
		<fieldset>
			<legend>Mon identifiant et mon mot de passe</legend>
			<div class="form">
				<?php
					include '../includes/form/emailForm.php';
					include '../includes/form/emailCheckForm.php';
				?>
			</div>

			<div class="form">
				<?php
					include '../includes/form/pseudoForm.php';
				?>
			</div>
			
			<div class="form">
				<?php
					include '../includes/form/motDePasseForm.php';
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
					include '../includes/form/tel2Form.php';
				?>
			</div>
		</fieldset>

		<fieldset>
			<legend>Mieux vous connaître</legend>
			<div class="form">
				<?php
					include '../includes/form/ageForm.php';
					include '../includes/form/situationForm.php';
					include '../includes/form/exterieurForm.php';
					include '../includes/form/habitantForm.php';
					
				?>  
		    </div>

		</fieldset>

		<fieldset>
		<legend>DETAIL</legend>
		<div class="form">
			<?php
				include '../includes/form/descriptionForm.php';
			?>
		</div>

		</fieldset>
		
		<input type="hidden" name="id">		
		<input type="submit" name="Valider" id="inscription" class="formButtun" value="Envoyer">		
		</form>

	</article>

</main>

<?php include '../includes/footer.php'; ?>	