<?php

	require_once realpath("../include/loadclass.php");

	if (session_status() === PHP_SESSION_NONE) {
	    session_start();
	}

	$search = new Classes\Controller\SearchController();

	$result = $search->getJobDetails($_POST['id']);

	$arr[] = array(
		"id" => $result[1],
		"name" => $result[2],
		"category" => $result[3],
		"title" => $result[4],
		"salary" => $result[5],
		"description" => $result[6],
		"qualification" => $result[7],
		"type" => $result[8]
	);
	
	echo json_encode($arr);
	
?>