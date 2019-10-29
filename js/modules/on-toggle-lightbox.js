import screenLock from 'http://localhost/hexe/wp-content/themes/hexe/js/constants/lock-screen.js';

const onToggleLightbox = () => {
	const wrapper = $('.posts-content');
	const innerWrapper = $('.posts-content__lightbox-inner-wrapper');
	const postDataWrapper = $('.post-data');
	const lightbox = $('.posts-content__lightbox');
	const buttonOpen = $('.on-open');

	const WPAJAX = example_ajax_obj.ajaxurl;

	const tl = new TimelineMax({ paused: true })
		.set(lightbox, { display: 'none' })
		.set(lightbox, { display: 'flex', opacity: 0 })
		.set(innerWrapper, { opacity: 0, y: -25 })
		.to(lightbox, 0.5, {
			opacity: 1
		})
		.to(innerWrapper, 0.3, { opacity: 1, y: 0 });

	const loadPost = e => {
		e.preventDefault();

		tl.play().eventCallback('onComplete', () => screenLock.lock());

		const that = e.currentTarget;

		const postId = $(that)
			.parents('.post-article')
			.data('id');

		$.ajax({
			method: 'POST',
			url: WPAJAX,
			data: {
				action: 'ajax_load_post',
				postId
			},
			success: res => postDataWrapper.html(res.data)
		});
	};

	buttonOpen.on('click', loadPost);

	wrapper.delegate('.on-close', 'click', () => {
		screenLock.unlock();
		tl.reverse();
	});
};

export default onToggleLightbox;
