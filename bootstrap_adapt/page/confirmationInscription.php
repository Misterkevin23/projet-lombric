<?php
	include '../includes/connexionDb.php';
	include '../includes/panierCreateTable.php';
	include '../includes/panierDb.php';
	

	

	$condition2= $_POST['email']==$_POST['emailCheck']						AND $_POST['motDePasse']==$_POST['motpassecheck']		 			AND strlen('CodePostal')<100 AND strlen('numeros')<11;

	$condition3= isset($_POST['Sex'])	AND $_POST['prenom']!=NULL 			AND $_POST['nom']!=NULL AND $_POST['nomDeRue']!=NULL 				AND $_POST['ville']!=NULL AND $_POST['pays']!=NULL 					AND $_POST['tel1']!=NULL AND isset($_POST['situation']) 			AND isset($_POST['exterieur']);

	if(isset($_POST) && isset($_POST['id'])){
		echo '547';
		$condition1= $_POST['email']!=NULL AND $_POST['pseudo']!=NULL 		AND $_POST['motDePasse']!=NULL AND $_POST['motpassecheck']!=NULL AND $_POST['emailCheck']!=NULL AND $_POST['CodePostal']!=NULL 	AND $_POST['numeros']!=NULL;

		if($condition1)
		{
			if($condition2)
			{
				if($condition3)
				{
		 			if(!isset($_POST['age']))
		 			{
		 				$_POST['age']="d'un certain age";
		 				echo 'ok9';
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

		 			$statue='admin';

					$query = $db->prepare(
						'INSERT INTO users (email, pseudo, motDePasse, Sex, prenom, nom, numeros, nomDeRue, appartement, batiment, lieuDit, CodePostal, ville, pays, tel1, tel2, age, situation, exterieur, habitant, description, statue) 									VALUES (:email, :pseudo, :motDePasse, :Sex, :prenom, :nom, :numeros, :nomDeRue, :appartement, :batiment, :lieuDit, :CodePostal, :ville, :pays, :tel1, :tel2, :age, :situation, :exterieur, :habitant, :description, :statue)'
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
						':description'	=>$_POST['description'],
						':statue'		=>$statue
					));
					
					echo 'ok';
					$users=connectUser();
					foreach($users as $user)
					{
						if($user['email']===$_POST['email'] 				&& $user['pseudo']===$_POST['pseudo'])
						{
							$query=$db->prepare(
							'INSERT INTO panier (idadmin)
							VALUES (:idadmin)'
							);
					
							$query->execute(array(
							':idadmin'	=>$user['id']
							));
							$paniers=panierUser();
							foreach ($paniers as $panier){
								if($panier['idadmin']==$user['id'])
								{
									$query=$db->prepare('					UPDATE users SET idpanier= :idpanier WHERE id = :id');
					echo '99999';
									$query->execute(array(
									':idpanier'		=>$panier['id'],
									':id'			=>$user['id']
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
	elseif(isset($_POST) && isset($_POST['client']))
	{
		echo 'aaa';
		$pseudo='client';
		$condition4= $_POST['email']!=NULL AND $_POST['motDePasse']!=NULL 	AND $_POST['motpassecheck']!=NULL AND $_POST['emailCheck']!=NULL AND $_POST['CodePostal']!=NULL AND $_POST['numeros']!=NULL;

		$condition5= isset($_POST['Sex']) AND $_POST['prenom']!=NULL 		AND $_POST['nom']!=NULL AND $_POST['nomDeRue']!=NULL 			AND $_POST['ville']!=NULL AND $_POST['pays']!=NULL 				AND $_POST['tel1']!=NULL;

		if($condition4)
		{
			echo 'bbb';
			// include '../includes/verificationMailPseudo.php';
			// VerifMailPseudo($_POST['email'], $pseudo, "paiement_identification.php");
			if( $condition2)
			{
				echo 'ccc';
				if($condition5)
				{
					echo 'ddd';
					$statue='client';

		 			$query = $db->prepare(
						'INSERT INTO users (email, motDePasse, Sex, prenom, nom, numeros, nomDeRue, appartement, batiment, lieuDit, CodePostal, ville, pays, tel1, statue, pseudo)	VALUES (:email, :motDePasse, :Sex, :prenom, :nom, :numeros, :nomDeRue, :appartement, :batiment, :lieuDit, :CodePostal, :ville, :pays, :tel1, :statue, :pseudo)'
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
						':tel1'			=>$_POST['tel1'],
						':statue'		=>$statue,
						':pseudo'		=>$_POST['nom']
					));
					
					echo 'fff';
					

					echo 'ggg';	

					$users=connectUser();
					foreach($users as $user)
					{echo 'roro';
						if($user['email']===$_POST['email'])
						{

							$query=$db->prepare(
							'INSERT INTO panier (idclient)
							VALUES (:idclient)'
							);
						echo $user['id'];
							$query->execute(array(
							':idclient'	=>$user['id']
							));
							
							$paniers=panierUser();
							var_dump($paniers);
							foreach ($paniers as $panier){
								if($panier['idclient']==$user['id'])
								{
									$query=$db->prepare('					UPDATE users SET idpanier= :idpanier WHERE id = :id');
						echo '77777777';
									$query->execute(array(
									':idpanier'		=>$panier['id'],
									':id'			=>$user['id']
									));
								break;	
								}
							}
						break;
						}
					}
				// header('location:shop.php');	
				}		
				else
				{
					echo 'champ obligatoire non remplie';
				}
			}	
			else
			{
				echo 'pb mot de passe ou pseudo ou code postal ou nb rue';
			}
		}
		else
		{
			echo 'abscence mot de passe ou pseudo ou code postal ou numeros de rue';	
		}
	}
?>
