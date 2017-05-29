<doctype HTML>
<html>
<head>
	<title>PUMP my outdoor aeras</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="../stylesheets/normalize.css">
	<link rel="stylesheet" type="text/css"	href="../stylesheets/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../stylesheets/bootstrapAlleg.css">
	<link rel="stylesheet" type="text/css" href="../stylesheets/main.css">
	<script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="../js/menu.js"></script>
	<script type="text/javascript" src="../js/skel.min.js"></script>
	<script type="text/javascript" src="../js/accueil.js"></script>
	<script type="text/javascript" src="../js/home.js"></script>
	<script type="text/javascript" src="../js/forum.js"></script>
	<script type="text/javascript" src="../js/shop.js"></script>
	<!-- <script type="text/javascript" src="../js/produit.js"></script> -->
	<script type="text/javascript" src="../js/connexion_form.js"></script>
	<script type="text/javascript" src="../js/verification_form.js"></script>
</head>
<?php

$id=0;
$pseudo=NULL;
$connected=FALSE;
$panier=FALSE;
if( isset($_GET["pseudo"]) && isset($_GET["id"])){
	if($_GET["id"]!=NULL && $_GET["pseudo"]!=NULL){
				include '../includes/connexionDb.php';

				$id=$_GET["id"];
				$pseudo=$_GET["pseudo"];
				$admins= connectUser(); 
		foreach ($admins as $admin) {
		if($pseudo==$admin["pseudo"] && $id==$admin["id"]){
				$connected=TRUE;
				$panier=TRUE;
			}
		}
	}
else{
	$id=$_GET["id"];
	$pseudo=$_GET["pseudo"];
	$connected=FALSE;
	$panier=FALSE;
	}
}	

