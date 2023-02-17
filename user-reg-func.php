<?php 

if (isset($_POST['submit'])) {
	include "server.php";
	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

    $lastname = validate($_POST['lastname']);
	$firstname = validate($_POST['firstname']);
	$middlename = validate($_POST['middlename']);
	$email = validate($_POST['email']);
	$username = validate($_POST['username']);
	$phone = validate($_POST['phone']);
	$dob = validate($_POST['dob']);
	$password = validate($_POST['password']);
	$re_password = validate($_POST['re_password']);

    if (empty($lastname)) {
		header("Location: user-reg.php?error=Last name is required");
	}else if (empty($middlename)) {
		header("Location: user-reg.php?error=Middle name is required");
	}elseif (empty($firstname)) {
		header("Location: user-reg.php?error=First name is required");
	} else if (empty($email)) {
		header("Location: user-reg.php?error=Email is required");
	}else if (empty($username)) {
		header("Location: user-reg.php?error=Username is required");
	}else if (empty($phone)) {
		header("Location: user-reg.php?error=Phone No is required");
	}else if (empty($dob)) {
		header("Location: user-reg.php?error=Date of Birth is required");
	}else if (empty($password)) {
		header("Location: user-reg.php?error=Password is required");
	}else if (empty($re_password)) {
		header("Location: user-reg.php?error=Confirm Password is required");
	}else if ($password != $re_password) {
		header("Location: user-reg.php?error=Password doesn't match");
	}else {

		$password = md5($password);

       $sql = "INSERT INTO admins (firstname, middlename, lastname, email, username, phone, dob, password) VALUES ('$firstname','$middlename','$lastname','$email','$username','$phone','$dob', '$password')";
       $result = mysqli_query($conn, $sql);
       if ($result) {
       	  header("Location: user-reg.php?success=successfully created");
       }else {
          header("Location: user-reg.php?error=unknown error occurred&$user_data");
       }
	}

}