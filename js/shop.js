//***********************************************************************
//VARIABLE
//***********************************************************************

var panierUserArray=null;
var target1= $('#theme1 .panierProduit');
var theme1= '#theme1 .supprimer';
var id1Ni= $("#nombre1");
var id1Pi= $("#sousTotal1");
var target2= $('#theme2 .panierProduit');
var theme2='#theme2 .supprimer';
var id2Ni= $("#nombre2");
var id2Pi= $("#sousTotal2");
var activation=null;

//***************************************************************************
//-->FONCTION
//***************************************************************************

//mise a jour des bouton ajouter et annuler
//à l'initialisation de la page
function updatePanierButton(buttonTarget){
	var nomProduit=
		buttonTarget.children('input').eq(0).attr('name');
	var etat=
		buttonTarget.children('input').eq(0).val();
	
	var select 			= buttonTarget.next();
	var nomQuantite		= select.eq(0).attr('name');
	var quantite		= select.eq(0).val();	
	
	for(produitList in panierUserArray)
	{
		if(panierUserArray[produitList]==false)
		{
			buttonTarget.children('input')
				.eq(0).attr('value','NULL');
			buttonTarget.children('input')
				.eq(1).attr('value','Activer le panier');
			select.eq(0).hide('slow');
			activation=false;
		}
		else
		{	
			activation=true;
			if(nomProduit== produitList)
			{
				console.log(produitList);
				console.log(panierUserArray[produitList]);
				if(panierUserArray[produitList] =='TRUE')
				{
					buttonTarget.children('input')
						.eq(0).attr('value','NULL');
					buttonTarget.children('input')
						.eq(1).attr('value','Annuler');
					select.eq(0).hide('slow');
					// buttonTarget.children('div')
					// 	.children('div').children('select')
					// 	.hide();
				}
				else
				{
					buttonTarget.children('input')
						.eq(0).attr('value','TRUE');
					buttonTarget.children('input')
						.eq(1).attr('value','Ajouter au panier');
					select.eq(0).show('slow');	
				}
			}
			if(produitList==nomQuantite && panierUserArray[produitList]!=null)
			{
				select.eq(0).attr('value',panierUserArray[produitList]);
			}
		}	
	}
}

//requete ajax de recuperation du panier
function getPanier(buttonTarget){
	console.log('Requête ajax');
	var url = 'http://localhost/projet_lombric/page/ajaxPanierUser.php';
	var req = new XMLHttpRequest(); 
	req.open('GET', url, false);
	req.send(null);

	if (req.status==200){
		var panierUser = req.responseText;
		panierUserArray= JSON.parse(panierUser);
		console.log(panierUserArray);
		updatePanierButton(buttonTarget);
	}
}

//Fonction d'incrementation du nombre de produit dans le panier et modification
//de l'action effectué sur le panier (Ajout ou supression de produit)
function actionPanier(buttonTarget){
	var etat=
		buttonTarget.children('input').eq(0).val();
	var action=
		buttonTarget.children('input').eq(1).val();
	
	var selected= buttonTarget.next().eq(0).val();
	console.log(selected);		
	var nombre= parseFloat($('#nbreArticle').text());
	var nombreI= parseFloat(buttonTarget.next().eq(0).val());
	if(etat =='NULL' && action == 'Annuler')
	{
		buttonTarget.children('input')
			.eq(0).attr('value','TRUE');
		buttonTarget.children('input')
			.eq(1).attr('value','Ajouter au panier');	
		var panierNbre = nombre-nombreI;
		buttonTarget.next().eq(0).attr('value', selected); 
		buttonTarget.next().eq(0).show('slow');
	}
	else if(etat =='TRUE' && action == 'Ajouter au panier')
	{
		buttonTarget.children('input')
			.eq(0).attr('value','NULL');
		buttonTarget.children('input')
			.eq(1).attr('value','Annuler');
		var panierNbre = nombre+nombreI;
		buttonTarget.next().eq(0).attr('value', selected);
		buttonTarget.next().eq(0).hide('slow');
	}
	else if(etat =='NULL' && action == 'Supprimer')
	{
		var panierNbre = nombre-nombreI;
	}	
	document.getElementById("nbreArticle").textContent=panierNbre;
}

