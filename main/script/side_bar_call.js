$(document).ready(function() {
	"use strict";

	var caller_btn = $('#filter_call');

	caller_btn.click(function(e) {
		var caller = e.currentTarget;
		var slider = $(frames['chapter_container'].document).find('#filter_slide');
		var table  = $(frames['chapter_container'].document).find('.info_table');
		var cont   = $(frames['chapter_container'].document).find('.main_slide_cont');	
		var head 	 = $(frames['chapter_container'].document).find('.filter_head');

		if (!caller.classList.contains('active')) {
			caller.classList.add('active');
			slider.animate({width: '25%'}, 300);
			table.animate({width: '75%'}, 300);
			setTimeout(function() { cont.fadeIn(150).css('display', 'block'); }, 150);
			head.css('display', 'block');
		} else {
				caller.classList.remove('active');
				cont.fadeOut(300);
				slider.animate({width: '0'}, 300);
				table.animate({width: '100%'}, 300);
				setTimeout(function() { cont.css('display', 'none'), head.css('display', 'none'); }, 150);
		}

		return function close() {
			return [slider, table, cont, head];
		}

	})

});