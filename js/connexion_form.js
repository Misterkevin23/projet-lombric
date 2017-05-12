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



// $(document).ready(function(){
// 	$(".panier_ajout").click(function(){
		
// 		$(".panier_ajout").attr("value" ,"Annuler");
// 		if($(".panier_ajout").val()=="Ajouter au panier"){ 
// 		parseFloat($(".nbre_article").text())+1;

// 		}
			
// 		else{
// 			$(".panier_ajout").attr("value","Ajouter au panier");
// 			parseFloat($(".nbre_article").text())-1;
// 		}
// 	})
// })

$("body").mousemove(function(){
	var subSubTitleMarginLeft= $("#menu ul").width();
		subSubTitleMarginLeft = subSubTitleMarginLeft + "px"
	$("#menu li ul ul").css("margin-left", subSubTitleMarginLeft);
	if($("aside").css("float")==="right"){
		var articleMarginRight= ($("main").width()-($("article").width()+$("aside").width()))/2;
		articleMarginRight= articleMarginRight + "px";	
		$("article").css("margin-right", articleMarginRight);
	}
	var headerHeight= $("section").height();
	headerHeight= headerHeight + "px";	
	$("header").css("height", headerHeight);

	var sectionTitreMargin= ($(".full").width()-($(".titre").width()+$(".logo1").width()))/4;
	sectionTitreMargin= sectionTitreMargin + "px";	
	$(".titre").css("margin-left", sectionTitreMargin);
	$(".titre").css("margin-right", sectionTitreMargin);
	$(".logo1").css("margin-left", sectionTitreMargin);
	$(".logo1").css("margin-right", sectionTitreMargin);

	var shopProduitMargin= ($(".shopSaison").width()-($(".shopProduit").width()*2))/4;
	shopProduitMargin= shopProduitMargin + "px";	
	$(".shopProduit").css("margin-left", shopProduitMargin);
	$(".shopProduit").css("margin-right", shopProduitMargin);

	var shopBaniereMargin= ($(".shopBaniere").width()-($(".shopBanierePhoto").width()*3))/6;
	shopBaniereMargin= shopBaniereMargin + "px";	
	$(".shopBanierePhoto").css("margin-left", shopBaniereMargin);
	$(".shopBanierePhoto").css("margin-right", shopBaniereMargin);

	var shoplivraisonMargin= ($(".shopLivraison").width()-($(".shopLivraisonPhoto").width()+$(".shopLivraisonChrono").width()))/4;
	shoplivraisonMargin= shoplivraisonMargin + "px";	
	$(".shopLivraisonPhoto").css("margin-left", shoplivraisonMargin);
	$(".shopLivraisonPhoto").css("margin-right", shoplivraisonMargin);
	$(".shopLivraisonChrono").css("margin-left", shoplivraisonMargin);
	$(".shopLivraisonChrono").css("margin-right", shoplivraisonMargin);

	var shoplivraisonTextMargin= ($(".shopLivraison").height()-$(".shopLivraisonText").height())/2;
	shoplivraisonTextMargin= shoplivraisonTextMargin + "px";	
	$(".shopLivraisonText").css("margin-top", shoplivraisonTextMargin);
	$(".shopLivraisonText").css("margin-bottum", shoplivraisonTextMargin);

	$(".shopSold").fadeOut(3000).fadeIn(300).delay(3000);
	$(".shopSold p").fadeOut(3000).fadeIn(600).delay(3000);	 
})



	// $("body").mousemove(function(){
	// 	(100*parseFloat($("article").css("margin-right")))/$("main").width();
	// 	var margin = (100*parseFloat($("#menu li ul ul").css("margin")))/$("main").width();
	// 	$("#menu li ul ul").css("margin","margin")
	// })

	




	// $(".panier_ajout").click(function(){	
	// 	if($(".panier_ajout").attr("value")=="Annuler"){
	// 		$(".panier_ajout").attr("value","Ajouter au panier");
	// 	}
	// })
// $(document).ready(function(){

// 		$("#menu ul li").hide()
// 		$("#menu ul ul").hide()
// 		$("#menu ul li").height("60px")
// 		$("#menu ul ul").css({"left": "188px", "top" : "-50px"})
		
// 		$("#menu li").mousemove(function(){
// 			$("#menu ul li").show()
// 		})
// 		$("#menu li").mouseout(function(){
// 			$("#menu ul li").hide()
// 		})
// 		$("#menu ul li").mousemove(function(){
// 			$("#menu ul ul").show()
// 		})
// 		$("#menu ul li").mouseout(function(){
// 			$("#menu ul ul").hide()
// 		})
// })
		
		// $("#main li").mousemove(function(){
		// 	$("#menu ul li").show()
		// })
