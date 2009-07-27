<?
$page = 'staff';
$title = 'Staff';
?>

<? include('includes/header.php'); ?>

<div id="main">
	<h1>Takeout</h1>
	<form action="/dummy.php" method="post" id="takeout_calculator">
		<fieldset>
			<legend>Contact Information</legend>
			<ul>
				<li>
					<label for="name">Name</label>
					<input type="text" class="input_text" name="name" />
				</li>	
				<li>
					<label for="address">Address</label>
					<input type="text" class="input_text" name="address" />
				</li>	
				<li>
					<label for="email">Email</label>
					<input type="text" class="input_text" name="email" />
				</li>	
			</ul>
		</fieldset>
		<fieldset>
			<legend>Order</legend>
			<ul>
				<li class="checkbox">
					<input type="checkbox" name="chicken" />
					<label for="chicken">Chicken ($5.00)</label>
					<input type="hidden" value="5.00" />
				</li>
				<li class="checkbox">
					<input type="checkbox" name="chicken" />
					<label for="chicken">Shrimp ($5.00)</label>
					<input type="hidden" value="5.00" />
				</li>
				<li class="checkbox">
					<input type="checkbox" name="chicken" />
					<label for="chicken">Stir Fry ($5.00)</label>
					<input type="hidden" value="5.00" />
				</li>
				<li class="checkbox">
					<input type="checkbox" name="chicken" />
					<label for="chicken">Tomatoes ($5.00)</label>
					<input type="hidden" value="5.00" />
				</li>
			</ul>
		</fieldset>
		<fieldset>
			<legend>Tip &amp; Checkout</legend>
			<ul>
				<li>
					<label for="tip">Tip</label>
					<input type="text" class="input_text" name="tip" />
				</li>
				<li>
					<label for="total">Total: <span id="total">$0.00</span></label>
				</li>
			</ul>
		</fieldset>
		<input type="submit" class="input_submit" value="Submit" />
	</form>
</div>

<? include('includes/sidebar.php'); ?>
<? include('includes/footer.php'); ?>