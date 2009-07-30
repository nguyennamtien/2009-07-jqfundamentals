<div id="sidebar">
	<div class="module" id="search">
		<h4>Search</h4>
		<form action="/search.php" method="get">
			<ul>	
				<li>
					<input type="text" name="search" id="search_input" class="input_text" />
				</li>
				<li class="buttons">
					<input type="submit" class="input_submit" value="Go" />
				</li>
			</ul>
		</form>
	</div>
	<div class="module" id="feedback">
		<h4>Feedback</h4>
		<form action="/feedback/index.php" method="post">
			<ul>	
				<li>
					<label for="email">Email Address</label>
					<input type="text" name="email" class="input_text email" />
				</li>
				<li>
					<label for="name">Name</label>
					<input type="text" class="input_text" name="name" />
				</li>
				<li>
					<label for="feedback">Feedback</label>
					<textarea name="feedback"></textarea>
				</li>
				<li class="buttons">
					<input type="submit" class="input_submit" value="Send Feedback" />
				</li>
			</ul>
		</form>
	</div>
	
	<div class="module" id="twitter"></div>
</div>