//***********************************************************************
//VARIABLE
//***********************************************************************



var nickName= $(".nickname");
var email= $(".email");
var checkmail= $('#emailCheck');
var mdp= $('.password');
var checkmdp= $('#passwordCheck');
var form=$('form');
var prenom = $('#firstName');
var nom= $('#lastName');
var numeros = $('#numeros');
var nomDeRue= $('#roadName');
var codePostal= $('#postcode');
var ville = $('#ville');
var pays = $('#pays');
var tel1 = $('#phonePortable'); 
var locataire = $('#locataire');
var proprietaire = $('#proprietaire');
var jardin = $('#jardin');
var terrasse = $('#terrasse');
var deux = $('#deux');
var aucun = $('#aucun');
var male = $('#M');
var female = $('#Mlle');
var woman = $('#Mme');
var societe = $('#societe');


var elementManquant="";
var elementManquant1="";
var elementManquant2="";
var elementManquant3="";
var elementManquant4="";
var elementManquant5="";
var elementManquant6="";
var elementManquant7="";
var elementManquant8="";
var elementManquant9="";
var elementManquant10="";
var elementManquant11="";
var elementManquant12="";
var elementManquant13="";
var elementManquant14="";


var checkedI=$(".inscrit").attr('checked');
var checkedN=$(".nonInscrit").attr('checked');
var checkedP=$(".inscritPanier").attr('checked');

var validInscriptionButtun=$("#inscription");
var connexionUserButton=$('form').children('div.button').eq(0);
var connexionInscriptionFormButton=$('form').children('div.button').eq(1);
var connexionPanierClientButton=$('form').children('div.button').eq(2);



//***************************************************************************
//-->FONCTION
//***************************************************************************

//Fonction gerant les direction des differents formulaire******************




function inscriptionGood(){

	validInscriptionButtun.removeAttr('disabled');
	document.forms["inscription"].action="confirmationInscription.php";
}

function inscriptionNoGood(){

	validInscriptionButtun.attr('disabled','""');
	document.forms["inscription"].action="#";

}

function connexionGood(){
 connexionUserButton.children('input').removeAttr('disabled');
 $('.aside form').eq(0).attr('action','connexion.php');	
}

function connexionNoGood(){
 connexionUserButton.children('input').attr('disabled','""');
 $('.aside form').eq(0).attr('action','#1');	
}

function preInscripionGood(){
 connexionInscriptionFormButton.children('input').removeAttr('disabled');
 $('.aside form').eq(1).attr('action','inscriptionForm.php');	
}

function preInscriptionNoGood(){
 connexionInscriptionFormButton.children('input').attr('disabled','""');
 $('.aside form').eq(1).attr('action','#2');	
}

function cliendGood(){
 connexionPanierClientButton.children('input').removeAttr('disabled');
 $('.aside form').eq(2).attr('action','connexion.php');	
}

function cliendNoGood(){
console.log('riri');
 connexionPanierClientButton.children('input').attr('disabled','""');
 $('.aside form').eq(2).attr('action','#3');	
}



//Fonction gérant les actions a effectuer en cas d'input incorrect********************
function emailControl(){
	if (email.val() == '')
	{
		console.log('toto0');
		elementManquant1="-votre email\n";
		if(checkedN == "checked")
		{
			console.log('toto1');
			preInscriptionNoGood();
		}
		else if (checkedP == "checked")
		{
			console.log('toto2');
			cliendNoGood();
		}
		else
		{
			console.log('toto3');	
			inscriptionNoGood();
		}
	}
	else{elementManquant1="";}
}

function mdpControl(){
	if (mdp.val() == '')
	{
		console.log('titi1');
		elementManquant2="-votre mdp\n";
		if(checkedN == "checked")
		{
			console.log('titi2');
			preInscriptionNoGood();
		}
		else if (checkedI == "checked")
		{
			console.log('titi3');
			connexionNoGood();	
		}	
		else if (checkedP == "checked")
		{
			console.log('titi4');
			cliendNoGood();
		}
		else
		{	
			inscriptionNoGood();
		}
	}
	else{elementManquant2="";}
}

