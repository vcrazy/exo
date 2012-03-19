$(document).ready(function() {
	// Expand Panel
	$("#open").click(function(){
		$("div#panel").slideDown("slow");
//		$('menu').slideUp();
	});

	// Collapse Panel
	$("#close").click(function(){
		$("div#panel").slideUp("slow");
//		$('menu').delay(200).slideDown();
	});

	// Switch buttons from "Log In | Register" to "Close Panel" on click
	$("#toggle a").click(function () {
		$("#toggle a").toggle();
	});
});
