<?php if ( get_option( 'page_comments' ) && 1 < get_comment_pages_count() ) : // Check for paged comments. ?>
	<nav class="comments-nav" role="navigation" aria-labelledby="comments-nav-title">
		<h3 id="comments-nav-title" class="show-for-sr"><?php esc_html_e( 'Comments Navigation', 'toolbox' ); ?></h3>
		<?php previous_comments_link( '<span class="comments-prev">' . __( 'Previous', 'toolbox' ) . '</span>' ); ?>
		<span class="page-numbers"><?php 
			// Translators: Comments page numbers. 1 is current page and 2 is total pages.
			printf( esc_html__( 'Page %1$s of %2$s', 'toolbox' ), get_query_var( 'cpage' ) ? absint( get_query_var( 'cpage' ) ) : 1, get_comment_pages_count() ); 
		?></span>
		<?php next_comments_link( '<span class="comments-next">' . __( 'Next', 'toolbox' ) . '</span>' ); ?>
	</nav>
<?php endif; // End check for paged comments. ?>