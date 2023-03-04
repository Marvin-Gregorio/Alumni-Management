<?php
	
	require_once realpath("../include/loadclass.php");

	if (session_status() === PHP_SESSION_NONE) {
	    session_start();
	}

	$insert = new Classes\Controller\InsertController();

	date_default_timezone_set('Asia/Manila');
	$date = date("Y-m-d h:i:s");
	$name = $_POST['name'];
	$category = $_POST['category'];
	$title = $_POST['title'];
	$salary = $_POST['salary'];
	$description = $_POST['description'];
	$qualification = $_POST['qualification'];
	$type = $_POST['type'];

	try{
		$insert->new_job($name,$category,$title,$salary,$description,$qualification,$type,$date);
	}catch(Exception $e){
		echo "ERROR: " . $e->getMessage();
	}
?>