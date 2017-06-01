<?php

	$panierNumber=0;
	$count="";
	$lenght= count($panier);

	for($count=0; $count < $lenght; $count++ )
	{
		if (isset($panier[$count]))
		{	
			if($panier[$count]=="TRUE")
			{
				$panierNumber++;
			}
		}	
	}
?>
<ul>
	<li>
		<h3><a href="Panier.php?<?php echo 'pseudo='.$pseudo.'&id='.$id;?>" class="panierButton"> PANIER</a></h3>
		<p><span id="nbreArticle"><?php echo $panierNumber.'</span>'.' '.'article(s)' ?></p>
	</li>
</ul>