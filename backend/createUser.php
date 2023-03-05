<?php
	
	require_once realpath("../include/loadclass.php");

	if (session_status() === PHP_SESSION_NONE) {
	    session_start();
	}

	$insert = new Classes\Controller\InsertController();

	date_default_timezone_set('Asia/Manila');
	$date = date("Y-m-d h:i:s");

	$options = [
	  'cost' => 12,
	];
	$password = password_hash($_POST['pass'],PASSWORD_BCRYPT,$options);
	
	try{
		$insert->new_user($_POST['f_name'],$_POST['m_name'],$_POST['l_name'],$_POST['email'],$_POST['cp_number'],$_POST['b_day'],$_POST['username'],$password,$_POST['gender'],$_POST['status'],$_POST['dept'],$date);
	}catch(Exception $e){
		echo "ERROR: " . $e->getMessage();
	}
?>