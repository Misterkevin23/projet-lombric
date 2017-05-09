function verification_form(){
		email = document.getElementById("email").value;
	var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,3})/;
	if (regex.test(email)){
		return true;
	}

	else{
		alert("Attention!\n Veuillez entrer un e-mail valide !!" )
		document.inscription.email.focus();
		document.inscription.email.style.backgroundColor = "red";
		console.log(document.getElementById("Nickname").value);


		return false;
	}

	if (document.getElementById("email_check").value != document.getElementById("email").value ) {
		alert("Attention ! \n L'adresse saisie n'est pas identique." )
		document.inscription.email_check.focus();
		document.inscription.email_check.style.backgroundColor = "red";

		return false;
	}

	if ( document.getElementById("Nickname").value=="") {
		alert("Attention ! \n Veuillez saisir un pseudo " )
		document.inscription.Nickname.focus();
		document.inscription.Nickname.style.backgroundColor = "red";

		return false;
	}

	if (document.getElementById("password").value =="") {
		alert("Attention ! \n Veuillez entrer un mot de passe " )
		document.inscription.password.focus();
		document.inscription.password.style.backgroundColor = "red";

		return false;
	}

	if (document.getElementById("passwordcheck").value != document.getElementById("password").value ) {
		alert("Attention ! \n Le mot de passe saisie n'est pas identique." )
		document.inscription.passwordcheck.focus();
		document.inscription.passwordcheck.style.backgroundColor = "red";

		return false;
	}


	var male = document.getElementById("M").checked;
	var female = document.getElementById("Mlle").checked;
	var woman = document.getElementById("Mme").checked;
	var societe = document.getElementById("societe").checked;
	if (!male && !female && !woman && !societe) {
		alert("Attention! \n Veuillez entrer votre civilité " )
		document.inscription.M.focus();
		document.inscription.M.style.backgroundColor = "red";

		return false;
	}

	var prenom = document.getElementById("firstname").value;
	if (prenom =="") {
		alert("Attention! \n Veuillez entrer votre prénom" )
		document.inscription.firstname.focus();
		document.inscription.firstname.style.backgroundColor = "red";

		return false;
	}

	if (document.getElementById("lastname").value =="") {
		alert("Attention! \n Veuillez entrer votre nom " )
		document.inscription.lastname.focus();
		document.inscription.lastname.style.backgroundColor = "red";

		return false;
	}

	if (document.getElementById("numeros").value =="") {
		alert("Attention! \n Veuillez entrer votre numéros de rue" )
		document.inscription.numeros.focus();
		document.inscription.numeros.style.backgroundColor = "red";

		return false;
	}

	if (document.getElementById("roadname").value =="") {
		alert("Attention! \n Veuillez entrer le nom de la rue" )
		document.inscription.roadname.focus();
		document.inscription.roadname.style.backgroundColor = "red";

		return false;
	}

	if (document.getElementById("postcode").value =="") {
		alert("Attention! \n Veuillez entrer votre code postal" )
		document.inscription.postcode.focus();
		document.inscription.postcode.style.backgroundColor = "red";

		return false;
	}

	if (document.getElementById("ville").value =="") {
		alert("Attention! \n Veuillez entrer Le nom de votre ville" )
		document.inscription.ville.focus();
		document.inscription.ville.style.backgroundColor = "red";

		return false;
	}

	if (document.getElementById("pays").value =="") {
		alert("Attention! \n Veuillez entrer votre pays " )
		document.inscription.pays.focus();
		document.inscription.pays.style.backgroundColor = "red";

		return false;
	}	

	var mobile = /^(01|02|03|04|05|06|07|08|09|0033|\+33)[0-9]{8}/;
	if (mobile.test(document.getElementById("phone_portable").value)){
		return true;
	}

	else{
		alert("Attention! \n Veuillez entrer un numeros de téléphone valide")
		document.inscription.phone_portable.focus();
		document.inscription.phone_portable.style.backgroundColor = "red";

		return false;
	}

	var locataire = document.getElementById("locataire").checked;
	var proprietaire = document.getElementById("proprietaire").checked;
	if (!locataire && !proprietaire) {
		alert("Attention! \n Veuillez entrer votre situation d'hebergement " )
		document.inscription.M.focus();
		document.inscription.M.style.backgroundColor = "red";

		return false;
	}

	var jardin = document.getElementById("jardin").checked;
	var terrasse = document.getElementById("terrasse").checked;
	if (!jardin && !terrasse) {
		alert("Attention! \n Veuillez entrer votre situation d'hebergement " )
		document.inscription.M.focus();
		document.inscription.M.style.backgroundColor = "red";

		return false;
	}
}