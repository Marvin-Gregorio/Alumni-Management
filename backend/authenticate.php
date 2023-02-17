<?php
	
	require_once realpath("../include/loadclass.php");

	if (session_status() === PHP_SESSION_NONE) {
	    session_start();
	}

	$insert = new Classes\Controller\InsertController();
	$search = new Classes\Controller\SearchController();

	date_default_timezone_set('Asia/Manila');
	$date = date("Y-m-d h:i:s");


		$user_id = $search->getUserId($_POST['username']);
		if($user_id){
			$hash = $search->getPassword($user_id);
			if($hash == $_POST['password']){
				
				$type = $search->getUserType($user_id);

				$_SESSION['user_id'] = $user_id;
				$_SESSION['type'] = $type;

				echo $type;

			}else{

				echo 'pass';

			}

		}else{
			echo 'username';
		}


	



?>