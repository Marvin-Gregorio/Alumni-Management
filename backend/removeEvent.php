<?php
	
	require_once realpath("../include/loadclass.php");

	$delete = new Classes\Controller\DeleteController();

	$id = $_POST['id'];

	try{
		$delete->event_post($id);
	}catch(Exception $e){
		echo "ERROR: " . $e->getMessage();
	}
?>