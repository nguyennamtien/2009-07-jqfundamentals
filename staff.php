<?
$page = 'staff';
$title = 'Staff';
?>

<? include('includes/header.php'); ?>

<div id="main">
	<h1>Staff</h1>
	<ul id="staff">
		<li>
			<img src="/images/staff/george.jpg">
			<h2>George</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</li>
		<li>
			<img src="/images/staff/jim.jpg">
			<h2>Jim</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</li>
		<li>
			<img src="/images/staff/rick.jpg">
			<h2>Rick</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</li>
		<li>
			<img src="/images/staff/sally.jpg">
			<h2>Sally</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</li>
		<li>
			<img src="/images/staff/david.jpg">
			<h2>David</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</li>
		<li>
			<img src="/images/staff/melissa.jpg">
			<h2>Melissa</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</li>
		<li>
			<img src="/images/staff/tom.jpg">
			<h2>Tom</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</li>
		<li>
			<img src="/images/staff/steve.jpg">
			<h2>Steve</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</li>
	</ul>
</div>

<script type="text/javascript" charset="utf-8">
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
</script>

<? include('includes/sidebar.php'); ?>
<? include('includes/footer.php'); ?>