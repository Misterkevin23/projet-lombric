<?php
	if(isset($_POST['pseudo'])){
		$pseudo=$_POST['pseudo'];
	}
	elseif(isset($_GET['pseudo'])){
		$pseudo=$_GET['pseudo'];
	}
	else{
		$pseudo="";
	}

?>

<h3>INSCRIPTION/ CONNEXION</h3>

<p>Envie  de vous faire livrer vos produit ou de participer au forum afin de partager vos experiences</p><br>
<p><input type="radio" name="compte" value="non" class="nonInscrit">Vous n'avez pas de compte PUMPCrew</p><br>
<p><input type="radio" name="compte" value="yes" class="inscrit" checked="checked">Vous avez un compte PUMPCrew</p><br><br>
<div>
	<form method="post" name="connexion" onSubmit="return connexion_form();" action="connexion.php" class="connexionCadre">
		<label for="nickName"><span class="formInfo">Pseudo* :</span></label>
		<input type="text" id="nickName" name="pseudo" class="formTape" value="<?php echo $pseudo;?>" placeholder="Gwada" onkeyup="connexion_form"></br>
		<label for="password"><span class="formInfo">Mot de passe* :</span></label>
		<input type="password" id="password" name="motDePasse" class="formTape" placeholder="p&trick59" onkeyup="connexion_form"><br>
		<div class="button">
			<input type="submit" name="connexion" class="asideConexionButton" value="CONNEXION">	
		</div>

	</form>

</div>

<div>
	<form method="post" name="inscription" onSubmit="return verification_form();" action="inscriptionForm.php" class="inscriptionCadre">		
		<label for="email"><span class="formInfo">Email* :</span></label>
		<input type="email" id="email" name="email" class="formTape" placeholder="...@gmail.com" onkeyup="verification_form"></br>
		<label for="nickName"><span class="formInfo">Pseudo* :</span></label>
		<input type="text" id="nickName" name="pseudo" class="formTape" placeholder="Gwada" onkeyup="verification_form"></br>
		<label for="password"><span class="formInfo">Mot de passe* :</span></label>
		<input type="password" id="password" name="motDePasse" class="formTape" placeholder="p&trick59" onkeyup="verification_form"><br>
		<div class="button">
			<input type="submit" href="inscription.php"  name="inscription" class="asideConexionButton" value="INSCRIPTION">
		</div>

	</form>

</div>			
