<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div class="input-group">
		<label class="input-group-field search-label">
			<span class="show-for-sr"><?php esc_attr_e( 'Search for:', 'toolbox' ) ?></span>
			<input type="search" class="search-field" placeholder="<?php esc_attr_e( 'Search &hellip;', 'toolbox' ); ?>" value="<?php echo get_search_query(); ?>" name="s">
		</label>
		<p class="input-group-button">
			<input type="submit" class="button search-submit" value="<?php esc_attr_e( 'Search', 'toolbox' ) ?>">
		</p>
	</div>
</form>