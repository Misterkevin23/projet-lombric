<?php 

if(isset($connected) && isset($panierConnected))
{
	include '../includes/panierDb.php';

	if($connected==TRUE && $panierConnected==TRUE)
	{
		$admins= connectUser();

		foreach ($admins as $admin)
		{
			if($pseudo==$admin["pseudo"] && $id==$admin["id"])
			{
				$idAdmin=$admin["id"];
				$idPanier=$admin["idpanier"];
				$nom=$admin["nom"];
				$numeros=$admin["numeros"];
				$nomDeRue=$admin["nomDeRue"];
				$appartement=$admin["appartement"];
				$batiment=$admin["batiment"];
				$lieuDit=$admin["lieuDit"];
				$CodePostal=$admin["CodePostal"];
				$ville=$admin["ville"];
				$pays=$admin["pays"];

				$panier=panierSelected($idPanier);
				$statuePanier='idadmin';
				include '../includes/userConnect.php';
			break;	
			}
		}
	}
	elseif($connected==FALSE && $panierConnected==TRUE)
	{
		$visits= connectVisiter();

		foreach ($visits as $visit)
		{
			if($pseudo==$visit["nom"] && $id==$visit["id"])
			{
				$idAdmin=$visit["id"];
				$idPanier=$visit["idpanier"];
				$nom=$visit["nom"];
				$numeros=$visit["numeros"];
				$nomDeRue=$visit["nomDeRue"];
				$appartement=$visit["appartement"];
				$batiment=$visit["batiment"];
				$lieuDit=$visit["lieuDit"];
				$CodePostal=$visit["CodePostal"];
				$ville=$visit["ville"];
				$pays=$visit["pays"];

				$panier=panierSelected($idPanier);
				$statuePanier='idvisit';
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