<?php 
	include '../includes/header.php';
	include '../includes/util.inc.php'; 
?>

<main>
	<aside>
		<?php include '../includes/userOrVisited.php';?>

		<div class="asideImage">
			<?php include '../includes/pub.php'; ?>
		</div>
						
	</aside>

	<?php

		include '../includes/mainArticle.php';

		$jardinerie= jardinerieArticle();

		$accueil= accueilArticle();

		$lombricompost= lombricompostArticle();

		$fruits= fruitArticle();

	?>

	<article>
		<h2 >ACCUEIL</h2> 
		<div id="accueil">	
			<?php article($accueil);?>
		</div>
			
		<h2>JARDINERIE</h2>
		<div id="jardinerie">	
			<?php article($jardinerie);	?>
		</div>

		<h2>LOMBRI-COMPOST</h2>
		<div id="lombricompost">
			<?php article($lombricompost);	?>	
		</div>

		<h3>tableaux des aliments</h3>
		<div id="tableau">
			<table>
				<caption><h4 id="Fruits">Fruits et Légumes</h4></caption>
				<thead>
					<tr>
						<th >Nom</th>
						<th>Remarques</th>
				
					</tr>
				</thead>
				
				<tbody>
					<?php tableaux($fruits); ?>	
				</tbody>

				<tfoot>
					<tr>
						<td colspan="2">Globalement, les fruits abimés, un peu moisis en morceaux, sous forme d'épluchures sont appréciés des vers. Pensez simplement à les recouvrir de papier ou carton pour ne pas que les moucherons s'y intéressent de trop près.</td>
					</tr>
						
				</tfoot>

			</table>
		</div>	
				
	</article>	
</main>
<?php include '../includes/footer.php'; ?>				