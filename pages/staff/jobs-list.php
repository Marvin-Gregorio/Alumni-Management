
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

        <div class="row mb-3">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <select name="" id="" class="form-select form-select-sm" onchange="categoryFilter(this.value)">
                                    <option selected>Job Category</option>
                                    <option value="Information Technology">Information Technology</option>
                                    <option value="Basic Metal Production">Basic Metal Production</option>
                                    <option value="Chemical Industries">Chemical Industries</option>
                                    <option value="Commerce">Commerce</option>
                                    <option value="Construction">Construction</option>
                                    <option value="Education">Education</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <select name="" id="" class="form-select form-select-sm" onchange="jobTypeFilter(this.value)">
                                    <option selected>Job type</option>
                                    <option value="Full-Time">Full-Time </option>
                                    <option value="Part-Time">Part-Time</option>
                                    <option value="Temporary">Temporary</option>
                                    <option value="Contract">Contract</option>
                                    <option value="Internship">Internship</option>
                                    <option value="Fresh Graduate">Fresh Graduate</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <span><b>List of Vacancies</b></span>
                            <a href="" class="btn btn-sm" style="background-color: #005bb1;color:#ffffff;font-weight:bold;" data-bs-toggle="modal" data-bs-target="#vacancylist"><i class="fas fa-circle-plus"></i> Add Vacancy</a>
                        </div>
                        <hr>
                        <table id="joblist" class="table table-hover">
                            <thead>
                                <tr style="font-size: 13px;">
                                    <th>Company Name</th>
                                    <th>Category</th>
                                    <th>Occuptational Title</th>
                                    <th>Salary</th>
                                    <th>Job Type</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr style="font-size: 13px;">
                                    <td>Gridpoint, Technologies Inc.</td>
                                    <td>IT</td>
                                    <td>IT Supervisor (Network Administrator)</td>
                                    <td>Php20,000-23,000 a month</td>
                                    <td>Full-Time</td>
                                    <td>
                                        <a href="" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#viewvacancy"><i class="fas fa-pen-to-square"></i></a>
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
                                    <label for="" class="col-md-5 col-form-label">Company Name:</label>
                                    <div class="col-md-12">
                                        <input id="addjob_name" type="text" class="form-control form-control-sm">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-md-5 col-form-label">Category:</label>
                                    <div class="col-md-12">
                                        <select name="" id="addjob_category" class="form-select form-select-sm">
                                            <option selected>Select Category</option>
                                            <option value="Information Technology">Information Technology</option>
                                            <option value="Basic Metal Production">Basic Metal Production</option>
                                            <option value="Chemical Industries">Chemical Industries</option>
                                            <option value="Commerce">Commerce</option>
                                            <option value="Construction">Construction</option>
                                            <option value="Education">Education</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-md-5 col-form-label">Occuptional Title:</label>
                                    <div class="col-md-12">
                                        <input id="addjob_title" type="text" class="form-control form-control-sm">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-md-5 col-form-label">Salary:</label>
                                    <input id="addjob_salary" type="text" class="form-control form-control-sm">
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-md-5 col-form-label">Job Description:</label>
                                    <div class="col-md-12">
                                        <textarea name="" class="form-control form-control-sm" id="addjob_description"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-md-5 col-form-label">Qualification:</label>
                                    <div class="col-md-12">
                                        <textarea name="" class="form-control form-control-sm" id="addjob_qualification"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-md-5 col-form-label">Job Type:</label>
                                    <div class="col-md-12">
                                        <select name="" id="addjob_type" class="form-select form-select-sm">
                                            <option selected>Job type</option>
                                            <option value="Full-Time">Full-Time </option>
                                            <option value="Part-Time">Part-Time</option>
                                            <option value="Temporary">Temporary</option>
                                            <option value="Contract">Contract</option>
                                            <option value="Internship">Internship</option>
                                            <option value="Fresh Graduate">Fresh Graduate</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm" style="background-color:#ad0101; color:#ffffff;font-weight:bold;" data-bs-dismiss="modal">Close</button>
                    <button onclick="addJob()" type="button" class="btn btn-sm" style="background-color:#005bb1; color:#ffffff;font-weight:bold;"><i class="fas fa-floppy-disk"></i> Save</button>
                </div>
            </div>
        </div>
    </div>

    <!-- View vacancy -->
    <div class="modal fade" id="viewvacancy" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <span><h5><b>Update Job Vacancy</b></h5></span>
                    <button id="updateJobCloseModal" type="button" class="btn-close btn-sm" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container" style="padding: 5px;">
                        <div class="row">
                            <div class="col-md-12">
                                <input type="text" id="updatejob_id" name="" hidden>
                                <div class="form-group">
                                    <label for=""  class="col-md-5 col-form-label">Company Name:</label>
                                    <div class="col-md-12">
                                        <input id="updatejob_name" type="text" class="form-control form-control-sm">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-md-5 col-form-label">Category:</label>
                                    <div class="col-md-12">
                                        <select name="" id="updatejob_category" class="form-select form-select-sm">
                                            <option selected>Select Category</option>
                                            <option value="Information Technology">Information Technology</option>
                                            <option value="Basic Metal Production">Basic Metal Production</option>
                                            <option value="Chemical Industries">Chemical Industries</option>
                                            <option value="Commerce">Commerce</option>
                                            <option value="Construction">Construction</option>
                                            <option value="Education">Education</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-md-5 col-form-label">Occuptional Title:</label>
                                    <div class="col-md-12">
                                        <input id="updatejob_title" type="text" class="form-control form-control-sm">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-md-5 col-form-label">Salary:</label>
                                    <input id="updatejob_salary" type="text" class="form-control form-control-sm">
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-md-5 col-form-label">Job Description:</label>
                                    <div class="col-md-12">
                                        <textarea name="" class="form-control form-control-sm" id="updatejob_description"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-md-5 col-form-label">Qualification:</label>
                                    <div class="col-md-12">
                                        <textarea name="" class="form-control form-control-sm" id="updatejob_qualification"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-md-5 col-form-label">Job Type:</label>
                                    <div class="col-md-12">
                                        <select name="" id="updatejob_type" class="form-select form-select-sm">
                                            <option selected>Job type</option>
                                            <option value="Full-Time">Full-Time </option>
                                            <option value="Part-Time">Part-Time</option>
                                            <option value="Temporary">Temporary</option>
                                            <option value="Contract">Contract</option>
                                            <option value="Internship">Internship</option>
                                            <option value="Fresh Graduate">Fresh Graduate</option>
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
    <script src="../../js/joblist.js" type="text/javascript"></script>
    <script src="../../js/job_function.js" type="text/javascript"></script>
</body>

</html>