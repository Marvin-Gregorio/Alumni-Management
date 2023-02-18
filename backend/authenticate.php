<?php
	
	require_once realpath("../include/loadclass.php");

	if (session_status() === PHP_SESSION_NONE) {
	    session_start();
	}

	$insert = new Classes\Controller\InsertController();
	$search = new Classes\Controller\SearchController();

	date_default_timezone_set('Asia/Manila');
	$date = date("Y-m-d h:i:s", strtotime(date("Y-m-d h:i:s")));


		$user_id = $search->getUserId($_POST['username']);

		$name = $search->getName($user_id);

		if($user_id){
			$hash = $search->getPassword($user_id);
			
			if(password_verify($_POST['password'],$hash)){
				
				$type = $search->getUserType($user_id);

				$_SESSION['user_id'] = $user_id;
				$_SESSION['type'] = $type;
				$_SESSION['first_name'] = $name[1];
				$_SESSION['middle_name'] = $name[2];
				$_SESSION['last_name'] = $name[3];

				echo $type;

				$insert->logs($user_id,$date);
			}else{

				echo 'pass';

			}

		}else{
			echo 'username';
		}


	



?>