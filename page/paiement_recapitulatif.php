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
		<div class="panierNavigation">
			<ol>
				<li>
					<a href="Panier.html">
						<h3 >PANIER</h3>
					</a>
				</li>

				<li>
					<h3>IDENTIFICATION</h3>
				</li>

				<li>
					<h3 class="panierNavigationColor">PAYEMENT</h3>	
				</li>

				<li>
					<h3>CONFIRMATION</h3>
				</li>

			</ol>
		</div>

		<div>
			<div class="panierRecapitulatif">
				<fieldset>
					<legend>Adresse de livraison</legend>
					<div class="form">
						<input type="radio" name="jardin" value="jardin" class="formTapeSmall" required=""><span class="formInfo">Identique à l'adresse de facturation</span><br><br>
						<label for="numeros"><span class="formInfo">N°, voie :</span></label>
						<input type="number" id="numeros" name="numeros" class="formTape" value="" required><br><br>
						<label for="roadname"> <span class="formInfo"> Nom de la rue :</span></label>
						<input type="text" id="roadname" class="formTape" name="nomDeRue" required=""><br><br>
						<label for="appartement"><span class="formInfo">étage, appartement :</span></label>
						<input type="text" id="appartement" name="appartement" class="formTape" value="" placeholder="étage 7, appartement 23"><br><br>
						<label for="batiment"><span class="formInfo"> Bâtiment :</span></label>
						<input type="text" id="batiment" class="formTapeSmall" name="batiment"><br><br>
						<label for="lieuDit"><span class="formInfo"> Lieu-dit :</span></label>
						<input type="text" id="lieuDit" class="formTapeSmall" name="lieuDit"><br><br>
						<label for="postcode"><span class="formInfo"> Code postal :</span></label>
						<input type="text" id="postcode" class="formTapeSmall" name="CodePostal" required=""><br><br>
						<label for="ville"> <span class="formInfo">Ville :</span></label>
						<input type="text" id="ville" class="formTapeSmall" name="ville" required=""><br><br>
						<label for="pays"><span class="formInfo"> Pays :</span> </label>
						<select id="pays" size="1" class="formTape" required>
							<option value="">	</option>
							<option value="France">France	</option>
							<option value="Allemagne">Allemagne	</option>
							<option value="belgique">belgique	</option>
							<option value="Espagne">Espagne	</option>
						</select>
						<br>
					</div>
				</fieldset>

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
			
			<div class="panierRecapitulatif">
				<table>
				<thead>
					<tr>
						<th colspan="3">Recapitulatif de la commande</th>
					</tr>
					<tr>
						<th>PRODUIT</th>
						<th>QUANTITE</th>
						<th>PRIX</th>
					</tr>
					
				</thead>
				
				<tbody>	
					<tr>
						<td><h3>Jardiniere Nom</h3></td>
						<td><input type"text" class="panierProduitPrix" disabled></td>
						<td><input type"text" class="panierProduitPrix" disabled>EUR</td>
					</tr>
					<tr>
						<td><h3>Jardiniere Nom</h3></td>
						<td><input type"text" class="panierProduitPrix" disabled></td>
						<td><input type"text" class="panierProduitPrix" disabled>EUR</td>
					</tr>
					<tr>
						<td><h3>Jardiniere Nom</h3></td>
						<td><input type"text" class="panierProduitPrix" disabled></td>
						<td><input type"text" class="panierProduitPrix" disabled>EUR</td>
					</tr>
					<tr>
						<td><h3>Jardiniere Nom</h3></td>
						<td><input type"text" class="panierProduitPrix" disabled></td>
						<td><input type"text" class="panierProduitPrix" disabled>EUR</td>
					</tr>
					<tr>
						<td><h3>Jardiniere Nom</h3></td>
						<td><input type"text" class="panierProduitPrix" disabled></td>
						<td><input type"text" class="panierProduitPrix" disabled>EUR</td>
					</tr>
					<tr>
						<td><h3>Jardiniere Nom</h3></td>
						<td><input type"text" class="panierProduitPrix" disabled></td>
						<td><input type"text" class="panierProduitPrix" disabled>EUR</td>
					</tr>
					<tr>
						<td><h3>Jardiniere Nom</h3></td>
						<td><input type"text" class="panierProduitPrix" disabled></td>
						<td><input type"text" class="panierProduitPrix" disabled>EUR</td>
					</tr>
					<tr>
						<td><h3>Jardiniere Nom</h3></td>
						<td><input type"text" class="panierProduitPrix" disabled></td>
						<td><input type"text" class="panierProduitPrix" disabled>EUR</td>
					</tr>
					<tr>
						<td><h3>Jardiniere Nom</h3></td>
						<td><input type"text" class="panierProduitPrix" disabled></td>
						<td><input type"text" class="panierProduitPrix" disabled>EUR</td>
					</tr>
					<tr>
						<td><h3>Jardiniere Nom</h3></td>
						<td><input type"text" class="panierProduitPrix" disabled></td>
						<td><input type"text" class="panierProduitPrix" disabled>EUR</td>
					</tr>
					<tr>
						<td><h3>Jardiniere Nom</h3></td>
						<td><input type"text" class="panierProduitPrix" disabled></td>
						<td><input type"text" class="panierProduitPrix" disabled>EUR</td>
					</tr>
					<tr>
						<td><h3>Jardiniere Nom</h3></td>
						<td><input type"text" class="panierProduitPrix" disabled></td>
						<td><input type"text" class="panierProduitPrix" disabled>EUR</td>
					</tr>
				</tbody>

				<tfoot>
					<tr>
						<td colspan="2" class="panierTotal">Total de vos articles hors frais de livraison:</td>
						<td><input type"text" class="panierProduitPrix" disabled>EUR</td>
					</tr>
					<tr>
						<td colspan="2" class="panierTotal">Total de vos frais de livraison:</td>
						<td><input type"text" class="panierProduitPrix" disabled>EUR</td>
					</tr>
					<tr>
						<td colspan="2" class="panierTotal">Total de votre commande:</td>
						<td><input type"text" class="panierProduitPrix" disabled>EUR</td>
					</tr>	
				</tfoot>	
			</table>
		</div>
	</article>
</main>
<?php include '../includes/footer.php'; ?>