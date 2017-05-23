<?php
	include '../includes/header.php';
	include '../includes/util.inc.php';
	include '../includes/connexionDb.php';

	var_dump($_GET);
if(isset($_GET["id"])){
	echo 'hello';
	if($_GET["id"]!=FALSE && $_GET["statue"]=="admin" && $_GET["connected"]==TRUE){
		
		$db= connectUser();
		
		$query= $db-> prepare('SELECT * FROM preinscription');

		$query->execute();

		$admins= $query ->fetchAll();
		var_dump($admins);
		echo'$admins["pseudo"]';
		$connected=$_GET["connected"];
	}
}	
		foreach ($admins as $admin) {
			
			// if($admin["pseudo"]==$pseudo AND $admin["motDePasse"]==$motDePasse AND $admin["id"] ==$id ){
				$pseudo=$admin["pseudo"];
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

?>
<main>

	<aside>
		<?php 
			if($connected){
				include '../includes/userConnect.php';
			}
			else{
				echo '<div class="aside">';
				include '../includes/inscription.php';
				echo '</div>';
			}
		?>

		<div class="asideImage">
			<?php include '../includes/pub.php'; ?>
		</div>
						
	</aside>


	<article>
		<h1>MON PROFIL</h1>
		<h2><?php echo $pseudo; ?></h2>
		<div>

			
			<?php
			echo '<div>';
			echo '<h3>Mon adresse</h3>';	 
			 	$civilite=''.$Sex.' '.$prenom.' '.$nom;
			 echoP("toto","$civilite");
			  $Localisation= ' '.$numeros.' '.$nomDeRue;
			 echoP("toto","$Localisation");
			 	$Lieux= $appartement.','.$batiment;
			 echoP("toto","$Lieux");
			 echoP("toto","'Lieu-Dit:'.$lieuDit.'");
			 	$city= $CodePostal.' '.$ville;
			 echoP("toto","$city");
			 echoP("toto","$pays");
			echo '</div>';
			echo '<div>';
			echo '<h3>Comment vous joindre en cas de livraison</h3>';
				$numeros= 'Portable: '.$tel1.' fixe: '.$tel2;
			 echoP("toto","$numeros");
			 echoP("toto","$email");
			 echo '</div>';
			 $type='Fière d\'etre'.$situation.'. Je possede un(e) :'.$exterieur;
			 echoP("toto","$type");
			 $capacite= 'Il y a :'.$habitant.' personne(s) dans ce fière foyer';
			 echoP("toto","$capacite"); 
			 echo '</div>';
			 echo '<div>';
			 echoP("toto","$description");
			 echo'</div>';
			 ?>
		
			 
		</div>

	</article>

</main>	

<?php include '../includes/footer.php'; ?>	