import Variables from './modules/variables';
import MobileMenu from './modules/mobile-menu';
import onToggleLightbox from './modules/on-toggle-lightbox.js';
import BrandsOrder from './modules/brands-orders.js';
import Slider from './modules/slick-slider.js';
import initMap from './modules/google-map.js';
import area from './modules/textarea-height.js';
import loader from './modules/page-loader';
import SlidingHeader from './modules/sliding-header.js';
import formStyle from './modules/contact-form-styles';

const variables = new Variables();
const menu = new MobileMenu('#header');
const scrollMenu = new MobileMenu('#scroll-header');
const brands = new BrandsOrder();
const slider = new Slider('.block-latest-news__slick-slider');
const fixedHeader = new SlidingHeader('.fixed-header', '.static-header');

/* Ready */
$(document).ready(() => {
	fixedHeader.init();
	const maps = $('.acf-map');
	formStyle();
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
	scrollMenu.init();

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
	//fixedHeader.init();
	variables.setMobileMenuHeight('.mobile-menu__nav');
	variables.setHeroPadding('.hero');
});

/* Scroll */
$(window).on('scroll', () => {
	fixedHeader.init();
});
