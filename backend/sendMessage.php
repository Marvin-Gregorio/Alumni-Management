<?php
	set_time_limit(0);

	require '../vendor/autoload.php';
	require_once realpath("../include/loadclass.php");
	
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;


	if (session_status() === PHP_SESSION_NONE) {
	    session_start();
	}

	$search = new Classes\Controller\SearchController();

	date_default_timezone_set('Asia/Manila');
	$date = date("Y-m-d h:i:s");
	$mail = new PHPMailer(true);
	
	setSettings($mail);
	setContent($mail,$_POST['text'],$_POST['title']);


	try{
		if($_POST['send_to'] == "All"){
			$email = $search->getAllUser();
		}else{
			$email = $search->getEmailBySpecificDept($_POST['send_to']);
		}
		

		for($count = 1; $count < sizeof($email); $count++){
			$name = $email[$count][1] . " " . $email[$count][2];
			setRecepient($mail,$email[$count][3],$name);
			$mail->send();
		}



	}catch(Exception $e){
		echo "ERROR: " . $e->getMessage();
	}

	function setSettings($mail){
		//Server settings
	    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
	    $mail->isSMTP();                                            //Send using SMTP
	    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
	    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
	    $mail->Username   = 'ccialumnisystem@gmail.com';                     //SMTP username
	    $mail->Password   = 'zfcqganbsjjtdvve';                               //SMTP password
	    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
	    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
	}

	function setContent($mail,$text,$title){

	    //Content
	    $mail->isHTML(true);                                  //Set email format to HTML
	    $mail->Subject = $title;
	    $mail->Body    = $text;

	}

	function setRecepient($mail,$email,$name){
	    //Recipients
	    $mail->setFrom('ccialumnisystem@gmail.com', 'CC-ALUMNI');
	    $mail->clearAddresses();
	    $mail->addAddress($email, $name);
	}
	
?>