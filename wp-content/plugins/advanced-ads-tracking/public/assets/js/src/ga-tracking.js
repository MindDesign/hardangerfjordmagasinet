var AdvAdsGATracker = function ( blogId, UID ) {
	this.name               = 'AdvAdsGATracker_' + blogId;
	this.blogId             = blogId;
	this.cid                = false;
	this.UID                = UID;
	this.analyticsObject    = null;
	this.normalTrackingDone = false;
	// check if someone has already requested the analytics.js and created a GoogleAnalyticsObject
	this.analyticsObject = (
		typeof GoogleAnalyticsObject === 'string' && typeof window[GoogleAnalyticsObject] === 'function'
	)
		? window[GoogleAnalyticsObject]
		: false;

	var self = this;

	if ( ! this.analyticsObject ) {
		// No one has requested analytics.js at this point, require it. @formatter:off
		// phpcs:disable
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','_advads_ga');
		// phpcs:enable
		// @formatter:on

		_advads_ga( 'create', this.UID, 'auto', this.name );
		if ( advads_gatracking_anonym ) {
			_advads_ga( 'set', 'anonymizeIp', true );
		}

		_advads_ga( function () {
			var tracker = _advads_ga.getByName( self.name );
			self.readyCB( tracker );
		} );
		return this;
	}

	// The variable has already been created a variable, use it to avoid conflicts.
	window[GoogleAnalyticsObject]( 'create', this.UID, 'auto', this.name );

	if ( advads_gatracking_anonym ) {
		window[GoogleAnalyticsObject]( 'set', 'anonymizeIp', true );
	}

	window[GoogleAnalyticsObject]( function () {
		var tracker = window[GoogleAnalyticsObject].getByName( self.name );
		self.readyCB( tracker );
	} );

	return this;
}

