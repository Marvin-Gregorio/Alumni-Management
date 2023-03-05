<?php

	require_once realpath("../include/loadclass.php");

	if (session_status() === PHP_SESSION_NONE) {
	    session_start();
	}

	$search = new Classes\Controller\SearchController();

	$cba = $search->getEmailCount('CBA');
	$ccs = $search->getEmailCount('CCS');
	$con = $search->getEmailCount('Nursing');
	$coa = $search->getEmailCount('Architecture');
	$coe = $search->getEmailCount('Engineering');
	$cased = $search->getEmailCount('CASED');
	$all = $search->getEmailCount('All');
	$total = $cba + $ccs + $con + $coa + $coe + $cased;

	$arr[] = array(
		"cba" => $cba + $all,
		"coe" => $coe + $all,
		"ccs" => $ccs + $all,
		"con" => $con + $all,
		"coa" => $coa + $all,
		"cased" => $cased + $all,
		"total" => $total + $all
	);
	
	echo json_encode($arr);
	
?>