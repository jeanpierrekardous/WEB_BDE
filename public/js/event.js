var elementMenu = document.getElementById('hamberger');
var elementDivInvisible = document.getElementById('clicktohidmenu');
var actifHamberger = false;

elementMenu.onclick = function() {

	if(!actifHamberger){

		$("#menuHamberger").css("display","flex").css("flex-direction","column").css("margin-top","3%");
		$("#menuHamberger li").css("color","white").css("font-size","4rem");
		$("#flexHamberger").css("background-color","#3d3d3d").css("position","absolute").css("z-index","3").css("height","600px").css("width",$("header").css("width")).css("display","block");
		$("#searchInputHamberger").css("position","absolute").css("right","5%").css("left","5%").css("display","flex").css("width",$("header").width() - 100 + "px").css("height","100px").css("font-size","4rem").css("margin-top","5%");
		$("#clicktohidmenu").css("display","block").css("opacity","0").css("background-color","#3d3d3d").css("z-index","2").css("width",$("header").width()).css("height",$(window).height()).css("position","absolute").css("top",$("#flexHamberger").height());

		actifHamberger = true;

	}
	else{

		$("#flexHamberger").css("display","none");
		$("#clicktohidmenu").css("display","none");

		actifHamberger = false;

	}
};

elementDivInvisible.onclick = function() {

	$("#flexHamberger").css("display","none");
	$("#clicktohidmenu").css("display","none");

	actifHamberger = false;

};