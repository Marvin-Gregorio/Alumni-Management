
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

    <div class="container-fluid" style="padding: 20px;">
        <div class="row">
            <div class="col-md-2">
                <div class="card">
                    <div class="card-body">
                        <ul class="list-unstyled px-1">
                            <l class="nav-item"><a href="events.php" class="nav-link px-3 py-2 d-block btn btn-info mt-2"><i class="fas fa-calendar-days mx-2"></i><b>Events</b></a></l>
                            <l class="nav-item"><a href="participants-event.php" class="nav-link px-3 py-2 d-block btn btn-info mt-2"><i class="fas fa-users mx-2"></i><b> Participants</b></a></l>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-10">
                <div class="card">
					<div class="card-body">
                        <div class="d-flex justify-content-between">
                            <span><b>Participants</b></span>
                        </div>
                        <hr>
                        <table id="joblist">
                            <thead>
                                <tr style="font-size: 13px;">
                                    <th>Name</th>
                                    <th>Department</th>
                                    <th>Email</th>
									<th>Contact No.</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr style="font-size: 13px;">
                                    <td>Test 123</td>
                                    <td>College of Engineer</td>
                                    <td>test123@gmail.com</td>
									<td>09123456789</td>
                                    <td>Going</td>
                                    <td>
                                        <a href="" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
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
			<script>
                $(document).ready(function () {
                $('#joblist').DataTable();
                });
            </script>
		</body>

		</html>