?>
	
	
<body>
	<header><!-- 
	 --><section>
			<div class="full">
				<div class="logo1">
				</div>
				
				<div class="titre">
					<h1> PUMP my outdoor aeras </h1>
					<p class="slogan">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					</p>
				</div>

			</div>
			<nav>
				<ul id="menu">
					
					<li class="navLi">
						<a href="Accueil.php?<?php echo 'pseudo='.$pseudo.'&id='.$id;?>#accueil"><h3>ACCUEIL</h3></a>
					</li><!-- 

				--><li class="navLi">
						<a href="Accueil.php?<?php echo 'pseudo='.$pseudo.'&id='.$id;?>#jardinerie"><h3><i class="fa fa-plus-square-o" aria-hidden="true"></i>	JARDINERIE</h3></a>
						<ul>
							<li class="nav1">
								<a href="Accueil.php?<?php echo 'pseudo='.$pseudo.'&id='.$id;?>#Subtrat"><h4>Subtrat</h4> </a>
							</li><!-- 

						 --><li class="nav2">
								<a href="Accueil.php?<?php echo 'pseudo='.$pseudo.'&id='.$id;?>#Irrigation"><h4>Irrigation</h4></a>
							</li><!--

						--><li class="nav3">
								<a href="Accueil.php?<?php echo 'pseudo='.$pseudo.'&id='.$id;?>#Condition"><h4>Condition climatique</h4></a>
							</li>
						</ul>
					</li><!-- 

				 --><li class="navLi">
						<a href="Accueil.php?<?php echo 'pseudo='.$pseudo.'&id='.$id;?>#lombricompost"><h3><i class="fa fa-plus-square-o" aria-hidden="true"></i>	LOMBRI-COMPOST</h3></a>
						<ul>
							<li class="nav1">
								<a href="Accueil.php?<?php echo 'pseudo='.$pseudo.'&id='.$id;?>#lombric"><h4>lombric</h4></a>
							</li><!--

						 --><li class="nav2">
								<a href="Accueil.php?<?php echo 'pseudo='.$pseudo.'&id='.$id;?>#aliment""><h4>Alimentation</h4></a>
							</li><!--

						--><li class="nav3">
								<a href="Accueil.php?<?php echo 'pseudo='.$pseudo.'&id='.$id;?>#tableau"><h4><i class="fa fa-plus-square-o" aria-hidden="true"></i>	tableaux des aliments</h4></a>
								<ul>
									<li class="navNav1">
										<a href="Accueil.php?<?php echo 'pseudo='.$pseudo.'&id='.$id;?>#Fruits">Fruits et Légumes</a>
									</li>
								</ul>
							</li>		
						</ul>
					</li><!-- 
					
				 --><li class="navLi">
						<a href="Shop.php?<?php echo 'pseudo='.$pseudo.'&id='.$id;?>"><h3><i class="fa fa-plus-square-o" aria-hidden="true"></i>	NOS PRODUITS</h3></a>
						<ul>
							<li class="nav1">
								<h4><i class="fa fa-plus-square-o" aria-hidden="true"></i>	JARDINERIE</h4>
								<ul>
									<li class="navNav1">
										<a href="Shop_Jardiniere_en_bois_page_1.php?<?php echo 'pseudo='.$pseudo.'&id='.$id;?>">BOIS </a>
									</li><!--

								--><li class="navNav1"">
										<a href="">XXXXXXXX </a>
									</li><!--

								--><li class="navNav1"">
										<a href="">XXXXXX </a>
									</li>
								</ul>
							</li><!-- 

						 --><li class="nav2">
								<h4><i class="fa fa-plus-square-o" aria-hidden="true"></i>	LOMBRI-COMPOSTEUR</h4>
								<ul>
									<li class="navNav1">
										<a href="Shop_lombricomposteur_standard_page_1.php?<?php echo 'pseudo='.$pseudo.'&id='.$id;?>">STANDARD </a>
									</li ><!-- 

								 --><li class="navNav1">
										<a href="">XXXXXX </a>
									</li><!-- 

								 --><li class="navNav1">
										<a href="">XXXXXXXX </a>
									</li>
								</ul>	
							</li><!-- 
						
						 --><li class="nav3">
								<h4><i class="fa fa-plus-square-o" aria-hidden="true"></i>	TERREAU</h4>
								<ul>
									<li class="navNav1">
										<a href="">XX </a>
									</li><!-- 

								 --><li class="navNav1">
										<a href="">XXXXXX </a>
									</li><!-- 

								 --><li class="navNav1">
										<a href="">XXXXXXXX </a>
									</li>
								</ul>	
							</li><!-- 
						
						 --><li class="nav4">
								<h4><i class="fa fa-plus-square-o" aria-hidden="true"></i>	LOMBRI-COMPOST</h4>
								<ul>
									<li class="navNav1">
										<a href="">X </a>
									</li><!-- 

								 --><li class="navNav1">
										<a href="">XXX </a>
									</li><!-- 

								 --><li class="navNav1">
										<a href="">XXXX </a>
									</li>
								</ul>	
							</li><!-- 
						
						 --><li class="nav5">
								<h4><i class="fa fa-plus-square-o" aria-hidden="true"></i>	SYSTEME D'IRRIGATION</h4>
								<ul>
									<li class="navNav1">
										<a href="">XX </a>
									</li ><!-- 

								 --><li class="navNav1">
										<a href="">XXXXXX </a>
									</li><!-- 

								 --><li class="navNav1">
										<a href="">XXXXXXXX </a>
									</li>
								</ul>	
							</li>
						</ul>


					</li><!-- 

				 --><li class="navLi">
						<a href="forum.php?<?php echo 'pseudo='.$pseudo.'&id='.$id;?>"><h3><i class="fa fa-plus-square-o" aria-hidden="true"></i>	FORUM</h3></a>
						<ul>
							<li class="nav1">
								<a href=""><h4><i class="fa fa-plus-square-o" aria-hidden="true"></i>	JARDINERIE</h4></a>
								<ul>
									<li class="navNav1">
										<a href="">Subtrat</a>
									</li>

									<li class="navNav1">
										<a href="">Irrigation</a>
									</li>
									
									<li class="navNav1">
										<a href="">Condition climatique</a>
									</li>
								</ul>
							</li>	

							<li class="nav2">
								<a href=""><h4><i class="fa fa-plus-square-o" aria-hidden="true"></i>	LOMBRI-COMPOST</h4></a>
								<ul>	
									<li class="navNav1">
										<a href="">Le lombric</a>
									</li>

									<li class="navNav1">
										<a href="">Les besoins alimentaires des vers Eisenia</a>
									</li>
								</ul>
							</li>	
								
							<li class="nav3">
								<a href=""><h4><i class="fa fa-plus-square-o" aria-hidden="true"></i>	TABLEAUX DES ALIMENTS</h4></a>
								<ul>
									<li class="navNav1">
										<a href="">Fruits et Légumes</a>
									</li>
								</ul>
							</li>
						</ul>

					</li><!-- 
					
				 --><li class="navLi">
						<a href="contact.php?<?php echo 'pseudo='.$pseudo.'&id='.$id;?>"><h3>NOUS CONTACTER</h3></a>
					</li>
				</ul>
			</nav>

		</section>
		
	</header>
