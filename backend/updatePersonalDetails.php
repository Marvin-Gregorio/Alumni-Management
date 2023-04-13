<?php

    require_once realpath("../include/loadclass.php");

    $update = new Classes\Controller\UpdateController();
    
    date_default_timezone_set('Asia/Manila');
    $date = date("Y-m-d h:i:s");

    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    $id = $_SESSION['user_id'];

    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $cp = $_POST['cp'];
    $b_date = $_POST['b_date'];
    $uname = $_POST['uname'];
    $gender = $_POST['gender'];
    $status = $_POST['status'];
    $dept = $_POST['dept'];

    try{
        $update->personalInfo($id,$fname,$mname,$lname,$email,$cp,$b_date,$uname,$gender,$status,$dept);
    }catch(Exception $e){
        echo "error: " . $e->getMessage();
    }

?>