document.addEventListener( 'DOMContentLoaded', function () {
	'use strict';
	var HOST          = 'https://www.google-analytics.com';
	var BATCH_PATH    = '/batch';
	var COLLECT_PATH  = '/collect';
	var CLICK_TIMEOUT = 1000; // timeout before aborting click post request to Google
	var CLICK_TIMER   = null;
	var clickReqObj   = null;

	var getQueryString    = function ( URL ) {
			var anchorElement  = document.createElement( 'a' );
			anchorElement.href = URL;
			var queryString    = anchorElement.search;
		if ( queryString.length ) {
			queryString = queryString.substr( 1 );
			queryString = queryString.split( '&' );
			if ( queryString.length ) {
				var results = {};
				for ( var i in queryString ) {
					var exp         = queryString[i].split( '=' );
					results[exp[0]] = exp[1];
				}
				return results;
			}
		}

			return [];
	},
		appendQueryString = function ( url, queryString ) {
			for ( var i in queryString ) {
				if ( - 1 !== url.indexOf( '?' ) ) {
					url += '&' + i + '=' + queryString[i];
				} else {
					url += '?' + i + '=' + queryString[i];
				}
			}
			return url;
		},
		abortAndRedirect  = function ( url ) {
			if ( null !== CLICK_TIMER ) {
				clearTimeout( CLICK_TIMER );
				CLICK_TIMER = null;
			}
			if ( null !== clickReqObj ) {
				clickReqObj.abort();
				clickReqObj = null;
			}
			window.location = url;
		};

	AdvAdsGATracker.prototype = {
		constructor: AdvAdsGATracker,

		hasCid: function () {
			return this.cid && this.cid !== '';
		},

		readyCB: function ( tracker ) {
			var self = this;
			this.cid = tracker.get( 'clientId' );
			document.addEventListener( 'advadsGADeferedTrack', function () {
				self.trackImpressions( false );
			} );
			document.addEventListener( 'advadsGADelayedTrack', function () {
				self.trackImpressions( true );
			} );
			this.trackImpressions();
		},

		trackImpressions: function ( delayed ) {
			if ( typeof delayed === 'undefined' ) {
				delayed = false;
			}
			var trackedAds = [];

			// Normal (not deferred) tracking.
			if (
				! this.normalTrackingDone
				&& AdvAdsTrackingUtils.hasAd( AdvAdsTrackingUtils.adsByBlog( advads_tracking_ads, this.blogId ) )
			) {
				trackedAds = trackedAds.concat( advads_tracking_ads[this.blogId] );
			}

			if ( advads_tracking_methods[this.blogId] === 'frontend' ) {
				// means parallel tracking. ads ID-s will be sent at the same time as the normal ajax tracking call
				trackedAds = [];
			}

			if ( delayed ) {
				// delayed ads.
				if (
					typeof advadsGATracking.delayedAds !== 'undefined'
					&& AdvAdsTrackingUtils.hasAd( AdvAdsTrackingUtils.adsByBlog( advadsGATracking.delayedAds, this.blogId ) )
				) {
					trackedAds                               = trackedAds.concat( advadsGATracking.delayedAds[this.blogId] );
					advadsGATracking.delayedAds[this.blogId] = [];
				}
			} else {
				// deferred ads.
				if (
					typeof advadsGATracking.deferedAds !== 'undefined'
					&& AdvAdsTrackingUtils.hasAd( AdvAdsTrackingUtils.adsByBlog( advadsGATracking.deferedAds, this.blogId ) )
				) {
					trackedAds                               = trackedAds.concat( advadsGATracking.deferedAds[this.blogId] );
					advadsGATracking.deferedAds[this.blogId] = [];
				}
			}

			if ( typeof advads !== 'undefined' && typeof advads.privacy.is_ad_decoded !== 'undefined' ) {
				// remove ads that have not been decoded.
				trackedAds = trackedAds.filter( advads.privacy.is_ad_decoded );
			}

			if ( ! trackedAds.length ) {
				// no ads to track
				return;
			}

			if ( ! this.hasCid() ) {
				console.log( ' Advads Tracking >> no clientID. aborting ...' );
				return;
			}

			var trackBaseData = {
				v:   1,
				tid: this.UID,
				cid: this.cid,
				t:   'event',
				ni:  1,
				ec:  'Advanced Ads',
				ea:  advadsGALocale.Impressions,
				dl:  document.location.origin + document.location.pathname,
				dp:  document.location.pathname
			},
				payload       = '';

			for ( var i in trackedAds ) {
				if (
					typeof advads_gatracking_allads[this.blogId][trackedAds[i]] !== 'undefined'
					&& advads_gatracking_allads[this.blogId][trackedAds[i]]['impression']
				) {
					var adInfo  = {
						el: '[' + trackedAds[i] + '] ' + advads_gatracking_allads[this.blogId][trackedAds[i]]['title']
					},
						adParam = AdvAdsTrackingUtils.extend( {}, trackBaseData, adInfo );

					payload += AdvAdsTrackingUtils.param( adParam ) + '\n';
				}
			}
			if ( payload.length ) {
				AdvAdsTrackingUtils.post( HOST + BATCH_PATH, payload );
			}

			this.normalTrackingDone = true;
		},

		trackClick: function ( id, serverSide, ev, el ) {
			if ( ! this.hasCid() ) {
				console.log( ' Advads Tracking >> no clientID. aborting ...' );
				return;
			}
			if ( typeof serverSide === 'undefined' ) {
				serverSide = true;
			}

			var trackData = {
				v:   1,
				tid: this.UID,
				cid: this.cid,
				t:   'event',
				ni:  1,
				ec:  'Advanced Ads',
				ea:  advadsGALocale.Clicks,
				el:  '[' + id + '] ' + advads_gatracking_allads[this.blogId][id]['title'],
				dl:  document.location.origin + document.location.pathname,
				dp:  document.location.pathname
			};

			// Send the data and stop workflow if it is not a linkout link
			if ( ! ev && ! el ) {
				AdvAdsTrackingUtils.post( HOST + COLLECT_PATH, trackData );
				return;
			}

			var url = advads_gatracking_allads[this.blogId][id]['target'];
			if ( typeof advadsGATracking.postContext === 'undefined' ) {
				url = url.replace( '[CAT_SLUG]', advadsGATracking.postContext.cats );
				url = url.replace( '[POST_ID]', advadsGATracking.postContext.postID );
				url = url.replace( '[POST_SLUG]', advadsGATracking.postContext.postSlug );
			}
			url = url.replace( '[AD_ID]', id );

			var href = el.getAttribute( 'href' );
			if ( serverSide ) {
				url = href;
			} else {
				url = appendQueryString( url, getQueryString( href ) );
				if (
					typeof advads_gatracking_transmitpageqs[this.blogId] !== 'undefined'
					&& advads_gatracking_transmitpageqs[this.blogId][id]
				) {
					url = appendQueryString( url, getQueryString( document.location.href ) );
				}
			}
			var newTab = ! ! el.getAttribute( 'target' );
			if ( newTab ) {
				// the url is opened in a new tab/window
				AdvAdsTrackingUtils.post( HOST + COLLECT_PATH, trackData );
				// no server side tracking, change the link to the real target before the browser opens a new tab
				if ( ! serverSide ) {
					el.setAttribute( 'href', url );
				}
			} else {
				// intercept the default click event behavior
				ev.preventDefault();
				if ( CLICK_TIMER === null && clickReqObj === null ) {
					CLICK_TIMER = setTimeout( function () {
						abortAndRedirect( url, newTab );
					}, CLICK_TIMEOUT );
					clickReqObj = AdvAdsTrackingUtils
						.post( HOST + COLLECT_PATH, trackData )
						.done( function () {
							clearTimeout( CLICK_TIMER );
							CLICK_TIMER = null;
							clickReqObj = null;
							abortAndRedirect( url );
						} );
				}
			}
		}
	};

	for ( var bid in advads_tracking_methods ) {
		var bid = parseInt( bid );
		if ( isNaN( bid ) ) {
			continue;
		}
		if ( AdvAdsTrackingUtils.blogUseGA( bid ) ) {
			if ( typeof advads !== 'undefined' && advads.privacy.get_state() === 'unknown' ) {
				document.addEventListener( 'advanced_ads_privacy', function ( event ) {
					if ( event.detail.state === 'not_needed' || event.detail.state === 'accepted' ) {
						advancedAdsGAInstances.getInstance( bid );
					}
				} );
				return;
			}

			advancedAdsGAInstances.getInstance( bid );
		}
	}
} );
