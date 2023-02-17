<?php
include('server.php');
$sql = "SELECT * FROM alumni ORDER BY id DESC";
$result = mysqli_query($conn, $sql);

?>

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
<td scope="row"><?php echo $rows['lastname']; ?> , <?php echo $rows['firstname']; ?> <?php echo $rows['middlename']; ?></td>
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