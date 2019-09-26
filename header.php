<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cyberize
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

<!--==============================
=            favicons            =
===============================-->
<link rel="icon" type="image/png" sizes="32x32" href="/wp-content/uploads/2018/02/Moose-32.png">

<!--===========================================
=            CUSTOM ANALYTICS TAGS - HEAD     =
============================================-->

<!--====  Base Tag  ====-->

<?php the_field('before_ending_head_tag_default', 'option'); ?>

<!--====  Custom Conversion Tag  ====-->


<?php the_field('before_ending_head_tag'); ?>

<!--====  End of CUSTOM ANALYTICS TAGS  ====-->

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!--======================================================
=            CUSTOM ANALYTICS TAGS - BODY TOP            =
=======================================================-->

<!--====  Base Tag  ====-->

<?php the_field('after_top_body_tag_default', 'option'); ?>

<!--====  Custom Conversion Tag  ====-->

<?php the_field('after_top_body_tag'); ?>

<!--====  End of CUSTOM ANALYTICS TAGS - BODY TOP  ====-->

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'cyberize' ); ?></a>

	<header id="header-freeman" class="site-header fixed-top">

		<section id="top-bar">
			<div  class="container-fluid">
				<div class="row">
					<div class="col-xl-4 col-lg-4 col-md-4 text-left">
						<h5><a href="#"><?php the_field('top_call_us_text_and_phone_number', 'options') ?></a></h5>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-4 top-bar-text d-flex align-items-center justify-content-center">
						<ul class="list-inline social-links">
							<?php if( get_field('top_bar_facebook_link', 'options') ): ?>
							   	<li class="list-inline-item">
							   		<a class="social-icon" target="_blank" href="<?php the_field('top_bar_facebook_link', 'options') ?>">
							   			<i class="fab fa-facebook-f"></i>
								   	</a>
								</li>
							<?php endif; ?>
							<?php if( get_field('top_bar_instagram_link', 'options') ): ?>
							   	<li class="list-inline-item">
							   		<a class="social-icon" target="_blank" href="<?php the_field('top_bar_instagram_link', 'options') ?>">
						   				<i class="fab fa-instagram"></i>
								   	</a>
								</li>
							<?php endif; ?>
							<?php if( get_field('top_bar_pinterest_link', 'options') ): ?>
							   	<li class="list-inline-item">
							   		<a class="social-icon" target="_blank" href="<?php the_field('top_bar_pinterest_link', 'options') ?>">
						   				<i class="fab fa-pinterest"></i>
								   	</a>
								</li>
							<?php endif; ?>
							<?php if( get_field('top_bar_linkedin_link', 'options') ): ?>
							   	<li class="list-inline-item">
							   		<a class="social-icon" target="_blank" href="<?php the_field('top_bar_linkedin_link', 'options') ?>">
						   				<i class="fab fa-linkedin"></i>
								   	</a>
								</li>
							<?php endif; ?>
							<?php if( get_field('top_bar_twitter_link', 'options') ): ?>
							   	<li class="list-inline-item">
							   		<a class="social-icon" target="_blank" href="<?php the_field('top_bar_twitter_link', 'options') ?>">
						   				<i class="fab fa-twitter"></i>
								   	</a>
								</li>
							<?php endif; ?>
							<?php if( get_field('top_bar_youtube_link', 'options') ): ?>
							   	<li class="list-inline-item">
							   		<a class="social-icon" target="_blank" href="<?php the_field('top_bar_youtube_link', 'options') ?>">
						   				<i class="fab fa-youtube"></i>
								   	</a>
								</li>
							<?php endif; ?>
						</ul>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-4 text-right">
						<h5><a href="#"><?php the_field('top_bar_email_address', 'options') ?></a></h5>
					</div>
				</div>
			</div>
		</section>

		<!-- Moose_Framework_2 NAVIGATION GOES HERE -->
		<nav class="navbar navbar-expand-xl">
			<div class="container-fluid">
				<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<img class="logo img-fluid" src="<?php the_field('site_logo', 'option') ?>">
				</a>

				<button class="navbar-toggler float-right" type="button" data-toggle="collapse" data-target="#navbar-content" aria-controls="navbar-content" aria-expanded="false" aria-label="<?php esc_html_e( 'Toggle Navigation', 'theme-textdomain' ); ?>">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbar-content">
					<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1', // Defined when registering the menu
						'menu_id'        => 'primary-menu',
						'container'      => false,
						'depth'          => 2,
						'menu_class'     => 'navbar-nav ml-auto  pt-lg-5 pt-xl-0',
						'walker'         => new Bootstrap_NavWalker(), // This controls the display of the Bootstrap Navbar
						'fallback_cb'    => 'Bootstrap_NavWalker::fallback', // For menu fallback
					) );
					?>
				</div>
			</div>
		</nav>

		<!-- Moose_Framework_2 NAVIGATION ENDS HERE -->

	</header><!-- #masthead -->

	<div id="content" class="site-content">
