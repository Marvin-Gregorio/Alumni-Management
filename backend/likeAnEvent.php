<?php
	
	require_once realpath("../include/loadclass.php");

	if (session_status() === PHP_SESSION_NONE) {
	    session_start();
	}

	$insert = new Classes\Controller\InsertController();
	date_default_timezone_set('Asia/Manila');

	$user_id = $_SESSION['user_id'];
	$event_id = $_POST['id'];

	try{
		$insert->event_like($user_id,$event_id);
	}catch(Exception $e){
		echo "ERROR: " . $e->getMessage();
	}
?>