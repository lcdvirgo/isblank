<?php
/**
 * Campaign meta.
 *
 * @package Fundify
 * @since Fundify 1.5
 */

global $campaign;

$end_date = date_i18n( get_option( 'date_format' ), strtotime( $campaign->end_date() ) )
?>

<div class="post-meta campaign-meta">
	<?php do_action( 'fundify_campaign_meta_before' ); ?>

	<div class="date">
		<i class="icon-calendar"></i>
		<?php printf( __( 'Topic created on: %s', 'fundify' ), get_the_date() ); ?>
	</div>

	<?php if ( $campaign->location() ) : ?>
	<div class="location">
		<i class="icon-compass"></i>
		<?php echo $campaign->location(); ?>
	</div>
	<?php endif; ?>

	<?php do_action( 'fundify_campaign_meta_after' ); ?>
</div>