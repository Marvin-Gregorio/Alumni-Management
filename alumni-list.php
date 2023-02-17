<?php
session_start();
include "server.php";
$sql = "SELECT * FROM alumni ORDER BY id DESC";
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
        
<div class="row">


<div class="card">
<div class="card-body" style="box-shadow: 8px 9px 15px -1px rgba(0,0,0,0.64);">

<div class="d-flex justify-content-between">
<span class="px-2" style="border-left: 4px solid #000000; height: 25px;">
<h5>Alumni List</h5>
</span>
<a href="add-new.php" class="btn btn-info text-white">+ Add New</a>
</div>

<form action="" method="POST" id="" class="d-flex justify-content-between mb-3">
<div class="mx-1">
<label for="" id="label-text">Search</label>
<input type="search" class="form-control form-control-sm" placeholder="Search">
</div>
<div class="mx-1">
<label for="" id="label-text">Year</label>
<select name="" id='date-dropdown' class="form-select form-select-sm">
<option>All</option>
</select>
</div>
<div class="mx-1">
<label for="" id="label-text">Degree</label>
<select name="" id="" class="form-select form-select-sm">
<option>All</option>
<option value="">Elementary Graduate</option>
<option value="">High School Graduate</option>
<option value="">Bachelor's Degree</option>
<option value="">Associate's Degree</option>
<option value="">Master's Degree</option>
<option value="">Doctoral Degree</option>
</select>
</div>
<div class="mx-1">
<label for="" id="label-text">Basci Education</label>
<select name="" id="" class="form-select form-select-sm">
<option >All</option>
<option value="">Elementary</option>
<option value="">Junior High School</option>
<option value="">Senior High School</option>
</select>
</div>
<div class="mx-1">
<label for="" id="label-text">Field Of Study</label>
<select name="" id="" class="form-select form-select-sm">
<option >All</option>
<option value="">Food and Beverages</option>
<option value="">Computer System Servicing</option>
<option value="">Academic Track Cookery</option>
</select>
</div>
<div class="mx-1">
<label for="" id="label-text">Under</label>
<select name="" id="" class="form-select form-select-sm">
<option >All</option>
<option value="">TVL-HE</option>
<option value="">TVL-ICT</option>
<option value="">ABM</option>
<option value="">STEM</option>
<option value="">GAS</option>
<option value="">HUMSS</option>
</select>
</div>
<div class="mx-1">
<label for="" id="label-text">Undergraduate</label>
<select name="" id="" class="form-select form-select-sm">
<option >All</option>
<option value="">College of Architecture</option>
<option value="">College of Arts, Science and Education</option>
<option value="">College of Business and Accountancy</option>
<option value="">College of Computer Studies</option>
<option value="">College of Engineering</option>
<option value="">College of Nursing</option>
</select>
</div>
<div class="mx-1">
<label for="" id="label-text">Field of Study</label>
<select name="" id="" class="form-select form-select-sm">
<option >All</option>
<option value="">Bachelor of Science in Architecture</option>
<option value="">Bachelor of Arts in Communication</option>
<option value="">Bachelor of Arts in Political Science</option>
<option value="">Bachelor of Science in Social Work</option>
<option value="">Bachelor in Human Services</option>
<option value="">Bachelor of Elementary Education</option>
<option value="">Bachelor of Physical Education</option>
<option value="">Bachelor of Early Childhood Education</option>
<option value="">Bachelor of Secondary Education</option>
<option value="">Bachelor of Science in Accountancy</option>
<option value="">Bachelor of Science in Hospitality Management</option>
<option value="">Bachelor of Science in Tourism Management</option>
<option value="">Bachelor of Science in Business Administration</option>
<option value="">Bachelor of Science in Information Technology</option>
<option value="">Bachelor of Science in Computer Science</option>
<option value="">Bachelor of Library and Information Science</option>
<option value="">Bachelor of Science in Office Administration</option>
<option value="">Associate in Computer Technology</option>
<option value="">Bachelor of Science in Civil Engineering</option>
<option value="">Bachelor of Science in Computer Engineering</option>
<option value="">Bachelor of Science in Electrical Engineering</option>
<option value="">Bachelor of Science in Electronics Engineering</option>
<option value="">Bachelor of Science in Industrial Engineering</option>
<option value="">Bachelor of Science in Nursing</option>
</select>
</div>
<div class="mx-1">
<label for="" id="label-text">Major</label>
<select name="" id="" class="form-select form-select-sm">
<option >All</option>
<option value="">English</option>
<option value="">Filipino</option>
<option value="">Mathematics</option>
<option value="">Science</option>
<option value="">Social Studies</option>
<option value="">Religious Education</option>
<option value="">Values Education</option>
<option value="">Financial Management</option>
<option value="">Human Resource Dev. Management</option>
<option value="">Marketing Management</option>
</select>
</div>
<div class="mx-1">
<label for="" id="label-text">Graduate Programs</label>
<select name="" id="" class="form-select form-select-sm">
<option >All</option>
<option value="">Doctor of Education</option>
<option value="">Master in Business Administration</option>
<option value="">Master in Public Management</option>
<option value="">Master of Arts in Education</option>
</select>
</div>
<div class="mx-1">
<label for="" id="label-text">Major</label>
<select name="" id="" class="form-select form-select-sm">
<option >All</option>
<option value="">Educational Administration</option>
<option value="">English Language Teaching</option>
<option value="">Religious Education</option>
<option value="">Science Education</option>
<option value="">Values Education</option>
</select>
</div>
</form>
<form class="form-horizontal well mb-3" action="import.php" method="POST" name="upload_excel" enctype="multipart/form-data">
<fieldset>
<div class="control-group mb-1">
<span><b>Import CSV/Excel file</b></span>
<div class="control-label">
<label for="">CSV/Excel File:</label>
</div>
<div class="controls">
<input type="file" name="file" id="file" class="input-large">
</div>
</div>
<div class="control-group">
<div class="controls">
<button type="submit" id="submit" name="Import" class="btn btn-primary button-loading btn-sm" data-loading-text="Loading...">Upload</button>
</div>
</div>
</fieldset>
</form>
                    
<?php if (mysqli_num_rows($result)) { ?>
<table id="example" class="table table-borderless">
<thead>
<tr>
<th>Full Name</th>
<th>Email Address</th>
<th>Contact</th>
<th>Address</th>
<th>Action</th>
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
<td><?php echo $rows['emailaddr']; ?></td>
<td><?php echo $rows['contact']; ?></td>
<td><?php echo $rows['presentaddr']; ?></td>
<td>
<a href="view-info-alumni.php" class="btn btn-info btn-sm text-white"><i class="fas fa-eye"></i></a>
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

</body>

</html>
<?php }else{
	header("Location: login.php");
} ?>