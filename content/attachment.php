<article <?php hybrid_attr( 'post' ); ?>>
	<?php if ( is_attachment() ) : // If viewing a single attachment. ?>
		<header class="entry-header">
			<h1 <?php hybrid_attr( 'entry-title' ); ?>><?php single_post_title(); ?></h1>
		</header>
		<div class="entry-content">
			<?php hybrid_attachment(); // Function for handling non-image attachments. ?>
			<?php the_content(); ?>
			<?php wp_link_pages(); ?>
		</div>
		<footer class="entry-footer">
			<time <?php hybrid_attr( 'entry-published' ); ?>><?php echo get_the_date(); ?></time>
			<?php edit_post_link(); ?>
		</footer>
	<?php else : // If not viewing a single attachment. ?>
		<div class="entry-details">
            <header class="entry-header">
                <?php the_title( '<h2 ' . hybrid_get_attr( 'entry-title' ) . '><a href="' . get_permalink() . '" rel="bookmark" itemprop="url">', '</a></h2>' ); ?>
            </header>
            <div <?php hybrid_attr( 'entry-summary' ); ?>>
                <?php the_excerpt(); ?>
            </div>
        </div>
	<?php endif; // End single attachment check. ?>
</article>