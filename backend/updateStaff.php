<?php
	
	require_once realpath("../include/loadclass.php");

	if (session_status() === PHP_SESSION_NONE) {
	    session_start();
	}

	$update = new Classes\Controller\UpdateController();

	$fname = $_POST['fname'];
	$mname = $_POST['mname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$cp = $_POST['cp'];
	$birth = $_POST['birth'];
	$uname = $_POST['username'];
	$gender = $_POST['gender'];
	$id = $_POST['id'];

	try{
		$update->user_details($fname,$mname,$lname,$email,$cp,$birth,$uname,$gender,$id);
	}catch(Exception $e){
		echo "ERROR: " . $e->getMessage();
	}
?>