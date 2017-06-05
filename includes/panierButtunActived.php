<?php

	$panierNumber=0;
	$count="";
	$key=array_keys($panier);
	$key_value=array_keys($panier, "TRUE");
	$lenght= count($panier);
	$lenghtKey= count($key_value);
	
	for($count=0; $count <= $lenghtKey; $count++ )
	{
		if (isset($key_value[$count]))
		{	
			if(!is_int($key_value[$count]) &&
				$panier[$key_value[$count]]=="TRUE")
			{
				$number= intval($panier['qte_'.$key_value[$count]]);
				$panierNumber+=$number;
			}
		}	
	}

?>
<ul>
	<li>
		<h3><a href="Panier.php" class="panierButton"> PANIER</a></h3>
		<p><span id="nbreArticle"><?php echo $panierNumber.'</span>'.' '.'article(s)' ?></p>
	</li>
</ul>