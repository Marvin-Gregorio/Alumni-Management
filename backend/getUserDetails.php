<?php

	require_once realpath("../include/loadclass.php");

	if (session_status() === PHP_SESSION_NONE) {
	    session_start();
	}

	$search = new Classes\Controller\SearchController();

	$result = $search->getUserDetails($_POST['id']);

	$arr[] = array(
		"id" => $result[1],
		"first_name" => $result[2],
		"middle_name" => $result[3],
		"last_name" => $result[4],
		"email" => $result[5],
		"cp" => $result[6],
		"b_day" => $result[7],
		"username" => $result[8],
		"gender" => $result[9]
	);
	
	echo json_encode($arr);
	
?>