<?php

	require_once realpath("../include/loadclass.php");

	date_default_timezone_set('Asia/Manila');

	$date = date('Y-m-d 00:00:00');
	$present = date('F d, Y');

	$search = new Classes\Controller\SearchController();

	$cba = $search->getDailyCount('CBA',$date);
	$ccs = $search->getDailyCount('CCS',$date);
	$con = $search->getDailyCount('Nursing',$date);
	$coa = $search->getDailyCount('Architecture',$date);
	$coe = $search->getDailyCount('Engineering',$date);
	$cased = $search->getDailyCount('CASED',$date);
	$total = $cba + $ccs + $con + $coa + $coe + $cased;

	$arr[] = array(
		"cba" => $cba,
		"coe" => $coe,
		"ccs" => $ccs,
		"con" => $con,
		"coa" => $coa,
		"cased" => $cased,
		"total" => $total,
		"date" => $present
	);
	
	echo json_encode($arr);
	
?>