
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



    <div class="container-fluid" style="padding: 20px;">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">

                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <span><b>Jobs Offer</b></span>
                                    <a href="job.php" class="btn btn-sm btn-info text-white"><b>View All</b></a>
                                </div>
                                <div class="mt-3">
                                    <table id="jobs" style="font-size: 13px;">
                                        <thead>
                                            <tr>
                                                <th>Occuptional Title</th>
                                                <th>Comapny Name</th>
                                                <th>Category</th>
                                                <th>Job Type</th>
                                                <th>Salary</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><a href="viewdetailsJob.php" class="text-decoration-none"><b>IT Supervisor (Network Administrator)</b></a></td>
                                                <td>Gridpoint, Technologies Inc.</td>
                                                <td>IT</td>
                                                <td>Full-Time</td>
                                                <td>Phhp20,000-23,000 a month</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <span><b>Upcoming Events</b></span>
                                    <a href="event.php" class="btn btn-sm btn-info text-white"><b>View All</b></a>
                                </div>
                                <div class="mt-3">
                                    <table id="events" style="font-size: 13px;">
                                        <thead>
                                            <tr>
                                                <th>Events Name</th>
                                                <th>Events Place</th>
                                                <th>Events Date</th>
                                                <th>Events Time</th>
                                                <th>Events Description</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>CBA vs CCS</td>
                                                <td>CC Baretto Gym</td>
                                                <td>11/24/2022</td>
                                                <td>01:00 PM</td>
                                                <td>Come and Join us to watch the game and support your teams</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                </div>
            </div>
        </div>
    </div>
    </div>

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
    <!-- datatable ends here -->

    <script>
        $(document).ready(function() {
    var table = $('#jobs').DataTable( {
        responsive: true
    } );
 
    new $.fn.dataTable.FixedHeader( table );
    } );
    </script>
        <script>
        $(document).ready(function() {
    var table = $('#events').DataTable( {
        responsive: true
    } );
 
    new $.fn.dataTable.FixedHeader( table );
    } );
    </script>
</body>

</html>