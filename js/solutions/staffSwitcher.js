$(document).ready(function() {
	
	var staffSwitcher = {
		init : function(config) {
			staffSwitcher.container = 
				config.container || '#staff';
				
			staffSwitcher.$container = $(staffSwitcher.container);
				
			staffSwitcher.setupNav();
			
			staffSwitcher.$nav.find('li:first').click();
		},
		
		showItem : function($navItem, $showItem) {
			$navItem
				.addClass('current')
				.siblings()
				.removeClass('current');
				
			staffSwitcher.hideItem(
				staffSwitcher.$container.find('li:visible'),
				function() {
					$showItem.show();
				}
			);
		},
		
		hideItem : function($hideItem, callback) {
			$hideItem.fadeOut(1000, callback);
		},
		
		setupNav : function() {
			var $container = staffSwitcher.$container;
			staffSwitcher.$nav = 
				$('<ul/>').insertBefore($container);
			
			$container.find('li').each(function(index) {
				var $li = $(this);
				var person = $li.find('h2').text();
				
				$('<li/>')
					.text(person)
					.appendTo(staffSwitcher.$nav)
					.click(function() {
						var $navItem = $(this);
						staffSwitcher.showItem($navItem, $li);
					});
			});
		}
	};

	staffSwitcher.init({ container : '#staff' });
	
	/*
	var $people = $('#staff li');	
	
	var $nav = $('<ul/>').insertAfter('h1');
	
	$people.each(function() {
		var $li = $(this).hide();
		var person = $li.find('h2').text();
		
		$('<li/>')
			.text(person)
			.css({cursor:'pointer'})
			.appendTo($nav)
			.click(function() {
				var $navItem = $(this);
					
				$navItem
					.addClass('current')
					.siblings()
					.removeClass('current');

				$li
					.show()
					.siblings()
					.hide();

			});
			
	});
	
	$nav.find('li:first').click();
	*/
});