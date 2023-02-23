<?php

  // Retrieve data from database

  require_once realpath("../../include/loadclass.php");

  if (session_status() === PHP_SESSION_NONE) {
      session_start();
  }

  $search = new Classes\Controller\SearchController();

  $result = $search->getAllUserByType('ALUMNI');

  while($row = $result->fetch()){
    $data[] = array(
      'first_name' => $row['first_name'],
      'last_name' => $row['last_name'],
      'email' => $row['email'],
      'phone' => $row['cp_number'],
      'gender' => $row['gender'],
      'action' => '
        <div class="d-flex">
          <button onclick="seeMoreDetails('.$row["user_id"].')" class="btn btn-info text-white m-1" data-bs-toggle="modal" data-bs-target="#exampleModal" style="font-size:.875rem; padding: .25rem .4rem; line-height: .5; border-radius: .2rem;">
            <i class="fas fa-eye"></i>
          </button>
          <a href="../../classes/views/printDetails.php?id='.$row['user_id'].'" class="btn btn-secondary m-1" style="font-size:.875rem; padding: .25rem .4rem; line-height: .5; border-radius: .2rem;">
            <i class="fas fa-print"></i>
          </a> 
        </div>',
    );
  }

  // Encode the data in JSON format
  echo json_encode($data);

?>