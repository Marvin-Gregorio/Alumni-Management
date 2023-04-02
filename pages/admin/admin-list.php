
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

	<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">

</head>

<body style="background-color: #e0e0e0;">

	<!-- This is Sub-Header -->


	<!-- This is Header -->

	<?php include('header.php') ?>

	<!-- This is Main -->
	<div class="row mb-3">
		<div class="col-md-12">
			<div class="card">
				<div class="card-body">
					<div class="row">
						<div class="col-md-3">
							<select name="" id="print_department" class="form-select form-select-sm" onchange="departmentFilter(this.value)">
								<option value="All" selected>All</option>
								<option value="CCS">CCS</option>
								<option value="CBA">CBA</option>
								<option value="CASED">CASED</option>
								<option value="Architecture">Architecture</option>
								<option value="Engineering">Engineering</option>
								<option value="Nursing">Nursing</option>
							</select>
						</div>
						<div class="col-md-2">
							<input type="text" name="" class="form-control" placeholder="Year From" id="year_start">
						</div>
						<div class="col-md-2">
							<input type="text" name="" class="form-control" placeholder="Year To" id="year_end">
						</div>
						<div class="col-md-2">
							<button class="btn btn-success" onclick="printSearch()"><i class="fas fa-print"></i>Print</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

   	<div class="container-fluid" id="main">

		<div class="row">


			<div class="card">
				<div class="card-body" style="box-shadow: 8px 9px 15px -1px rgba(0,0,0,0.64);">

					<div class="d-flex justify-content-between">
						<span class="px-2" style="border-left: 4px solid #000000; height: 25px;">
							<h5>Alumni List</h5>
						</span>
					</div>

					<table id="myTable" class="table table-hover">
						<thead>
							<tr style="font-size: 12px;">
								<th>First Name</th>
								<th>Last Name</th>
								<th>Email</th>
								<th>Phone Number</th>
								<th>Gender</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody style="font-size: 12px;">
						</tbody>
					</table>
				</div>
			</div>
		</div>

	</div>
	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-xl" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
					<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="row">

						<div class="col-md-4">
							<h2>Personal Information:</h2>
							<div class="container-fluid">
								
								<div class="mt-1">
									<label class="fw-semibold" >Full Name:</label>
									<p><span id="fname"> </span><span id="mname"> </span><span id="lname"> </span></p>
								</div>

								<div class="mt-1">
									<label class="fw-semibold" >Email:</label>
									<p><span id="p_email"> </span></p>
								</div>

								<div class="mt-1">
									<label class="fw-semibold" >Cellphone Number:</label>
									<p><span id="p_cp_number"> </span></p>
								</div>
								
								<div class="mt-1">
									<label class="fw-semibold" >Birth Date:</label>
									<p><span id="b_date"> </span></p>
								</div>

								<div class="mt-1">
									<label class="fw-semibold" >Username:</label>
									<p><span id="uname"> </span></p>
								</div>

								<div class="mt-1">
									<label class="fw-semibold" >Gender:</label>
									<p><span id="gender"> </span></p>
								</div>

								<div class="mt-1">
									<label class="fw-semibold" >Status:</label>
									<p><span id="status"> </span></p>
								</div>

							</div>
						</div>
						
						<div class="col-md-4">
							<h2>Educational Information:</h2>
							<div class="container-fluid">
								
								
								<div>
									<label class=" fw-semibold">Elementary (Grade 1-6)</label>
									<p><span id="elem_school"></span> - <span id="elem_year"></span></p>
								</div>

								
								<div class="">
									<label class=" fw-semibold">Junior (Grade 7-10)</label>
									<p><span id="junior_school"></span> - <span id="junior_year"></span></p>
								</div>
								<label class=" fw-semibold">Senior (Grade 11-12)</label>
								<div class="">
									<p><span id="senior_course"></span> | <span id="senior_school"></span> - <span id="senior_year"></span></p>
								</div>
								<label class=" fw-semibold">Undegraduate</label>
								<div class="">
									<p><span id="college_course"></span> | <span id="college_school"></span> - <span id="college_year"></span></p>
								</div>
								<label class=" fw-semibold">Masteral</label>
								<div class="">
									<p><span id="master_course"></span> | <span id="master_school"></span> - <span id="master_year"></span></p>
								</div>
								<label class=" fw-semibold">Doctoral</label>
								<div class="">
									<p><span id="doctor_course"></span> | <span id="doctor_school"></span> - <span id="doctor_year"></span></p>
								</div>
								
							</div>  
						</div>
						
						<div class="col-md-4">
							<div >
								<h2>Employment Information:</h2>
								<div class="container-fluid">
									<div class="mt-1">
										<label class="fw-semibold" >Company Name:</label>
										<p><span id="company_name"> </span></p>
									</div>
									<div class="mt-1">
										<label class="fw-semibold" >Company Number:</label>
										<p><span id="company_number"> </span></p>
									</div>
									<div class="mt-1">
										<label class="fw-semibold" >Company Address:</label>
										<p><span id="company_address"> </span></p>
									</div>
									<div class="mt-1">
										<label class="fw-semibold" >Company Email:</label>
										<p><span id="company_email"> </span></p>
									</div>
								</div>
							</div>
						</div>
						
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>


			<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
			<script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
			<script src="//cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js" type="text/javascript"></script>

			<script src="../../js/loadAlumniList.js" type="text/javascript"></script>
			<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
			<script src="../../js/logOut.js" type="text/javascript"></script>
			<script src="../../js/nav_profile.js" type="text/javascript"></script>
			<script src="../../js/adminList.js" type="text/javascript"></script>
		</body>

		</html>