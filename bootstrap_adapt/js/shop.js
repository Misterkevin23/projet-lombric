//***********************************************************************
//VARIABLE
//***********************************************************************

var urlBase='http://localhost/projet_lombric/bootstrap_adapt/';
var panierUserArray=null;
var annexeProduitArray={};



var target1= $('#theme1 .panierProduit');
var theme1= '#theme1 .supprimer';
var id1Ni= $("#nombre1");
var id1Pi= $("#sousTotal1");
var target2= $('#theme2 .panierProduit');
var theme2='#theme2 .supprimer';
var id2Ni= $("#nombre2");
var id2Pi= $("#sousTotal2");
var activation=null;
var express= $('.panierLivraison').eq(1).children('input');
var expressPrice=parseInt(express.attr('value'));
var colissimo= $('.panierLivraison').eq(0).children('input');
var colissimoPrice= parseInt(colissimo.attr('value'));

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
			buttonTarget.children('p')
				.text('Activer le panier');	
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
					buttonTarget.children('p')
						.text('Annuler');
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
					buttonTarget.children('p')
						.text('Ajouter au panier');	
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

function hideButton(j, i){
	if(activation==true)
	{
	$('.produit').children('.produitAction').children('form').eq(i).hide();
	$('#MainAnnexe'+j+' form').hide()
	}
}

