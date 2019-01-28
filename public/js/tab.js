$('.deleteUser').on("click", function(){
	var dele = $(this).attr("class").split(" ")[1];
	ajaxTest(dele, $(this));
});

function ajaxTest(dele, component){
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
	    if (this.status == 200) {
	    	
	     	component.parent().remove();

	    }
	};
	xhttp.open("GET", "http://www.cesi-bde.com/admin/account?id=" + dele, true);
	xhttp.send();
}