import 'chosen-js';

const contactFormStyles = () => {
	const optionPlaceholder = $('.block-contact-form__form-wrapper').find('option');
	if (optionPlaceholder.length) {
		$('select').chosen({ disable_search: true, allow_single_deselect: true });
		optionPlaceholder
			.eq(0)
			.attr('value', '')
			.prop('disabled', true)
			.prop('selected', true);
	}
};
export default contactFormStyles;
