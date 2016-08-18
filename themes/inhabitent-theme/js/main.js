$(document).ready(function(){
	console.log($);

	// nav bar fading
	window.addEventListener("scroll", function() {
			    if (window.scrollY > 50) {
			    	$("div.fixed-nav-wrapper").addClass("fixed-nav-scroll");
			    	// $("div.fixed-nav-wrapper").removeClass("fixed-nav");

			    }
			    else {
			    	$("div.fixed-nav-wrapper").removeClass("fixed-nav-scroll");
			    	// $("div.fixed-nav-wrapper").addClass("fixed-nav");
			    };
			},false);

	// nav bar fading front about page
	window.addEventListener("scroll", function() {
			    if (window.scrollY > 900) {
			    	$("div.front-about-nav").addClass("fixed-front-about-nav-scroll");
			    	$(".main-navigation").removeClass("page-link");
			    	// $("div.fixed-nav-wrapper").removeClass("fixed-nav");

			    }
			    else {
			    	$("div.front-about-nav").removeClass("fixed-front-about-nav-scroll");
			    	$(".main-navigation").addClass("page-link");
			    	// $("div.fixed-nav-wrapper").addClass("fixed-nav");
			    };
			},false);

	// Nav Search Field
	$( "a.toggle-search" ).click(function() {
	 	$(".nav-search-label").addClass("nav-search-label-toggle");
	});
});