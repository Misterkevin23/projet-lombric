// $("document").ready(function(){
// 	var nbreArticle=0;
// 	var panierElt = document.getElementById("panier");
// 	var panierValue = document.getElementById("panier").getAttribute("value");
// 	function clic() {
// 		if(panierValue =="Annuler"){
// 			nbreArticle--;
// 			document.getElementById("nbreArticle").textContent = nbreArticle;
// 			document.getElementById("panier").setAttribute("value","Ajouter au panier");
// 			console.log(panierValue);
// 		}
// 		else if(panierValue =="Ajouter au panier"){
// 			nbreArticle++;
// 			document.getElementById("nbreArticle").textContent = nbreArticle;
// 			document.getElementById("panier").setAttribute("value","Annuler");
// 			console.log(panierValue);
				
// 		}
// 	}	

// 	panierElt.addEventListener("click", clic);
		
// })	

function addpanier(button){
	var inputs 		= button.children('input');
	
	var nomProduit 		= inputs.eq(0).attr('name');
	var etatPanier 		= inputs.eq(0).val();
	var actionPanier	= inputs.eq(1).val();
	var nomIdPanier		= inputs.eq(3).attr('name');
	var id 				= inputs.eq(3).val();

	var select 		= button.children('input');
	var nomQuantite		= select.eq(0).attr('name');
	var quantite		= select.eq(0).val();

	values= {
		nomProduit: 	nomProduit,
		etatPanier: 	etatPanier,
		actionPanier: 	actionPanier,
		nomIdPanier: 	nomIdPanier,
		id: 			id,
		nomQuantite: 	nomQuantite,
		quantite: 		quantite
	};

	return values;
}

function addPanierAction(buttonTarget){
	buttonTarget.click(function(){
		var button = buttonTarget;

		var produit = addpanier(button);

		var url = 'http://localhost/projet_lombric/page/ajaxPanierReception.php';
		$.post(url, produit, function(data){
			console.log(data);
		});

		var etat=
			buttonTarget.children('input').eq(0).val();
		var action=
			buttonTarget.children('input').eq(1).val()	
		var nombre= parseFloat($('#nbreArticle').text());
		if(etat =='NULL' && action == 'Annuler')
		{
			buttonTarget.children('input').eq(0).attr('value','TRUE');
			buttonTarget.children('input').eq(1).attr('value','Ajouter au panier');
			var panierNbre = nombre-1;
			console.log('1111');
		}
		else
		{
			buttonTarget.children('input').eq(0).attr('value','NULL');
			buttonTarget.children('input').eq(1).attr('value','Annuler');
			var panierNbre = nombre+1;
			console.log('2222');
		}	
		document.getElementById("nbreArticle").textContent=panierNbre;

	})
}

for(var i=1; i<= $('.produit').length; i++)
{
var button=	$(".button"+i);
addPanierAction(button);

}