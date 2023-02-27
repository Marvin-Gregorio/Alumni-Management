
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
            <div class="col-md-12">
                <div class="card">
					<div class="card-body">
                        <div class="d-flex justify-content-between">
                            <span><b>Events</b></span>
                            <a href="" class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#createevents"><i class="fas fa-circle-plus"></i> Add Events</a>
                        </div>
                        <hr>
                        <table id="joblist">
                            <thead>
                                <tr style="font-size: 13px;">
                                    <th>Events Name</th>
                                    <th>Events Place</th>
                                    <th>Events Date</th>
									<th>Events Time</th>
									<th>Events Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr style="font-size: 13px;">
                                    <td>CBA vs CCS</td>
                                    <td>CC Baretto Gym</td>
                                    <td>11/24/2022</td>
									<td>1:00pm</td>
									<td>Come and Join us to watch the game and support your teams</td>
                                    <td>
                                        <a href="" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#updateevents"><i class="fas fa-pen-to-square"></i></a>
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

	<!-- This is create events -->
	<div class="modal fade" id="createevents" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <span><h5><b>Add New Events</b></h5></span>
                    <button type="button" class="btn-close btn-sm" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container" style="padding: 5px;">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="" class="col-md-5 col-form-label">Events Name:</label>
                                    <div class="col-md-12">
                                        <input type="text" class="form-control form-control-sm">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-md-5 col-form-label">Events Place:</label>
                                    <div class="col-md-12">
										<input type="text" class="form-control form-control-sm">
                                    </div>
                                </div>
								<div class="form-group">
                                    <label for="" class="col-md-5 col-form-label">Events Description:</label>
                                    <div class="col-md-12">
										<textarea name="" id="" class="form-control form-control-sm"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-md-5 col-form-label">Date:</label>
                                    <div class="col-md-12">
                                        <input type="date" class="form-control form-control-sm">
                                    </div>
                                </div>
								<div class="form-group">
                                    <label for="" class="col-md-5 col-form-label">Time:</label>
                                    <div class="col-md-12">
                                        <input type="time" class="form-control form-control-sm">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-danger" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-sm btn-info"><i class="fas fa-floppy-disk"></i> Save</button>
                </div>
            </div>
        </div>
    </div>

	<!-- This is update events -->
	<div class="modal fade" id="updateevents" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <span><h5><b>Update Events</b></h5></span>
                    <button type="button" class="btn-close btn-sm" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container" style="padding: 5px;">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="" class="col-md-5 col-form-label">Events Name:</label>
                                    <div class="col-md-12">
                                        <input type="text" class="form-control form-control-sm">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-md-5 col-form-label">Events Place:</label>
                                    <div class="col-md-12">
										<input type="text" class="form-control form-control-sm">
                                    </div>
                                </div>
								<div class="form-group">
                                    <label for="" class="col-md-5 col-form-label">Events Description:</label>
                                    <div class="col-md-12">
										<textarea name="" id="" class="form-control form-control-sm"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-md-5 col-form-label">Date:</label>
                                    <div class="col-md-12">
                                        <input type="date" class="form-control form-control-sm">
                                    </div>
                                </div>
								<div class="form-group">
                                    <label for="" class="col-md-5 col-form-label">Time:</label>
                                    <div class="col-md-12">
                                        <input type="time" class="form-control form-control-sm">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-danger" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-sm btn-info"><i class="fas fa-floppy-disk"></i> Save</button>
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