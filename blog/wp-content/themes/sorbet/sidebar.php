<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package Sorbet
 */
?>
	<div id="secondary" class="widget-area" role="complementary" style="background-color:#fff;padding-right: 20px;padding-left: 20px;">
		<?php do_action( 'before_sidebar' ); ?>
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</div><!-- #secondary -->
