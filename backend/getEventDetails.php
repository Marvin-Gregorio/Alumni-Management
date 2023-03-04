<?php

	require_once realpath("../include/loadclass.php");

	if (session_status() === PHP_SESSION_NONE) {
	    session_start();
	}

	$search = new Classes\Controller\SearchController();

	$result = $search->getEventDetails($_POST['id']);

	$arr[] = array(
		"id" => $result[1],
		"name" => $result[2],
		"place" => $result[3],
		"description" => $result[4],
		"date" => $result[5],
		"time" => $result[6]
	);
	
	echo json_encode($arr);
	
?>