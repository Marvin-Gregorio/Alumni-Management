
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

<!-- This is Header -->

<?php include('header.php') ?>

<!-- This is Main -->



<div class="container-fluid" id="main">
<div class="row mb-3">
<div class="col-md-12">
<div class="card">
<div class="card-body" style="box-shadow: 8px 9px 15px -1px rgba(0,0,0,0.64);">
<div class="d-flex justify-content-between mb-3">
<span class="px-2" style="border-left: 4px solid #000000; height: 25px;">
<h5>Alumni List</h5>
</span>
<a href="alumni-list.php" class="btn btn-info text-white">View All</a>
</div>
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
<tr>
<td scope="row"></td>
<td></td>
<td></td>
<td></td>
<td>
<a href="view-info-alumni.php" class="btn btn-info btn-sm text-white"><i class="fas fa-eye"></i></a>
</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-6">
<div class="card">
<div class="card-body" style="box-shadow: 8px 9px 15px -1px rgba(0,0,0,0.64);">
<div class="d-flex justify-content-between mb-3">
<span class="px-2" style="border-left: 4px solid #000000; height: 25px;">
<h5>Analytics</h5>
</span>
<a href="analytics.php" class="btn btn-info text-white">View All</a>
</div>
&nbsp;
<div class="mb-3" style="position: relative;">
<canvas id="alumni" height="20vw" width="80vw"></canvas>
</div>
<div class="mb-3">
<span><b>TOTAL NUMBER OF ALUMNI:</b><span class="mx-5 fs-5"><b>6,308</b></span></span>
</div>
</div>
</div>
</div>
<div class="col-md-6">
<div class="card">
<div class="card-body" style="box-shadow: 8px 9px 15px -1px rgba(0,0,0,0.64);">
<div class="d-flex justify-content-between mb-3">
<span class="px-2" style="border-left: 4px solid #000000; height: 25px;">
<h5>Alumni Attendance</h5>
<span><b>60th Founding Anniversary Kick Off Activity</b></span>
<p>November 21, 2022</p>
</span>
<a href="alumni-attendance.php" class="btn btn-info text-white">View All</a>
</div>
&nbsp;
<div class="mb-3" style="position: relative;">
<canvas id="attend" height="20vw" width="80vw"></canvas>
</div>
<div class="mb-3">
<span><b>TOTAL NUMBER OF ATTENDEES:</b><span class="mx-5 fs-5"><b>53,600</b></span></span>
</div>
</div>
</div>
</div>
</div>
</div>

<!-- This is Script Js Link -->
<script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.2.0/dist/chart.umd.min.js"></script>
<script src="chart.js"></script>
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
<script>
$(document).ready(function() {
    $('#add').DataTable();
} );
</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="../../js/logOut.js" type="text/javascript"></script>
<script src="../../js/nav_profile.js" type="text/javascript"></script>
</body>

</html>