function nickNameControl(){
	if (nickName.val() == '')
	{
		console.log('cool0');
		elementManquant3="-votre pseudo\n";
		if(checkedN == "checked")
		{
			preInscriptionNoGood();
			console.log('cool1');
		}
		else if (checkedI == "checked")
		{
			connexionNoGood();
			console.log('cool2');	
		}	
		else
		{	
			inscriptionNoGood();
			console.log('cool3');
		}
	}
	else{elementManquant3="";}
}

function civiliteCheck(){	
	if (!male && !female && !woman && !societe)
	{
		elementManquant4="-votre civilité\n";
		inscriptionNoGood();
	}
	else{elementManquant4="";}
}

function prenomCheck(){	
	if (prenom.val() =="")
	{
		elementManquant5="-votre prenom\n";
		inscriptionNoGood();
	}
	else{elementManquant5="";}
}

function nomCheck(){	
	if (nom.val() =="")
	{
		elementManquant6="-votre nom\n";
		inscriptionNoGood();
	}
	else{elementManquant6="";}
}

function numerosCheck(){	
	if (numeros.val() =="")
	{
		elementManquant7="-votre numeros\n";
		inscriptionNoGood();
	}
	else{elementManquant7="";}
}

function nomDeRueCheck(){	
	if (nomDeRue.val() =="")
	{
		elementManquant8="-votre nom de rue\n";
		inscriptionNoGood();
	}
	else{elementManquant8="";}
}

function codePostalCheck(){	
	if (codePostal.val() =="")
	{
		elementManquant9="-votre code Postal\n";
		inscriptionNoGood();
	}
	else{elementManquant9="";}
}

function villeCheck(){	
	if (ville.val() =="")
	{
		elementManquant10="-votre Ville\n";
		inscriptionNoGood();
	}
	else{elementManquant10="";}
}

function paysCheck(){	
	if (pays.val() =="")
	{
		elementManquant11="-votre pays\n";
		inscriptionNoGood();
	}
	else{elementManquant11="";}
}

function tel1Check(){	
	if (tel1.val() =="")
	{
		elementManquant12="-votre Telephone\n";
		inscriptionNoGood();
	}
	else{elementManquant12="";}
}

function situationCheck(){	
	if (!locataire && !proprietaire)
	{
		elementManquant13="-votre situation d'hebergement\n";
		inscriptionNoGood();
	}
	else{elementManquant13="";}
}

function exterieurCheck(){
	if (!jardin && !terrasse && !deux && !aucun)
	{
		elementManquant14="-votre situation urbaine\n";
		inscriptionNoGood();
	}
	else{elementManquant14="";}	
}

//fonction d'établissement du message d'erreur
function alertMessager(){
	elementManquant="Veuillez Renseigner les champs suivant:\n";
	elementManquant+=elementManquant1;
	elementManquant+=elementManquant2;
	elementManquant+=elementManquant3;
	elementManquant+=elementManquant4;
	elementManquant+=elementManquant5;
	elementManquant+=elementManquant6;
	elementManquant+=elementManquant7;
	elementManquant+=elementManquant8;
	elementManquant+=elementManquant9;
	elementManquant+=elementManquant10;
	elementManquant+=elementManquant11;
	elementManquant+=elementManquant12;
	elementManquant+=elementManquant13;
	elementManquant+=elementManquant14;

	return elementManquant;
}

//fonction d'affichage du message d'erreur
function tellAlertMessager(button){
	if(button.children('input').attr('disabled')=='disabled')
	{
		console.log('cool555555555555555555555555555');
		 button.on('hover', function(){
		 	console.log('cool666666666666666666666666');
			alert(alertMessager());
		 });
	}
}	

//fonction affectant les input control en fonction des type de formulaire
//à controler
//formulaire connexion user
function connexionControl(){
	connexionGood();
	mdpControl();
	nickNameControl();
	console.log('ok6');
}

//formulaire connexion panier client
function connexionPanierControl(){
	console.log('tata');
	cliendGood();
	mdpControl();
	emailControl();
}

//formulaire connexion au formlaire inscription
function connexionInscriptionFormControl(){
	preInscripionGood();
	mdpControl();
	nickNameControl();
	emailControl();
}

