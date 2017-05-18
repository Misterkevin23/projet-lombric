var homeMargin=function(){
	var margin= ($("main").width()-($(".homeAsideImage").width()+$(".homeAside").width()))/3;
		margin= margin + "px";	
		$(".homeAside").css("margin-right", margin);
	}	

$(document).ready(function(){
	$(".homeAsideImage").hide();
	$(".homeAside").hide();
	$(".homeAside p").hide();
	$(".homeAside form").hide();
	$(".homeAsideImage").show(2000);
	$(".homeAside").show(2000);
	$(".homeAside p").show(3000);
	$(".homeAside form").show(3500);
	homeMargin();
})	

$("body").mousemove(function(){
	homeMargin();
})