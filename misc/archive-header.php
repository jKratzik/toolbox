<?php
    $title = '';
    $archive_class = '';
    if( is_category() ) {
        $title = __( 'Category: ', 'toolbox' );
    }
    else if( is_tag() ) {
        $title = __( 'Tag: ', 'toolbox' );
    }
    else if( is_author() ) {
        $title = __( 'Author: ', 'toolbox' );
        $archive_class = 'media-object-section ';
    }
?>

<header <?php hybrid_attr( 'archive-header' ); ?>>
	<h1 <?php hybrid_attr( 'archive-title' ); ?>><?php the_archive_title( $title ); ?></h1>
	<?php if ( ! is_paged() && $desc = get_the_archive_description() ) : // Check if we're on page/1. ?>
		<div <?php hybrid_attr( 'archive-description' ); ?>>
			<?php if( is_author() ) : ?>
				<p class="media-object-section comment-avatar">
					<?php echo get_avatar( get_the_author_meta( 'user_email' ), 0, '', '', array( 'class' => 'thumbnail' ) ); ?>
				</p>
			<?php endif; ?>
			<div class="<?php echo $archive_class; ?>archive-text"> 
				<?php echo $desc; ?>
			</div>
		</div>
	<?php endif; // End paged check. ?>
</header>