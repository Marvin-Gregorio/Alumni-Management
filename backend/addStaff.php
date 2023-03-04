<?php
	
	require_once realpath("../include/loadclass.php");

	if (session_status() === PHP_SESSION_NONE) {
	    session_start();
	}

	$insert = new Classes\Controller\InsertController();

	date_default_timezone_set('Asia/Manila');

	$options = [
	  'cost' => 12,
	];
	$fname = $_POST['fname'];
	$mname = $_POST['mname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$cp = $_POST['cp'];
	$birth = $_POST['birth'];
	$uname = $_POST['username'];
	$gender = $_POST['gender'];
	$password = password_hash($_POST['password'],PASSWORD_BCRYPT,$options);
	
	try{
		$insert->new_staff($fname,$mname,$lname,$email,$cp,$birth,$uname,$gender,$password);
	}catch(Exception $e){
		echo "ERROR: " . $e->getMessage();
	}
?>