var usersArray=null;

function getData(){
	// console.log('Requête ajax');
	var url = 'http://localhost/projet/projet_/projet-lombric/page/ajax.php';
	var req = new XMLHttpRequest(); 
	req.open('GET', url, false);
	req.send(null);

	if (req.status==200){
		var users = req.responseText;
		usersArray= JSON.parse(users);
	}
}
getData();

function pseudoVerif(){
	document.getElementById("nickName").style.backgroundColor = "green";
	document.getElementById("inscription").removeAttribute('disabled');
	document.forms["inscription"].action="confirmationInscription.php";
	console.log('Requête ajax5');
	
	usersArray.forEach(function(user){
	
		$("#nickName").keyup(function(){
			
			if(document.getElementById("nickName").value==user.pseudo)
			{
				document.getElementById("nickName").style.backgroundColor = "red";
				document.getElementById("inscription").setAttribute('disabled','""');
				document.forms["inscription"].action="#";
				console.log('Requête ajax1');
			}
			if(document.getElementById("email").value==user.email)
			{
				document.getElementById("email").style.backgroundColor = "red";
				document.getElementById("inscription").setAttribute('disabled','""');
				// document.getElementById("inscription").css('display','none');
				document.forms["inscription"].action="#";
				console.log('Requête ajax2');
			}
		});
	});	

}	

function emailVerif(){
	document.getElementById("email").style.backgroundColor = "green";
	document.getElementById("inscription").removeAttribute('disabled');
	document.forms["inscription"].action="confirmationInscription.php";
	console.log('Requête ajax6');

	usersArray.forEach(function(user){
		
		$("#email").keyup(function(){

			if(document.getElementById("email").value==user.email )
			{
				document.getElementById("email").style.backgroundColor = "red";
				document.getElementById("inscription").setAttribute('disabled','""');
				// document.getElementById("inscription").css('display','none');
				document.forms["inscription"].action="#";
				console.log('Requête ajax3');	
			}
			if(document.getElementById("nickName").value==user.pseudo)
			{
				document.getElementById("nickName").style.backgroundColor = "red";
				document.getElementById("inscription").setAttribute('disabled','""');
				// document.getElementById("inscription").css('display','none');
				document.forms["inscription"].action="#";
				console.log('Requête ajax4');
			}
		});
	});
}			