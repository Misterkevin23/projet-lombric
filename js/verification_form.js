	// 	email = document.getElementById("email").value;
	// var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,3})/;
	// if (regex.test(email)){
	// 	return true;
	// }

	// else{
	// 	alert("Attention!\n Veuillez entrer un e-mail valide !!" )
	// 	document.inscription.email.focus();
	// 	document.inscription.email.style.backgroundColor = "red";
	// 	console.log(document.getElementById("Nickname").value);


	// 	return false;
	// }
function emailCheck(){
	if (document.getElementById("emailCheck").value 
		!= document.getElementById("email").value )
	{
		document.inscription.emailCheck.focus();
		document.inscription.emailCheck.style.backgroundColor = "red";
		document.getElementById("inscription").setAttribute('type','hidden');
	}
}	

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

	// if (document.getElementById("passwordCheck").value 
	// 	!= document.getElementById("password").value )
	// {
	// 	alert("Attention ! \n Le mot de passe saisie n'est pas identique.");
	// 	document.inscription.passwordCheck.focus();
	// 	document.inscription.passwordCheck.style.backgroundColor = "red";

	// 	return false;
	// }


	// var male = document.getElementById("M").checked;
	// var female = document.getElementById("Mlle").checked;
	// var woman = document.getElementById("Mme").checked;
	// var societe = document.getElementById("societe").checked;
	// if (!male && !female && !woman && !societe)
	// {
	// 	alert("Attention! \n Veuillez entrer votre civilité ");
	// 	document.inscription.M.focus();
	// 	document.inscription.M.style.backgroundColor = "red";

	// 	return false;
	// }

	// var prenom = document.getElementById("firstName").value;
	// if (prenom =="")
	// {
	// 	alert("Attention! \n Veuillez entrer votre prénom");
	// 	document.inscription.firstname.focus();
	// 	document.inscription.firstname.style.backgroundColor = "red";

	// 	return false;
	// }

	// if (document.getElementById("lastName").value =="")
	// {
	// 	alert("Attention! \n Veuillez entrer votre nom ");
	// 	document.inscription.lastname.focus();
	// 	document.inscription.lastname.style.backgroundColor = "red";

	// 	return false;
	// }

	// if (document.getElementById("numeros").value =="")
	// {
	// 	alert("Attention! \n Veuillez entrer votre numéros de rue");
	// 	document.inscription.numeros.focus();
	// 	document.inscription.numeros.style.backgroundColor = "red";

	// 	return false;
	// }

	// if (document.getElementById("roadName").value =="")
	// {
	// 	alert("Attention! \n Veuillez entrer le nom de la rue");
	// 	document.inscription.roadName.focus();
	// 	document.inscription.roadName.style.backgroundColor = "red";

	// 	return false;
	// }

	// if (document.getElementById("postcode").value =="")
	// {
	// 	alert("Attention! \n Veuillez entrer votre code postal");
	// 	document.inscription.postcode.focus();
	// 	document.inscription.postcode.style.backgroundColor = "red";

	// 	return false;
	// }

	// if (document.getElementById("ville").value =="")
	// {
	// 	alert("Attention! \n Veuillez entrer Le nom de votre ville");
	// 	document.inscription.ville.focus();
	// 	document.inscription.ville.style.backgroundColor = "red";

	// 	return false;
	// }

	// if (document.getElementById("pays").value =="")
	// {
	// 	alert("Attention! \n Veuillez entrer votre pays ");
	// 	document.inscription.pays.focus();
	// 	document.inscription.pays.style.backgroundColor = "red";

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

	// var locataire = document.getElementById("locataire").checked;
	// var proprietaire = document.getElementById("proprietaire").checked;
	// if (!locataire && !proprietaire)
	// {
	// 	alert("Attention! \n Veuillez entrer votre situation d'hebergement ");
	// 	document.inscription.M.focus();
	// 	document.inscription.M.style.backgroundColor = "red";

	// 	return false;
	// }

	// var jardin = document.getElementById("jardin").checked;
	// var terrasse = document.getElementById("terrasse").checked;
	// var deux = document.getElementById("deux").checked;
	// var aucun = document.getElementById("aucun").checked;
	// if (!jardin && !terrasse && !deux && !aucun)
	// {
	// 	alert("Attention! \n Veuillez entrer votre situation d'hebergement ");
	// 	document.inscription.M.focus();
	// 	document.inscription.M.style.backgroundColor = "red";

	// 	return false;
	// }