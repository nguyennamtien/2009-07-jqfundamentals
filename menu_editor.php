<?
$page = 'menu_editor';
$title = 'Menu Editor';
?>

<? include('includes/header.php'); ?>

<div id="main">
	<table>
		<thead>
			<tr>
				<th>Menu Item</th>
				<th>Price</th>
				<th>Picture</th>
				<th>Description</th>
			</tr>
		</thead>
		<tbody>
			<tr data-id="1">
				<td data-type="item">Stir Fry</td>
				<td data-type="price">$5.00</td>
				<td data-type="image">/images/stirfry.jpg</td>
				<td data-type="description">Stir fry is so tasty.</td>
			</tr>
			<tr data-id="2">
				<td data-type="item">Curry</td>
				<td data-type="price">$5.00</td>
				<td data-type="image">/images/curry.jpg</td>
				<td data-type="description">Spicy goodness.</td>
			</tr>
			<tr data-id="3">
				<td data-type="item">Onions</td>
				<td data-type="price">$5.00</td>
				<td data-type="image">/images/onions.jpg</td>
				<td data-type="description">Because we like to cry.</td>
			</tr>
			<tr data-id="4">
				<td data-type="item">Tomatoes</td>
				<td data-type="price">$5.00</td>
				<td data-type="image">/images/tomatoes.jpg</td>
				<td data-type="description">No throwing.</td>
			</tr>
			<tr class="template" data-id="new">
				<td data-type="item"></td>
				<td data-type="price"></td>
				<td data-type="image"></td>
				<td data-type="description"></td>
			</tr>
		</tbody>
	</table>
	<input type="button" value="Add item" />
</div>

<? include('includes/sidebar.php'); ?>
<? include('includes/footer.php'); ?>