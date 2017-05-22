<?php 
	include '../includes/header.php';
	$connected=false;
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
	<?php
		if($_POST['email']==$_POST['emailCheck'] AND $_POST['motDePasse']==$_POST['motpassecheck'] AND strlen('CodePostal')<6 AND strlen('numeros')<6{
		 
		$db = new PDO('mysql:host=localhost;dbname=pump', 'root', '');

		$query = $db->prepare(
			'INSERT INTO preinscription (email, pseudo, motDePasse, Sex, prenom, nom, numeros, nomDeRue, appartement, batiment, lieuDit, CodePostal, ville, pays, tel1, tel2, age, situation, exterieur, habitant) VALUES (:email, :pseudo, :motDePasse, :Sex, :prenom, :nom, :numeros, :nomDeRue, :appartement, :batiment, :lieuDit, :CodePostal, :ville, :pays, :tel1, :tel2, :age, :situation, :exterieur, :habitant)'
			);
		 
		$query->execute(array(
			'email'=>$_POST['email'],
			'pseudo'=>$_POST['pseudo'],
			'motDePasse'=>$_POST['motDePasse'],
			'Sex'=>$_POST['Sex'],
			'prenom'=>$_POST['prenom'],
			'nom'=>$_POST['nom'],
			'numeros'=>$_POST['numeros'],
			'nomDeRue'=>$_POST['nomDeRue'],
			'appartement'=>$_POST['appartement'],
			'batiment'=>$_POST['batiment'],
			'lieuDit'=>$_POST['lieuDit'],
			'CodePostal'=>$_POST['CodePostal'],
			'ville'=>$_POST['ville'],
			'pays'=>$_POST['pays'],
			'tel1'=>$_POST['tel1'],
			'tel2'=>$_POST['tel2'],
			'age'=>$_POST['age'],
			'situation'=>$_POST['situation'],
			'exterieur'=>$_POST['exterieur'],
			'habitant'=>$_POST['habitant']
			));
		}
		else{
			/*echo 'Le client n\'a pas validé';*/
			
		}

	?>
	</article>	
</main>
<?php include '../includes/footer.php'; ?>	