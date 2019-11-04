class SlidingHeader {
	constructor(header, cls) {
		this.header = $(header);
		this.hero = $('.hero');

		this.cls = cls;

		this.tl = new TimelineMax({ paused: true })

			.to(this.cls, 0.2, { opacity: 0 })
			.to(this.header, 0.4, { y: 0 });
	}
	init = () => {
		const scrollTop = $(window).scrollTop();
		const heroH = this.hero.innerHeight();

		if (scrollTop >= heroH) {
			this.slideIn();
		} else if (scrollTop < heroH && scrollTop != 0) {
			this.slideOut();
		}
	};

	slideIn = () => {
		this.tl.play();
	};
	slideOut = () => {
		this.tl.reverse();
	};
}

export default SlidingHeader;
