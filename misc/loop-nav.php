<?php if ( is_singular( 'post' ) ) : // If viewing a single post page. ?>

	<div class="row loop-nav">
		<?php previous_post_link( '<p class="medium-6 columns post-prev">' . esc_html__( 'Previous Post: %link', 'toolbox' ) . '</p>' ); ?>
		<?php next_post_link(     '<p class="medium-6 columns post-next">' . esc_html__( 'Next Post: %link',     'toolbox' ) . '</p>' ); ?>
	</div><!-- .loop-nav -->

<?php elseif ( is_home() || is_archive() || is_search() ) : // If viewing the blog, an archive, or search results. ?>

	<?php the_posts_pagination(
		array( 
			'prev_text' => esc_html__( 'Previous', 'toolbox' ), 
			'next_text' => esc_html__( 'Next',     'toolbox' )
		) 
	); ?>

<?php endif; // End check for type of page being viewed. ?>