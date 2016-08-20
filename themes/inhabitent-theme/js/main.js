(function($){
$(document).ready(function(){
	console.log($);

	$('.search-field').hide();

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
			    if (window.scrollY > window.screen.height) {
			    	$("div.front-about-nav").addClass("fixed-front-about-nav-scroll");
			    	$(".front-about-main-nav").removeClass("page-link");
			    	$(".front-about-logo").removeClass("white-logo");
			    	$(".front-about-logo").addClass("green-logo");
			    	$(".fp-fa-search").removeClass("fa-search-white");
			    	$(".fp-fa-search").addClass("fa-search-green");
			    	$(".fp-search-field").removeClass("search-field-white");
			    	$(".fp-search-field").addClass("search-field-green");

			    }
			    else {
			    	$("div.front-about-nav").removeClass("fixed-front-about-nav-scroll");
			    	$(".front-about-main-nav").addClass("page-link");
			    	$(".front-about-logo").removeClass("green-logo");
			    	$(".front-about-logo").addClass("white-logo");
			    	$(".fp-fa-search").removeClass("fa-search-green");
			    	$(".fp-fa-search").addClass("fa-search-white");
			    	$(".fp-search-field").removeClass("search-field-green");
			    	$(".fp-search-field").addClass("search-field-white");
			    };
			},false);


	// search roggle
	$('body').on('click', function(event) {
        var searchBar = $('.search-field');
        var searchButton = $('.search-submit');

        console.log(event.target);

        if ($(event.target).hasClass("search-submit") || $(event.target).hasClass("fa-search")) {
            searchBar.toggle('slow');
            searchBar.focus(); //check if button was clicked
            event.preventDefault();
        } else if ($(event.target).hasClass("search-field")) {
        	// do nothing
        } else if (searchBar.val().length > 0) {//end first if statement
            searchBar.focusout();
            searchBar.show(); //check if there is entered search string
        } else { //end second if statement
            searchBar.hide('slow');
            searchBar.focusout(); //if no search string, close search bar
        } //end else statement
    }); //End searc

});
}(jQuery));