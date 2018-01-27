(($) => {

	$.stickyMenu = function () {
		var scrollValue = 0;
		$(window).scroll(function () {
			let scroll = $(this).scrollTop();
			let trigger = $('#brand');
			let point = trigger.position().top + trigger.height();

			let scrolled = scroll - scrollValue;
			scrollValue = scroll;

			if (scroll >= point && !$('#sticky-menu').hasClass('sticky-menu-show')) {
				if (scrolled < 0) $('#sticky-menu').addClass('sticky-menu-show');
			} else if (scroll >= point && $('#sticky-menu').hasClass('sticky-menu-show') && scrolled > 0) {
				$('#sticky-menu').removeClass('sticky-menu-show');
			} else if (scroll < point && $('#sticky-menu').hasClass('sticky-menu-show')) {
				$('#sticky-menu').removeClass('sticky-menu-show');
			}
		});
	};

})(jQuery);

$(window).on('load', function () {
	var $root = $('html, body');

	$('a[href^="#"]').click(function () {
	    $root.animate({
	        scrollTop: $( $.attr(this, 'href') ).offset().top
	    }, 500);

	    return false;
	});
});

$.stickyMenu();