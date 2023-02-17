<?php 

if (isset($_GET['id'])) {
include "server.php";
function validate($data){
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}

$id = validate($_GET['id']);

$sql = "SELECT * FROM alumni WHERE id=$id";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
$row = mysqli_fetch_assoc($result);
}else {
 header("Location: view-info-alumni.php");
}

}else if(isset($_POST['update'])){
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
	$id = validate($_POST['id']);

    $sql = "UPDATE alumni SET lastname='$lastname',firstname='$firstname',middlename='$middlename',permanetaddr='$permanetaddr' ,presentaddr='$presentaddr',emailaddr='$emailaddr',birthdate='$birthdate',contact='$contact',gender='$gender',civilstats='$civilstats',basiced='$basiced',college='$college',gradschool='$gradschool',course='$course',yeargrad='$yeargrad',norg='$norg',norgcontact='$norgcontact',org='$org',orgemail='$orgemail' WHERE id=$id";
    $result = mysqli_query($conn, $sql);
    }else {
    header("Location: view-info-alumni.php");
    }