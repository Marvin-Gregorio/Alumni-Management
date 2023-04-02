
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



    <div class="container-" style="padding: 20px;">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <table id="eventstable" class="table table-hover">
                            <thead style="font-size: 13px;">
                                <tr>
                                    <th>Events Name</th>
                                    <th>Events Place</th>
                                    <th>Events Date</th>
                                    <th>Events Time</th>
                                    <th>Events Description</th>
                                    <th>Interested?</th>
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
<!-- 
    <div class="container" style="padding: 20px;">
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <ul class="list-unstyled">
                            <li><b class="fs-4">CCS Day</b></li>
                            <li><b>Main Quadrangles</b></li>
                            <li><b>March 17, 2023</b></li>
                            <li><b>06:00pm</b></li>
                            <li><b>Simple Celebration of Department</b></li>
                            <li><b><button class="btn btn btn-primary"><i class="fas fa-thumbs-up"></i> Yes</button></b></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <ul class="list-unstyled">
                            <li><b class="fs-4">CCS Day</b></li>
                            <li><b>Main Quadrangles</b></li>
                            <li><b>March 17, 2023</b></li>
                            <li><b>06:00pm</b></li>
                            <li><b>Simple Celebration of Department</b></li>
                            <li><b><button class="btn btn btn-primary"><i class="fas fa-thumbs-up"></i> Yes</button></b></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <ul class="list-unstyled">
                            <li><b class="fs-4">CCS Day</b></li>
                            <li><b>Main Quadrangles</b></li>
                            <li><b>March 17, 2023</b></li>
                            <li><b>06:00pm</b></li>
                            <li><b>Simple Celebration of Department</b></li>
                            <li><b><button class="btn btn btn-primary"><i class="fas fa-thumbs-up"></i> Yes</button></b></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <ul class="list-unstyled">
                            <li><b class="fs-4">CCS Day</b></li>
                            <li><b>Main Quadrangles</b></li>
                            <li><b>March 17, 2023</b></li>
                            <li><b>06:00pm</b></li>
                            <li><b>Simple Celebration of Department</b></li>
                            <li><b><button class="btn btn btn-primary"><i class="fas fa-thumbs-up"></i> Yes</button></b></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <!-- This is Script Js Link -->
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.2.0/dist/chart.umd.min.js"></script>
    <script src="../../js/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../../js/logOut.js" type="text/javascript"></script>
    <script src="../../js/nav_profile.js" type="text/javascript"></script>

    <!-- This is datatable -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.2/js/dataTables.bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/fixedheader/3.3.1/js/dataTables.fixedHeader.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.4.0/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.4.0/js/responsive.bootstrap.min.js"></script>
    <script src="../../js/alumni_event_list.js" type="text/javascript"></script>
</body>

</html>