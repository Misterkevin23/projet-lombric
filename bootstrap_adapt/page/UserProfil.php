<?php
	include '../includes/header.php';
	include '../includes/util.inc.php';

if(isset($_GET["pseudo"]) && isset($_GET["id"])){
		if($_GET["id"]!=NULL && $_GET["pseudo"]!=NULL){
		
			$admins= connectUser();
		
		foreach ($admins as $admin) {
			if($_GET["id"]==$admin["id"] && $_GET["pseudo"]==$admin["pseudo"]){	
				$pseudo=$admin["pseudo"];
				$idPanier=$admin["idpanier"];
				$email=$admin["email"];
				$Sex=$admin["Sex"];
				$prenom=$admin["prenom"];
				$nom=$admin["nom"];
				$numeros=$admin["numeros"];
				$nomDeRue=$admin["nomDeRue"];
				$appartement=$admin["appartement"];
				$batiment=$admin["batiment"];
				$lieuDit=$admin["lieuDit"];
				$CodePostal=$admin["CodePostal"];
				$ville=$admin["ville"];
				$pays=$admin["pays"];
				$tel1=$admin["tel1"];
				$tel2=$admin["tel2"];
				$age=$admin["age"];
				$situation=$admin["situation"];
				$exterieur=$admin["exterieur"];
				$habitant=$admin["habitant"];
				$id=$admin["id"];
				$description=$admin["description"];
			}
		}	
	}			
}
?>
<main>

	<aside>
		<?php include '../includes/userOrVisited.php';?>

		<div class="asideImage">
			<?php include '../includes/pub.php'; ?>
		</div>
						
	</aside>


	<article>
		<h1>MON PROFIL</h1>
		<h2><?php echo $pseudo; ?></h2>
		<div>
			<?php
			echo '<div class="produit">';
			echo '<div class="profilDescription"><form>';
			echo '<h3>Mon adresse</h3>';	 
			 	$civilite=''.$Sex.' '.$prenom.' '.$nom;
			 echoP("toto","$civilite");
			  $Localisation= ' '.$numeros.' '.$nomDeRue;
			 echoP("toto","$Localisation");
			 	$Lieux= $appartement.','.$batiment;
			 echoP("toto","Ville: $Lieux.");
			 echoP("toto","Lieu-Dit:$lieuDit.");
			 	$city= $CodePostal.' '.$ville;
			 echoP("toto","$city");
			 echoP("toto","$pays");
			 echo '</form></div>';
			 echo '<div class="profilDescription"><form>';
			 echo '<h3>A PROPOS DE VOUS</h3>';
			 echoP("toto","$description");
			 echo '</form></div>';
			echo '<div class="profilDescription"><form>';
			echo '<h3>Comment vous joindre en cas de livraison</h3>';
				$numeros= 'Portable: '.$tel1.' fixe: '.$tel2;
			 echoP("toto","$numeros");
			 echoP("toto","$email");
			 echo '</form></div>';
			 echo '</div>';
			 echo '<div>';
			 echo '<form>';
			 $type='Fière d\'etre '.$situation.'. Je possede un(e) :'.$exterieur;
			 echoP("toto","$type");
			 $capacite= 'Il y a '.$habitant.' personne(s) dans ce fière foyer';
			 echoP("toto","$capacite");
			 echo '</form>'; 
			 echo '</div>';
			 
			 ?>
		
			 
		</div>

	</article>

</main>	

<?php include '../includes/footer.php'; ?>	