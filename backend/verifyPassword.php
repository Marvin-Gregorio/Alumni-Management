<?php
	
	require_once realpath("../include/loadclass.php");

	if (session_status() === PHP_SESSION_NONE) {
	    session_start();
	}

	$update = new Classes\Controller\UpdateController();
	$search = new Classes\Controller\SearchController();

	$old = $_POST['old_pass'];
	$new = $_POST['new_pass'];
	$id = $_SESSION['user_id'];

	try{

		$db_pass = $search->getPassword($id);

		if(password_verify($old,$db_pass)){

			$options = [
			  'cost' => 12,
			];
			$password = password_hash($new,PASSWORD_BCRYPT,$options);

			$update->password($id,$password);

			echo "correct";
		}else{
			echo "incorrect";
		}

	}catch(Exception $e){
		echo "ERROR: " . $e->getMessage();
	}

?>