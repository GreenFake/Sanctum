$(document).ready(function() {
	
//get value of filter

$('#exe_filter').click(function(event) {
	event.preventDefault();

	var name 		= $('#filter_name').val();
	var tb_name = $('tr.inf').children('.name');

	for (i = 0; i < tb_name.length; i ++) {
		var eval_name = tb_name[i].innerText;
		console.log(eval_name);
	}

	console.log(name);
});

});