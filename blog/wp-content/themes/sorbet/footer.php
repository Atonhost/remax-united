<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Sorbet
 */
?>

	</div><!-- #content -->
	<?php if ( has_nav_menu( 'secondary' ) ) : ?>
		<div class="secondary-navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'secondary', 'depth' => 1 ) ); ?>
		</div>
	<?php endif; ?>
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
		© Copyright 2015 by Remax United. Todos Los derechos Reservados.
			
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>