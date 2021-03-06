jQuery( document ).ready( function( $ ) {
	
	$( '.site-container' ).wrap(
		'<div class="off-canvas-wrapper"><div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>'
	)
	.addClass( 'off-canvas-content' )
	.attr( 'data-off-canvas-content', '' )
	.prepend('\
		<div class="title-bar hide-for-large mobile-toggle">\
			<div class="title-bar-left" data-toggle="mobile-nav">\
				<button class="menu-icon" type="button"></button>\
				<span class="title-bar-title">' + I18nToolbox.menu + '</span>\
			</div>\
		</div>');
	
	$( '.off-canvas-wrapper-inner' ).prepend(
		'<div class="off-canvas position-left" data-force-top="false" id="mobile-nav" data-off-canvas><ul class="vertical menu" data-drilldown data-parent-link="true">'
	);
	
	$( '.clone-mobile' ).each( function() {
		$( '> li', this).clone().appendTo('#mobile-nav > ul' );
    });
		
	$( document ).foundation();
		
	$( '.menu-item-has-children' ).each( function() {
		( $( '> .sub-menu > .js-drilldown-back a', this ).text( $( '> a', this ).text() ) );
    });
	
});