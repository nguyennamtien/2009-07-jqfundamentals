<?
// this is a dummy file to which we'll post changes
// that would normally cause a database update;
// instead, we'll just send back whatever data was posted
echo json_encode($_REQUEST);
?>