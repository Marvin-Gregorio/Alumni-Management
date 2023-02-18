<?php

    require_once realpath("../include/loadclass.php");

    $update = new Classes\Controller\UpdateController();
    
    date_default_timezone_set('Asia/Manila');
    $date = date("Y-m-d h:i:s");

    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    $id = $_SESSION['user_id'];

    try{

        $data = $_POST['crop_image'];
        $image_array_1 = explode(";", $data);
        $image_array_2 = explode(",", $image_array_1[1]);
        $base64_decode = base64_decode($image_array_2[1]);
        $path_img = '../profileImg/'.time().'.png';
        $imagename = ''.time().'.png';
        file_put_contents($path_img, $base64_decode);
        $update->profilePic($imagename,$id);
    }catch(Exception $e){
        echo "error: " . $e->getMessage();
    }

?>