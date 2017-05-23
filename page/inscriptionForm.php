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
?>

<main>
	<aside>	
		<div class="asideImage">
			<?php include '../includes/pub.php'; ?>
		</div>		
	</aside>

	<article>
		<form method="post" name="inscription" onSubmit="return verification_form();" action="confirmationInscription.php">
		<fieldset>
			<legend>Mon identifiant et mon mot de passe</legend>
			<div class="form">
			<label for="email"><span class="formInfo">Email* :</span></label>
			<input type="email" id="email" name="email" class="formTape" value="<?php echo $email; ?>" placeholder="...@gmail.com" onkeyup="verification_form">
			<label for="emailCheck"><span class="formInfo">Confirmation de l'e-mail* :</span></label>
			<input type="email" id="emailCheck" name="emailCheck" class="formTape" value="" placeholder="...@gmail.com" onkeyup="verification_form">
			</div>

			<div class="form">
				<label for="nickName"><span class="formInfo">Pseudo* :</span></label>
				<input type="text" id="nickName" name="pseudo" class="formTape" value="<?php echo $pseudo; ?>" placeholder="Gwada" onkeyup="verification_form">
			</div>
			
			<div class="form">
				<label for="password"><span class="formInfo">Mot de passe* :</span></label>
				<input type="password" id="password" name="motDePasse" class="formTape" value="<?php echo $motDePasse; ?>" placeholder="p&trick59" onkeyup="verification_form">
				<label for="passwordCheck"><span class="formInfo">Vérification* :</span></label>
				<input type="password" id="passwordCheck" name="motpassecheck" class="formTape" value="" placeholder="p&trick59" onkeyup="verification_form">		
			</div>
		</fieldset>
		<fieldset>
	       <legend>Mon adresse de facturation</legend>
			<div class="form">
				<label for="Mlle" for="Mme" for="M" for="societe"><span class="formInfo">Civilité* :</span></label>
				<input type="radio" id="Mlle" name="Sex" value="mlle" onkeyup="verification_form"><span class="formInfo">Mlle.</span>	
				<input type="radio" id="Mme" name="Sex" value="mme" onkeyup="verification_form"><span class="formInfo">Mme.</span>
				<input type="radio" id="M" name="Sex" value="m" onkeyup="verification_form"><span class="formInfo">M.</span>
				<input type="radio" id="societe" name="Sex" value="societe" onkeyup="verification_form"><span class="formInfo">Société</span><br><br>	
				<label for="firstName"><span class="formInfo" >Prénom* :</span></label>
				<input type="text" id="firstName" name="prenom" class="formTape" value="" placeholder="Kevin" onkeyup="verification_form"><br>
				<label for="lastName"><span class="formInfo">NOM* :</span></label>
				<input type="text" id="lastName" name="nom" class="formTape" value="" placeholder="Pascal" onkeyup="verification_form">		
			</div>

			<div class="form">
			<label for="numeros"><span class="formInfo">N°, voie* :</span></label>
			<input type="text" id="numeros" name="numeros" value="" onkeyup="verification_form"><br><br>
			<label for="roadName"> <span class="formInfo"> Nom de la rue* :</span></label>
			<input type="text" id="roadName" class="formTape" name="nomDeRue" onkeyup="verification_form"><br><br>
			<label for="appartement"><span class="formInfo">étage, appartement :</span></label>
			<input type="text" id="appartement" name="appartement" class="formTape" value="" placeholder="étage 7, appartement 23"><br>
			<label for="batiment"><span class="formInfo"> Bâtiment :</span></label>
			<input type="text" id="batiment" class="formTapeSmall" name="batiment">
			<label for="lieuDit"><span class="formInfo"> Lieu-dit :</span></label>
			<input type="text" id="lieuDit" class="formTapeSmall" name="lieuDit"><br><br>
			<label for="postcode"><span class="formInfo"> Code postal* :</span></label>
			<input type="text" id="postcode" class="formTapeSmall" name="CodePostal" onkeyup="verification_form">
			<label for="ville"> <span class="formInfo">Ville* :</span></label>
			<input type="text" id="ville" class="formTapeSmall" name="ville" onkeyup="verification_form"><br><br>
			<label for="pays"><span class="formInfo"> Pays* :</span> </label>
			<select id="pays" name="pays" size="1" onkeyup="verification_form">
				<option value="">	</option>
				<option value="France">France	</option>
				<option value="Allemagne">Allemagne	</option>
				<option value="belgique">belgique	</option>
				<option value="Espagne">Espagne	</option>
			</select>
			<br>
			</div>

			<div class="form">
			<label for="phonePortable"><span class="formInfo">Telephone1* :</span></label>
			<input type="tel" id="phonePortable" name="tel1" class="formTape" value="" placeholder="0654254568" onkeyup="verification_form">
			<label for="phoneFixe"><span class="formInfo">Telephone2 :</span></label>
			<input type="tel" id="phoneFixe" name="tel2" class="formTape" value="" placeholder="0134568712">
			</div>
		</fieldset>

		<fieldset>
			<legend>Mieux vous connaître</legend>
			<div class="form">
		       <label for="Age"><span class="formInfo">Tranche d'age :</span></label><br>
		       <input type="radio" name="age" value="moins15" id="moins15" class="formTapeSmall"><span class="formInfo">Moins de 15 ans</span><br>
		       <input type="radio" name="age" value="medium15-25" id="medium15-25" class="formTapeSmall"><span class="formInfo">15-25 ans</span><br>
		       <input type="radio" name="age" value="medium25-40" id="medium25-40" class="formTapeSmall"><span class="formInfo">25-40 ans</span><br>
		       <input type="radio" name="age" value="plus40" id="plus40" class="formTapeSmall"><span class="formInfo">Plus de 40 ans</span><br>
		       <label><span class="formInfo">ètes_vous* :</span></label><br>
		       <input type="radio" id="proprietaire" name="situation" value="proprietaire" class="formTapeSmall" onkeyup="verification_form"><span class="formInfo">Propriétaire</span><br>
		       <input type="radio" id="locataire" name="situation" value="locataire" class="formTapeSmall" onkeyup="verification_form"><span class="formInfo">locataire</span><br>
		       <label><span class="formInfo">Avez_vous*:</span></label><br>
		       <input type="radio" id="jardin" name="exterieur" value="jardin" class="formTapeSmall" onkeyup="verification_form"><span class="formInfo">Jardin</span><br>
		       <input type="radio" id="terrasse" name="exterieur" value="terrasse" class="formTapeSmall" onkeyup="verification_form"><span class="formInfo">Terrasse</span><br><br>
		       <input type="radio" id="terrasse" name="exterieur" value="les deux" class="formTapeSmall" onkeyup="verification_form"><span class="formInfo">Les deux</span><br><br>
		       <label><span class="formInfo">Nombre de personnes dans le foyer:</span></label><br>
		       <input type="radio" name="habitant" value="1" class="formTapeSmall"><span class="formInfo">1</span><br>
		       <input type="radio" name="habitant" value="2" class="formTapeSmall"><span class="formInfo">2</span><br>
		       <input type="radio" name="habitant" value="3" class="formTapeSmall"><span class="formInfo">3</span><br>
		       <input type="radio" name="habitant" value="4" class="formTapeSmall"><span class="formInfo">4</span><br>
		       <input type="radio" name="habitant" value="plus" class="formTapeSmall"><span class="formInfo">plus</span><br>
		    </div>
		</fieldset>

		<fieldset>
		<legend>DETAIL</legend>
		<div class="form">
			<label for="yourself"><span class="formInfo">A propos de vous :</span></label><br>
			<textarea id="yourself" name="description" class="formTape" rows="10" cols="50" >  </textarea> <br>
		</div>
		</fieldset>
					
		<input type="submit" name="Valider" class="formButtun" value="Envoyer">	
			
		</form>
	</article>	
</main>
<?php include '../includes/footer.php'; ?>	