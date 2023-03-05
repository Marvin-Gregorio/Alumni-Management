<?php

  // Retrieve data from database

  require_once realpath("../../include/loadclass.php");

  if (session_status() === PHP_SESSION_NONE) {
      session_start();
  }

  date_default_timezone_set('Asia/Manila');

  $search = new Classes\Controller\SearchController();

  $user_id = $_SESSION['user_id'];

  $result = $search->getEventList();

  if($result->rowCount() > 0){
    while($row = $result->fetch()){

      $interested = $search->likeEvent($row['event_id'],$user_id);

      if($interested){
        $data[] = array(
          'name' => $row['name'],
          'place' => $row['place'],
          'date' => date("F d, Y", strtotime($row['set_date'])),
          'time' => date("h:i A", strtotime($row['set_time'])),
          'description' => $row['description'],
          'action' => 'YES'
        );
      }else{
        $data[] = array(
          'name' => $row['name'],
          'place' => $row['place'],
          'date' => date("F d, Y", strtotime($row['set_date'])),
          'time' => date("h:i A", strtotime($row['set_time'])),
          'description' => $row['description'],
          'action' => '<button onclick="addLike('.$row["event_id"].')" class="btn btn-primary"><i class="fas fa-thumbs-up"></i> Yes</button>'
        );
      }

    }
  }else{
    $data[] = array(
      'name' => "",
      'place' => "",
      'date' => "",
      'time' => "",
      'description' => "",
      'action' => '',
    );
  }

  // Encode the data in JSON format
  echo json_encode($data);

?>