<?php
/**
 * Option to enable responsive sizes
 *
 * @var bool $responsive_sizes true if enabled.
 */
?><p class="clear">
	<label>
	<input type="checkbox" name="advanced_ad[output][responsive-sizes]" value="1" <?php checked( true, $responsive_sizes ); ?>/>
	<?php esc_html_e( 'Automatically filter out ad sizes that are too large for the available space in the frontend', 'advanced-ads-gam' ); ?>
	</label>
</p>
