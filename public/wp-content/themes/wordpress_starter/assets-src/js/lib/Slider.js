import $ from 'jquery'

$(function () {
	/**
	 * Swiper
	 */
	var mySwiper = new Swiper('.swiper-container', {
		loop: true,
		autoplay: {
			delay: 3000,
			stopOnLastSlide: false,
			disableOnInteraction: false,
			reverseDirection: false,
		},
		pagination: {
			el: '.swiper-pagination',
			type: 'bullets',
			clickable: true,
		},
	})
})
