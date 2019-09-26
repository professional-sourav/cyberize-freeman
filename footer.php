<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Moose_Framework_2
 */

?>

	</div><!-- #content -->

	<footer id="footer-freeman" class="site-footer">

		<div class="footer-inner">
			<div class="footer-inner-top">
				<?php

				if ( ! is_active_sidebar( 'footer-sidebar-1' ) ) {

					echo "Please Insert A Widget";
				}
				?>

				<aside id="footer-widget-1" class="widget-area">
					<?php dynamic_sidebar( 'footer-sidebar-1' ); ?>
				</aside>				
			</div>

			<div class="footer-inner-bottom">

				<!-- DESKTOP VIEW -->
				<div class="view-desktop">
					<?php

					if ( ! is_active_sidebar( 'footer-sidebar-2' ) ) {

						echo "Please Insert A Widget";
					}
					?>

					<aside id="footer-widget-2" class="widget-area">
						<?php dynamic_sidebar( 'footer-sidebar-2' ); ?>
					</aside>
				</div>

				<!-- TAB VIEW -->
				<div class="view-tab">
					<?php

					if ( ! is_active_sidebar( 'footer-sidebar-3' ) ) {

						echo "Please Insert A Widget";
					}
					?>

					<aside id="footer-widget-3" class="widget-area">
						<?php dynamic_sidebar( 'footer-sidebar-3' ); ?>
					</aside>
				</div>

				<!-- MOBILE VIEW -->
				<div class="view-mb">
					<?php

					if ( ! is_active_sidebar( 'footer-sidebar-4' ) ) {

						echo "Please Insert A Widget";
					}
					?>

					<aside id="footer-widget-4" class="widget-area">
						<?php dynamic_sidebar( 'footer-sidebar-4' ); ?>
					</aside>
				</div>
			</div>
		</div>
		<!--==============================================================================
		=            THIS IS FOR DEBUGGING. PLZ DISABLE WHEN READY TO PUBLISH            =
		===============================================================================-->

		<div style="color: black"><strong>Current template:</strong>
			<?php echo get_current_template( true ); ?>
		</div>

		<!-- ====  End of THIS IS FOR DEBUGGING. PLZ DISABLE WHEN READY TO PUBLISH  ==== -->

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>



</body>
</html>
