<?php
    $id = $_GET['id'];
    echo "<input type='text' id='jobDetailsId' hidden value='".$id."'>";

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

    <!-- This is Header -->

    <?php include('header.php') ?>

    <!-- This is Main -->

    <div class="container" style="padding: 20px;">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <ul class="list-unstyled">
                                <li><h3 id="job_name">Gridpoint, Technologies Inc.</h3></li>
                                <li><b id="job_title">IT Supervisor (Network Administrator)</b></li>
                            </ul>
                        </div>
                        <hr>
                        <div class="form-group">
                            <span><b>Job Description:</b></span>
                            <pre id="job_description"></pre>
                        </div>
                        <div class="form-group">
                            <span><b>Qualifications:</b></span>
                            <pre id="job_qualification"></pre>
                        </div>
                        <div class="form-group">
                            <span id="job_type"><b>Job Type :</b> Full-Time</span>
                        </div>
                        <div class="form-group">
                            <span id="job_salary"><b>Salary :</b > Php20,000-23,000 a month</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-between mt-3">
            <a href="job.php" class="btn btn-sm btn-danger text-white"><i class="fas fa-arrow-left"></i> <b>Back</b></a>
        </div>
    </div>

    <!-- This is Script Js Link -->
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.2.0/dist/chart.umd.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../../js/logOut.js" type="text/javascript"></script>
    <script src="../../js/nav_profile.js" type="text/javascript"></script>
    <script src="../../js/jobDetails.js" type="text/javascript"></script>
</body>

</html>