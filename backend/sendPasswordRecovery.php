<?php
	set_time_limit(0);

	require '../vendor/autoload.php';
	require_once realpath("../include/loadclass.php");
	
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;

	$search = new Classes\Controller\SearchController();
	$update = new Classes\Controller\UpdateController();

	$mail = new PHPMailer(true);
	
	setSettings($mail);

	try{
		
		$result = $search->getUserDetailsByUsername($_POST['username']);
		
		if($result){
			$id = $result[5];

			$options = [
			  'cost' => 12,
			];

			$password = generatePassword();
			echo $password . '\n';
			$hashedpassword = password_hash($password,PASSWORD_BCRYPT,$options);
			
			$update->user_password($id,$hashedpassword);

			$name = $result[1] . " " .$result[2];
			setRecepient($mail,$result[3],$name);
			setContent($mail,$password,'Alumni System : Password Recovery');
			$mail->send();
			echo "sent";
		}else{
			echo "notfound";
		}



	}catch(Exception $e){
		echo "ERROR: " . $e->getMessage();
	}

	function generatePassword(){
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()';
		$length = 8; // you can adjust the length of the string as needed
		$password = '';
		$hasNumber = false;
		$hasLowercase = false;
		$hasUppercase = false;
		$hasSpecialChar = false;

		while (strlen($password) < $length || !$hasNumber || !$hasLowercase || !$hasUppercase || !$hasSpecialChar) {
		  $char = $characters[random_int(0, strlen($characters) - 1)];
		  if (ctype_digit($char)) {
		    $hasNumber = true;
		  } else if (ctype_lower($char)) {
		    $hasLowercase = true;
		  } else if (ctype_upper($char)) {
		    $hasUppercase = true;
		  } else {
		    $hasSpecialChar = true;
		  }
		  $password .= $char;
		}

		return $password;
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
	    $mail->addAddress($email, $name);
	}
	
?>