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
	$permanetaddr = validate($_POST['permanetaddr']);
	$presentaddr = validate($_POST['presentaddr']);
	$emailaddr = validate($_POST['emailaddr']);
	$birthdate = validate($_POST['birthdate']);
	$contact = validate($_POST['contact']);
	$gender = validate($_POST['gender']);
	$civilstats = validate($_POST['civilstats']);
	$basiced = validate($_POST['basiced']);
	$yeargrad = validate($_POST['yeargrad']);
	$college = validate($_POST['college']);
	$gradschool = validate($_POST['gradschool']);
	$course = validate($_POST['course']);
	$norg = validate($_POST['norg']);
	$norgcontact = validate($_POST['norgcontact']);
	$org = validate($_POST['org']);
    $orgemail = validate($_POST['orgemail']);


	if (empty($lastname)){
		header("Location: add-new.php?error=Last name is required");
	}else if (empty($firstname)) {
		header("Location: add-new.php?error=First name is required");
	}else if (empty($middlename)) {
		header("Location: add-new.php?error=Middle name is required");
	}else if (empty($permanetaddr)) {
		header("Location: add-new.php?error=Permanent Addr is required");
	}else if (empty($presentaddr)) {
		header("Location: add-new.php?error=Present Addr is required");
	}else if (empty($emailaddr)) {
		header("Location: add-new.php?error=Email Address is required");
	}else if (empty($birthdate)) {
		header("Location: add-new.php?error=Birthdate is required");
	}else if (empty($contact)) {
		header("Location: add-new.php?error=Contact is required");
	}else if (empty($gender)) {
		header("Location: add-new.php?error=Gender is required");
	}else if (empty($civilstats)) {
		header("Location: add-new.php?error=CIvil Status is required");
	}else if (empty($basiced)) {
		header("Location: add-new.php");
	}else if (empty($yeargrad)) {
		header("Location: add-new.php?error=Year Graduate is required");
	}else if (empty($college)) {
		header("Location: add-new.php");
	}else if (empty($gradschool)) {
		header("Location: add-new.php");
	}else if (empty($course)) {
		header("Location: add-new.php");
	}else if (empty($norg)) {
		header("Location: add-new.php?error=Name of Organization is required");
	}else if (empty($norgcontact)) {
		header("Location: add-new.php?error=Name of Organization Contact is required");
	}else if (empty($org)) {
		header("Location: add-new.php?error=Organization is required");
	}else if (empty($orgemail)) {
		header("Location: add-new.php?error=Organization Email is required");
	}else {

       $sql = "INSERT INTO alumni (lastname, firstname, middlename, permanetaddr, presentaddr, emailaddr, birthdate, contact, gender, civilstats, basiced, college, gradschool, course, yeargrad, norg, norgcontact, org, orgemail) 
	   		VALUES ('$lastname','$firstname','$middlename','$permanetaddr','$presentaddr','$emailaddr','$birthdate','$contact','$gender','$civilstats','$basiced','$college','$gradschool','$course','$yeargrad','$norg','$norgcontact','$org','$orgemail')";

       $result = mysqli_query($conn, $sql);
       if ($result) {
       	  header("Location: add-new.php?success=successfully created");
       }else {
          header("Location: add-new.php?error=unknown error occurred");
       }
	}

}