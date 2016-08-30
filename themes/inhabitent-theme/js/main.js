(function($){
$(document).ready(function(){

	$('.search-field').hide();

	// nav bar fading
	window.onscroll = function() {
			    if (window.scrollY > 50) {
			    	$("div.fixed-nav-wrapper").addClass("fixed-nav-scroll");

			    }
			    else {
			    	$("div.fixed-nav-wrapper").removeClass("fixed-nav-scroll");
			    };
			},false;

	// nav bar fading front about adventure
	window.onscroll = function() {
			    if (window.scrollY > window.screen.height) {
			    	$("div.front-about-nav").addClass("fixed-front-about-nav-scroll");
			    	$(".front-about-main-nav").removeClass("white-nav-links");
			    	$(".front-about-logo").removeClass("white-logo").addClass("green-logo");
			    	$(".fp-fa-search").removeClass("fa-search-white").addClass("fa-search-green");
			    	$(".fp-search-field").removeClass("search-field-white").addClass("search-field-green");

			    }
			    else {
			    	$("div.front-about-nav").removeClass("fixed-front-about-nav-scroll");
			    	$(".front-about-main-nav").addClass("white-nav-links");
			    	$(".front-about-logo").removeClass("green-logo").addClass("white-logo");
			    	$(".fp-fa-search").removeClass("fa-search-green").addClass("fa-search-white");
			    	$(".fp-search-field").removeClass("search-field-green").addClass("search-field-white");
			    };
			},false;


	// search toggle
	$('body').on('click', function(event) {
        var searchBar = $('.search-field');
        var searchButton = $('.search-submit');

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