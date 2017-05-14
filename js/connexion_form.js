function connexion_form(){
	if ( document.getElementById("nickName").value=="") {
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

				
	var inscrptionConnexionFade = function(){	
		$(".inscriptionCadre").hide();
		$(".connexionCadre").show();
		$(".inscrit").click(function(){
			$(".inscriptionCadre").hide("slow");
			$(".connexionCadre").show("slow");
		})
		$(".nonInscrit").click(function(){
			$(".inscriptionCadre").show("slow");
			$(".connexionCadre").hide("slow");
		})
	}	


//code bouton ajout panier a tester quand PHP fais!!!
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

var marginStart= function(){
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

		$(".footerContner").each(function(){ 
			var footerContnerMargin= ($(".footerContner").height()-$(".footerText").height())/2;
			footerContnerMargin= footerContnerMargin + "px";	
			$(".footerText").css("margin-top", footerContnerMargin);
			$(".footerText").css("margin-bottom", footerContnerMargin);
		})

		var produitPresentationMargin= ($(".produit").width()-($(".produitPhoto").width()+$(".produitDescription").width()+$(".produitAction").width()+20))/6;
		produitPresentationMargin= produitPresentationMargin + "px";	
		$(".produitPhoto").css("margin-left", produitPresentationMargin);
		$(".produitPhoto").css("margin-right", produitPresentationMargin);
		$(".produitDescription").css("margin-left", produitPresentationMargin);
		$(".produitDescription").css("margin-right", produitPresentationMargin);	
		$(".produitAction").css("margin-left", produitPresentationMargin);
		$(".produitAction").css("margin-right", produitPresentationMargin);

	}

// Recherche en cour--effet puce navigateur
	// Fonction initial spécifique -- A atendre a toute les puce
var puce= function(){
		$( "#menu .navLi:eq(4)" ).hover(
		function() {
		$("#menu .navLi:eq(4) h3 i").removeClass( "fa fa-plus-square-o" )
		$( "#menu .navLi:eq(4) h3 i").addClass( "fa fa-minus-square-o");
		// console.log("11111111")
		$("#menu .navLi:eq(4) .nav3").hover(
			function(){
				$("#menu .nav3 h4 i").removeClass( "fa fa-plus-square-o" )
				$( "#menu .nav3 h4 i").addClass( "fa fa-minus-square-o");
				// console.log("222222")
			},function(){
				$( "#menu .nav3 h4 i").removeClass( "fa fa-minus-square-o")
				$( "#menu .nav3 h4 i").addClass( "fa fa-plus-square-o" );
				// console.log("3333333")
			}
		);
		// console.log("sdg")
		},function(){
		$( "#menu .navLi:eq(4) h3 i").removeClass( "fa fa-minus-square-o")
		$( "#menu .navLi:eq(4) h3 i").addClass( "fa fa-plus-square-o" );
		// console.log("44444444")
		}
	);
}
				
// ----------




$("document").ready(function(){
	marginStart();
    puce();
    inscrptionConnexionFade()

})

$("body").mousemove(function(){
	marginStart()
	$(".shopSold").fadeOut(3000).fadeIn(300).delay(3000);
	$(".shopSold p").fadeOut(3000).fadeIn(600).delay(3000);	 
})



	
// $("body").ready(function(){	
// 	$(".navLi").mouseover(function(){
// 		$("#menu .navLi h3 i").removeClass( "fa fa-plus-square-o" )
// 		$( "#menu .navLi h3 i").addClass( "fa fa-minus-square-o");
// 		console.log("11111111")
// 	})

// 	$("li.navLi").mouseout(function(){
// 		$( "#menu .navLi h3 i").removeClass( "fa fa-minus-square-o")
// 		$( "#menu .navLi h3 i").addClass( "fa fa-plus-square-o" );
// 		console.log("44444444")
// 	})

// 	$("li.navLi").mouseover(function(){
// 		$("#menu li li h4 i").removeClass( "fa fa-plus-square-o" )
// 		$( "#menu li li h4 i").addClass( "fa fa-minus-square-o");
// 		console.log("222222")
// 	})

// 	$("li.navLi").mouseout(function(){
// 		$( "#menu li li h4 i").removeClass( "fa fa-minus-square-o")
// 		$( "#menu li li h4 i").addClass( "fa fa-plus-square-o" );
// 		console.log("3333333")
// 	})
// })			

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
