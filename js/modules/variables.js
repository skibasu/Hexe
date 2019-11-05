class Variables {
	constructor() {
		this.headerHeight = $('.main-header').height();
		this.mobileHeaderHeight = $('.mobil-menu__header').height();
		this.windowHeight = $(window).height();
	}

	setMobileMenuHeight(elem) {
		const e = $(elem);

		this.reloadVariables();

		const { headerHeight, windowHeight } = this;
		const elemHeight = windowHeight - headerHeight;

		e.css('height', elemHeight);
	}
	setHeroPadding(elem) {
		const e = $(elem);

		this.reloadVariables();

		const { headerHeight } = this;

		e.css('padding-top', headerHeight);
	}

	reloadVariables() {
		this.headerHeight = $('.main-header').height();
		this.mobileHeaderHeight = $('.mobil-menu__header').height();
		this.windowHeight = $(window).height();
	}
}

export default Variables;
