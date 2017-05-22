$("document").ready(function(){
	var nbreArticle=0;
	var panierElt = document.getElementById("panier");
	var panierValue = document.getElementById("panier").getAttribute("value");
	function clic() {
		if(panierValue =="Annuler"){
			nbreArticle--;
			document.getElementById("nbreArticle").textContent = nbreArticle;
			document.getElementById("panier").setAttribute("value","Ajouter au panier");
			console.log(panierValue);
		}
		else if(panierValue =="Ajouter au panier"){
			nbreArticle++;
			document.getElementById("nbreArticle").textContent = nbreArticle;
			document.getElementById("panier").setAttribute("value","Annuler");
			console.log(panierValue);
				
		}
	}	

	panierElt.addEventListener("click", clic);
		
})	


