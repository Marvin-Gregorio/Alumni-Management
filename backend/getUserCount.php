<?php

	require_once realpath("../include/loadclass.php");

	if (session_status() === PHP_SESSION_NONE) {
	    session_start();
	}

	$search = new Classes\Controller\SearchController();

	$cba = $search->getDeptCount('CBA');
	$ccs = $search->getDeptCount('CCS');
	$con = $search->getDeptCount('Nursing');
	$coa = $search->getDeptCount('Architecture');
	$coe = $search->getDeptCount('Engineering');
	$cased = $search->getDeptCount('CASED');
	$total = $cba + $ccs + $con + $coa + $coe + $cased;

	$arr[] = array(
		"cba" => $cba,
		"coe" => $coe,
		"ccs" => $ccs,
		"con" => $con,
		"coa" => $coa,
		"cased" => $cased,
		"total" => $total,
	);
	
	echo json_encode($arr);
	
?>