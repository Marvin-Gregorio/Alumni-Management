<?php

	require_once realpath("../include/loadclass.php");

	date_default_timezone_set('Asia/Manila');

	$start = date('Y-m-01 00:00:00');
	$end = date('Y-m-t h:i:s');

	$present = date('F Y');

	$search = new Classes\Controller\SearchController();

	$cba = $search->getMonthlyCount('CBA',$start, $end);
	$ccs = $search->getMonthlyCount('CCS',$start, $end);
	$con = $search->getMonthlyCount('Nursing',$start, $end);
	$coa = $search->getMonthlyCount('Architecture',$start, $end);
	$coe = $search->getMonthlyCount('Engineering',$start, $end);
	$cased = $search->getMonthlyCount('CASED',$start, $end);
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