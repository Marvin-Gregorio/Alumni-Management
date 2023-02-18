<?php

	require_once realpath("../include/loadclass.php");

	if (session_status() === PHP_SESSION_NONE) {
	    session_start();
	}

	$user_id = $_SESSION['user_id'];

	$search = new Classes\Controller\SearchController();

	$result = $search->getProfileDetails($user_id);

	$arr[] = array(
		"first_name" => $result[1],
		"middle_name" => $result[2],
		"last_name" => $result[3],
		"email" => $result[4],
		"cp_number" => $result[5],
		"birthdate" => $result[6],
		"username" => $result[7],
		"gender" => $result[8],
		"status" => $result[9],
		"pic" => $result[10]
	);
	
	echo json_encode($arr);
	
?>