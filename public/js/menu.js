var elementMenu = document.getElementById('hamberger');
var state = false;

elementMenu.onclick = function() {

	if(!state){

		$("#flexboxmenuResponsive").css("display","flex").css("flex-direction","column").css("margin-top","3%");
		$("#flexboxmenuResponsive").css("width","33%").css("position","absolute").css("top",$("header").height() - 40 + "px").css("background-color", "#000000").css("height","250px").css("right", "0").css("aligns-items", "center").css("justify-content","center");
		$("#flexboxmenuResponsive li a").css("color", "white").css("text-decoration", "none").css("font-size", "30px").css("margin-top", "30px").css("padding", "5px");
		$("#helpBurger").css("margin", "10px 0 10px 0").css("font-size", "30px").css("text-decoration", "none");
		$("#welcomeBurger").css("margin", "10px 0 10px 0").css("font-size", "30px").css("text-decoration", "none");
		$("#deconnecionBurger").css("margin", "10px 0 10px 0").css("font-size", "30px").css("text-decoration", "none");
		$("#adminBurger").css("margin", "10px 0 10px 0").css("font-size", "30px").css("text-decoration", "none");
		$("#connexionBurger").css("margin", "10px 0 10px 0").css("font-size", "30px").css("text-decoration", "none");
		$("#inscriptionBurger").css("margin", "10px 0 10px 0").css("font-size", "30px").css("text-decoration", "none");

		state = true;

	}
	else{
		$("#flexboxmenuResponsive").css("display","none");

		state = false;
	}
};