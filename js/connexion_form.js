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