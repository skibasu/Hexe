/* init */
(window.init = () => {
	console.log('init');
})();

/* Load */
$(window).on('load', () => {
	console.log('load');
});

/* Resize */
$(window).on('resize', () => {
	console.log('resize');
});

/* Scroll */
$(window).on('scroll', () => {
	console.log('scroll');
});
