<?php if ( '1c' !== hybrid_get_theme_layout() ) : // If not a one-column layout. ?>
	<aside <?php hybrid_attr( 'sidebar', 'primary' ); ?>>
		<?php if ( is_active_sidebar( 'primary' ) ) : // If the sidebar has widgets. ?>
			<?php dynamic_sidebar( 'primary' ); // Displays the primary sidebar. ?>
		<?php else : // If the sidebar has no widgets. ?>
			<?php the_widget(
				'WP_Widget_Text',
				array(
					'title'  => __( 'Example Widget', 'toolbox' ),
					// Translators: The %s are placeholders for HTML, so the order can't be changed.
					'text'   => sprintf( __( 'This is an example widget to show how the sidebar looks by default. You can add custom widgets from the %swidgets page%s in the dashboard.', 'toolbox' ), current_user_can( 'edit_theme_options' ) ? '<a href="' . admin_url( 'widgets.php' ) . '">' : '', current_user_can( 'edit_theme_options' ) ? '</a>' : '' ),
					'filter' => true,
				),
				array(
					'before_widget' => '<section class="widget widget_text">',
					'after_widget'  => '</section>',
					'before_title'  => '<h3 class="widget-title">',
					'after_title'   => '</h3>'
				)
			); ?>
		<?php endif; // End widgets check. ?>
	</aside>
<?php endif; // End layout check. ?>