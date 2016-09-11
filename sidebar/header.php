<?php if ( is_active_sidebar( 'header' ) ) : // If the sidebar has widgets. ?>
    <aside class="medium-6 columns header-right">
        <?php dynamic_sidebar( 'header' ); // Displays the header widget area. ?>
    </aside>
<?php endif; // End widgets check. ?>