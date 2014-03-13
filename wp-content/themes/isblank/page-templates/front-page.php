<?php
/**
 * Template Name: Front Page
 *
 * This should be used in conjunction with the Fundify plugin.
 *
 * @package Fundify
 * @since Fundify 1.0
 */

global $wp_query;

get_header(); 
?>
	

	<?php if ( null == fundify_theme_mod( 'hero_slider' ) ) : ?>
	<div id="home-page-featured">
		<div class="wrapper bg-stars">
		<div class="const">
		<img class="constellations" src="http://isblank.s3.amazonaws.com/2014/03/star.png">
		</div>
		<div class="pure-g-r">
		</div>
		</div>


		<h1 style="font-weight:700; font-size:65px;">
			<?php 
				$string = fundify_theme_mod( 'hero_text' ); 
				$lines = explode( "\n", $string );
			?>
			<span id="typedcomplete">Sochi is <a href="#content"><span id="typed" style="font-weight:300;"></span></span>
			<div id="tagline"><span class="animated bounceIn" style="display:none;"></span></div></a>
		</h1>
		<!-- / container -->
	</div>
	<?php else : ?>
		<?php echo do_shortcode( fundify_theme_mod( 'hero_slider' ) ); ?>
	<?php endif; ?>

	<div id="content">
		<div class="container">
						
			<?php locate_template( array( 'searchform-campaign.php' ), false ); ?>
			<?php locate_template( array( 'content-campaign-sort.php' ), false ); ?> 

			<div id="projects">
				<section>
					<?php 
						if ( fundify_is_crowdfunding()  ) :
							$wp_query = new ATCF_Campaign_Query( array(
								'paged' => ( get_query_var( 'page' ) ? get_query_var( 'page' ) : 1 )
							) );
						else :
							$wp_query = new WP_Query( array(
								'posts_per_page' => get_option( 'posts_per_page' ),
								'paged'          => ( get_query_var('page') ? get_query_var('page') : 1 )
							) );
						endif;

						if ( $wp_query->have_posts() ) :
					?>

						<?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
							<?php get_template_part( 'content', fundify_is_crowdfunding() ? 'campaign' : 'post' ); ?>
						<?php endwhile; ?>

					<?php else : ?>

						<?php get_template_part( 'no-results', 'index' ); ?>

					<?php endif; ?>
				</section>

				<?php do_action( 'fundify_loop_after' ); ?>
			</div>
		</div>
		<!-- / container -->
	</div>
	<!-- / content -->

<?php get_footer(); ?>