//requete ajax de recuperation du panier
function getPanier(buttonTarget){
	console.log('Requête ajax');
	var url = urlBase + 'page/ajaxPanierUser.php';
	var req = new XMLHttpRequest(); 
	req.open('GET', url, false);
	req.send(null);

	if (req.status==200){
		var panierUser = req.responseText;
		panierUserArray= JSON.parse(panierUser);
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
	var nombre= parseFloat($('#nbreArticle').text());
	var nombreI= parseFloat(buttonTarget.next().eq(0).val());
	if(etat =='NULL' && action == 'Annuler')
	{
		buttonTarget.children('input')
			.eq(0).attr('value','TRUE');
		buttonTarget.children('input')
			.eq(1).attr('value','Ajouter au panier');
		buttonTarget.children('p')
				.text('Ajouter au panier');		
		var panierNbre = nombre-nombreI;
		buttonTarget.next().eq(0).attr('value', selected); 
		buttonTarget.next().eq(0).show('slow');
	}
	else if(etat =='TRUE' && action == 'Ajouter au panier')
	{
		buttonTarget.children('input')
			.eq(0).attr('value','NULL');
		buttonTarget.children('p')
				.text('Annuler');	
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
		if(panierUserArray[produitList]!=false)
		{
			buttonTarget.click(function(){
				var button = buttonTarget;

				var produit = processPanier(button);

				var url = urlBase + 'page/ajaxPanierReception.php';
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

//Fonction de mise a jour du total global du panier
function dataTotalCalcul(express, colissimo){
	var nombre1=parseInt($('#nombre1').text());
	var nombre2=parseInt($('#nombre2').text());
	var prix1= parseInt($("#sousTotal1").text());
	var prix2= parseInt($("#sousTotal2").text());
	var frais = parseInt($('#fraisLivraison').text())
	var livraison=0;

	var nombreTotal=nombre1+nombre2;
	var prixTotal=prix1+prix2;

	if(colissimo.attr('checked')=='checked'
		|| express.attr('checked')=='checked')
	{
		livraison=frais;
	}
	
	console.log(livraison);
	var prixTTC=((prixTotal*19.6)/100)+livraison+prixTotal;
	console.log(nombreTotal);
	$('.panierTotal')
		.eq(0).text('NOMBRE D\'ARTICLE : '+ nombreTotal);
	$('.panierTotal')
		.eq(1).html('Total de vos articles hors frais de livraison: '+prixTotal+' <i class="fa fa-eur" aria-hidden="true"></i>');
	$('.panierTotal')
		.eq(3).html('Total de votre commande: '+prixTTC+ '<i class="fa fa-eur" aria-hidden="true"></i>');
}		

//fonction du choix de mode de livraison avec
//appel de la fonction de mise a jour du total global du panier
function selectLivraison(buttonTarget, price, express, colissimo){
	buttonTarget.on('click', function(){
		$('.panierLivraison').children('input').removeAttr('checked');
		buttonTarget.attr('checked','');
		$('#panierForm .button input').removeAttr('disabled');
		$('#panierForm .button input').eq(0).attr('value','Payer');
		$('#fraisLivraison').text(price);
		$('#panierForm').attr('action','paiement_recapitulatif.php');
		dataTotalCalcul(express, colissimo);
	});	
}

//fonction gerant l'activation ou non du formulaire dependant
//du choix de livraison
function livraisonPrice(express, colissimo){
	
	$('#panierForm .button input').attr('disabled','');
	$('#panierForm .button input').eq(0).attr('value','Veuillez choisir votre mode de livraison');
	$('#panierForm').attr('action','#');
	selectLivraison(express, expressPrice, express, colissimo);
	selectLivraison(colissimo, colissimoPrice, express, colissimo);
}

//Fonction de mise a jour du total global du panier
function DataTotalPanier(buttonTarget, express, colissimo){
	
	buttonTarget.click(function(){
		dataTotalCalcul(express, colissimo)
	});	
}

//Fonction gerant les animation panier 
//( ajout/suppresion de produit --> sous total et zone users)
//(supression de la div produit lors du click supprimer)
function updatePanier(target, theme, idNi, idPi, express, colissimo){
	for(var i=1; i<= target.length; i++)
	{
		button= $(theme+i);
		processPanierAction(button);
		removePanier(button);
		updataPanierNumberPrice(button, idNi, idPi);
		DataTotalPanier(button, express, colissimo);
	}
}

//Fonction contruction annexe produit
function produitMainAnnexe(annexeProduitArray){
	var mainAnnexe='';
	mainAnnexe+='<div class="row"><div class="col-lg-3 col-sm-3">';
	mainAnnexe+='<img style="border: 3px solid grey; width:100%; max-width:100%" src="'+annexeProduitArray[0]['lien']+'">';
	mainAnnexe+='<img style="width:75px" src="'+annexeProduitArray[0]['lien2']+'">';
	mainAnnexe+='<img style="width:75px" src="'+annexeProduitArray[0]['lien3']+'">';
	mainAnnexe+='</div><div class="col-lg-1 col-sm-1">';
	mainAnnexe+='<img style="width:42px" src="'+annexeProduitArray[0]['lien3']+'">';
	mainAnnexe+='</div><div class="col-lg-7 col-sm-7"><h3>'+annexeProduitArray[0]['lien3']+'</h3>';
	mainAnnexe+='<p style="box-shadow: 10px 10px 5px #656565">'+annexeProduitArray[0]['resume']+'</p>';
	mainAnnexe+='<p class="produitPrix">'+annexeProduitArray[0]['prix']+'<i class="fa fa-eur" aria-hidden="true"></i></p>';
	mainAnnexe+='</div><div class="col-lg-1 col-sm-1">';
	mainAnnexe+='<img style="width:42px" src="'+annexeProduitArray[0]['lien2']+'">';
	return mainAnnexe;
}

//Fonction contruction annexe produit
function produit1Annexe(annexeProduitArray){
	var annexe1='';
	annexe1+='<div style="border: 3px solid green" class="row">';
	annexe1+='<ul class="col-lg-11 col-sm-11">';
	annexe1+='<li class="col-lg-offset-4 col-lg-7 col-sm-offset-4 col-sm-7">Dimension:'+annexeProduitArray[0]['dimension']+'</li>';
	annexe1+='<li class="col-lg-offset-4 col-lg-7 col-sm-offset-4 col-sm-7">Provenance:'+annexeProduitArray[0]['provenance']+'</li>';
	annexe1+='<li class="col-lg-offset-4 col-lg-7 col-sm-offset-4 col-sm-7">Cible:'+annexeProduitArray[0]['cible']+'</li>';
	annexe1+='<li class="col-lg-offset-4 col-lg-7 col-sm-offset-4 col-sm-7">Contenance:'+annexeProduitArray[0]['contenance']+'</li>';
	annexe1+='<li class="col-lg-offset-4 col-lg-7 col-sm-offset-4 col-sm-7">Materiel:'+annexeProduitArray[0]['materiel']+'</li></ul>';
	annexe1+='</div><br>';
	return annexe1;
}

//Fonction contruction annexe produit
function produit3Annexe(annexeProduitArray){
	var annexe3='';
	annexe3+='<div style="border: 3px solid green" class="row">';
	annexe3+='<p class="col-lg-11 col-sm-11" style="box-shadow: 10px 10px 5px #656565">'+annexeProduitArray[0]['contenu']+'</p>';
	annexe3+='</div>';
	return annexe3; 
}

//Requete ajax pour obtention des donnée annexe
function getProduitAnnexe(id){
	console.log('Requête ajax');
	var url = urlBase + 'page/ajaxProduit.php?id='+id;
	var req = new XMLHttpRequest(); 
	req.open('GET', url, false);
	req.send(null);

	if (req.status==200){
		var annexeProduit = req.responseText;
		annexeProduitArray= JSON.parse(annexeProduit);
		console.log(annexeProduitArray);
		console.log(id);
		$('#MainAnnexe'+annexeProduitArray[0]['id']).prepend(produitMainAnnexe(annexeProduitArray));
		$('#3annexe'+annexeProduitArray[0]['id']).prepend(produit1Annexe(annexeProduitArray));
		$('#3annexe'+annexeProduitArray[0]['id']).append(produit3Annexe(annexeProduitArray));
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
var j=0;
for(var i=1; i<= $('.container-fluid').length; i++)
{
	var button=	$(".button"+i);
	getPanier(button);
	hideButton(i,j);
	j++;
}
var z =0;
for(var i=1; i<= $('.container-fluid').length; i++)
{
	var button=	$(".button"+i);
	var nameProduit= button.children('input').eq(0).attr('name');
	var quantiteName = button.next().eq(0).attr('name');
	var strId=$('.produit .produitAction').children('div').children('p').eq(z).attr('value')
	var id=parseInt(strId);
	processPanierAction(button);
	
	var button2=$("#annexe"+id);
	button2.on('click',function(){
	getProduitAnnexe(id);
	console.log(button2);
	console.log(id);
	});
	console.log(button2);
	console.log(id);
	z++;
}

livraisonPrice(express, colissimo);


updatePanier(target1, theme1, id1Ni, id1Pi, express, colissimo);
updatePanier(target2, theme2, id2Ni, id2Pi, express, colissimo);

// $('#annexe2').on('click',function(){
// 	getProduitAnnexe(2);
	
// 	});
	


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

