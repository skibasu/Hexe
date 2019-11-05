class BrandOrders {
	constructor() {
		this.row = $('#menu-desktop .brand-archive__row');
		this.mq = window.matchMedia('(min-width:1200px)');
		this.translateLeft = { transform: 'translate(-82px, calc(50% + 1.5px))' };
		this.translateRight = { transform: 'translate(82px, calc(50% + 1.5px))' };
	}

	init() {
		this.checkMedia();
		this.configuration();

		this.mq.addListener(() => {
			this.checkMedia();
			this.configuration();
		});
	}

	checkMedia() {
		if (!this.mq.matches) {
			this.translateLeft = { transform: 'translate(-100px, calc(50% + 1.5px))' };
			this.translateRight = { transform: 'translate(100px, calc(50% + 1.5px))' };
		} else {
			this.translateLeft = { transform: 'translate(-82px, calc(50% + 1.5px))' };
			this.translateRight = { transform: 'translate(82px, calc(50% + 1.5px))' };
		}
	}

	configuration() {
		this.row.each(key => {
			const wrapper = $(this.row[key]);
			const elemLength = wrapper.find('.brand-archive__column').length;

			if (elemLength == 2) {
				wrapper.css('justify-content', 'flex-end');
				wrapper.find('.brand-archive__column--2').css({
					order: '3',
					...this.translateLeft
				});
			}

			if (elemLength == 3) {
				wrapper.find('.brand-archive__column--1').css({ order: '2' });
				wrapper.find('.brand-archive__column--2').css({
					order: '3',
					...this.translateLeft
				});
				wrapper
					.find('.brand-archive__column--3')
					.css({ order: '1', ...this.translateRight });
			}
		});
	}
}

export default BrandOrders;
