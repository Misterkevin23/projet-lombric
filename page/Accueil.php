<?php 
	include '../includes/header.php';
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
	
	<article>
		<div id="accueil"> 
			<h2 >ACCUEIL</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>

		<div id="jardinerie">
			<h2>JARDINERIE</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

			<h3 id="Subtrat">Subtrat</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

			<h3 id="Irrigation">Irrigation</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

			<h3 id="Condition">Condition climatique</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>

		<div id="lombricompost">
			<h2>LOMBRI-COMPOST</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					
			<h3 id="lombric">Le lombric</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

			<h3 id="aliment">Les besoins alimentaires des vers Eisenia</h3>
		
			<p>Un apport varié de matière à composter contribue à la bonne santé de 
			l'écosystème reproduit au sein de votre lombricomposteur. Plus le menu des vers
			 présente de la diversité , meilleur sera le compost. Les vers présents dans votre
			  vermicomposteur se nourrissent et ingurgitent avant tout des matières d'origine
			   végétale et dites biodégradables. Bien sûr il existe des exceptions que vous 
			   retrouverez dans la liste avec en tête l'oignon, l'ail, l'échalote ou les agrumes.
			<span class=important>Eviter de leur donner de trop gros morceaux</span></p>
		
			<p>Les vers de manière générale ont une préférence pour les aliments en petits
			 morceaux surtout quand ils découvrent de la nourriture qu'ils ne connaissent pas.
			  Il faut donc naturellement couper en petit morceaux ce que vous incorporez dans 
			  votre lombricomposteur. De plus, n'hésitez pas à disperser l'apport d'un nouveau 
			  déchet dans le plateau en en mettant un peu à chaque fois et à des endroits différents.
			   Il faut éviter de faire un grand tas en surface en gros morceaux. Idéalement,
			    il est préférable d' incorporer les déchets, les découper et varier le menu de notre congénère épigé.</p>
		
			<p>Quel types de déchets pouvez-vous utiliser dans le lombricomposteur pour nourrir 
			vos vers et recycler au mieux vos déchets ménagers ?
			Voici une liste des aliments appréciés et néfastes aux vers de compost qui vous 
			aidera au quotidien à leur apporter ce dont ils ont besoin, de la matière à composter diversifiée et riche.</p>
		</div>

		<div id="tableau">
	
			<h3>tableaux des aliments</h3>
			<table>
				<caption><h4 id="Fruits">Fruits et Légumes</h4></caption>
				<thead>
					<tr>
						<th >Nom</th>
						<th>Remarques</th>
				
					</tr>
				</thead>
				
				<tbody>	
					<tr>
						<td class="tableNo">Peaux des agrumes</td>
						<td>L'Eisenia n'apprécie pas le zeste de l'agrume. Celui-ci est irritant pour sa peau. <span class="important">A éviter ou alors 	très modéré et incorporé avec d'autres déchets</span></td>
					</tr>
					<tr>
						<td>Ananas</td>
						<td><span class="important">Eviter les feuilles</span>,plutôt dures et difficile à ingérer.Pas de problème pour <span class="tableYes"> 	les épluchures.</span></td>
					</tr>
					<tr>
						<td>Artichaut</td>
						<td>Pas facile pour le vers d en venir à bout donc n'hésiter pas à le mêler à un met de choix et un peu de carton. Pensez à le découper si possible.</td>
					</tr>
					<tr>
						<td>Asperge</td>
						<td>Eisenia est loin d'entre être friand donc ne pas trop en mettre d'un coups.</td>
					</tr>
					<tr>
						<td class="tableYes">Déchets liés à l'aquariophilie</td>
						<td>Les plantes aquatiques et algues peuvent être introduite dans le lombricomposteur une fois égouttées.</td>
					</tr>
					<tr>	
						<td class="tableNo">Avocat</td>
						<td>Eisenia met bien trop de temps à en venir à bout.</td>
					</tr>
					<tr>	
						<td class="tableYes">Banane </td>
						<td>Les vers de compost en raffolent. Succès garanti !
						<span class="important">A éviter de le mettre seul et en gros morceaux.A mélanger avec du carton, papier, filtre ou marc de café pour faciliter le travail des vers.</span></td>
					</tr>	
					<tr>
						<td class="tableYes">Champignons</td>
						<td>Les restes et épluchures de champignons sont appréciés des vers.</td>
					</tr>
					<tr>
						<td>Haricot </td>
						<td>Les pointes des haricots et les gousses sont aprécié.</td>
					</tr> 
					<tr>
						<td>Melon</td>
						<td>Les restes de melon une fois vidé conviennent aux lombrics.<span class="important"> Découpez la peau en morceaux.</span></td>
					</tr>
					<tr>
						<td class="tableNo">Oignon</td>
						<td rowspan="2">L'oignon est acide et de ce fait il est délicat de le mettre à disposition des vers. Il est préférable et bien plus sage ne pas 	en mettre du tout.</td>	
					</tr>
					<tr>
						<td class="tableNo"> Ail </td>
					</tr>
					<tr>	
						<td class="tableYes">Poireau</td>
						<td>Aucun problème avec ce légume dont on jette souvent les restes.</td>
					</tr>
					<tr>
						<td class="tableNo">Pomme de terre </td>
						<td>On évitera tout simplement les épluchures comme les patates entières qui pourrissent.</td>
					</tr>
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