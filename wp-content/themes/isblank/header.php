<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Fundify
 * @since Fundify 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]> <html class="ie7 oldie" lang="en" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]> <html class="ie8 oldie" lang="en" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9]> <html class="ie9" lang="en" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="en" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />
	
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
	<![endif]-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="http://www.mattboldt.com/demos/typed-js/js/typed.custom.js" type="text/javascript"></script>
	<script>
	$(function(){

		$("#typed").typed({
			strings: ["amazing.", "ridiculous.", "beautiful.", "stunning.", "hilarious.", "incredible.", "phenomenal.", "revolutionary.", "epic."],
			typeSpeed: 20, // typing speed
			backDelay: 500, // pause before backspacing
		});

	});
	</script>

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>

	<header id="header" class="site-header" role="banner">
		<div class="container">
			<a href="#" class="menu-toggle"><i class="icon-menu"></i></a>

			<nav id="menu">
				<?php wp_nav_menu( array( 'theme_location' => 'primary-left', 'container' => false ) ); ?>
				<?php wp_nav_menu( array( 'theme_location' => 'primary-right', 'container' => false, 'menu_class' => 'right' ) ); ?>
			</nav>
			<!-- / navigation -->

			<hgroup>
				<h1 class="site-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
						<?php $header_image = get_header_image();
						if ( ! empty( $header_image ) ) : ?>
							<img src="<?php echo esc_url( $header_image ); ?>" class="header-image" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" />
						<?php endif; ?>

						<!-- <span><?php bloginfo( 'name' ); ?></span> -->
						<span><a href="/"><img style="height:40px;" src="http://isblank.s3.amazonaws.com/2014/03/logo_0-300x78.png"><a/></span>
					</a>
				</h1>
			</hgroup>
		
		</div>
		<!-- / container -->
	</header>
	<!-- / header -->