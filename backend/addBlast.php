<?php
	
	require_once realpath("../include/loadclass.php");

	if (session_status() === PHP_SESSION_NONE) {
	    session_start();
	}

	$insert = new Classes\Controller\InsertController();

	date_default_timezone_set('Asia/Manila');

	$date = date("Y-m-d h:i:s");
	$title = $_POST['title'];
	$text = $_POST['text'];
	$to = $_POST['send_to'];

	try{
		$insert->new_blast($title,$text,$to,$date);
	}catch(Exception $e){
		echo "ERROR: " . $e->getMessage();
	}
?>