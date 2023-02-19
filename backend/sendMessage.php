<?php
	require '../vendor/autoload.php';
	require_once realpath("../include/loadclass.php");
	
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;


	if (session_status() === PHP_SESSION_NONE) {
	    session_start();
	}

	$insert = new Classes\Controller\InsertController();
	$search = new Classes\Controller\SearchController();

	date_default_timezone_set('Asia/Manila');
	$date = date("Y-m-d h:i:s");
	$mail = new PHPMailer(true);
	
	setSettings($mail);
	setContent($mail,$_POST['text']);

	try{
		$email = $search->getAllUser();

		for($count = 1; $count < sizeof($email[1]); $count++){
			$name = $email[$count][1] . " " . $email[$count][2];
			setRecepient($mail,$email[$count][3],$name);
		}

		$mail->send();
	
		$insert->new_message($_POST['text'],$date);


	}catch(Exception $e){
		echo "ERROR: " . $e->getMessage();
	}

	function setSettings($mail){
		//Server settings
	    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
	    $mail->isSMTP();                                            //Send using SMTP
	    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
	    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
	    $mail->Username   = 'gregoriomarvin.ph@gmail.com';                     //SMTP username
	    $mail->Password   = 'bgizzgvrufufkrtk';                               //SMTP password
	    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
	    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
	}

	function setContent($mail,$text){

	    //Content
	    $mail->isHTML(true);                                  //Set email format to HTML
	    $mail->Subject = 'CC-ALUMNI-IMPORTANT ANNOUNCEMENTS!';
	    $mail->Body    = $text;

	}

	function setRecepient($mail,$email,$name){
	    //Recipients
	    $mail->setFrom('gregoriomarvin.ph@gmail.com', 'CC-ALUMNI');
	    $mail->addAddress($email, $name);
	}
	
?>