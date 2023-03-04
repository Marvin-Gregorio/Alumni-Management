<?php

  // Retrieve data from database

  require_once realpath("../../include/loadclass.php");

  if (session_status() === PHP_SESSION_NONE) {
      session_start();
  }

  date_default_timezone_set('Asia/Manila');

  $search = new Classes\Controller\SearchController();

  $result = $search->getBlastList();

  if($result->rowCount() > 0){
    while($row = $result->fetch()){
      $data[] = array(
        'date' => date("F d, Y g:i A", strtotime($row['date_created'])),
        'title' => $row['title'],
        'text' => $row['body'],
        'to' => $row['send_to']
      );
    }
  }else{
    $data[] = array(
      'date' => "",
      'title' => "",
      'text' => "",
      'to' => ""
    );
  }

  // Encode the data in JSON format
  echo json_encode($data);

?>