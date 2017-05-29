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
			<form method="post" name="inscription" onSubmit="return verification_form();" action="confirmationInscription.php">
				<fieldset>
					<legend>Mon identifiant et mon mot de passe</legend>
					<div class="form">
					<label for="email"><span class="formInfo">Email* :</span></label>
					<input type="email" id="email" name="email" class="formTape" value="" placeholder="...@gmail.com" >
					<label for="emailCheck"><span class="formInfo">Confirmation de l'e-mail* :</span></label>
					<input type="email" id="emailCheck" name="emailCheck" class="formTape" placeholder="...@gmail.com" >
					<label for="password"><span class="formInfo">Mot de passe* :</span></label>
					<input type="password" id="password" name="motDePasse" class="formTape" value="" placeholder="p&trick59" >
					<label for="passwordCheck"><span class="formInfo">Vérification* :</span></label>
					<input type="password" id="passwordCheck" name="motpassecheck" class="formTape" value="" placeholder="p&trick59" >		
					</div>
				</fieldset>

				<fieldset>
			       <legend>Mon adresse de facturation</legend>
					<div class="form">
						<span class="formInfo"><label for="Mlle" for="Mme" for="M" for="societe">Civilité* :</span></label>
						<span class="formInfo"><input type="radio" id="Mlle" name="Sex" value="mlle" >Mlle.</span>	
						<span class="formInfo"><input type="radio" id="Mme" name="Sex" value="mme" >Mme.</span>
						<span class="formInfo"><input type="radio" id="M" name="Sex" value="m" >M.</span>
						<input type="radio" id="societe" name="Sex" value="societe" ><span class="formInfo">Société</span><br><br>	
						<label for="firstName"><span class="formInfo" >Prénom* :</span></label>
						<input type="text" id="firstName" name="prenom" class="formTape" value="" placeholder="Kevin" ><br>
						<label for="lastName"><span class="formInfo">NOM* :</span></label>
						<input type="text" id="lastName" name="nom" class="formTape" value="" placeholder="Pascal" >		
					</div>

					<div class="form">
						<label for="numeros"><span class="formInfo">N°, voie* :</span></label>
						<input type="text" id="numeros" name="numeros" value="" ><br><br>
						<label for="roadName"> <span class="formInfo"> Nom de la rue* :</span></label>
						<input type="text" id="roadName" class="formTape" name="nomDeRue" ><br><br>
						<label for="appartement"><span class="formInfo">étage, appartement :</span></label>
						<input type="text" id="appartement" name="appartement" class="formTape" value="" placeholder="étage 7, appartement 23"><br>
						<label for="batiment"><span class="formInfo"> Bâtiment :</span></label>
						<input type="text" id="batiment" class="formTapeSmall" name="batiment">
						<label for="lieuDit"><span class="formInfo"> Lieu-dit :</span></label>
						<input type="text" id="lieuDit" class="formTapeSmall" name="lieuDit"><br><br>
						<label for="postcode"><span class="formInfo"> Code postal* :</span></label>
						<input type="text" id="postcode" class="formTapeSmall" name="CodePostal" >
						<label for="ville"> <span class="formInfo">Ville* :</span></label>
						<input type="text" id="ville" class="formTapeSmall" name="ville" ><br><br>
						<label for="pays"><span class="formInfo"> Pays* :</span> </label>
						<select id="pays" name="pays" size="1" >
							<option value="">	</option>
							<option value="France">France	</option>
							<option value="Allemagne">Allemagne	</option>
							<option value="belgique">belgique	</option>
							<option value="Espagne">Espagne	</option>
						</select>
						<br>
					</div>

					<div class="form">
						<label for="phonePortable"><span class="formInfo">Numeros Principal* :</span></label>
						<input type="tel" id="phonePortable" name="tel1" class="formTape" value="" placeholder="0654254568" onkeyup="">
					</div>
				</fieldset>

				<input type="hidden" name="client">		
				<input type="submit" name="Valider" class="formButtun" value="Envoyer">	
					
			</form>
					
		</div>
				
	</article>

</main>

<?php include '../includes/footer.php'; ?>