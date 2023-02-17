<?php

	require_once realpath("../../include/loadclass.php");

	$search = new Classes\Controller\SearchController();

	if (session_status() === PHP_SESSION_NONE) {
	    session_start();
	}

	$result = $search->getCounselorList();

	if($result){
		for($count = 1; $count < sizeof($result); $count++){

			echo '

				<option value="'.$result[$count][1].'" >'.$result[$count][2]. " " . $result[$count][3] . " - " . $result[$count][4] .'</option>

			';
		}

	}else{
		echo "No Counselor found...";
	}

?>