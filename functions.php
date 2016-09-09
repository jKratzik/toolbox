<?php
// Get the template directory and make sure it has a trailing slash.
$hybrid_base_dir = trailingslashit( get_template_directory() );

// Load the Hybrid Core framework and theme files.
require_once( $hybrid_base_dir . 'hybrid-core/hybrid.php' );
require_once( $hybrid_base_dir . 'inc/theme.php'          );
require_once( $hybrid_base_dir . 'inc/attributes.php'     );
require_once( $hybrid_base_dir . 'inc/update.php'     );

// Launch the Hybrid Core framework.
new Hybrid();

// Theme setup
add_action( 'after_setup_theme', 'toolbox_theme_setup', 5 );
function toolbox_theme_setup() {

	// Theme layouts.
	add_theme_support( 'theme-layouts', array( 'default' => '2c-l' ) );

	// Enable custom template hierarchy.
	add_theme_support( 'hybrid-core-template-hierarchy' );

	// The best thumbnail/image script ever.
	add_theme_support( 'get-the-image' );

	// Breadcrumbs. Yay!
	add_theme_support( 'breadcrumb-trail' );

	// Automatically add feed links to <head>.
	add_theme_support( 'automatic-feed-links' );

	// Handle content width for embeds and images.
	hybrid_set_content_width( 706 );
	
	// Remove the theme generator meta tag
	remove_action( 'wp_head', 'hybrid_meta_generator', 1 );
	
	// Remove body class filter
	remove_filter( 'body_class', 'hybrid_body_class_filter', 0 );
	
}
?>