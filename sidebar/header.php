<?php if ( is_active_sidebar( 'header' ) ) : // If the sidebar has widgets. ?>
    <aside <?php hybrid_attr( 'sidebar', 'header' ); ?>>
        <?php dynamic_sidebar( 'header' ); // Displays the header widget area. ?>
    </aside>
<?php endif; // End widgets check. ?>