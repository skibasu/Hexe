const textarea = area => {
	$(area).keyup(e => {
		var $lineHeight = $(e.target).height() / $(e.target).get(0).rows;
		var $lines = $(e.target)
			.val()
			.split(/\r|\r\n|\n/).length;
		$(e.target).get(0).rows = $lines;
	});
};

export default textarea;
