import Variables from 'http://localhost/hexe/wp-content/themes/hexe/js/modules/variables.js';
import MobileMenu from 'http://localhost/hexe/wp-content/themes/hexe/js/modules/mobile-menu.js';
import onToggleLightbox from 'http://localhost/hexe/wp-content/themes/hexe/js/modules/on-toggle-lightbox.js';
import brandsOrder from 'http://localhost/hexe/wp-content/themes/hexe/js/modules/brands-orders.js';
import Slider from 'http://localhost/hexe/wp-content/themes/hexe/js/modules/slick-slider.js';
import initMap from 'http://localhost/hexe/wp-content/themes/hexe/js/modules/google-map.js';
import area from 'http://localhost/hexe/wp-content/themes/hexe/js/modules/textarea-height.js';
import loader from 'http://localhost/hexe/wp-content/themes/hexe/js/modules/page-loader.js';
import SlidingHeader from 'http://localhost/hexe/wp-content/themes/hexe/js/modules/sliding-header.js';

const variables = new Variables();
const menu = new MobileMenu();
const brands = new brandsOrder();
const slider = new Slider('.block-latest-news__slick-slider');
const fixedHeader = new SlidingHeader('.fixed-header', '.static-header');
/* init */
(window.init = () => {
	fixedHeader.init();
})();

/* Ready */
$(document).ready(() => {
	const maps = $('.acf-map');

	if (maps.length) {
		$('.acf-map').each(function() {
			const map = initMap($(this));
		});
	}

	if ($('.block-contact-form__area')) {
		area('.block-contact-form__area');
	}
});

/* Load */
$(window).on('load', () => {
	loader();
	brands.init();
	menu.init();

	if ($('.posts-content').length) {
		onToggleLightbox('.posts-content');
	}

	if ($('.block-latest-news').length) {
		onToggleLightbox('.block-latest-news');
	}

	if ($('.block-latest-news__slick-slider').length) {
		slider.init('.block-latest-news__slick-slider');
	}

	variables.setMobileMenuHeight('.mobile-menu__nav');
	variables.setHeroPadding('.hero');
});

/* Resize */
$(window).on('resize', () => {
	fixedHeader.init();
	variables.setMobileMenuHeight('.mobile-menu__nav');
	variables.setHeroPadding('.hero');
});

/* Scroll */
$(window).on('scroll', () => {
	fixedHeader.init();
});
