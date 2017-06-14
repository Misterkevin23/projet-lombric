function emailCheck(){	
	$("#emailCheck").keyup(function(){
		if (document.getElementById("emailCheck").value 
			!= document.getElementById("email").value )
		{
			document.inscription.emailCheck.focus();
			document.inscription.emailCheck.style.backgroundColor = "red";
			document.getElementById("inscription").setAttribute('disabled','""');
			document.forms["inscription"].action="#";
			console.log("ertg");
		}
		else{
			document.getElementById("emailCheck").style.backgroundColor = "green";
			document.getElementById("inscription").removeAttribute('disabled');
			document.forms["inscription"].action="confirmationInscription.php";
			console.log('Requête ajax5');
		}
	})
}

function passewordCheck(){
	if (document.getElementById("passwordCheck").value 
		!= document.getElementById("password").value )
	{
		document.inscription.passwordCheck.focus();
		document.getElementById("inscription").setAttribute('disabled','""');
		document.inscription.passwordCheck.style.backgroundColor = "red";
		document.forms["inscription"].action="#";
	}
	else
	{
		document.getElementById("passwordCheck").style.backgroundColor = "green";
		document.getElementById("inscription").removeAttribute('disabled');
		document.forms["inscription"].action="confirmationInscription.php";
	}
}			

function emailSyntax(){
	$("#email").keyup(function(){
		email = document.getElementById("email").value;
		var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,3})/;
		if (regex.test(email)){
			document.getElementById("email").style.backgroundColor = "green";
			document.getElementById("inscription").removeAttribute('disabled');
			document.forms["inscription"].action="confirmationInscription.php";
		}

		else{
			alert("Attention!\n Veuillez entrer un e-mail valide !!" )
			document.inscription.email.focus();
			document.inscription.email.style.backgroundColor = "orange";
			document.getElementById("inscription").setAttribute('disabled','""');
			document.forms["inscription"].action="#";
		}
	});	
}


// var prenom = document.getElementById("firstName");
// var nom= document.getElementById("lastName");
// var numeros = document.getElementById("numeros");
// var nomDeRue= document.getElementById("roadName");
// var codePostal= document.getElementById("postcode");
// var ville = document.getElementById("ville");
// var pays = document.getElementById("pays");
// var locataire = document.getElementById("locataire");
// var proprietaire = document.getElementById("proprietaire");
// var jardin = document.getElementById("jardin");
// var terrasse = document.getElementById("terrasse");
// var deux = document.getElementById("deux");
// var aucun = document.getElementById("aucun");

// var elementManquant="";

// var male = document.getElementById("M").val();
// var female = document.getElementById("Mlle").val();
// var woman = document.getElementById("Mme").val();
// var societe = document.getElementById("societe").val();
	
// 	if (!male && !female && !woman && !societe)
// 	{
// 		elementManquant+="-votre civilité\n";
// 		document.getElementById("inscription").setAttribute('disabled','""');
// 	}
// 	if (prenom.value =="")
// 	{
// 		elementManquant+="-votre prénom\n";
// 		document.getElementById("inscription").setAttribute('disabled','""');
// 	}
// 	if ( nom.value =="")
// 	{
// 		elementManquant+="-votre nom\n ";
// 		document.getElementById("inscription").setAttribute('disabled','""');
// 	}
// 	if ( numeros.value =="")
// 	{
// 		elementManquant+="-votre numéros de rue\n";
// 		document.getElementById("inscription").setAttribute('disabled','""');
// 	}
// 	if ( nomDeRue.value=="")
// 	{
// 		elementManquant+="-le nom de la rue\n";
// 		document.getElementById("inscription").setAttribute('disabled','""');
// 	}
// 	if (codePostal.value =="")
// 	{
// 		elementManquant+="-votre code postal\n";
// 		document.getElementById("inscription").setAttribute('disabled','""');
// 	}
// 	if (ville.value =="")
// 	{
// 		elementManquant+="-Le nom de votre ville\n";
// 		document.getElementById("inscription").setAttribute('disabled','""');
// 	}
// 	if (pays.value =="")
// 	{
// 		elementManquant+="-votre pays\n";
// 		document.getElementById("inscription").setAttribute('disabled','""');
// 	}
// 	if (!locataire && !proprietaire)
// 	{
// 		elementManquant+="-votre situation d'hebergement\n";
// 		document.getElementById("inscription").setAttribute('disabled','""');
// 	}
// 	if (!jardin && !terrasse && !deux && !aucun)
// 	{
// 		elementManquant+="-votre situation urbaine\n";
// 		document.getElementById("inscription").setAttribute('disabled','""');
// 	}


// function nickName(){
// 	function nickNameCheck(){
// 		var checkedI=document.getElementsByClassName("inscrit").getAttribut('checked');
// 		var checkedN=document.getElementsByClassName("nonInscrit").getAttribut('checked');
// 		if(checkedN!=null || checkedN!="" || checkedI!=null || checkedI!="" || document.forms["inscription"]==true )
// 		{
// 			console.log('sdss');
// 			if ( document.getElementById("nickName").value=="")
// 		 	{
// 		 	document.getElementById("nickName").style.backgroundColor = "red";
// 			document.getElementById("inscription").setAttribute('disabled','""');
// 			document.forms["inscription"].action="#";
// 			}
// 		}	
// 	}	
// }

$('body').ready(function(){
	emailCheck();
	passewordCheck();
	emailSyntax();

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
})

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

	