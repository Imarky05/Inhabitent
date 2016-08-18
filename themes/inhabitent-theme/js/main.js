(function($){
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
			    if (window.scrollY > window.screen.height) {
			    	$("div.front-about-nav").addClass("fixed-front-about-nav-scroll");
			    	$(".front-about-main-nav").removeClass("page-link");
			    	$(".front-about-logo").removeClass("white-logo");
			    	$(".front-about-logo").addClass("green-logo");

			    }
			    else {
			    	$("div.front-about-nav").removeClass("fixed-front-about-nav-scroll");
			    	$(".front-about-main-nav").addClass("page-link");
			    	$(".front-about-logo").removeClass("green-logo");
			    	$(".front-about-logo").addClass("white-logo");
			    };
			},false);

	// Nav Search Field
	$( "a.toggle-search" ).click(function() {
	 	$(".nav-search-label").addClass("nav-search-label-toggle");
	});

	// test
	$('#close-comments').on('click', function(event){
		event.preventDefault();

		$.ajax({
			method: 'post',
			url: comment_vars.rest_url + 'wp/v2/posts/' + comment_vars.post_id,
			data: {
				comment_status: 'open'
			},
			beforeSend: function(xhr) {
				xhr.setRequestHeader('X-WP-Nonce', comment_vars.wpapi_nonce);
			}
		}).done(function(response){
			alert('success its been closed');
		});
	});

});
}(jQuery));