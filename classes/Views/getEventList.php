<?php

  // Retrieve data from database

  require_once realpath("../../include/loadclass.php");

  if (session_status() === PHP_SESSION_NONE) {
      session_start();
  }

  date_default_timezone_set('Asia/Manila');

  $search = new Classes\Controller\SearchController();

  $result = $search->getEventList();

  if($result->rowCount() > 0){
    while($row = $result->fetch()){

      $total = $search->totalInterested($row['event_id']);

      $data[] = array(
        'name' => $row['name'],
        'place' => $row['place'],
        'date' => date("F d, Y", strtotime($row['set_date'])),
        'time' => date("h:i A", strtotime($row['set_time'])),
        'interested' => $total,
        'description' => $row['description'],
        'action' => '

        <a onclick=displayData('.$row["event_id"].') class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#updateevents"><i class="fas fa-pen-to-square"></i></a>
        
        <a onclick=removeRow('.$row["event_id"].')  class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>',
      );
    }
  }else{
    $data[] = array(
      'name' => "",
      'place' => "",
      'date' => "",
      'time' => "",
      'interested' => "",
      'description' => "",
      'action' => '',
    );
  }

  // Encode the data in JSON format
  echo json_encode($data);

?>