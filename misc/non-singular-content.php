<?php
	$featured_image = get_the_image( array( 'echo' => false ) );
	$entry_class = ( $featured_image ) ? 'media-object-section ' : '';
?>

<?php if( $featured_image ) : ?>
	<p class="media-object-section entry-thumbnail">
		<?php get_the_image(); ?>
	</p>
<?php endif; ?>

<div class="<?php echo $entry_class; ?>entry-details">
	<header class="entry-header">
		<?php the_title( '<h2 ' . hybrid_get_attr( 'entry-title' ) . '><a href="' . get_permalink() . '" rel="bookmark" itemprop="url">', '</a></h2>' ); ?>
		<?php
            if( 'post' == get_post_type() ) :
        		locate_template( array( 'misc/entry-byline.php' ), true, false ); // Loads the misc/entry-byline.php template.
        	endif;
		?>
	</header>
	<div <?php hybrid_attr( 'entry-summary' ); ?>>
		<?php the_excerpt(); ?>
	</div>
</div>