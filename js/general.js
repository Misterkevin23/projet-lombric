var inscriptionCadre = $(".inscriptionCadre");
var connexionPanierCadre = $(".connexionPanierCadre");
var connexionCadre = $(".connexionCadre");
var inscrit = $(".inscrit");
var nonInscrit = $(".nonInscrit");
var inscritPanier = $(".inscritPanier"); 

var nickName= $("#nickName");
var email= $("#email");
var mdp= $('#password');

// fonction de géstion de l'affichage des different choix
//de connexion ou inscription dans le aside			
var inscriptionConnexionFade = function(){	
		inscriptionCadre.hide();
		connexionPanierCadre.hide();
		connexionCadre.show();
		inscrit.click(function(){
			inscriptionCadre.hide("slow");
			connexionCadre.show("slow");
			connexionPanierCadre.hide();
			inscrit.attr('checked','checked');
			nonInscrit.removeAttr('checked');
			inscritPanier.removeAttr('checked');

		})
		nonInscrit.click(function(){
			inscriptionCadre.show("slow");
			connexionCadre.hide("slow");
			connexionPanierCadre.hide();
			nonInscrit.attr('checked','checked');
			inscrit.removeAttr('checked');
			inscritPanier.removeAttr('checked');
		})
		inscritPanier.click(function(){
			connexionPanierCadre.show("slow");
			inscriptionCadre.hide("slow");
			connexionCadre.hide("slow");
			inscritPanier.attr('checked','checked');
			inscrit.removeAttr('checked');
			nonInscrit.removeAttr('checked');
		})
	}	

//fonction gerant les marges du site
var marginStart= function(){
	var subSubTitleMarginLeft= $("#menu ul").width();
	subSubTitleMarginLeft = subSubTitleMarginLeft + "px"
	$("#menu li ul ul").css("margin-left", subSubTitleMarginLeft);

	if($("aside").css("float")==="right")
	{
		var mainMargin= ($("main").width()-($("article").width()+$("aside").width()))/5; 
		marginExterne=(mainMargin*2) + "px";
		marginInterne= mainMargin + "px";	
		$("article").css("margin-left", marginExterne);
		$("aside").css("margin-right", marginExterne);
		$("article").css("margin-right", marginInterne);
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
}

// Recherche en cour--effet puce navigateur
	// Fonction initial spécifique -- A atendre a toute les puce
var puce= function(){
		$( "#menu .navLi:eq(3)" ).hover(
		function() {
		$("#menu .navLi:eq(3) h3 i").removeClass( "fa fa-plus-square-o" )
		$( "#menu .navLi:eq(3) h3 i").addClass( "fa fa-minus-square-o");
		// console.log("11111111")
		$("#menu .navLi:eq(3) .nav3").hover(
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
		$( "#menu .navLi:eq(3) h3 i").removeClass( "fa fa-minus-square-o")
		$( "#menu .navLi:eq(3) h3 i").addClass( "fa fa-plus-square-o" );
		// console.log("44444444")
		}
	);
}

//fonction inserant une classe au menu deroulant affin de palier
//l'inactivité de :hover(css) chez IE
sfHover = function() {
        var sfEls = document.getElementById("menu").getElementsByTagName("li");
        for (var i=0; i<sfEls.length; i++) {
                sfEls[i].onmouseover=function() {
                        this.className+=" sfhover";
                        // $("i").removeClass("fa fa-plus-square-o").addClass("fa fa-minus-square-o");
                }
                sfEls[i].onmouseout=function() {
                        this.className=this.className.replace(new RegExp(" sfhover\\b"), "");
                        // $("i").removeClass("fa fa-minus-square-o").addClass("fa fa-plus-square-o");
                }
        }
}

// ----------




$("document").ready(function(){
	marginStart();
    puce();
    inscriptionConnexionFade()

})

$("body").mousemove(function(){
	marginStart()
	$(".shopSold").fadeOut(3000).fadeIn(300).delay(3000);
	$(".shopSold p").fadeOut(3000).fadeIn(600).delay(3000);	 
})

if (window.attachEvent) window.attachEvent("onload", sfHover);

$(document).ready(function(){
	sfHover()
})	

