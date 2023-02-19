<?php
	
	require_once realpath("../include/loadclass.php");

	if (session_status() === PHP_SESSION_NONE) {
	    session_start();
	}

	$insert = new Classes\Controller\InsertController();
	$search = new Classes\Controller\InsertController();

	date_default_timezone_set('Asia/Manila');
	$date = date("Y-m-d h:i:s");
	
	try{
		$insert->new_message($_POST['text'],$date);

		$
	}catch(Exception $e){
		echo "ERROR: " . $e->getMessage();
	}
?>