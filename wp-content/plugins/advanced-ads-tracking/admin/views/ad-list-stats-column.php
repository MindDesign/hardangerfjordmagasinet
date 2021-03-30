<?php

$sums = Advanced_Ads_Tracking_Util::get_instance()->get_sums();

$impr   = ( isset( $sums['impressions'][ $ad_id ] ) ) ? $sums['impressions'][ $ad_id ] : 0;
$clicks = ( isset( $sums['clicks'][ $ad_id ] ) ) ? $sums['clicks'][ $ad_id ] : 0;

$ad               = new Advanced_Ads_Ad( $ad_id );
$ad_options       = $ad->options();
$tracking_options = Advanced_Ads_Tracking_Plugin::get_instance()->options();
$target           = Advanced_Ads_Tracking_Util::get_link( $ad );

// no tracking for Google Ad Manager and Yielscale.
if ( in_array( $ad->type, array( 'yieldscale', 'gam' ), true ) ) {
	return;
}

global $post;
$published = $post->post_status === 'publish';
?>
<ul>
	<li><strong><?php _e( 'Impressions', 'advanced-ads-tracking' ); ?>
			:</strong>&nbsp;<?php echo number_format_i18n( $impr ); ?></li>
	<?php
	if (
		( isset( $ad_options['tracking']['enabled'] ) && $ad_options['tracking']['enabled'] === 'enabled' )
		|| ( ! isset( $tracking_options['everything'] ) || ( 'true' === $tracking_options['everything'] ) )
	) :
		?>
		<li>
			<strong><?php esc_html_e( 'Clicks', 'advanced-ads-tracking' ); ?>:</strong>&nbsp;<?php echo esc_html( number_format_i18n( $clicks ) ); ?>
		</li>
		<?php if ( 0 !== $impr ) : ?>
		<li><strong><?php esc_html_e( 'CTR', 'advanced-ads' ); ?>:</strong>&nbsp;<?php echo esc_html( number_format_i18n( 100 * $clicks / $impr, 2 ) ); ?>%</li>
		<?php endif; ?>
	<?php endif; ?>
	<?php if ( $target ) : ?>
	<li>
		<strong><?php esc_html_e( 'Target url', 'advanced-ads-tracking' ); ?>:</strong>&nbsp;
		<div class="target-link-div">
			<div class="target-link-text">
				<a href="<?php echo esc_url( $target ); ?>" target="_blank"><?php echo esc_html( $target ); ?></a>
			</div>
			<a href="<?php echo esc_url( $target ); ?>" target="_blank"><?php esc_html_e( 'show', 'advanced-ads-tracking' ); ?></a>
		</div>
	</li>
	<?php endif; ?>
</ul>
<?php if ( $published ) : // avoid admin stats for non published ads ?>
	<div class="row-actions">
		<a target="blank"
		   href="<?php echo Advanced_Ads_Tracking_Admin::admin_30days_stats_url( $ad_id ); ?>"><?php _e( 'Statistics for the last 30 days', 'advanced-ads-tracking' ); ?></a>
	</div>
<?php endif; ?>
