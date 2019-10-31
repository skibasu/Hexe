import Variables from 'http://localhost/hexe/wp-content/themes/hexe/js/modules/variables.js';
import MobileMenu from 'http://localhost/hexe/wp-content/themes/hexe/js/modules/mobile-menu.js';
import onToggleLightbox from 'http://localhost/hexe/wp-content/themes/hexe/js/modules/on-toggle-lightbox.js';
import brandsOrder from 'http://localhost/hexe/wp-content/themes/hexe/js/modules/brands-orders.js';

const variables = new Variables();
const menu = new MobileMenu();
const brands = new brandsOrder();
/* init */
(window.init = () => {
	console.log('init');
})();

/* Load */
$(window).on('load', () => {
	console.log('load');
	brands.init();
	menu.init();
	onToggleLightbox();
	variables.setMobileMenuHeight('.mobile-menu__nav');
	variables.setHeroPadding('.hero');
});

/* Resize */
$(window).on('resize', () => {
	console.log('resize');
	variables.setMobileMenuHeight('.mobile-menu__nav');
	variables.setHeroPadding('.hero');
});

/* Scroll */
$(window).on('scroll', () => {
	console.log('scroll');
});
