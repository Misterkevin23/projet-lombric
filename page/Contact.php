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
		<h2>Pour nous écrire</h2>
		<h3>AVEZ VOUS DES QUESTIONS?</h3>
		<form class="inscription">
			<fieldset>
		       <legend>Pour toutes demandes d'information et de devis. La Furious équipe  reste à votre disposition​​​​​​​​​​.</legend>
				<label for="firstname"><span class="formInfo">Prénom :</span></label>
				<div class="formContactChamp">		
					<input type="text" id="firstname" name="prenom" class="formTape" value="Veuillez inscrir votre Prénom" placeholder="Kevin">
				</div>

				<label for="name"><span class="formInfo">NOM :</span></label>
				<div class="formContactChamp">	
					<input type="text" id="name" name="nom" class="formTape" value="Veuillez inscrire votre nom" placeholder="Pascal">
				</div>	

				<label for="subject"><span class="formInfo"> Sujet :</span> </label>
				<div class="formContactChamp">	
					<select id="subject" class="formTape" size="1">
						<option value="jardinerie">JARDINERIE</option>
						<option value="lombricompost">LOMBRICOMPOST</option>
						<option value="produits">NOS PRODUITS</option>
					</select>
				</div>
			</fieldset>		
			
			<fieldset>
				<legend>MESSAGE</legend>	
				<div class="formContactChamp">	
					<textarea id="message" name="messager" class="formTape" rows="10" cols="50" ></textarea>
				</div>
			</fieldset>
			<input type="submit" name="Valider" class="formButtun" value="Envoyer">	
		</form>
	</article>	
</main>	
<?php include '../includes/footer.php'; ?>		