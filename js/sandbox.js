$(document).ready(function() {
	/*
	var $foo = $('ul li').each(function(i) {
		var $this = $(this);
		console.log($this.text($this.text() + i));
	});

	var $foo = $('ul li').text('new text');
	
	$('ul li').eq(5);
	
	console.log($('ul li a').attr('title', 'new title'));
	console.log($('ul li a').attr('title'));

	$('ul li:first')
		.addClass('current')
			.siblings()
			.removeClass('current');
			
	$('#foo').clone().attr('id', 'foo2').insertBefore('h1');
	*/
	
	// $('#foo').insertAfter('h1');
	


	var $p = $('<p>a new paragraph</p>');
	$p.css({color:'red'});

	$('h1').click(function() {
		$p.appendTo('body');
		$(this).empty();
	});
});