<?php

function imageMode($class, $chemin){
	echo '<div class="'.$class.'">';
	echo '<img src="'.$chemin.'">';
	echo '</div>';
}

function echoP($classP,$str){
	echo '<p class="' . $classP . '">' . $str . '</p>';
}

function articleTCt2P2Cp2I2Ci($titre, $class, $paragraphe1, $paragraphe2, $classP1, $classP2, $image1, $image2, $classI1, $classI2){
	echo '<div id='. $titre . '>'; 
	echo '<h3>' . $titre . '</h3>';
	echo '<div class="'.$class.'">';
	imageMode("$classI1","$image1");
	echoP("$classP1",'"'.$paragraphe1.'"');
	echo'</div>';
	echo '<div class="'.$class.'">';
	imageMode("$classI2","$image2");
	echoP("$classP1",'"'. $paragraphe2 . '"');
	echo'</div><br></div>';
}

function articleTCtPCpICi($titre, $class, $paragraphe1, $classP1, $image1, $classI1){
	echo '<div id='. $titre . '>'; 
	echo '<h3>' . $titre . '</h3>';
	echo '<div class="'.$class.'">';
	imageMode("$classI1","$image1");
	echoP("$classP1",'"'.$paragraphe1.'"');
	echo'</div><br></div>';
}

function articleTCt2P2CpICi($titre, $class, $paragraphe1, $paragraphe2, $classP1, $classP2, $image1, $classI1){
	echo '<div id='. $titre . '>'; 
	echo '<h3>' . $titre . '</h3>';
	echo '<div class="'.$class.'">';
	imageMode("$classI1","$image1");
	echoP("$classP1",'"'.$paragraphe1.'"');
	echo'</div>';
	echo '<div class="'.$class.'">';
	echoP("$classP2",'"'. $paragraphe2 . '"');
	echo'</div><br></div>';
}

function articleTCtPCp2I2Ci($titre, $class, $paragraphe1, $classP1, $image1, $image2, $classI1, $classI2){
	echo '<div id='. $titre . '>'; 
	echo '<h3>' . $titre . '</h3>';
	echo '<div class="'.$class.'">';
	imageMode("$classI1","$image1");
	echoP("$classP1",'"'.$paragraphe1.'"');
	imageMode("$classI2","$image2");
	echo'</div><br></div>';
}

function articleTCt2P2Cp($titre, $class, $paragraphe1, $paragraphe2, $classP1, $classP2){
	echo '<div id='. $titre . '>'; 
	echo '<h3>' . $titre . '</h3>';
	echo '<div class="'.$class.'">';
	echoP("$classP1",'"'.$paragraphe1.'"');
	echoP("$classP2",'"'. $paragraphe2 . '"');
	echo'</div><br></div>';
}

function articleTCtPCp($titre, $class, $paragraphe1, $classP1){
	echo '<div id='. $titre . '>'; 
	echo '<h3>' . $titre . '</h3>';
	echo '<div class="'.$class.'">';
	echoP("$classP1",'"'.$paragraphe1.'"');
	echo'</div></div>';
}

function article($articles){
	foreach($articles as $article){

		if($article["titre"]!=NULL AND $article["paragraphe1"]!=NULL AND $article["paragraphe2"]!=NULL AND $article["image1"]!=NULL AND $article["image2"]!=NULL){

			articleTCt2P2Cp2I2Ci($article["titre"],"articleBox", $article["paragraphe1"], $article["paragraphe2"], "", "", $article["image1"], $article["image2"], "articleBoxImageL", "articleBoxImageR" );
		}
		elseif($article["titre"]!=NULL AND $article["paragraphe1"]!=NULL AND $article["paragraphe2"]==NULL AND $article["image1"]!=NULL AND $article["image2"]==NULL){
			articleTCtPCpICi($article["titre"],"articleBox", $article["paragraphe1"], "", $article["image1"], "articleBoxImageL");
		}
		elseif($article["titre"]!=NULL AND $article["paragraphe1"]!=NULL AND $article["paragraphe2"]!=NULL AND $article["image1"]!=NULL AND $article["image2"]==NULL){
			articleTCt2P2CpICi($article["titre"],"articleBox", $article["paragraphe1"], $article["paragraphe2"],"","", $article["image1"], "articleBoxImageL");
		}
		elseif($article["titre"]!=NULL AND $article["paragraphe1"]!=NULL AND $article["paragraphe2"]==NULL AND $article["image1"]!=NULL AND $article["image2"]!=NULL){
			articleTCtPCp2I2Ci($article["titre"],"articleBox", $article["paragraphe1"], "articleText", $article["image1"], $article["image2"], "articleBoxImageL", "articleBoxImageR");
		}
		elseif($article["titre"]!=NULL AND $article["paragraphe1"]!=NULL AND $article["paragraphe2"]!=NULL AND $article["image1"]==NULL AND $article["image2"]==NULL){
			articleTCt2P2Cp($article["titre"],"articleBox", $article["paragraphe1"], $article["paragraphe2"], "","");	
		}
		elseif($article["titre"]!=NULL AND $article["paragraphe1"]!=NULL AND $article["paragraphe2"]==NULL AND $article["image1"]==NULL AND $article["image2"]==NULL){
			articleTCtPCp($article["titre"],"articleBox", $article["paragraphe1"], "", $article["image1"], $article["image2"], "articleBoxImageL", "articleBoxImageR" );	
		}	
	}	
}

function tableaux($tableaux){
	foreach ($tableaux as $tableau) {
		if($tableau["class"]!=NULL AND $tableau["nom"]!=NULL AND $tableau["description"]!=NULL ){
			echo '<tr>';
			echo '<td class="'.$tableau["class"].'">'.$tableau["nom"].'</td>';
			echo '<td>'.$tableau["description"].'</td>';
			echo '</tr>';
		}
		elseif($tableau["class"]==NULL AND $tableau["nom"]!=NULL AND $tableau["description"]!=NULL ){
			echo '<tr>';
			echo '<td>'.$tableau["nom"].'</td>';
			echo '<td>'.$tableau["description"].'</td>';
			echo '</tr>';
		}	
	}
}		

?>