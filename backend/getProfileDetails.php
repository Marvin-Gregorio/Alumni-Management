<?php

	require_once realpath("../include/loadclass.php");

	if (session_status() === PHP_SESSION_NONE) {
	    session_start();
	}

	$user_id = $_SESSION['user_id'];

	$search = new Classes\Controller\SearchController();

	$result = $search->getProfileDetails($user_id);
	$result1 = $search->getEmploymentDetails($user_id);
	$result2 = $search->getEducationalDetails($user_id);

	if(!($result)){
		$result[1] = "";
		$result[2] = "";
		$result[3] = "";
		$result[4] = "";
		$result[5] = "";
		$result[6] = "";
		$result[7] = "";
		$result[8] = "";
		$result[9] = "";
		$result[10] = "";
	}

	if(!($result1)){
		$result1[1] = "";
		$result1[2] = "";
		$result1[3] = "";
		$result1[4] = "";
	}

	if(!($result2)){
		$result2[1] = "";
		$result2[2] = "";
		$result2[3] = "";
		$result2[4] = "";
		$result2[5] = "";
		$result2[6] = "";
		$result2[7] = "";
		$result2[8] = "";
		$result2[9] = "";
		$result2[10] = "";
		$result2[11] = "";
		$result2[12] = "";
		$result2[13] = "";
		$result2[14] = "";
		$result2[15] = "";
		$result2[16] = "";
	}

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
		"pic" => $result[10],
		"company_name" => $result1[1],
		"company_email" => $result1[3],
		"company_number" => $result1[2],
		"company_address" => $result1[4],
		"elem_school" => $result2[1],
		"elem_year" => $result2[2],
		"junior_school" => $result2[3],
		"junior_year" => $result2[4],
		"senior_school" => $result2[5],
		"senior_year" => $result2[6],
		"senior_course" => $result2[7],
		"college_school" => $result2[8],
		"college_year" => $result2[9],
		"college_course" => $result2[10],
		"master_school" => $result2[11],
		"master_year" => $result2[12],
		"master_course" => $result2[13],
		"doctor_school" => $result2[14],
		"doctor_year" => $result2[15],
		"doctor_course" => $result2[16]
	);
	
	echo json_encode($arr);
	
?>