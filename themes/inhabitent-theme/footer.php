<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>
			</div><!-- closing div for .content-wrapper -->
			</div><!-- closing div for .content-container -->
			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="footer-container">
					<div class="footer-info-wrapper">
						<div class="contact-info">
							<h3>Contact Info</h3>
							<p><i class="fa fa-envelope"></i>info@inhabitent.com</p>
							<p><i class="fa fa-phone"></i>778-456-7891</p>
							<p>
								<i class="fa fa-facebook-square"></i>
								<i class="fa fa-twitter-square"></i>
								<i class="fa fa-google-plus-square"></i>
							</p>
						</div>
						<div class="business-info">
							<h3>Business Hours</h3>
							<p><strong>Monday-Friday:</strong> 9am to 5pm</p>
							<p><strong>Saturday:</strong> 10am to 2pm</p>
							<p><strong>Sunday:</strong> Closed</p>
						</div>
						<div class="logo-info">
							<a href="<?php echo home_url()?>"><img src="<?php echo get_template_directory_uri() . "/images/logos/inhabitent-logo-text.svg"?>" alt="Home Page"></a>
						</div>
					</div>
					<div class="copyright">
						<p>Copyright &copy; 2016 Inhabitent</p>
					</div>
				</div>
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>
		<script src="https://code.jquery.com/jquery-3.1.0.slim.min.js" integrity="sha256-cRpWjoSOw5KcyIOaZNo4i6fZ9tKPhYYb6i5T9RSVJG8=" crossorigin="anonymous"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri() . "/./js/main.js"?>"></script>

	</body>
</html>
