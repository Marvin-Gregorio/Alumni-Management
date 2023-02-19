<?php

	
	require_once realpath("../../include/loadclass.php");

	$search = new Classes\Controller\SearchController();

	if (session_status() === PHP_SESSION_NONE) {
	    session_start();
	}

    $id = 7;

    $profile = $search->getProfileDetails($id);

	$result = $search->getForum();

    while($row = $result->fetch()){
        echo '

        <div class="row p-3 rounded border mt-4">
            <div class="col-2 w-auto">
            <img src="../../profileImg/'.$profile[10].'" class="img-thumbnail rounded-circle" style="height:80px;">
            </div>
            <div class="col-2" style="border-right:1px solid grey">
                <label class="fw-semibold">'.$profile[1]." " .$profile[3].'</label>
                <label class="fw-semibold">'.$row["date_created"].'</label>
                <label class="fw-semibold"><i class="fas fa-check text-success"></i> Email Sent...</label>
            </div>
            <div class="col-8">
                <p>'.$row["text"].'</p>
            </div>
        </div>


        ';
    }
	

?>