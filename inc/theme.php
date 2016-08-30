<?php
// Register custom menus.
add_action( 'init', 'toolbox_register_menu', 5 );
function toolbox_register_menu() {
	register_nav_menu( 'primary', esc_html__( 'Main Menu', 'toolbox' ) );
}

// Register custom layouts.
add_action( 'hybrid_register_layouts', 'toolbox_register_layouts' );
function toolbox_register_layouts() {
	hybrid_register_layout( '1c',   array( 'label' => esc_html__( '1 Column',                     'toolbox' ), 'image' => '%s/images/1c.png'   ) );
	hybrid_register_layout( '2c-l', array( 'label' => esc_html__( '2 Columns: Content / Sidebar', 'toolbox' ), 'image' => '%s/images/2c-l.png' ) );
	hybrid_register_layout( '2c-r', array( 'label' => esc_html__( '2 Columns: Sidebar / Content', 'toolbox' ), 'image' => '%s/images/2c-r.png' ) );
}

// Register the primary sidebar
add_action( 'widgets_init', 'toolbox_register_sidebar', 5 );
function toolbox_register_sidebar() {
	hybrid_register_sidebar(
		array(
			'id'          => 'primary',
			'name'        => esc_html__( 'Sidebar', 'toolbox' ),
			'description' => esc_html__( 'The primary sidebar that is shown left or right to the content area.', 'toolbox' )
		)
	);
}

// Add custom styles
add_action( 'wp_enqueue_scripts', 'toolbox_enqueue_styles',  5 );
function toolbox_enqueue_styles() {
	$suffix = hybrid_get_min_suffix();
	wp_enqueue_style( 'toolbox-foundation', trailingslashit( get_template_directory_uri() ) . "css/foundation{$suffix}.css" );
	wp_enqueue_style( 'toolbox-elegant-icons', trailingslashit( get_template_directory_uri() ) . "css/elegant-icons{$suffix}.css" );
	if ( is_child_theme() ) {
		wp_enqueue_style( 'hybrid-parent' );
	}
	wp_enqueue_style( 'hybrid-style' );
}

// Add custom scripts
add_action( 'wp_enqueue_scripts', 'toolbox_enqueue_scripts', 5 );
function toolbox_enqueue_scripts() {
	$suffix = hybrid_get_min_suffix();
	$output = array(
		'menu' => __( 'Menu', 'toolbox' )
	);
	wp_enqueue_script( 'toolbox-foundation', trailingslashit( get_template_directory_uri() ) . "js/foundation{$suffix}.js", array( 'jquery' ), null, true );
	wp_enqueue_script( 'toolbox-menu', trailingslashit( get_template_directory_uri() ) . "js/menu.js", array(), null, true );
	wp_localize_script( 'toolbox-menu', 'I18nToolbox', $output );
}

// Filter the excerpt more link
function toolbox_excerpt_more_link() {
	$link = sprintf( '<p class="more-link"><a href="%1$s">%2$s</a></p>',
		esc_url( get_permalink( get_the_ID() ) ),
		/* %s: Name of current post */
		sprintf( __( 'Read more %s', 'toolbox' ),
			'<span class="show-for-sr">' . get_the_title( get_the_ID() ) . '</span>' )
		);
    return $link;
}
add_filter( 'excerpt_more', 'toolbox_excerpt_more' );
add_filter( 'get_the_excerpt', 'toolbox_manual_excerpt_more' );
function toolbox_excerpt_more() {
	$link = toolbox_excerpt_more_link();
	return ' &hellip; ' . $link;
}
function toolbox_manual_excerpt_more( $excerpt ) {
	if( is_attachment() ) {
		return;	
	}
	$link = ( has_excerpt() ) ? toolbox_excerpt_more_link() : '';
	return $excerpt . ' ' . $link;
}

// Filter the output for embedded YouTube and Vimeo videos
add_filter( 'embed_oembed_html', 'toolbox_embed_oembed_html', 0, 2 );
function toolbox_embed_oembed_html( $html, $url ) {
    if( preg_match( '/youtube/', $url ) || preg_match( '/vimeo/', $url ) ) {
        $output = '<div class="flex-video widescreen">' . $html . '</div>';
    }
    else {
        $output = $html;
    }
    return $output;
}
?>