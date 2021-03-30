// needs jQuery because the event gets fired from jQuery.
( function () {
	var targets = 'advads-sticky-trigger';
	if ( typeof advanced_ads_layer_settings !== 'undefined' ) {
		targets += ' ' + advanced_ads_layer_settings.layer_class + '-trigger';
	}
	jQuery( document ).on( targets, function ( ev ) {
		var $this   = jQuery( this ),
			$target = jQuery( ev.target ),
			ads     = {},
			bid     = parseInt( $target.attr( 'data-advadstrackbid' ), 10 ),
			id      = parseInt( $target.attr( 'data-advadstrackid' ), 10 ),
			addAd   = function ( id, bid ) {
				// check if this ad was initially set to be tracked.
				if (
					typeof AdvAdsImpressionTracker.initialAds[bid] !== 'undefined'
					&& AdvAdsImpressionTracker.initialAds[bid].indexOf( id ) === - 1
				) {
					return;
				}
				if ( typeof ads[bid] === 'undefined' ) {
					ads[bid] = [];
				}

				ads[bid].push( id );
			};

		if ( bid ) {
			addAd( id, bid );
		} else {
			if ( ! $target.find( '[data-advadstrackbid]' ).length ) {
				return;
			}
			$target.find( '[data-advadstrackbid]' ).each( function () {
				bid = parseInt( $this.attr( 'data-advadstrackbid' ), 10 );
				id  = parseInt( $this.attr( 'data-advadstrackid' ), 10 );
				addAd( id, bid );
			} );
		}

		if ( AdvAdsTrackingUtils.blogUseGA( bid ) ) {
			advadsGATracking.delayedAds = AdvAdsTrackingUtils.concat( advadsGATracking.delayedAds, ads );
		}

		AdvAdsImpressionTracker.track( ads, 'delayed' );
	} );
} )( jQuery );
