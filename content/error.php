<article class="entry">
	<?php if ( is_404() ) : ?>
		<header class="entry-header">
			<h1 class="entry-title"><?php esc_html_e( 'This page doesn\'t exist', 'toolbox' ); ?></h1>
		</header>
		<div <?php hybrid_attr( 'entry-content' ); ?>>
			<p><?php printf( __( 'Perhaps you can return back to the site\'s <a href="%s">homepage</a> and see if you can find what you are looking for. Or, you can try finding it by using the search form below.', 'toolbox' ), trailingslashit( home_url() ) ); ?></p>
			<?php get_search_form(); ?>
		</div>
	<?php else : ?>
		<div <?php hybrid_attr( 'entry-content' ); ?>>
			<?php esc_html_e( 'Sorry, no entries have been found.', 'toolbox' ); ?>
		</div>
	<?php endif; ?>
</article>