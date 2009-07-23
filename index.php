<?
$page = 'home';
?>

<? include('includes/header.php'); ?>

<div id="main">
	<h1>Eat here.</h1>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

	<ul id="hero">
		<li>
			<h2>Fruit</h2>
			<img src="images/fruit.jpg" alt="fruit" />
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</li>
		<li>
			<h2>Vegetables</h2>
			<img src="images/vegetable.jpg" alt="vegetables" />
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</li>
		<li>
			<h2>Bread</h2>
			<img src="images/bread.jpg" alt="bread" />
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</li>
	</ul>
	
	<div class="module" id="blog">
		<h2>Blog</h2>
		<ul>
			<li>
				<h3><a href="/blog/post-1.php">Blog post 1</a></h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</li>
			<li>
				<h3><a href="/blog/post-2.php">Blog post 2</a></h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</li>
		</ul>
	</div>
	
	<div class="module" id="specials">
		<h2>Specials</h2>
		<p>Choose the day of the week to see the specials:</p>
		<form action="/specials/index.php" method="get">
			<ul>	
				<li>
					<select name="day">
						<option value="">Select</option>
						<option value="monday">Monday</option>
						<option value="tuesday">Tuesday</option>
					</select>
				</li>
				<li class="buttons">
					<input type="submit" class="input_submit" value="Go" />
				</li>
			</ul>
		</form>
		<div class="template special">
			<img src="/images/special.jpg" alt="" />
			<h3>Tuesday</h3>
			<p>This is the text about the special.</p>
		</div>
	</div>
</div>

<? include('includes/sidebar.php'); ?>
<? include('includes/footer.php'); ?>