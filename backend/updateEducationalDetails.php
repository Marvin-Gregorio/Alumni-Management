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

    $elem_school = $_POST['elem_school'];
    $elem_year = $_POST['elem_year'];

    $junior_school = $_POST['junior_school'];
    $junior_year = $_POST['junior_year'];

    $senior_school = $_POST['senior_school'];
    $senior_year = $_POST['senior_year'];
    $senior_course = $_POST['senior_course'];

    $college_school = $_POST['college_school'];
    $college_year = $_POST['college_year'];
    $college_course = $_POST['college_course'];

    $master_school = $_POST['master_school'];
    $master_year = $_POST['master_year'];
    $master_course = $_POST['master_course'];

    $doctor_school = $_POST['doctor_school'];
    $doctor_year = $_POST['doctor_year'];
    $doctor_course = $_POST['doctor_course'];


    try{
        $result = $search->hasEducation($id);
        if($result){
            $update->educationalDetails($id,$elem_school,$elem_year,$junior_school,$junior_year,$senior_school,$senior_year,$senior_course,$college_school,$college_year,$college_course,$master_school,$master_year,$master_course,$doctor_school,$doctor_year,$doctor_course);
        }else{
            $insert->educationalDetails($id,$elem_school,$elem_year,$junior_school,$junior_year,$senior_school,$senior_year,$senior_course,$college_school,$college_year,$college_course,$master_school,$master_year,$master_course,$doctor_school,$doctor_year,$doctor_course);
        }

        
    }catch(Exception $e){
        echo "error: " . $e->getMessage();
    }

?>