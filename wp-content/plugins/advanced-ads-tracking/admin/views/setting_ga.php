<?php
/**
 * @var string $uid
 * @var bool   $is_ga
 */
?>
<label>
	<?php _e( 'Your Tracking ID', 'advanced-ads-tracking' ); ?><br/>
	<input type="text" name="<?php echo esc_attr( $this->plugin->options_slug ); ?>[ga-UID]" value="<?php echo esc_attr( $uid ); ?>" <?php echo esc_attr( $is_ga ? 'required' : '' ); ?> />
</label>
<p class="description">
	<?php _e( 'The Google Analytics property you want the data to be sent to', 'advanced-ads-tracking' ); ?>&nbsp;<code>(UA-123456-1)</code>
</p>
