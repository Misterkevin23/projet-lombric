//***********************************************************************
//VARIABLE
//***********************************************************************

var usersArray=null;
var nickName= $(".nickName");
var email= $(".email");
var checkmail= $('#emailCheck');
var mdp= $('.password');
var checkmdp= $('#passwordCheck');
var form= $('form').attr('name');
var urlBase='http://localhost/projet_lombric/page/ajax.php';




//***************************************************************************
//-->FONCTION
//***************************************************************************
//divers fonction servant a construire une fonction de verification
//l'unicité du mail et du pseudo en Database
//Apparais que lorsque le formulaire d'inscription sont chargé!!






function good(){

	document.getElementById("inscription").removeAttribute('disabled');
	document.forms["inscription"].action="confirmationInscription.php";
}

function noGood(){

	document.getElementById("inscription").setAttribute('disabled','""');
	document.forms["inscription"].action="#";

}
function mdpActionGood(){
	mdp.css('background', 'green');
}

function mdpActionNoGood(){
	mdp.css('background', 'orange');
	noGood();
}

function emailActionGood(){
	email.css('background', 'green');
}

function emailActionNoGood(){

	email.css('background', 'red');
	noGood();
	
}

function nickNameActionGood(){
	nickName.css('background', 'green');
}

function nickNameActionNoGood(){

	nickName.css('background', 'red');
	noGood();
}

function checkmailActionGood(){
	checkmail.css('background', 'green');
	good();
}

function checkmailActionNoGood(){
	checkmail.css('background', 'orange');
	noGood();
}

function checkMdpActionGood(){
	checkmdp.css('background', 'green');
	good();
}

function checkMdpActionNoGood(){
	checkmdp.css('background', 'orange');
	good();
}

function initCheck(){
	nickNameActionGood();
	emailActionGood();
	mdpActionGood()
	good();
	
	if(checkmail.val()==email.val() && checkmail.val() != "" && email.val()!="")
	{
		checkmailActionGood();
	}
	else
	{
		checkmailActionNoGood();
	}
	if(checkmdp.val()==mdp.val() && checkmdp.val() != "" && mdp.val()!="")
	{
		checkMdpActionGood();
		mdpActionGood();
	}
	else
	{
		checkMdpActionNoGood();
		mdpActionNoGood();
	}	
	usersArray.forEach(function(user){
		if(nickName.val()==user.pseudo	|| nickName.val()=="")
		{
			nickNameActionNoGood();
		}
		else if(email.val()==user.email || email.val()=="")
		{
			emailActionNoGood();
		}
	});
}; 

function onChangeCheck(){
	
	$('form').on('change keyup', '.formTape', function(){
		console.log('ok5');
		initCheck();
	});
}

function getData(){
	// console.log('Requête ajax');
	var url = urlBase + '?action=control';
	var req = new XMLHttpRequest(); 
	req.open('GET', url, false);
	req.send(null);
	console.log(url);
	if (req.status==200){
		var users = req.responseText;
		usersArray= JSON.parse(users);
		console.log(usersArray);
		initCheck();
		onChangeCheck();	
	}
}


//**************************************************************************
//ACTION
//***************************************************************************






if(form == "inscription")
{	
	$(document).ready(function(){
		getData();
	});
}	