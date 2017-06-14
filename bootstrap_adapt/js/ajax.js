var usersArray=null;


function getData(){
	// console.log('Requête ajax');
	var url = 'http://localhost/projet_lombric/page/ajax.php';
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
	
	$("#nickName").keyup(function(){
		document.getElementById("nickName").style.backgroundColor = "green";
		document.getElementById("inscription").removeAttribute('disabled');
		document.forms["inscription"].action="confirmationInscription.php";
		console.log('Requête ajax5');

		usersArray.forEach(function(user){
		
			if(document.getElementById("nickName").value==user.pseudo
				&& document.getElementById("nickName").value=="")
			{
				document.getElementById("nickName").style.backgroundColor = "red";
				document.getElementById("inscription").setAttribute('disabled','""');
				document.forms["inscription"].action="#";
				console.log('Requête ajax1');
			}
			if(document.getElementById("email").value==user.email 
				&& document.getElementById("email").value=="")
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
	
	$("#email").keyup(function(){
	
		document.getElementById("email").style.backgroundColor = "green";
		document.getElementById("inscription").removeAttribute('disabled');
		document.forms["inscription"].action="confirmationInscription.php";
		console.log('Requête ajax6');

		usersArray.forEach(function(user){

			if(document.getElementById("email").value==user.email
			&& document.getElementById("email").value=="" )
			{
				document.getElementById("email").style.backgroundColor = "red";
				document.getElementById("inscription").setAttribute('disabled','""');
				document.forms["inscription"].action="#";
				console.log('Requête ajax3');	
			}
			if(document.getElementById("nickName").value==user.pseudo
				&& document.getElementById("nickName").value=="")
			{
				document.getElementById("nickName").style.backgroundColor = "red";
				document.getElementById("inscription").setAttribute('disabled','""');
				document.forms["inscription"].action="#";
				console.log('Requête ajax4');
			}
		});
	});
}
// console.log(panierUserArray);
//code bouton ajout panier a tester quand PHP fais!!!
// $(document).ready(function(){
// 	$("#panier").click(function(){
	
// 		if($("#panier").val()=="Annuler")	
// 		{
// 			$("#panier").attr("value","Ajouter au panier");
// 			var panierNbre=
// 				parseFloat(document.getElementById("nbreArticle")
// 					.innerHTML)-1;
// 			document.getElementById("nbreArticle").textContent=panierNbre;
// 		}
// 		if($("#panier").val()=="Ajouter au panier")
// 		{
// 		$("#panier").attr("value" ,"Annuler"); 
// 		var panierNbre=
// 			parseFloat(document.getElementById("nbreArticle")
// 				.innerHTML)+1;
// 		document.getElementById("nbreArticle").textContent=panierNbre;
// 		}
// 	});
// });			

$('body').ready(function(){
	pseudoVerif();
	emailVerif();
});