<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
	<fieldset>
		<button type="button" class="search-submit">
			<span class="icon-search" aria-hidden="true">
				<i class="fa fa-search <?php
								if (is_front_page() || is_page_template('page-about.php')) {
									echo "fp-fa-search fa-search-white";
								}
								else {
									echo "fa-search-green";
								}				
							?>"></i>
			</span>
			<span class="screen-reader-text"><?php echo esc_html( 'Search' ); ?></span>
		</button>
		<label>
			<input type="search" class="search-field <?php
								if (is_front_page() || is_page_template('page-about.php')) {
									echo "fp-search-field search-field-white";
								}
								else {
									echo "search-field-green";
								}				
							?>" placeholder="SEARCH ..." value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="Search for:" />
		</label>
	</fieldset>
</form>


