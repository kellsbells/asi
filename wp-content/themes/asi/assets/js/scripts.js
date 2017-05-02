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
			Site.smoothScroll();
			Site.mobileNav();
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

		smoothScroll: function() {
			$('a[href*="#"]:not([href="#"])').click(function() {
			    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			      	var target = $(this.hash);
			      	target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			      	if (target.length) {
			      	  	$('html, body').animate({
			      	  	  scrollTop: target.offset().top
			      	  	}, 1000);
			      	  	return false;
			      	}
			    }
			});
		},



		waypoints: function() {
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

		mobileNav: function(){
			console.log('in mobile nav');
			$('.hamburger-helper').on('click', function() {
				$(this).find('.hamburger').toggleClass('active');
				$('.dropdown').toggleClass('active');
			});
		},
	};

	$(document).ready(function() {
		Site.init();
	});

	// Chain any click events here

})(jQuery);