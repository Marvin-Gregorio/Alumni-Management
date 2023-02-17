<?php
session_start();
include "server.php";
$sql = "SELECT * FROM admins ORDER BY id DESC";
$result = mysqli_query($conn, $sql);
if (isset($_SESSION['username']) && isset($_SESSION['id'])) {
?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Columban College, Inc. | Alumni Database Management System</title>

<!-- This is Website Logo -->
<link rel="icon" href="assets/css/images/logo.png">

<!-- This is Additionanl CSS Link -->
<link rel="stylesheet" href="style.css">

<!-- This is Bootstrap CSS Link -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">

<!-- Fontawesome Link -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
crossorigin="anonymous" referrerpolicy="no-referrer" />

<!-- This is Table Link -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>

</head>

<body style="background-color: #e0e0e0;">

<!-- This is Sub-Header -->

<nav class="navbar navbar-expand-lg" id="header">
<div class="container-fluid">
<a class="navbar-brand" href="#" id="logo-name">
<img src="assets/css/images/logo.png" width="50px;" alt="">
<span class="mx-3"><b>COLUMBAN COLLEGE, INC. ALUMNI MANAGEMENT SYSTEM</b></span>
</a>
<div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
<ul class="navbar-nav">
<li class="nav-item dropdown">
<a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
<span class="mx-3">Alumni Admin / <?=$_SESSION['username']?></span>
<img src="assets/css/images/avatar.png" width="50px" class="rounded-circle" alt="">
</a>
<ul class="dropdown-menu">
<li><a href="user-profile.php" a class="dropdown-item">Manage Accout</a></li>
<li><a href="logout.php" a class="dropdown-item">Logout</a></li>
</ul>
</li>
</ul>
</div>
</div>
</nav>

<!-- This is Header -->

<Header class="navbar navbar-expand-sm sub-header" id="header">
<div class="container-fluid">
<ul class="navbar-nav mx-3">
<li class="nav-item"><a id="nav-menu" href="index.php" class="nav-link mx-3">Dashboard</a></li>
<li class="nav-item"><a id="nav-menu" href="analytics.php" class="nav-link mx-3">Analytics</a></li>
<li class="nav-item"><a id="nav-menu" href="alumni-list.php" class="nav-link mx-3">Alumni List</a></li>
<li class="nav-item"><a id="nav-menu" href="alumni-attendance.php" class="nav-link mx-3">Alumni Attendance</a></li>
<li class="nav-item"><a id="nav-menu" href="user-list.php" class="nav-link mx-3">Users List</a></li>
</ul>
</div>
</Header>

<!-- This is Main -->


<div class="container-fluid" id="main">
        
&nbsp;
<div class="row">


<div class="card">
<div class="card-body" style="box-shadow: 8px 9px 15px -1px rgba(0,0,0,0.64);">

<div class="mb-3 d-flex justify-content-between">
<span class="px-2" style="border-left: 4px solid #000000; height: 25px;">
<h5>Users List</h5>
</span>
<a href="user-reg.php" class="btn btn-info text-white">+ Add New</a>
</div>
                    
<?php if (mysqli_num_rows($result)) { ?>
<table id="example" class="table table-borderless">
<thead>
<tr>
<th scope="col">Full Name</th>
<th scope="col">Email Address</th>
<th scope="col">Contact</th>
<th scope="col">Username</th>
<th scope="col">Action</th>
</tr>
</thead>
<tbody>
<?php 
$i = 0;
while($rows = mysqli_fetch_assoc($result)){
$i++;
?>
<tr>
<td ><?php echo $rows['lastname']; ?> , <?php echo $rows['firstname']; ?> <?php echo $rows['middlename']; ?></td>
<td><?php echo $rows['email']; ?></td>
<td><?php echo $rows['phone']; ?></td>
<td><?php echo $rows['username']; ?></td>
<td>
    <a href="user-view-info.php" class="btn btn-info btn-sm text-white"><i class="fas fa-eye"></i></a>
</td>
</tr>
<?php } ?>
</tbody>
</table>
<?php } ?>

                            
</div>
</div>
</div>

</div>




<!-- This is Script Js Link -->
<script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/chart.js@4.2.0/dist/chart.umd.min.js"></script>

<script>
// This is Table
$(document).ready(function () {
$('#example').DataTable();
});
// Table end here

// This is Select Year
let dateDropdown = document.getElementById('date-dropdown'); 
       
let currentYear = new Date().getFullYear();    
let earliestYear = 1900;     
while (currentYear >= earliestYear) {      
let dateOption = document.createElement('option');          
dateOption.text = currentYear;      
dateOption.value = currentYear;        
dateDropdown.add(dateOption);      
currentYear -= 1;    
}
// Select Year End here

</script>
<?php if (isset($_GET['success'])) { ?>
<script>
swal({
title: "<?php echo $_GET['success']; ?>",
// text: "You clicked the button!",
icon: "success",
button: "Got it",
});
</script>
<?php } ?>
</body>

</html>
<?php }else{
	header("Location: login.php");
} ?>