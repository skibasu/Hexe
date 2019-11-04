const loader = () => {
	const loader = $('#page-loader');
	loader.fadeOut(500, () => {
		$('body').attr('style', '');
	});
};

export default loader;
