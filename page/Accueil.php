<?php 
	include '../includes/header.php';
	include '../includes/util.inc.php'; 
	$connected=false;
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

	<?php

		$db = new PDO('mysql:host=localhost;dbname=pump', 'root', '');

		$query = $db->prepare('SELECT * FROM jardinerie');

		$query->execute();

		$jardinerie= $query ->fetchAll();

		$db = new PDO('mysql:host=localhost;dbname=pump', 'root', '');

		$query = $db->prepare('SELECT * FROM accueil');

		$query->execute();

		$accueil= $query ->fetchAll();

		$db = new PDO('mysql:host=localhost;dbname=pump', 'root', '');

		$query = $db->prepare('SELECT * FROM lombricompost');

		$query->execute();

		$lombricompost= $query ->fetchAll();

		$db = new PDO('mysql:host=localhost;dbname=pump', 'root', '');

		$query = $db->prepare('SELECT * FROM tableauFruit');

		$query->execute();

		$fruits= $query ->fetchAll();

	?>

	<article>
		<h2 >ACCUEIL</h2> 
		<div id="accueil">	
			<?php article($accueil);	?>
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