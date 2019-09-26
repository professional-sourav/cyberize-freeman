<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package cyberize
 */

get_header();
?>

<div id="freeman-404" class="content-area">
	<main id="main" class="site-main container">

		<div class="page-content text-center">

			<h1><a href="/">404</a></h1>
			<h3>Oops...</h3>
			<h6>Looks like this page you’re looking for isn’t here.</h6>
			<a class="button-404-redirect" href="/">Go to the home page</a>

			<!-- <div class="social mt-5 col-md-6 col-sm-6 col-6 mx-auto"> -->
				<?php // echo do_shortcode( '[Sassy_Social_Share title=""]' );  ?>
			<!-- </div> -->

		</div><!-- .page-content -->
	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
