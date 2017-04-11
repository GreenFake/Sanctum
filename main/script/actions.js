$(document).ready(function() {
"use strict";

	$('#ham').click(function(e) {
			var menu_call = e.currentTarget;
			var menu 	 		= $('#chaper_menu');
			var table 		= $(frames['chapter_container'].document).find('.info_table');

			var dis = function() {
						menu_call.classList.remove('active');
						menu.animate({left: '-300px'}, 300);
						setTimeout(function() { menu.css('display', 'none'); }, 300);
					}

			if (!menu_call.classList.contains('active')) {
				menu_call.classList.add('active');
				menu.animate({left: '0'}, 300).css('display', 'block');

				$('#eq').click(function(event){
					event.preventDefault();
					$('#chapter_selector').attr("src", "equip.php");
					$('#chap_name').text("Equipment");
					dis();
				});

				$('#hr').click(function(event){
					event.preventDefault();
					$('#chapter_selector').attr("src", "personal.php");
					$('#chap_name').text("Human resources");
					dis();
				});

			} else {
					dis();
			}
	});

});