<?php 
	include '../includes/header.php';
	$connected=true;
?>

<main>
	<aside>
		<?php include '../includes/userConnect.php'; ?>

		<div class="asideImage">
			<?php include '../includes/pub.php'; ?>
		</div>
						
	</aside>

	<article>
		<div class="form">
			<label for="theme"><span class="formInfo"> Theme :</span> </label>
			<select id="theme" size="1" class="formTape" required>				
				<option value="jardinerie"><h2>JARDINERIE</h2>
				<option value="subtrat"><h3>Subtrat</h3></option>
				<option value="irrigation"><h3>Irrigation</h3></option>
				<option value="climatique"><h3>Condition climatique</h3></option>
				<option value="lombricompost"><h2>LOMBRI-COMPOST</h2>
				<option value="lombric"><h3>Le lombric</h3></option>
				<option value="besoins"><h3>Les besoins alimentaires des vers Eisenia</h3></option>
				<option value="tableau"><h2>TABLEAUX DES ALIMENTS</h2>
				<option value="fruits"><h3>Fruits et Légumes</h3></option>	
			</select>
		</div>
		<div>
			<ul id="comment" class="forumMessage">
				<div class="forumImage">
					<img src="../image/tortue_profil.jpg">
					<p>GWADA</p>
				</div>

				<li class="forumText">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</li>
			</ul>

			

			<div class="forumMessage">
				<fieldset>
				<legend>MESSAGE</legend>
					<div class="forumImage">
						<img src="../image/tortue_profil.jpg">
						<p>GWADA</p>
					</div>

					<form id="newMessage" class="forumText">
						<textarea type="text" id="yourself" class="formTape" rows="10" cols="50" placeholder="Item"> </textarea>
						<input type="submit" name="Valider" class="formButtun" value="Envoyer">
					</div>	
				</fieldset>	
			</div>	
	</article>	
</main>
<?php include '../includes/footer.php'; ?>	