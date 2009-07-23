<?
$xhr = isset($_SERVER['HTTP_X_REQUESTED_WITH']) &&
	strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest';
	
$title = 'Blog Post 1';
$page = 'home';
?>

<? if (!$xhr) { 
	include('../includes/header.php'); 
	?><div id="main"><?
	?><div id="specials"><?
} ?>

	<? 
	$day = $_REQUEST['day'];

	$data = array(
		'monday' => array(
			'title' => 'Magic Monday',
			'text' => 'On Magic Monday, all the food disappears.',
			'image' => '/images/special.jpg',
			'color' => 'red'
		),
		'tuesday' => array(
			'title' => 'Twofer Tuesday',
			'text' => 'Two vegetables for the price of one!.',
			'image' => '/images/special.jpg',
			'color' => 'green'
		)
	);
	
	if ($xhr) {
		echo json_encode($data[$day]);
	} else {
		?>
		<div class="special">
			<img src="<? echo $data[$day]['image']?>" alt="" />
			<h1><? echo $data[$day]['title']?></h1>
			<p><? echo $data[$day]['text']?></p>
		</div>
		<?
	}

if (!$xhr) { 
	?></div><?
	?></div><?

	include('../includes/sidebar.php'); 
	include('../includes/footer.php');
} ?>