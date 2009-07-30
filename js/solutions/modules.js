$(document).ready(function() {
	$('#sidebar .module').each(function(index) {

		var $module = $(this);
		var $contents = $module.children().not('h4');

		$('<p class="closer">Close</p>')
			.prependTo($module)
			.toggle(function() {
				$(this).text('Open');
				$contents.slideUp();
			}, function() {
				$(this).text('Close');
				$contents.slideDown();
			});

	});
});