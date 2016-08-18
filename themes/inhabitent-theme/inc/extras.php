<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package inhabitent_starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function inhabitent_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'inhabitent_starter_body_classes' );


/**
* Login logo, url, title change
*/

	function my_login_logo() { ?>
	    <style type="text/css">
	        #login h1 a, .login h1 a {
	            background-image: url(<?php echo get_template_directory_uri(); ?>/images/logos/inhabitent-logo-text-dark.svg);
	            padding-bottom: 0;
	            background-size: 300px 53px;
	           	height: 53px;
	           	width: 300px;
	        }
	    </style>
	<?php }
	add_action( 'login_head', 'my_login_logo' );

	function inhabitent_login_url() {
	    return home_url();
	}
	add_filter( 'login_headerurl', 'inhabitent_login_url' );

	function inhabitent_login_url_title() {
	    return 'Inhabitent Co.';
	}
	add_filter( 'login_headertitle', 'inhabitent_login_url_title' );

/**
* Adjusting archive page loop for products
*/

function inhabitent_modify_product_archive_query( $query ) {
	if ( is_post_type_archive( 'product' ) && !is_admin() && $query->is_main_query()) {
        $query->set( 'posts_per_page', 16 );
        $query->set( 'order', 'ASC' );
        $query->set( 'orderby', 'title' );
        return;
    }
}
add_action( 'pre_get_posts', 'inhabitent_modify_product_archive_query' );

/**
* User changeable background image of about page
*/

// function inhabitent_about_styles_method() {

// 	        $imgURL = ; //E.g. #FF0000
// 	        $custom_css = "
// 	                .about-hero-banner{
// 	                        background: {$color};
// 	                }";
// 	        wp_add_inline_style( 'custom-style', $custom_css );
// }
// add_action( 'wp_enqueue_scripts', 'inhabitent_about_styles_method' );