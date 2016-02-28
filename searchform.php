<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label class="search-label">
		<input type="search" class="search-submit" value="<?php echo get_search_query(); ?>" name="s" />
		<span class="fa fa-search"></span>
	</label>
	<button type="submit" class="search-submit" style="display: none"><span class="screen-reader-text"><?php echo _x( 'Search', 'submit button', 'DeliverPortfolio' ); ?></span></button>
</form>