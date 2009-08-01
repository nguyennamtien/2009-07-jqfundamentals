(function($) {
	$.fn.hoverClass = function(c) {
		var c = c ? c : $.fn.hoverClass.defaults.c;
		
		return $(this).each(function(index) {
			$(this).hover(function() {
				$(this).addClass(c);
			}, function() {
				$(this).removeClass(c);
			});
		});
		
		/*
		return $(this).hover(function() {
			$(this).addClass(c);
		}, function() {
			$(this).removeClass(c);
		});
		*/
	};
	
	$.fn.hoverClass.defaults = {
		c : 'hover'
	};
	
	
	
	$.fn.createModule = function(config) {
		
		var config = config || {};
		
		$.fn.createModule.defaults = {
			showSpeed : 300,
			hideSpeed : 300
		};
		
		var settings = $.extend($.fn.createModule.defaults, config);
		
		return $(this).each(function() {
			var $module = $(this);
			var $contents = $module.children().not('h4');

			$('<p class="closer">Close</p>')
				.prependTo($module)
				
				.toggle(function() {
					$(this).text('Open');
					$contents.slideUp(settings.hideSpeed);
				}, function() {
					$(this).text('Close');
					$contents.slideDown(settings.showSpeed);
				});
		});
	};
	
	
	
})(jQuery);



$(document).ready(function() {
	$.fn.hoverClass.defaults = {
		c : 'somethingElse'
	};
	
	$('#nav li').hoverClass();
	
	$('#sidebar .module').createModule();
});
