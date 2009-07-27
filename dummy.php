<?
// this is a dummy file to which we'll post changes
// that would normally cause a database update;
// instead, we'll just send back whatever data was posted
$xhr = isset($_SERVER['HTTP_X_REQUESTED_WITH']) &&
	strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest';

if ($xhr) {
	echo json_encode($_REQUEST);	
} else {
	$title = 'Thanks';
	$page = 'thanks';
	include('includes/header.php');

	?><div id="main"><?
	?><h1>Thanks!</h1><?
	?><p>We were too lazy to hook up a database to save your submission, but you can see it below.</p><?
	
	print_r($_REQUEST);
	
	include('includes/sidebar.php');
	include('includes/footer.php');
}
?>