(function ($) {

	Drupal.behaviors.initSlider = {
		attach: function (context, settings) {
			$(document).ready(function(){
				var swiperMainFull = new Swiper ('.slider-main .swiper-container', {
					loop: true,
					effect: 'fade',
					speed: 700,
					pagination: {
						el: '.swiper-pagination',
						clickable: true
					}
				});

				var swiperMainInner = new Swiper ('.slider-inner .swiper-container', {
					loop: true,
					effect: 'slide',
					speed: 500,
					autoplay: {
						delay: 1118000,
					},
					pagination: {
						el: '.swiper-pagination',
						clickable: true
					}
				})
			});
		}
	};

	Drupal.behaviors.activeFirstTab = {
		attach: function (context, settings) {
			$(document).ready(function(){
				$('.horizontal-tabs .nav-tabs li:first-child a').addClass('active');
			});
		}
	};

})(jQuery);