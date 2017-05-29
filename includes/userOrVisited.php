<?php 

if(isset($connected) && isset($panierConnected))
{
	include '../includes/panierDb.php';

	if($panierConnected==TRUE)
	{

		foreach ($users as $user)
		{
			$condition1= $connected==TRUE && $pseudo==$user["pseudo"] 			&& $id==$user["id"]	&& $user["statue"]=='admin';

			$condition2= $connected==FALSE && $pseudo==$user["nom"] && $id==$user["id"]	&& $user["statue"]=='client';

			if($condition1)
			{
				$idAdmin=$user["id"];
				$idPanier=$user["idpanier"];
				$nom=$user["nom"];
				$numeros=$user["numeros"];
				$nomDeRue=$user["nomDeRue"];
				$appartement=$user["appartement"];
				$batiment=$user["batiment"];
				$lieuDit=$user["lieuDit"];
				$CodePostal=$user["CodePostal"];
				$ville=$user["ville"];
				$pays=$user["pays"];

				$panier=panierSelected($idPanier);
				$statuePanier='idadmin';
				include '../includes/userConnect.php';
			break;	
			}
			elseif($condition2)
			{
				$idAdmin=$user["id"];
				$idPanier=$user["idpanier"];
				$nom=$user["nom"];
				$numeros=$user["numeros"];
				$nomDeRue=$user["nomDeRue"];
				$appartement=$user["appartement"];
				$batiment=$user["batiment"];
				$lieuDit=$user["lieuDit"];
				$CodePostal=$user["CodePostal"];
				$ville=$user["ville"];
				$pays=$user["pays"];

				$panier=panierSelected($idPanier);
				$statuePanier='idclient';
				echo '<div class="aside">';
				include '../includes/userVisit.php';
				echo '</div>';
			break;	
			}
		}
	}
	else
	{
	echo '<div class="aside">';
	include '../includes/inscription.php';
	echo '</div>';
	$statuePanier='visit';
	$panier=0;
	}
}		
else
{
	echo '<div class="aside">';
	include '../includes/inscription.php';
	echo '</div>';
	$statuePanier='visit';
	$panier=0;
}

?>