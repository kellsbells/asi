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

			Site.waypoints();
			Site.rotateWords();
			Site.smoothScroll();
			Site.mobileNav();
			Site.testimonialSlider();
		},


		smoothScroll: function() {
			$('a[href*="#"]:not([href="#"])').click(function() {
			    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			      	var target = $(this.hash);
			      	target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			      	if (target.length) {
			      	  	$('html, body').animate({
			      	  	  scrollTop: target.offset().top - 80
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
				}, 800);
			});
		},

		mobileNav: function(){
			console.log('in mobile nav');
			$('.hamburger-helper').on('click', function() {
				$(this).find('.hamburger').toggleClass('active');
				$('.dropdown').toggleClass('active');
			});

			$('.dropdown a').on('click', function() {
				$('.dropdown').removeClass('active');
				$('.hamburger').removeClass('active');
			});
		},

		testimonialSlider: function() {
			$('.js-testimonials').slick({
				infinite: true,
				slidesToShow: 2,
				slidesToScroll: 1,
				autoplay: true,
  				autoplaySpeed: 2000,
  				arrows: false,
  				dots: true,
  				adaptiveHeight: true,
  				responsive: [
  					{
  						breakpoint: 800,
  						settings: {
  							slidesToShow: 1,
  						}
  					}
  				]
			});
		},
	};

	$(document).ready(function() {
		Site.init();
	});

	// Chain any click events here

})(jQuery);