//Fonction de ciblage des donnée a envoyer en requéte ajax pour
//l'ajout des donnée en MySql par PHP
function processPanier(button){
	var inputs 		= button.children('input');
	
	var nomProduit 		= inputs.eq(0).attr('name');
	var etatPanier 		= inputs.eq(0).val();
	var actionPanier	= inputs.eq(1).val();
	var nomIdPanier		= inputs.eq(2).attr('name');
	var id 				= inputs.eq(2).val();

	var select 			= button.next();
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

//Fonction de ciblage du bouton ajout ou suppression panier
//déclenchant la requete AJAX
function processPanierAction(buttonTarget){
	if(activation==true)
	{
		console.log('111');
		console.log(panierUserArray[produitList]);
		if(panierUserArray[produitList]!=false)
		{
			buttonTarget.click(function(){
				var button = buttonTarget;

				var produit = processPanier(button);

				var url = 'http://localhost/projet_lombric/page/ajaxPanierReception.php';
				$.post(url, produit, function(data){
					console.log(data);

				});
				actionPanier(buttonTarget);
			})
		}
	}		
}

//Supprime la div produit en fonction du bouton Supprimer
//du panier
function removePanier(buttonTarget){
	var parent= buttonTarget.parent();
	buttonTarget.click(function(){
		buttonTarget.parent().remove();
	});	
}

//fonction gerant la mise a jour fictif des sous class du panier
//nombre produit et prix
function updataPanierNumberPrice(buttonTarget, idNi, idPi){
	buttonTarget.click(function(){	
		var nomProduit=
			buttonTarget.children('input').eq(0).attr('name');
		var etat=
			buttonTarget.children('input').eq(0).val();
		var prix=parseInt(buttonTarget.next().next().text());
		var nombreI= parseInt(idNi.text());
		var prixI= parseInt(idPi.text());
		var nombreTotal=0;
		var prixTotal= 0;
		for(produitList in panierUserArray)
		{
			if(nomProduit== produitList 
				&& panierUserArray[produitList] =='TRUE')
			{
				var nbre=1
				for(produitquantite in panierUserArray)
				{	
					var quantite= 'qte_'+produitList;
					if( quantite == produitquantite)
					{
						nbre=parseInt(panierUserArray[produitquantite]);
						nombreTotal+=parseInt(panierUserArray[produitquantite]);
						prixTotal+=nbre*prix;
					}
				}	
			}
		}	
		var nombreRestant=nombreI-nombreTotal;
		var prixRestant=prixI-prixTotal;

		idNi.text(nombreRestant);
		idPi.text(prixRestant);
	});
}

function DataTotalPanier(buttonTarget){
	buttonTarget.click(function(){
		console.log($('#nombre1').text());
		var nombre1=parseInt($('#nombre1').text());
		var nombre2=parseInt($('#nombre2').text());
		var prix1= parseInt($("#sousTotal1").text());
		var prix2= parseInt($("#sousTotal2").text());

		var nombreTotal=nombre1+nombre2;
		var prixTotal=prix1+prix2;
		var prixTTC=(prixTotal*19.6)/100;
		console.log(nombreTotal);
		$('.panierTotal')
			.eq(0).text('NOMBRE D\'ARTICLE : '+ nombreTotal);
		$('.panierTotal')
			.eq(1).html('<p class="panierTotal">Total de vos articles hors frais de livraison: '+prixTotal+' <i class="fa fa-eur" aria-hidden="true"></i></p>');
		$('.panierTotal')
			.eq(4).html('<p class="panierTotal">Total de votre commande: '+prixTTC+ '<i class="fa fa-eur" aria-hidden="true"></i></p>');
	});	
}

//Fonction gerant les animation panier 
//( ajout/suppresion de produit --> sous total et zone users)
//(supression de la div produit lors du click supprimer)
function updatePanier(target, theme, idNi, idPi){
	for(var i=1; i<= target.length; i++)
	{
		button= $(theme+i);
		processPanierAction(button);
		removePanier(button);
		updataPanierNumberPrice(button, idNi, idPi);
		DataTotalPanier(button);
	}
}




// function processPanierQuantiteAction(buttonTarget){
// 	var labels			=buttonTarget.children('label');
// 	var button2			= labels.eq(0).val();
// 	button2.on('change', function(){
// 		var button = buttonTarget;

// 		var produit = processPanierQuantite(button);
// 		var url = 'http://localhost/projet_lombric/page/ajaxPanierReception.php';
// 		$.post(url, produit, function(data){
// 			console.log(data);
// 		});
// 		actionPanier(buttonTarget);
// 	})
// }

function countPanier(){
	Object.keys(panierUserArray).length
}








//**************************************************************************
//ACTION
//***************************************************************************

//Boucle affectant l'action du bouton ajout/suppression pour chaque article

for(var i=1; i<= $('.produit').length; i++)
{
	var button=	$(".button"+i);
	getPanier(button);	
}

for(var i=1; i<= $('.produit').length; i++)
{
	var button=	$(".button"+i);
	var nameProduit= button.children('input').eq(0).attr('name');
	var quantiteName = button.next().eq(0).attr('name');

	processPanierAction(button);

}

updatePanier(target1, theme1, id1Ni, id1Pi);
updatePanier(target2, theme2, id2Ni, id2Pi);

$('form').on('change', function(){
console.log('1111');
DataTotalPanier();
});

// id2Ni.on('change', function(){
// console.log('2222');
// DataTotalPanier();
// });

// for(var i=1; i<= $('#theme2 .panierProduit').length; i++)
// {
// 	var button=	$("#theme2 .supprimer"+i);
// 	var nameProduit= button.children('input').eq(0).attr('name');
// 	var quantiteName = button.next().eq(0).attr('name');
	
// 	processPanierAction(button);
// 	removePanier(button);
// 	// processPanierQuantiteAction(button);
// }


