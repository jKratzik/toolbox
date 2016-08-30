<?php $zero_comments = ( comments_open() ) ? __( 'Leave a comment', 'toolbox' ) : __( 'No comments', 'toolbox' ); ?>

<div class="entry-byline">
    <time <?php hybrid_attr( 'entry-published' ); ?>><?php echo get_the_date(); ?></time>
    <?php _e( 'by', 'toolbox' ); ?> <span <?php hybrid_attr( 'entry-author' ); ?>><?php the_author_posts_link(); ?></span>
    <span class="entry-comments-link">
        <?php if( comments_open() ) : ?><a href="<?php comments_link(); ?>"><?php endif; ?>
        <?php comments_number( $zero_comments, __( '1 comment', 'toolbox' ), __( '% comments', 'toolbox' ) ); ?>
        <?php if( comments_open() ) : ?></a><?php endif; ?>
    </span>
    <?php edit_post_link( __( 'Edit', 'toolbox' ), ' | ' ); ?>
</div><!-- .entry-byline -->