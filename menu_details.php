<?
$xhr = isset($_SERVER['HTTP_X_REQUESTED_WITH']) &&
	strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest';
	
$page = 'menu';

$data = array(
	'tomatoes' => array(
		'description' => 'Tomatoes are yummy',
		'image' => '/images/tomatoes.jpg'
	),
	'onions' => array(
		'description' => 'Onions are yummy',
		'image' => '/images/onions.jpg'
	),
	'curry' => array(
		'description' => 'Curry is yummy',
		'image' => '/images/curry.jpg'
	),
	'stirfry' => array(
		'description' => 'Stiry fry is yummy',
		'image' => '/images/stirfry.jpg'
	)
);

$item = $_REQUEST['item'];
$title = 'Menu Details :: ' . ucwords($item);

?>

<? if (!$xhr) { 
	include('includes/header.php'); 
	?><div id="main"><?
} 

if ($xhr) {
	echo json_encode($data[$item]);
} else {
	?>
	
	<h1><? echo ucwords($item); ?></h1>
	<img src="<? echo $data[$item]['image']?>" alt="" />
	<p><? echo $data[$item]['description']?></p>
	</div>
	
	<?

	include('includes/sidebar.php'); 
	include('includes/footer.php');
} ?>