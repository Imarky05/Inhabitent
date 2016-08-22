<?php
/**
 * The sidebar containing the main widget area.s
 *
 * @package Inhabitent_Theme
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area" role="complementary">
	<!-- <div class="contact-info">
		<h3>Contact Info</h3>
		<p><i class="fa fa-phone"></i><a href="tel:7784567891">778-456-7891</a></p>
		<p><i class="fa fa-envelope"></i><a href="mailto:info@inhabitent.com">info@inhabitent.com</a></p>
		<p class="address"><i class="fa fa-map-marker"></i><span>1490 W Broadway Vancouver, BC V6H 1H5</span></p>
	</div>
	<div class="business-info">
		<h3>Business Hours</h3>
		<p><strong>Monday-Friday:</strong> 9am to 5pm</p>
		<p><strong>Saturday:</strong> 10am to 2pm</p>
		<p><strong>Sunday:</strong> Closed</p>
	</div> -->
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div><!-- #secondary -->