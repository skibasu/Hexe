import screenLock from 'http://localhost/hexe/wp-content/themes/hexe/js/constants/lock-screen.js';

class MobileMenu {
	constructor() {
		this.menu = $('.mobile-menu');
		this.nav = $('.mobile-menu nav');
		this.liElem = $('.mobile-menu nav li');
		this.hamburger = $('.hamburger');
		this.closeBurger = $('.hamburger.closeBurger');
		this.mq = window.matchMedia('(min-width:992px)');
		this.tl = new TimelineMax({ paused: true })
			.set(this.menu, { display: 'none' })
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
		const { hamburger, menuToggle, mq, closeMenu } = this;
		hamburger.on('click', menuToggle);
		closeMenu();
		mq.addListener(closeMenu);
	};

	menuToggle = () => {
		const { hamburger, tl, nav } = this;

		if (this.hamburger.hasClass('closeBurger')) {
			tl.reverse();
			screenLock.unlock();
			hamburger.removeClass('closeBurger');
		} else {
			nav.scrollTop(0);
			tl.play();
			screenLock.lock();
			hamburger.addClass('closeBurger');
		}
	};
	closeMenu = () => {
		const { mq, menu, hamburger, tl } = this;
		if (mq.matches) {
			tl.reverse();
			screenLock.unlock();
			hamburger.removeClass('closeBurger');
		}
	};
}

export default MobileMenu;
