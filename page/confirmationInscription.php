<?php
	include '../includes/connexionDb.php';

	var_dump($_POST['email']==$_POST['emailCheck']);
	var_dump($_POST['motDePasse']==$_POST['motpassecheck']);
	var_dump(strlen('CodePostal')<100);
	var_dump(strlen('numeros')<11);
	var_dump($_POST);
	if(isset($_POST) && isset($_POST['id'])){
		echo '547';
		if($_POST['email']!=NULL AND $_POST['pseudo']!=NULL 				AND $_POST['motDePasse']!=NULL									AND $_POST['motpassecheck']!=NULL AND $_POST['emailCheck']!=NULL AND $_POST['CodePostal']!=NULL AND $_POST['numeros']!=NULL)
		{
			// include '../includes/verificationMailPseudo.php';
			// VerifMailPseudo($_POST['email'], $_POST['pseudo'], "inscriptionForm.php");
			if( $_POST['email']==$_POST['emailCheck'] 						AND $_POST['motDePasse']==$_POST['motpassecheck'] 			AND strlen('CodePostal')<100 AND strlen('numeros')<11)
			{
				if( isset($_POST['Sex'])									AND $_POST['prenom']!=NULL AND $_POST['nom']!=NULL 		AND $_POST['nomDeRue']!=NULL 							AND $_POST['ville']!=NULL 								AND $_POST['pays']!=NULL 								AND $_POST['tel1']!=NULL 								AND isset($_POST['situation']) 							AND isset($_POST['exterieur']))
				{
		 			if($_POST['appartement']==NULL)
		 			{
		 				$_POST['appartement']="ND";
		 				echo 'ok4';
		 			}
		 			if($_POST['batiment']==NULL)
		 			{
		 				$_POST['batiment']="ND";
		 				echo 'ok5';
		 			}
		 			if($_POST['lieuDit']==NULL)
		 			{
		 				$_POST['lieuDit']="ND";
		 				echo 'ok6';
		 			}
		 			if($_POST['tel2']==NULL)
		 			{
		 				$_POST['tel2']="ND";
		 				echo 'ok7';
		 			}
		 			if(!isset($_POST['age']))
		 			{
		 				$_POST['age']="ND";
		 				echo 'ok8';
		 			}
		 			if(!isset($_POST['habitant']))
		 			{
		 				$_POST['habitant']="un nombre incertain";
		 				echo 'ok9';
		 			}
		 			if($_POST['description']==NULL)
		 			{
		 				$_POST['description']="J'aime la nature!";
		 				echo 'ok10';
		 			}

					$query = $db->prepare(
						'INSERT INTO preinscription (email, pseudo, motDePasse, Sex, prenom, nom, numeros, nomDeRue, appartement, batiment, lieuDit, CodePostal, ville, pays, tel1, tel2, age, situation, exterieur, habitant, description) 			VALUES (:email, :pseudo, :motDePasse, :Sex, :prenom, :nom, :numeros, :nomDeRue, :appartement, :batiment, :lieuDit, :CodePostal, :ville, :pays, :tel1, :tel2, :age, :situation, :exterieur, :habitant, :description)'
					);
					echo 'ok11';

					$query->execute(array(
						':email'		=>$_POST['email'],
						':pseudo'		=>$_POST['pseudo'],
						':motDePasse'	=>$_POST['motDePasse'],
						':Sex'			=>$_POST['Sex'],
						':prenom'		=>$_POST['prenom'],
						':nom'			=>$_POST['nom'],
						':numeros'		=>$_POST['numeros'],
						':nomDeRue'		=>$_POST['nomDeRue'],
						':appartement'	=>$_POST['appartement'],
						':batiment'		=>$_POST['batiment'],
						':lieuDit'		=>$_POST['lieuDit'],
						':CodePostal'	=>$_POST['CodePostal'],
						':ville'		=>$_POST['ville'],
						':pays'			=>$_POST['pays'],
						':tel1'			=>$_POST['tel1'],
						':tel2'			=>$_POST['tel2'],
						':age'			=>$_POST['age'],
						':situation'	=>$_POST['situation'],
						':exterieur'	=>$_POST['exterieur'],
						':habitant'		=>$_POST['habitant'],
						':description'	=>$_POST['description']
					));
					
					echo 'ok';

					include '../includes/panierCreateTable.php';
						$visits=connectVisiter();
						
					foreach($admins as $admin)
					{
						if($admin['email']===$_POST['email'] 				&& $admin['pseudo']===$_POST['pseudo'])
						{
							$query=$db->prepare(
							'INSERT INTO panier (idadmin)
							VALUES (:idadmin)'
							);

							$query->execute(array(
							':idadmin'	=>$admin['id']
							));

							include '../includes/panierDb.php';
							$paniers=panierUser();

							foreach ($paniers as $panier){
								if($panier['idadmin']==$admin['id'])
								{
									$query=$db->prepare('					UPDATE preinscription SET idpanier= :idpanier WHERE id = :id');

									$query->execute(array(
									':idpanier'		=>$panier['id'],
									':id'			=>$admin['id']
									));
								break;	
								}
							}
						break;	
						}
					}
				}		
				else
				{
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
	}
	elseif(isset($_POST) && isset($_POST['visit']))
	{
		echo 'aaa';
		$pseudo='visiteur';
		if($_POST['email']!=NULL AND $_POST['motDePasse']!=NULL 			AND $_POST['motpassecheck']!=NULL 								AND $_POST['emailCheck']!=NULL AND $_POST['CodePostal']!=NULL 		AND $_POST['numeros']!=NULL)
			{
				echo 'bbb';
			// include '../includes/verificationMailPseudo.php';
			// VerifMailPseudo($_POST['email'], $pseudo, "paiement_identification.php");
			if( $_POST['email']==$_POST['emailCheck'] 						AND $_POST['motDePasse']==$_POST['motpassecheck'] 			AND strlen('CodePostal')<100 AND strlen('numeros')<11)
			{
				echo 'ccc';
				if( isset($_POST['Sex'])									AND $_POST['prenom']!=NULL AND $_POST['nom']!=NULL 		AND $_POST['nomDeRue']!=NULL 							AND $_POST['ville']!=NULL 								AND $_POST['pays']!=NULL 								AND $_POST['tel1']!=NULL)
				{
					echo 'ddd';
		 			$query = $db->prepare(
						'INSERT INTO visiteur (email, motDePasse, Sex, prenom, nom, numeros, nomDeRue, appartement, batiment, lieuDit, CodePostal, ville, pays, tel1)VALUES (:email, :motDePasse, :Sex, :prenom, :nom, :numeros, :nomDeRue, :appartement, :batiment, :lieuDit, :CodePostal, :ville, :pays, :tel1)'
					);
		 			echo 'eee';
					$query->execute(array(
						':email'		=>$_POST['email'],
						':motDePasse'	=>$_POST['motDePasse'],
						':Sex'			=>$_POST['Sex'],
						':prenom'		=>$_POST['prenom'],
						':nom'			=>$_POST['nom'],
						':numeros'		=>$_POST['numeros'],
						':nomDeRue'		=>$_POST['nomDeRue'],
						':appartement'	=>$_POST['appartement'],
						':batiment'		=>$_POST['batiment'],
						':lieuDit'		=>$_POST['lieuDit'],
						':CodePostal'	=>$_POST['CodePostal'],
						':ville'		=>$_POST['ville'],
						':pays'			=>$_POST['pays'],
						':tel1'			=>$_POST['tel1']
					));
					
					echo 'fff';
					include '../includes/panierCreateTable.php';

						$visits=connectVisiter();
					echo 'ggg';	
					foreach($visits as $visit)
					{
						if($visit['email']===$_POST['email'])
						{

							$query=$db->prepare(
							'INSERT INTO panier (idvisit)
							VALUES (:idvisit)'
							);

							$query->execute(array(
							':idvisit'	=>$visit['id']
							));

							include '../includes/panierDb.php';
							$paniers=panierUser();

							foreach ($paniers as $panier){
								if($panier['idvisit']==$visit['id'])
								{
									$query=$db->prepare('					UPDATE visiteur SET idpanier= :idpanier WHERE id = :id');

									$query->execute(array(
									':idpanier'		=>$panier['id'],
									':id'			=>$visit['id']
									));
								break;	
								}
							}
						break;
						}
					}
				header('location:shop.php');	
				}		
				else
				{
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
	}
?>
