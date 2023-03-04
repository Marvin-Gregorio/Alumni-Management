<?php
	
	require_once realpath("../include/loadclass.php");

	if (session_status() === PHP_SESSION_NONE) {
	    session_start();
	}

	$update = new Classes\Controller\UpdateController();

	$id = $_POST['id'];
	$name = $_POST['name'];
	$place = $_POST['place'];
	$description = $_POST['description'];
	$date = $_POST['date'];
	$time = $_POST['time'];

	try{
		$update->event_details($name,$place,$description,$date,$time,$id);
	}catch(Exception $e){
		echo "ERROR: " . $e->getMessage();
	}
?>