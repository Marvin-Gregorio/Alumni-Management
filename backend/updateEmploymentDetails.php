<?php

    require_once realpath("../include/loadclass.php");

    $update = new Classes\Controller\UpdateController();
    $insert = new Classes\Controller\InsertController();
    $search = new Classes\Controller\SearchController();
    
    date_default_timezone_set('Asia/Manila');
    $date = date("Y-m-d h:i:s");

    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    $id = $_SESSION['user_id'];

    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $number = $_POST['number'];

    try{
        $result = $search->hasEmployment($id);
        if($result){
            $update->employmentDetails($id,$name,$email,$address,$number);
        }else{
            $insert->employmentDetails($id,$name,$email,$address,$number);
        }

        
    }catch(Exception $e){
        echo "error: " . $e->getMessage();
    }

?>