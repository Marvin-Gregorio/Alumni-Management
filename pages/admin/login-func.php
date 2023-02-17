<?php  
session_start();
include "server.php";

if (isset($_POST['username']) && isset($_POST['password'])) {

	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}

	$username = test_input($_POST['username']);
	$password = test_input($_POST['password']);

	if (empty($username)) {
		header("Location: login.php?error=Username is Required");
	}else if (empty($password)) {
		header("Location: login.php?error=Password is Required");
	}else {

		// Hashing the password
		$password = md5($password);
        
        $sql = "SELECT * FROM admins WHERE username='$username' AND password='$password'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
        	// the user name must be unique
        	$row = mysqli_fetch_assoc($result);
        	if ($row['password'] === $password && $row['username'] == $username) {
        		$_SESSION['name'] = $row['name'];
        		$_SESSION['id'] = $row['id'];
        		$_SESSION['username'] = $row['username'];

        		header("Location: index.php?page=dashboard");

        	}else {
        		header("Location: login.php?error=Incorect User name or password");
        	}
        }else {
        	header("Location: login.php?error=Incorect User name or password");
        }

	}
	
}else {
	header("Location: login.php");
}
?>