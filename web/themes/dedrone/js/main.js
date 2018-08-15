(function ($) {

	Drupal.behaviors.initSlider = {
		attach: function (context, settings) {
			$(document).ready(function(){
				var mySwiper = new Swiper ('.swiper-container', {
					loop: true,
					effect: 'fade',
					speed: 700,
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