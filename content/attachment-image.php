<article <?php hybrid_attr( 'post' ); ?>>
	<?php if ( is_attachment() ) : // If viewing a single attachment. ?>
        <?php echo wp_get_attachment_image( get_the_ID(), 'full', false, array( 'class' => 'aligncenter' ) ); ?>
		<header class="entry-header">
			<h1 <?php hybrid_attr( 'entry-title' ); ?>><?php single_post_title(); ?></h1>
		</header>
		<div <?php hybrid_attr( 'entry-content' ); ?>>
			<?php the_content(); ?>
			<?php wp_link_pages(); ?>
		</div>
		<footer class="entry-footer">
			<time <?php hybrid_attr( 'entry-published' ); ?>><?php echo get_the_date(); ?></time>
			<?php edit_post_link(); ?>
		</footer>
	<?php else : // If not viewing a single post. ?>
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