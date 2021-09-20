<?php
// Report all PHP errors
error_reporting(E_ALL);
ini_set("display_errors", 1);

$method = $_SERVER['REQUEST_METHOD'];
//$req_dump = print_r($_REQUEST, true);
if ('PUT' === $method) {
	$decoded_input = file_get_contents("php://input");

	//Here you have usual php array stored in $decoded_input. Do some stuff with it.
	header('Content-type: application/json');
	//echo json_encode($decoded_input);

	$fp = file_put_contents('request.log', $decoded_input, FILE_APPEND);
}
//file_put_contents('request.log', $req_dump, FILE_APPEND);
//print "ok";
//return true;
?>