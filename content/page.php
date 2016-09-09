<article <?php hybrid_attr( 'post' ); ?>>
	<?php if ( is_page() ) : // If viewing a single page. ?>
		<header class="entry-header">
			<h1 <?php hybrid_attr( 'entry-title' ); ?>><?php single_post_title(); ?></h1>
		</header>
		<div <?php hybrid_attr( 'entry-content' ); ?>>
			<?php the_content(); ?>
			<?php wp_link_pages(); ?>
		</div>
        <?php edit_post_link( __( 'Edit', 'toolbox' ), '<footer class="entry-footer">', '</footer>' ); ?>
	<?php else : // If not viewing a single page. ?>
		<?php locate_template( array( 'misc/non-singular-content.php' ), true, false ); // Loads the misc/non-singular-content.php template. ?>
	<?php endif; // End single page check. ?>
</article>