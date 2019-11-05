import screenLock from '../constants/lock-screen.js';

class MobileMenu {
	constructor(header) {
		this.header = $(header);
		this.menu = this.header.find('.mobile-menu');
		this.nav = this.header.find('.mobile-menu nav');
		this.liElem = this.header.find('.mobile-menu nav li');
		this.hamburger = this.header.find('.hamburger');
		this.closeBurger = this.header.find('.hamburger.closeBurger');
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

	init() {
		this.hamburger.on('click', this.menuToggle.bind(this));
		this.closeMenu();
		this.mq.addListener(this.closeMenu.bind(this));
	}

	menuToggle() {
		if (this.hamburger.hasClass('closeBurger')) {
			this.tl.reverse();
			screenLock.unlock();
			this.hamburger.removeClass('closeBurger');
		} else {
			this.nav.scrollTop(0);
			this.tl.play();
			screenLock.lock();
			this.hamburger.addClass('closeBurger');
		}
	}
	closeMenu() {
		if (this.mq.matches) {
			this.tl.reverse();
			screenLock.unlock();
			this.hamburger.removeClass('closeBurger');
		}
	}
}

export default MobileMenu;
