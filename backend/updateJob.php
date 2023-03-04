<?php
	
	require_once realpath("../include/loadclass.php");

	if (session_status() === PHP_SESSION_NONE) {
	    session_start();
	}

	$update = new Classes\Controller\UpdateController();

	$id = $_POST['id'];
	$name = $_POST['name'];
	$category = $_POST['category'];
	$title = $_POST['title'];
	$salary = $_POST['salary'];
	$description = $_POST['description'];
	$qualification = $_POST['qualification'];
	$type = $_POST['type'];

	try{
		$update->job_details($name,$category,$title,$salary,$description,$qualification,$type,$id);
	}catch(Exception $e){
		echo "ERROR: " . $e->getMessage();
	}
?>