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

				
$(":input").ready(function(){
	$(".inscription_cadre").hide();
	$(".connexion_cadre").show();
	$(".inscrit").click(function(){
		$(".inscription_cadre").hide();
		$(".connexion_cadre").show();
	})
	$(".non-inscrit").click(function(){
		$(".inscription_cadre").show();
		$(".connexion_cadre").hide();
	})

	$(".panier_ajout").click(function(){
		parseFloat($(".nbre_article").text())+1;

	// if($(".panier_ajout").attr("value")=="Ajouter au panier"){
	// 	$(".panier_ajout").attr("value","Annuler");
	// 	}
	})	
	// $("main").mousemove(function(){
	// 	(100*parseFloat($("article").css("margin-right")))/$("main").width();
	// })

	// $(".panier_ajout").click(function(){	
	// 	if($(".panier_ajout").attr("value")=="Annuler"){
	// 		$(".panier_ajout").attr("value","Ajouter au panier");
	// 	}
	// })	
})





	