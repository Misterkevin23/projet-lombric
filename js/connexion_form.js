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

				
$(document).ready(function(){
	$(".inscription_cadre").hide();
	$(".connexion_cadre").show();
	$(".inscrit").click(function(){
		$(".inscription_cadre").hide("slow");
		$(".connexion_cadre").show("slow");
	})
	$(".non-inscrit").click(function(){
		$(".inscription_cadre").show("slow");
		$(".connexion_cadre").hide("slow");
	})
})

//$(document).ready(function(){
	$(".panier_ajout").click(function(){
		
		$(".panier_ajout").attr("value" ,"Annuler");
		if($(".panier_ajout").val()=="Ajouter au panier"){ 
		parseFloat($(".nbre_article").text())+1;

		}
			
		else{
			$(".panier_ajout").attr("value","Ajouter au panier");
			parseFloat($(".nbre_article").text())-1;
		}
	})
//})


	// $("main").mousemove(function(){
	// 	(100*parseFloat($("article").css("margin-right")))/$("main").width();
	// })

	// $(".panier_ajout").click(function(){	
	// 	if($(".panier_ajout").attr("value")=="Annuler"){
	// 		$(".panier_ajout").attr("value","Ajouter au panier");
	// 	}
	// })
$(document).ready(function(){

		$("#menu ul li").hide()
		$("#menu ul ul").hide()
		$("#menu ul li").height("60px")
		$("#menu ul ul").css({"left": "188px", "top" : "-50px"})
		
		$("#menu li").mousemove(function(){
			$("#menu ul li").show()
		})
		$("#menu li").mouseout(function(){
			$("#menu ul li").hide()
		})
		$("#menu ul li").mousemove(function(){
			$("#menu ul ul").show()
		})
		$("#menu ul li").mouseout(function(){
			$("#menu ul ul").hide()
		})
})
		
		// $("#main li").mousemove(function(){
		// 	$("#menu ul li").show()
		// })
