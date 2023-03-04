<?php
	
	require_once realpath("../include/loadclass.php");

	if (session_status() === PHP_SESSION_NONE) {
	    session_start();
	}

	$insert = new Classes\Controller\InsertController();

	date_default_timezone_set('Asia/Manila');

	$date = $_POST['date'];
	$name = $_POST['name'];
	$place = $_POST['place'];
	$description = $_POST['description'];
	$time = $_POST['time'];

	try{
		$insert->new_event($name,$place,$description,$date,$time);
	}catch(Exception $e){
		echo "ERROR: " . $e->getMessage();
	}
?>