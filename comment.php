<li <?php hybrid_attr( 'comment' ); ?>>

	<article>
		<header class="media-object comment-meta">
			<p class="media-object-section comment-avatar">
				<?php echo get_avatar( $comment ); ?>
			</p>
			<p class="media-object-section comment-meta">
				<cite <?php hybrid_attr( 'comment-author' ); ?>><?php comment_author_link(); ?></cite>
				<time <?php hybrid_attr( 'comment-published' ); ?>><?php printf( esc_html__( '%s ago', 'toolbox' ), human_time_diff( get_comment_time( 'U' ), current_time( 'timestamp' ) ) ); ?></time>
				<?php edit_comment_link( __( 'Edit', 'toolbox' ) ); ?>
			</p>
		</header><!-- .comment-meta -->

		<div <?php hybrid_attr( 'comment-content' ); ?>>
			<?php comment_text(); ?>
		</div><!-- .comment-content -->

		<?php hybrid_comment_reply_link(); ?>
	</article>

<?php // No closing </li> is needed.  WordPress will know where to add it. ?>