<?php
/**
 * The template for displaying thank you page
 *
 *
 * @package freeman
 */

get_header();
?>
	<style type="text/css">

	</style>

	<div id="thank-you-freeman" class="content-area">
		<main id="main" class="site-main container">

			<div class="page-content text-center">

				<img src="<?php echo get_template_directory_uri() . '/assets/img/leaf-thank-you-art' ?>">

				<h1>Thank You!</h1>
				<p>Thank you for being an awesome person! You can check your email for notifications.</p>

				<p class="pt-5">Having Trouble? <a href="/contact-us/">Contact Us</a></p>


				<!-- <div class="social mt-5 col-md-6 col-sm-6 col-6 mx-auto"> -->
					<?php // echo do_shortcode( '[Sassy_Social_Share title=""]' );  ?>
				<!-- </div> -->

			</div><!-- .page-content -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
