			<?php hybrid_get_sidebar( 'primary' ); // Loads the sidebar/primary.php template. ?>

		</div><!-- #main -->

		<footer <?php hybrid_attr( 'footer' ); ?>>
		
			<div class="row">
				<div class="small-12 columns">
					<p class="credit">
						<?php printf(
							// Translators: 1 is current year, 2 is site name/link, 3 is WordPress name/link, and 4 is theme name/link.
							esc_html__( 'Copyright &copy; %1$s %2$s', 'toolbox' ), 
							date_i18n( 'Y' ), hybrid_get_site_link()
						); ?>
					</p><!-- .credit -->
				</div>
			</div>

		</footer><!-- #footer -->

	</div><!-- #container -->

	<?php wp_footer(); // WordPress hook for loading JavaScript, toolbar, and other things in the footer. ?>

</body>
</html>