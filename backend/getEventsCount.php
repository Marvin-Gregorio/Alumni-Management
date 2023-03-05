<?php

	require_once realpath("../include/loadclass.php");

	if (session_status() === PHP_SESSION_NONE) {
	    session_start();
	}

	$search = new Classes\Controller\SearchController();

	$result = $search->getEventCount();

	echo $result;
	
?>