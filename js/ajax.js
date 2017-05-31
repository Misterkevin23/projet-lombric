function getData(){
	// console.log('Requête ajax');
	var url = 'http://localhost/projet_lombric/projet-lombric/page/ajax.php';
	var req = new XMLHttpRequest(); 
	req.open('GET', url, false);
	req.send(null);

	if (req.status==200){
		var users = req.responseText;
		var usersArray= JSON.parse(users);
		pseudoVerif(usersArray);
		emailVerif(usersArray);
	}
}
function pseudoVerif(users){

	users.forEach(function(user){
		$("#nickName").keyup(function(){
			document.getElementById("nickName").style.backgroundColor = "green";
			document.getElementById("inscription").setAttribute('type','submit');
			document.forms["inscription"].action="confirmationInscription.php";

			if(document.getElementById("nickName").value==user.pseudo)
			{
				document.getElementById("nickName").style.backgroundColor = "red";
				document.getElementById("inscription").setAttribute('type','hidden');
				document.forms["inscription"].action="#";
				console.log('Requête ajax1');	
			}
			else if(document.getElementById("email").value==user.email)
			{
				document.getElementById("email").style.backgroundColor = "red";
				document.getElementById("inscription").setAttribute('type','hidden');
				document.forms["inscription"].action="#";
				console.log('Requête ajax2');	
			}
		});
	});	
}

function emailVerif(users){

	users.forEach(function(user){
		$("#email").keyup(function(){
			document.getElementById("email").style.backgroundColor = "green";
			document.getElementById("inscription").setAttribute('type','submit');
			document.forms["inscription"].action="confirmationInscription.php";

			if(document.getElementById("email").value==user.email )
			{
				document.getElementById("email").style.backgroundColor = "red";
				document.getElementById("inscription").setAttribute('type','hidden');
				document.forms["inscription"].action="#";
				console.log('Requête ajax3');	
			}
			else if(document.getElementById("nickName").value==user.pseudo)
			{
				document.getElementById("nickName").style.backgroundColor = "red";
				document.getElementById("inscription").setAttribute('type','hidden');
				document.forms["inscription"].action="#";
				console.log('Requête ajax4');	
			}
		});
	});
}		
	