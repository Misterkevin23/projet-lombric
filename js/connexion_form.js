function connexion_form(){
	if ( document.getElementById("Nickname").value=="") {
		alert("Attention ! \n Veuillez saisir un pseudo " )
		document.connexion.Nickname.focus();
		document.connexion.Nickname.style.backgroundColor = "red";

		return false;
	}

	if (document.getElementById("password").value =="") {
		alert("Attention ! \n Veuillez entrer un mot de passe " )
		document.connexion.password.focus();
		document.connexion.password.style.backgroundColor = "red";

		return false;
	}
}


$(document).ready(function() {
		$(".non-inscrit").click(function(){
			$(".inscription_cadre").show();
			$(".connexion_cadre").hide();

		});
		$(".inscrit").click(function(){
			$(".connexion_cadre").show();
			$(".inscription_cadre").hide();
		});	
	})