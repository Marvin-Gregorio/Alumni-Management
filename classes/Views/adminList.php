<?php
	
	require_once realpath("../../include/loadclass.php");

	$search = new Classes\Controller\SearchController();

	if (session_status() === PHP_SESSION_NONE) {
	    session_start();
	}
	
    function alumniList(){
        try{
            $result = $search->getAllUserByType('ALUMNI');

            while($row = $result->fetch()){
                $data[] = array(
                  'first_name' => $row['first_name'],
                  'last_name' => $row['last_name'],
                  'email' => $row['email'],
                  'phone' => $row['cp_number'],
                  'gender' => $row['gender'],
                  'action' => '<span onclick="seeMoreDetails('.$row["user_id"].')" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fas fa-eye"></i> View</span>',
                );
            }
            return $data;
        }catch(Exception $e){
            echo "ERROR: " . $e->getMessage();
        }
    }


?>