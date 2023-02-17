<?php
session_start();
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
<div class="col-md-3">
<div class="card">
<div class="card-body" style="box-shadow: 8px 9px 15px -1px rgba(0,0,0,0.64);">
<div class="d-flex justify-content-between">
<span class="px-2" style="border-left: 4px solid #000000; height: 25px;">
<h5>Alumni Attendance</h5>
</span>
</div>
&nbsp;
<div class="donut-chart" style="position: relative; height:40vh; width:80vw">
<canvas id="bar"></canvas>
</div>
&nbsp;
<div>
<span><b>TOTAL NUMBER OF ATTENDEES:</b><span class="mx-5 fs-5"><b>6,202</b></span></span>
</div>
</div>
</div>
</div>
<div class="col-md-9">
<div class="card">
<div class="card-body" style="box-shadow: 8px 9px 15px -1px rgba(0,0,0,0.64);">
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
<table class="table" id="attendee">
<thead>
<tr>
<th>Name</th>
<th>Course</th>
<th>Batch</th>
</tr>
</thead>
</table>
</div>
</div>
</div>
</div>
</div>




<!-- This is Script Js Link -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/chart.js@4.2.0/dist/chart.umd.min.js"></script>

<script>
var ctx = document.getElementById('bar').getContext('2d');
var myChart = new Chart(ctx, {
type: 'doughnut',
data: {
labels: ['BasicEdu','CBA', 'CASED', 'CCS', 'COE', 'COA', 'CON','GradSchool'],
datasets: [{
label: 'NUMBER OF ALUMNI ATTENDEE',
data: [1883, 1064, 450, 900, 500, 1000, 300, 105],
backgroundColor: [
'#023e8a',
'#ffd60a',
'#1b4332',
'#3c096c',
'#403d39',
'#a4161a',
'#00a6fb',
'#ff9505'
],
}]
},
options: {
scales: {
y: {
beginAtZero: true
}
}
}
});

$(document).ready(function () {
$('#attendee').DataTable();
});
</script>

</body>

</html>
<?php }else{
header("Location: login.php");
} ?>