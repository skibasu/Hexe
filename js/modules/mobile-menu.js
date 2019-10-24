import screenLock from 'http://localhost/hexe/wp-content/themes/hexe/js/constants/lock-screen.js';

class MobileMenu {
	constructor() {
		this.menu = $('.mobile-menu');
		this.nav = $('.mobile-menu nav');
		this.liElem = $('.mobile-menu nav li');
		this.hamburger = $('.hamburger');
		this.closeBurger = $('.hamburger.closeBurger');
		this.tl = new TimelineMax({ paused: true })

			.set(this.menu, {
				display: 'block',
				opacity: 0
			})

			.set(this.liElem, { opacity: 0, y: -50 })

			.to(this.menu, 0.4, {
				opacity: 1
			})

			.staggerTo(this.liElem, 0.3, { opacity: 1, y: 0, ease: Power4.easeOut }, 0.1);
	}

	init = () => {
		const { hamburger, menuToggle } = this;
		hamburger.on('click', menuToggle);
	};

	menuToggle = () => {
		const { hamburger, tl, nav } = this;

		if (this.hamburger.hasClass('closeBurger')) {
			tl.reverse();
			hamburger.removeClass('closeBurger');
		} else {
			nav.scrollTop(0);
			tl.play();
			hamburger.addClass('closeBurger');
		}
	};
}

export default MobileMenu;
