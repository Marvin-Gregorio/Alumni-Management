<?php

	
	require_once realpath("../../include/loadclass.php");

	$search = new Classes\Controller\SearchController();

	if (session_status() === PHP_SESSION_NONE) {
	    session_start();
	}

	$id = $_SESSION['user_id'];

	$result = $search->getSignoutLogs($id);

	if($result){
		echo '<div class="card-body" style="padding-left: 16px;padding-right: 16px;padding-top: 16px;padding-bottom: 16px;border-color: rgba(255,255,255,0);">
                                            <h5 class="card-title" style="font-family: Poppins, sans-serif;color: rgb(0,0,0);font-weight: 500;margin-bottom: 10px;">Sign out logs</h5><input type="search" style="width: 100%;background: #f5f5f5;border-color: rgba(0,0,0,0);border-top-color: rgb(0,;border-right-color: 0,;border-bottom-color: 0);border-left-color: 0,;border-radius: 5px;font-family: Poppins, sans-serif;font-size: 12px;padding-left: 5px;" placeholder="Search ID">
                                            <div class="table-responsive" style="font-size: 12px;">
                                                <table class="table">
                                                    <thead style="font-size: 12px;">
                                                        <tr style="font-size: 12px;">
                                                            <th style="font-size: 12px;font-family: Poppins, sans-serif;color: rgb(0,0,0);">ID</th>
                                                            <th style="font-size: 12px;font-family: Poppins, sans-serif;color: rgb(0,0,0);">Date</th>
                                                            <th style="font-size: 12px;font-family: Poppins, sans-serif;color: rgb(0,0,0);">Time</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody style="color: rgb(0,0,0);font-size: 12px;">';

                                                    for($count = 1; $count < sizeof($result); $count++){
                                                    	$profile = $search->getProfile($id);
                                                    	$date = date("M d, Y", strtotime($result[$count][2]));
                                                    	$time = date("H:s A", strtotime($result[$count][2]));
                                                    	echo'
                                                        <tr style="color: rgb(0,0,0);font-size: 12px;">
                                                            <td style="font-size: 12px;color: rgb(0,0,0);">'.$profile[5].'</td>
                                                            <td style="color: rgb(0,0,0);font-size: 12px;">'.$date.'</td>
                                                            <td style="color: rgb(0,0,0);font-size: 12px;">'.$time.'</td>
                                                        </tr>';
                                                        

                                                    }
                                                        echo'
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <nav class="d-flex d-sm-flex d-xl-flex justify-content-center align-items-center align-items-sm-center justify-content-lg-center justify-content-xl-center align-items-xl-center" style="font-family: Poppins, sans-serif;font-size: 10px;">
                                            <ul class="pagination pagination-sm">
                                                <li class="page-item"><a class="page-link" aria-label="Previous" href="#"><span aria-hidden="true">«</span></a></li>
                                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                                <li class="page-item"><a class="page-link" aria-label="Next" href="#"><span aria-hidden="true">»</span></a></li>
                                            </ul>
                                        </nav>';
	}else{
		echo "No records found...";
	}



										
	

?>