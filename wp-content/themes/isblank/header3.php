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
	<script>
	$(document).ready( function() {
		$( '#content' ).each(function () {
    		this.style.setProperty( 'background', '#eff1f5', 'important' );
		});
		$( '#main-content .entry-content').css('width', '100%');
        $( '.site-title img').css('-webkit-filter', 'invert(100%)');
        $( '#content > div > div > form > p.atcf-submit-campaign-image ').css('margin-top','100px'); 
        $( '.atcf-submit-campaign h3, .atcf-profile h3').css('color', '#000000');
	$(".title.pattern-1").css("display", "none");
	$(".title.pattern-2").css("display", "none");
	$(".title.pattern-3").css("display", "none");
	$(".title.pattern-4").css("display", "none");
        $( 'input[type=file]:after').css('color', '#000000');
        $( 'input[type=file]:after').css('border-color', '#000000');
	});
	</script>

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>

	<header id="header" class="site-header" role="banner">
		<div class="container">

			<!-- / navigation -->

			<hgroup>
				<h1 class="site-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
						<?php $header_image = get_header_image();
						if ( ! empty( $header_image ) ) : ?>
							<img src="<?php echo esc_url( $header_image ); ?>" class="header-image" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" />
						<?php endif; ?>

						<!-- <span><?php bloginfo( 'name' ); ?></span> -->
						<span><a href="/"><img style="height:40px;" src="http://isblank.s3.amazonaws.com/2014/03/logo-white.png"><a/></span>
					</a>
				</h1>
			</hgroup>
		
		</div>
		<!-- / container -->
	</header>
	<!-- / header -->