// formlaire inscription
function verificationInscription(){
	inscriptionGood();
	mdpControl();
	nickNameControl();
	emailControl();
	civiliteCheck();
	prenomCheck();
	nomCheck();
	numerosCheck();
	nomDeRueCheck();
	codePostalCheck();
	villeCheck();
	paysCheck();
	tel1Check();
	situationCheck();
	exterieurCheck();
}


//function d'aiguillage des differents
//fonction de surveillance des formulaire
//les cache des variable et fonctions seront remis à jour
//sous conditions d'ecouteur
function verification(){
	checkedI=$(".inscrit").attr('checked');
	checkedN=$(".nonInscrit").attr('checked');
	checkedP=$(".inscritPanier").attr('checked');
	nickName= $(".nickname");
	email= $(".email");
	mdp= $('.password');
	
	console.log('ok1');
	if($('form').attr('name')=='inscription')
	{
		checkmdp= $('#passwordCheck');
		checkmail= $('#emailCheck');
		prenom = $("#firstName");
		nom= $("#lastName");
		numeros = $("#numeros");
		nomDeRue= $("#roadName");
		codePostal= $("#postcode");
		ville = $("#ville");
		pays = $("#pays");
		tel1 = $("#phonePortable"); 
		locataire = $("#locataire");
		proprietaire = $("#proprietaire");
		jardin = $("#jardin");
		terrasse = $("#terrasse");
		deux = $("#deux");
		aucun = $("#aucun");
		male = $("#M");
		female = $("#Mlle");
		woman = $("#Mme");
		societe = $("#societe");
		console.log('ok2');
		verificationInscription();
		tellAlertMessager(validInscriptionButtun);

	}
	else if(form.eq(2).attr("name")=='connexion' || form.eq(1).attr("name")=='preinscription')
	{
		if(checkedI == "checked")
		{
			nickName= $(".nickname").eq(0);
			mdp= $('.password').eq(0);
			console.log('ok3');
			connexionControl();
			tellAlertMessager(connexionUserButton);
		}
		else if(checkedN == "checked")
		{
			nickName= $(".nickname").eq(1);
			email= $(".email").eq(0);
			mdp= $('.password').eq(1);
			console.log('ok4');
			connexionInscriptionFormControl();
			tellAlertMessager(connexionInscriptionFormButton);
		}
		else if(checkedP == "checked")
		{
			email= $(".email").eq(1);
			mdp= $('.password').eq(2);
			console.log('ok5');
			connexionPanierControl();
			tellAlertMessager(connexionPanierClientButton);	
		}	
	}
}



//**************************************************************************
//ACTION
//***************************************************************************





$('form').on('mousemove keyup', function(){
	verification();
});	




















	// $("#inscription").mousemove(function(){
	// 	if(!male || !female || !woman || !societe 
	// 		|| prenom =="" || nom=="" || numeros=="" 
	// 		|| codePostal =="" || ville =="" || pays =="" 
	// 		|| !locataire || !proprietaire 
	// 		|| !jardin || !terrasse || !deux || !aucun)
	// 	{
	// 	elementManquant="Les champ suivant ne sont pas rempli\n";
	// 	champManquant();
	// 	alert(elementManquant);
	// 	elementManquant="";	
	// 	}
	// 	else
	// 	{
	// 		document.getElementById("inscription").removeAttribute('disabled');	
	// 	}
	// })

	// if ( document.getElementById("nickName").value=="")
	// {
	// 	alert("Attention ! \n Veuillez saisir un pseudo ");
	// 	document.inscription.Nickname.focus();
	// 	document.inscription.Nickname.style.backgroundColor = "red";

	// 	return false;
	// }

	// if (document.getElementById("password").value =="")
	// {
	// 	alert("Attention ! \n Veuillez entrer un mot de passe ");
	// 	document.inscription.password.focus();
	// 	document.inscription.password.style.backgroundColor = "red";

	// 	return false;
	// }


		

	// var mobile = /^(01|02|03|04|05|06|07|08|09|0033|\+33)[0-9]{8}/;
	// if (mobile.test(document.getElementById("phonePortable").value)){
	// 	return true;
	// }

	// else{
	// 	alert("Attention! \n Veuillez entrer un numeros de téléphone valide")
	// 	document.inscription.phone_portable.focus();
	// 	document.inscription.phone_portable.style.backgroundColor = "red";

	// 	return false;
	// }

	