<?php

  // Retrieve data from database

  require_once realpath("../../include/loadclass.php");

  if (session_status() === PHP_SESSION_NONE) {
      session_start();
  }

  date_default_timezone_set('Asia/Manila');

  $search = new Classes\Controller\SearchController();

  $result = $search->getCategoryJobList($_POST['search_data']);

  $data ="";

  if($result->rowCount() > 0){
    while($row = $result->fetch()){
      $data .= '<div class="mb-3">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="d-flex justify-content-between">
                                <a href="viewdetailsJob.php?id='.$row["job_id"].'" class="text-decoration-none"><b>'.$row["title"].'</b></a>
                                <a href="viewdetailsJob.php?id='.$row["job_id"].'" class="btn btn-sm" style="background-color:#005bb1;color:#ffffff;"><b>Job Details</b></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div>
                                <ul class="list-unstyled">
                                    <li><b>'.$row["name"].'</b></li>
                                    <li><h5>'.$row["title"].'</h5></li>
                                    <li><small>'.$row["type"].'</small></li>
                                    <li><small>Php '.$row["salary"].' a month</small></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div>
                        Date Posted: '.date("F d, Y", strtotime($row["date_created"])).'
                    </div>
                </div>
            </div>
        </div>';
    }
  }

  echo $data;

?>