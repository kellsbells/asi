(function($) {

	var Site = {
		challengeElement: null,
		context: null,
		currentDiv: '',
		backgroundImages: [],
		scrollHeight: 0,

		/**
		 * Initialize site
		 */
		init: function() {
			/**
			 * Set the initial breakpoint context
			 */
			Site.challengeElement = document.querySelector( '.breakpoint-context' );
			Site.challengeContext();
			Site.waypoints();
			Site.rotateWords();
			/**
			 * Check breakpoint context on window resizing
			 * Throttled/debounced for better performance
			 */
			$(window).resize(Site.debounce(function() {
				Site.challengeContext();
			}, 250));
		},

		/**
		 * Device targeting should be based on media queries in CSS,
		 * we do not define this in scripts
		 * Modified from http://davidwalsh.name/device-state-detection-css-media-queries-javascript
		 */
		challengeContext: function() {
			var styles = window.getComputedStyle(Site.challengeElement),
				index = parseInt( styles.getPropertyValue( 'z-index' ), 10 ),
				states = {
					1: 'mobile',
					2: 'tablet'
				};

			Site.context = states[index] || 'desktop';
		},



		waypoints: function() {
			//small logo appears when large logo scrolls up 
			console.log('in waypoints');

			//when in the purple section give pink navigation and sets currentDiv to purple
			var $inview = $( '.js-inview' );



			$inview.each(function() {
		        $(this).waypoint(function() {
		            $(this.element).addClass('active');
		        },
		        { offset: '80%'});
		    });


		},


		debounce: function( fn, delay ) {
			var timer = null;

			return function() {
				var context = this,
					args = arguments;

				clearTimeout( timer );
				
				timer = setTimeout( function() {
					fn.apply(context, args);
				}, delay );
			};
		},

		rotateWords: function(){
			$(function () {
			  	var $anchors = $('.js-rotating-words');
				

				var counter = 0;

				var timer = setInterval(function () {

					


				    if (counter < $anchors.length) {
				    	$anchors.removeClass('active');
				        $($anchors[counter]).addClass('active');
				    }

				    if (counter >= $anchors.length) {
				        clearInterval(timer);
				    }

				    counter++;

				}, 1000);



			});
		},
	};

	$(document).ready(function() {
		Site.init();
	});

	// Chain any click events here

})(jQuery);