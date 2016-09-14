<?php
	$featured_image = get_the_image( array( 'echo' => false ) );
	$entry_class = ( $featured_image && ! is_search() ) ? 'media-object-section ' : '';
?>

<article <?php hybrid_attr( 'post' ); ?>>
    
	<?php if ( is_singular( get_post_type() ) ) : // If viewing a single post. ?>
    
		<header class="entry-header">
			<h1 <?php hybrid_attr( 'entry-title' ); ?>><?php single_post_title(); ?></h1>            
            <?php locate_template( array( 'misc/entry-byline.php' ), true, false ); // Loads the misc/entry-byline.php template. ?>
		</header>
		<div <?php hybrid_attr( 'entry-content' ); ?>>
			<?php the_content(); ?>
			<?php wp_link_pages(); ?>
		</div>
		<footer class="entry-footer">
			<?php hybrid_post_terms( array( 'taxonomy' => 'category', 'text' => esc_html__( 'Posted in %s', 'toolbox' ) ) ); ?>
			<?php hybrid_post_terms( array( 'taxonomy' => 'post_tag', 'text' => esc_html__( 'Tagged with %s', 'toolbox' ), 'before' => '<br />' ) ); ?>
		</footer>
    
	<?php else : // If not viewing a single post. ?>
	   	
        <?php if( $featured_image && ! is_search() ) : ?>
            <p class="media-object-section entry-thumbnail">
                <?php get_the_image(); ?>
            </p>
        <?php endif; ?>

        <div class="<?php echo $entry_class; ?>entry-details">
            <header class="entry-header">
                <?php the_title( '<h2 ' . hybrid_get_attr( 'entry-title' ) . '><a href="' . get_permalink() . '" rel="bookmark" itemprop="url">', '</a></h2>' ); ?>
                <?php if( ! is_search() ) :
                    locate_template( array( 'misc/entry-byline.php' ), true, false ); // Loads the misc/entry-byline.php template.
                endif; ?>
            </header>
            <div <?php hybrid_attr( 'entry-summary' ); ?>>
                <?php the_excerpt(); ?>
            </div>    
        </div>
    
        <?php if( ! is_search() ) : ?>
		<footer class="entry-footer">
			<?php hybrid_post_terms( array( 'taxonomy' => 'category', 'text' => esc_html__( 'Posted in %s', 'toolbox' ) ) ); ?>
			<?php hybrid_post_terms( array( 'taxonomy' => 'post_tag', 'text' => esc_html__( 'Tagged with %s', 'toolbox' ), 'before' => '<br />' ) ); ?>
		</footer>
        <?php endif; ?>
    
	<?php endif; // End single post check. ?>
</article>