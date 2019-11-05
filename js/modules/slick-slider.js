class Slider {
	constructor(elem) {
		this.defaultConf = {
			slidesToShow: 1,
			slidesToScroll: 1,
			arrows: false,
			infinite: true,
			mobileFirst: true,
			autoplay: true,
			autoplaySpeed: 3000,
			responsive: [
				{
					breakpoint: 992,
					settings: {
						slidesToShow: 2,
						slidesToScroll: 1,
						infinite: true
					}
				}
			]
		};

		this.config = { ...this.defaultConf };
		this.elem = $(elem);
	}
	init() {
		this.elem.slick(this.config);
	}
}

export default Slider;
