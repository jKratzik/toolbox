<!DOCTYPE html>
<html <?php language_attributes( 'html' ); ?>>
<head <?php hybrid_attr( 'head' ); ?>>
<?php wp_head(); ?>
</head>

<body <?php hybrid_attr( 'body' ); ?>>

	<div id="container">

		<div class="skip-link">
			<a href="#content" class="show-for-sr"><?php esc_html_e( 'Skip to content', 'toolbox' ); ?></a>
		</div><!-- .skip-link -->

		<header <?php hybrid_attr( 'header' ); ?>>
			
			<div class="row">
				<div <?php hybrid_attr( 'branding' ); ?>>
					<?php hybrid_site_title(); ?>
					<?php hybrid_site_description(); ?>
				</div><!-- #branding -->
			</div>

		</header><!-- #header -->
		
		<div class="nav-primary">
			<?php hybrid_get_menu( 'primary' ); // Loads the menu/primary.php template. ?>
		</div><!-- .nav-primary -->
        
		<div id="main" class="row main">

			<?php hybrid_get_menu( 'breadcrumbs' ); // Loads the menu/breadcrumbs.php template. ?>
