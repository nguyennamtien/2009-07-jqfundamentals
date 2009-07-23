<?

$xhr = isset($_SERVER['HTTP_X_REQUESTED_WITH']) &&
	strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest';

// if (!$xhr) { die('only AJAX search, sorry'); }

$possibilities = array(
	'fruit',
	'vegetable',
	'bread',
	'steak',
	'fritters',
	'fries'
);

$matches = array();

$text = $_REQUEST['search'];
if (!$text) { die(); }

foreach ($possibilities as $p) {
	if (preg_match('/^' . $text . '/', $p)) {
		$matches[] = $p;
	}
}

echo json_encode($matches);
?>