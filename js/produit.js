var listeProduits = [
{
	source:"../image/shop/jardiniere1.jpg",
	name:"Jardinière 1",
	description:"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo",
	etat:"En stock",
	lien:"",
	prix:100
},
{
	source:"../image/shop/jardiniere2.jpg",
	name:"Jardinière 2",
	description:"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo",
	etat:"En stock",
	lien:"",
	prix:100
},
{
	source:"../image/shop/jardiniere3.jpg",
	name:"Jardinière 3",
	description:"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo",
	etat:"En stock",
	lien:"",
	prix:100
},
{
	source:"../image/shop/jardiniere4.jpg",
	name:"Jardinière 4",
	description:"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo",
	etat:"En stock",
	lien:"",
	prix:100
},
{
	source:"../image/shop/jardiniere5.jpg",
	name:"Jardinière 5",
	description:"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo",
	etat:"En stock",
	lien:"",
	prix:100
},
{
	source:"../image/shop/jardiniere6.jpg",
	name:"Jardinière 6",
	description:"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo",
	etat:"En stock",
	lien:"",
	prix:100
},
{
	source:"../image/shop/jardiniere7.jpg",
	name:"Jardinière 7",
	description:"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo",
	etat:"En stock",
	lien:"",
	prix:100
}
]

$(document).ready(function(){

	listeProduits.forEach(function(element){	

		$(".produit").hide("fast");

		var divElt = document.createElement("div");
		divElt.classList.add("produit");

		var divImage = document.createElement("div");
		divImage.classList.add("produitPhoto");

		var imageElt = document.createElement("img");
		imageElt.setAttribute("src",element.source);

		divImage.appendChild(imageElt);
		divElt.appendChild(divImage); 

		var div2Elt = document.createElement("div");
		div2Elt.classList.add("produitDescription");

		var nameElt = document.createElement("h3");
		nameElt.textContent = element.name;

		var descriptionElt = document.createElement("p");
		descriptionElt.classList.add("produitDescriptionText");
		descriptionElt.textContent = element.description;

		div2Elt.appendChild(nameElt);
		div2Elt.appendChild(descriptionElt);
		divElt.appendChild(div2Elt);

		var div3Elt = document.createElement("div");
		div3Elt.classList.add("produitAction");

		var etatElt = document.createElement("h4");
		etatElt.textContent = element.etat;

		var sousDivElt = document.createElement("div");
		sousDivElt.classList.add("button");

		var formElt = document.createElement("form");		//debut du formulaire

		var inputElt = document.createElement("input");
		inputElt.setAttribute("type","submit");
		inputElt.setAttribute("name","ajoutPanier");
		inputElt.setAttribute("value","Ajouter au panier");
		inputElt.classList.add("panierButton");
		inputElt.classList.add("panier_ajout");

		var brElt = document.createElement("br");

		var aElt = document.createElement("a");
		aElt.classList.add("produitButton");
		aElt.href = element.lien;
		aElt.textContent ="Voir le produit";
		aElt.innerHTML += '<br>';

		var form2Elt = document.createElement("form");		//debut du formulaire

		var input2Elt = document.createElement("input");
		input2Elt.setAttribute("type","submit");
		input2Elt.setAttribute("name","Achat");
		input2Elt.setAttribute("value","Achat direct");
		input2Elt.classList.add("formButtun");

		var br2Elt = document.createElement("br");

		var prixElt = document.createElement("p");
		prixElt.classList.add("produitPrix");
		prixElt.textContent =element.prix;
		prixElt.innerHTML += '<i class="fa fa-eur" aria-hidden="true"></i>';

		div3Elt.appendChild(etatElt);
		div3Elt.appendChild(sousDivElt);
		sousDivElt.appendChild(formElt);
		formElt.appendChild(inputElt);
		formElt.appendChild(brElt);
		sousDivElt.appendChild(aElt);
		sousDivElt.appendChild(form2Elt);
		form2Elt.appendChild(input2Elt);
		form2Elt.appendChild(br2Elt);
		div3Elt.appendChild(prixElt);
		divElt.appendChild(div3Elt);

		var article=document.querySelector("article");
		article.insertBefore(divElt, article.childNodes[7]);
		
	})	
$(".produit").show(5000);
})