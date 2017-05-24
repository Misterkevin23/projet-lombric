<?php 
	include '../includes/header.php';
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
	var_dump($_POST['email']==$_POST['emailCheck']);
	var_dump($_POST['motDePasse']==$_POST['motpassecheck']);
	var_dump(strlen('CodePostal')<100);
	var_dump(strlen('numeros')<11);
	var_dump($_POST);

		if($_POST['email']!=NULL AND $_POST['motDePasse']!=NULL						AND $_POST['motpassecheck']!=NULL AND $_POST['emailCheck']!=NULL 	AND $_POST['CodePostal']!=NULL AND $_POST['numeros']!=NULL){
			echo'ok1';
			if( $_POST['email']==$_POST['emailCheck'] 								AND $_POST['motDePasse']==$_POST['motpassecheck'] 				AND strlen('CodePostal')<100 									AND strlen('numeros')<11){
				echo 'ok2';
		 		if($_POST['pseudo']!=NULL AND isset($_POST['Sex']) 					AND $_POST['prenom']!=NULL AND $_POST['nom']!=NULL 			AND $_POST['nomDeRue']!=NULL  AND $_POST['ville']!=NULL 	AND $_POST['pays']!=NULL AND $_POST['tel1']!=NULL 			AND isset($_POST['situation']) AND isset($_POST['exterieur'])){
		 			echo 'ok3';
		 			if($_POST['appartement']==NULL){
		 				$_POST['appartement']="ND";
		 				echo 'ok4';
		 			}
		 			if($_POST['batiment']==NULL){
		 				$_POST['batiment']="ND";
		 				echo 'ok5';
		 			}
		 			if($_POST['lieuDit']==NULL){
		 				$_POST['lieuDit']="ND";
		 				echo 'ok6';
		 			}
		 			if($_POST['tel2']==NULL){
		 				$_POST['tel2']="ND";
		 				echo 'ok7';
		 			}
		 			if(!isset($_POST['age'])){
		 				$_POST['age']="ND";
		 				echo 'ok8';
		 			}
		 			if(!isset($_POST['habitant'])){
		 				$_POST['habitant']="un nombre incertain";
		 				echo 'ok9';
		 			}
		 			if($_POST['description']==NULL){
		 				$_POST['description']="J'aime la nature!";
		 				echo 'ok10';
		 			}
		 		
					$db = new PDO('mysql:host=localhost;dbname=pump', 'root', '');

					$query = $db->prepare(
						'INSERT INTO preinscription (email, pseudo, motDePasse, Sex, prenom, nom, numeros, nomDeRue, appartement, batiment, lieuDit, CodePostal, ville, pays, tel1, tel2, age, situation, exterieur, habitant, description) 										VALUES (:email, :pseudo, :motDePasse, :Sex, :prenom, :nom, :numeros, :nomDeRue, :appartement, :batiment, :lieuDit, :CodePostal, :ville, :pays, :tel1, :tel2, :age, :situation, :exterieur, :habitant, :description)'
					);
					echo 'ok11';
					 var_dump($query);
					$query->execute(array(
						':email'=>$_POST['email'],
						':pseudo'=>$_POST['pseudo'],
						':motDePasse'=>$_POST['motDePasse'],
						':Sex'=>$_POST['Sex'],
						':prenom'=>$_POST['prenom'],
						':nom'=>$_POST['nom'],
						':numeros'=>$_POST['numeros'],
						':nomDeRue'=>$_POST['nomDeRue'],
						':appartement'=>$_POST['appartement'],
						':batiment'=>$_POST['batiment'],
						':lieuDit'=>$_POST['lieuDit'],
						':CodePostal'=>$_POST['CodePostal'],
						':ville'=>$_POST['ville'],
						':pays'=>$_POST['pays'],
						':tel1'=>$_POST['tel1'],
						':tel2'=>$_POST['tel2'],
						':age'=>$_POST['age'],
						':situation'=>$_POST['situation'],
						':exterieur'=>$_POST['exterieur'],
						':habitant'=>$_POST['habitant'],
						':description'=>$_POST['description']
					));
					echo 'ok';
				}
				else{
					echo 'champ obligatoire non remplie';
				}
			}
			else{
				echo 'pb mot de passe ou pseudo ou code postal ou nb rue';
			}
		}
		else{
			echo 'abscence mot de passe ou pseudo ou code postal ou numeros de rue';
			
		}

	?>
	</article>	
</main>
<?php include '../includes/footer.php'; ?>	