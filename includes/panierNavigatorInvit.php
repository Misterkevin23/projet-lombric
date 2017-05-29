<div class="panierNavigation">
	<ul>
		<li>
			<?php
				if($connected==TRUE OR $panierConnected==TRUE)
				{
					echo '<a href="Panier.php?pseudo='.$pseudo.'&id='.$id.'">';
					echo '<h3>PANIER</h3>';
					echo '</a>';
				}
				else
				{
					echo '<h3>PANIER</h3>';	
				}
			?>	
		</li>

		<li>
			<a href="paiement_recapitulatif.php?<?php echo 'pseudo='.$pseudo.'&id='.$id?>">
			<h3 class="panierNavigationColor">PAYEMENT</h3>
			</a>
		</li>

		<li>
			<h3>CONFIRMATION</h3>
		</li>

	</ul>
</div>