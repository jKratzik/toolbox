<?php
// Branding
add_filter( 'hybrid_attr_branding', 'toolbox_attr_branding' );
function toolbox_attr_branding( $attr ) {
	$attr['class'] = 'small-12 columns site-branding';
	return $attr;
}

// Primary menu
add_filter( 'hybrid_attr_menu', 'toolbox_attr_menu', 10, 2 );
function toolbox_attr_menu( $attr, $context ) {
	if( $context == 'primary' ) {
		$attr['class'] = 'row menu-primary show-for-large';
	}
	return $attr;
}

// Content column
add_filter( 'hybrid_attr_content', 'toolbox_attr_content' );
function toolbox_attr_content( $attr ) {
	if ( '2c-l' == hybrid_get_theme_layout() ) {
		$attr['class'] = 'medium-7 large-8 columns content';
	}
	else if ( '2c-r' == hybrid_get_theme_layout() ) {
		$attr['class'] = 'medium-7 large-8 medium-push-5 large-push-4 columns content';
	}
	else {
		$attr['class'] = 'column content';
	}
	return $attr;
}

// Archive description
add_filter( 'hybrid_attr_archive-description', 'toolbox_attr_archive_description' );
function toolbox_attr_archive_description( $attr ) {
	$attr['class'] = 'media-object archive-description';
	return $attr;
}

// Entry
add_filter( 'hybrid_attr_post', 'toolbox_attr_post' );
function toolbox_attr_post( $attr ) {
	if ( ! is_singular( get_post_type() ) ) {
		$attr['class'] = 'media-object entry';
	}
    else {
        $attr['class'] = 'entry';
    }
	return $attr;
}

// Sidebar
add_filter( 'hybrid_attr_sidebar', 'toolbox_attr_sidebar' );
function toolbox_attr_sidebar( $attr ) {
	if ( '2c-l' == hybrid_get_theme_layout() ) {
		$attr['class'] = 'medium-5 large-4 columns sidebar';
	}
	else {
		$attr['class'] = 'medium-5 large-4 medium-pull-7 large-pull-8 columns sidebar';
	}
	return $attr;
}
?>