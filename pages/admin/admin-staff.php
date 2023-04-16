
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
                            <span><b>List of Staffs</b></span>
                            <a href="" class="btn btn-sm" style="background-color: #005bb1; color:#ffffff; font-weight:bold;" data-bs-toggle="modal" data-bs-target="#vacancylist"><i class="fas fa-circle-plus"></i> Add Staff</a>
                        </div>
                        <hr>
                        <table id="joblist" class="table table-hover">
                            <thead>
                                <tr style="font-size: 13px;">
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Cellphone Number</th>
                                    <th>BirthDate</th>
                                    <th>Username</th>
                                    <th>Gender</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- This is vacancy -->
    <div class="modal fade" id="vacancylist" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <span><h5><b>Add New Vacancy</b></h5></span>
                    <button id="addJobCloseModal" type="button" class="btn-close btn-sm" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container" style="padding: 5px;">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="" class="col-md-5 col-form-label">First Name:</label>
                                    <div class="col-md-12">
                                        <input id="first_name" type="text" class="form-control form-control-sm">
                                    </div>
                                </div>                                

                                <div class="form-group">
                                    <label for="" class="col-md-5 col-form-label">Middle Name:</label>
                                    <div class="col-md-12">
                                        <input id="middle_name" type="text" class="form-control form-control-sm">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="" class="col-md-5 col-form-label">Last Name:</label>
                                    <div class="col-md-12">
                                        <input id="last_name" type="text" class="form-control form-control-sm">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="" class="col-md-5 col-form-label">Email:</label>
                                    <div class="col-md-12">
                                        <input id="email" type="text" class="form-control form-control-sm">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="" class="col-md-5 col-form-label">Cellphone Number:</label>
                                    <div class="col-md-12">
                                        <input id="cp" type="text" class="form-control form-control-sm">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="" class="col-md-5 col-form-label">Birthday:</label>
                                    <div class="col-md-12">
                                        <input id="birth" type="date" class="form-control form-control-sm">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="" class="col-md-5 col-form-label">Username:</label>
                                    <div class="col-md-12">
                                        <input id="username" type="text" class="form-control form-control-sm">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="" class="col-md-5 col-form-label">Gender:</label>
                                    <div class="col-md-12">
                                        <select id="gender" class="form-control">
                                            <option value="MALE">Male</option>
                                            <option value="FEMALE">Female</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="" class="col-md-5 col-form-label">Default Password:</label>
                                    <div class="col-md-12">
                                        <input id="password" value="P@ssw0rd" type="text" class="form-control form-control-sm" disabled>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm" style="background-color: #ad0101; color:#ffffff; font-weight:bold;" data-bs-dismiss="modal">Close</button>
                    <button onclick="addStaff()" type="button" class="btn btn-sm" style="background-color: #005bb1;color:#ffffff;font-weight:bold;"><i class="fas fa-floppy-disk"></i> Save</button>
                </div>
            </div>
        </div>
    </div>

    <!-- View vacancy -->
    <div class="modal fade" id="viewvacancy" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <span><h5><b>Update Staff Info</b></h5></span>
                    <button id="updateJobCloseModal" type="button" class="btn-close btn-sm" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container" style="padding: 5px;">
                        <div class="row">
                            <div class="col-md-12">
                                <input type="text" hidden id="update_id">
                                <div class="form-group">
                                    <label for="" class="col-md-5 col-form-label">First Name:</label>
                                    <div class="col-md-12">
                                        <input id="update_first_name" type="text" class="form-control form-control-sm">
                                    </div>
                                </div>                                

                                <div class="form-group">
                                    <label for="" class="col-md-5 col-form-label">Middle Name:</label>
                                    <div class="col-md-12">
                                        <input id="update_middle_name" type="text" class="form-control form-control-sm">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="" class="col-md-5 col-form-label">Last Name:</label>
                                    <div class="col-md-12">
                                        <input id="update_last_name" type="text" class="form-control form-control-sm">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="" class="col-md-5 col-form-label">Email:</label>
                                    <div class="col-md-12">
                                        <input id="update_email" type="text" class="form-control form-control-sm">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="" class="col-md-5 col-form-label">Cellphone Number:</label>
                                    <div class="col-md-12">
                                        <input id="update_cp" type="text" class="form-control form-control-sm">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="" class="col-md-5 col-form-label">Birthday:</label>
                                    <div class="col-md-12">
                                        <input id="update_birth" type="date" class="form-control form-control-sm">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="" class="col-md-5 col-form-label">Username:</label>
                                    <div class="col-md-12">
                                        <input id="update_username" type="text" class="form-control form-control-sm">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="" class="col-md-5 col-form-label">Gender:</label>
                                    <div class="col-md-12">
                                        <select id="update_gender" class="form-control">
                                            <option value="MALE">Male</option>
                                            <option value="FEMALE">Female</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm" style="background-color: #ad0101; color:#ffffff; font-weight:bold;" data-bs-dismiss="modal">Close</button>
                    <button onclick="updateJob()" type="button" class="btn btn-sm" style="background-color: #005bb1; color:#ffffff; font-weight:bold;"><i class="fas fa-floppy-disk"></i> Save</button>
                </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="//cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="../../js/loadAlumniList.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../../js/logOut.js" type="text/javascript"></script>
    <script src="../../js/nav_profile.js" type="text/javascript"></script>
    <script src="../../js/adminList.js" type="text/javascript"></script>
    <script src="../../js/stafflist.js" type="text/javascript"></script>
    <script src="../../js/staff_function.js" type="text/javascript"></script>
</body>

</html>