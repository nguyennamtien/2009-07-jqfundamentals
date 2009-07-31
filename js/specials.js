$(document).ready(function() {
	var $form = $specials.find('form');
	var $select = $form.find('select');
	
	/*
	$select.one('change', function() {
		$.getScript('/js/handleSpecials.js');
	}); 
	*/
	
	
	var $specials = $('#specials');
	
	
	var $special = $('<div/>').insertAfter($select);
	
	$form.find('input.input_submit').remove();
	
	$select.bind('change', function() {
		var day = $select.val();
		var action = $form.attr('action');
		
		$.getJSON(
			$form.attr('action'), 
			{ day : day },
			function(resp) {
				console.dir(resp);
			}
		);

		/*
		$.ajax({
			method : $form.attr('method'),
			url : action,
			data : $form.serialize(),
			dataType : 'json',
			success : function(response) {
				var color = response.color;
				var image = response.image;
				var text = response.text;
				var title = response.title;

				$special.empty();
				
				$special
					.append('<h3>' + title + '</h3>');
					
				$('<img/>')
					.attr('src', image)
					.appendTo($special);
					
				$special
					.append('<p>' + text + '</p>');
					
				$special.css({'color':color});
				
				var timestamp = new Date().getTime();
			}
		});
		*/
	});
	
});
