class SlidingHeader {
	constructor() {
		this.header = $('#header');
		this.slidingHeader = $('#scroll-header');
		this.hero = $('.hero');
		this.isOut = true;

		this.tl = new TimelineMax({
			paused: true
		})
			.to(this.header, 0.3, { opacity: 0 })
			.add('zero')
			.fromTo(this.slidingHeader, 0.3, { yPercent: -100 }, { yPercent: 0 }, 'zero');
	}
	init() {
		const scrollTop = $(window).scrollTop();
		const heroH = this.hero.innerHeight();

		if (scrollTop >= heroH && this.isOut) {
			this.slideIn();
		} else if (scrollTop < heroH && scrollTop != 0 && !this.isOut) {
			this.slideOut();
		}
		return false;
	}

	slideIn() {
		this.isOut = false;
		this.tl.play();
	}
	slideOut() {
		this.tl.reverse();
		this.isOut = true;
	}
}

export default SlidingHeader;
