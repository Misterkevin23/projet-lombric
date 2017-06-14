<?php 

if(isset($connected) && isset($panierConnected))
{
	if($panierConnected==TRUE && $connected==TRUE)
	{
		include '../includes/userConnect.php';
	}
	elseif($panierConnected==TRUE && $connected!=TRUE)
	{
		echo '<div class="aside">';
		include '../includes/userVisit.php';
		echo '</div>';
	}
	else
	{
		echo '<div class="aside">';
		include '../includes/inscription.php';
		echo '</div>';
	}
}		
else
{
	echo '<div class="aside">';
	include '../includes/inscription.php';
	echo '</div>';
}

?>