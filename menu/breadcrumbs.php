<?php if ( function_exists( 'breadcrumb_trail' ) ) : // Check for breadcrumb support. ?>
	<?php breadcrumb_trail(
		array( 
			'show_on_front' => false,
			'before'        => '<div class="column">',
			'after'         => '</div>',
			'labels'        => array( 
				'browse' => esc_html__( 'You are here:', 'toolbox' ) 
			) 
		) 
	); ?>
<?php endif; // End check for breadcrumb support. ?>