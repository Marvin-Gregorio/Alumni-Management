
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
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body" style="box-shadow: 8px 9px 15px -1px rgba(0,0,0,0.64);">
                        <div class="d-flex justify-content-between mb-3">
                            <span class="px-2" style="border-left: 4px solid #000000; height: 25px;">
                                <h5>No. of Jobs Posted</h5>
                            </span>
                        </div>
                        <div class="mb-3 text-center">
                            <h3 id="jobs_posted">24</h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body" style="box-shadow: 8px 9px 15px -1px rgba(0,0,0,0.64);">
                        <div class="d-flex justify-content-between mb-3">
                            <span class="px-2" style="border-left: 4px solid #000000; height: 25px;">
                                <h5>No. of Events Posted</h5>
                            </span>
                        </div>
                        <div class="mb-3 text-center">
                            <h3 id="events_posted">24</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body" style="box-shadow: 8px 9px 15px -1px rgba(0,0,0,0.64);">
                        <div class="d-flex justify-content-between mb-3">
                            <span class="px-2" style="border-left: 4px solid #000000; height: 25px;">
                                <h5>No. of Users Signed Up this Year</h5>
                            </span>
                        </div>
                        <div class="mb-3 text-center">
                            <h3 id="new_user_count">24</h3>
                        </div>
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
                                <h5>No. of Users</h5>
                            </span>
                        </div>
                        &nbsp;
                        <div class="mb-3" style="position: relative;">
                            <canvas id="alumni" height="20vw" width="80vw"></canvas>
                        </div>
                        <div>
                            <span><b>TOTAL NUMBER OF ALUMNI:</b><span class="mx-5 fs-5"><b id="totaluser">6,308</b></span></span>
                        </div>
                        <div class="mb-3">
                            <span><b>TOTAL NUMBER OF STAFF:</b><span class="mx-5 fs-5"><b id="totalstaff">2</b></span></span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-body" style="box-shadow: 8px 9px 15px -1px rgba(0,0,0,0.64);">
                        <div class="d-flex justify-content-between mb-3">
                            <span class="px-2" style="border-left: 4px solid #000000; height: 25px;">
                                <h5>User Session</h5>
                                <span><b>Daily</b></span>
                                <p id="dailyDate">November 21, 2022</p>
                            </span>
                        </div>
                        &nbsp;
                        <div class="mb-3" style="position: relative;">
                            <canvas id="attend" height="20vw" width="80vw"></canvas>
                        </div>
                        <div class="mb-3 pb-4">
                            <span><b>TOTAL NUMBER OF SESSION:</b><span class="mx-5 fs-5"><b id="dailyTotal">53,600</b></span></span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mt-4">
                <div class="card">
                    <div class="card-body" style="box-shadow: 8px 9px 15px -1px rgba(0,0,0,0.64);">
                        <div class="d-flex justify-content-between mb-3">
                            <span class="px-2" style="border-left: 4px solid #000000; height: 25px;">
                                <h5>User Session</h5>
                                <span><b>Monthly</b></span>
                                <p id="monthlyDate">November 21, 2022</p>
                            </span>
                        </div>
                        &nbsp;
                        <div class="mb-3" style="position: relative;">
                            <canvas id="monthly" height="20vw" width="80vw"></canvas>
                        </div>
                        <div class="mb-3">
                            <span><b>TOTAL NUMBER OF SESSION:</b><span class="mx-5 fs-5"><b id="monthlyTotal">53,600</b></span></span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mt-4">
                <div class="card">
                    <div class="card-body" style="box-shadow: 8px 9px 15px -1px rgba(0,0,0,0.64);">
                        <div class="d-flex justify-content-between mb-3">
                            <span class="px-2" style="border-left: 4px solid #000000; height: 25px;">
                                <h5>User Session</h5>
                                <span><b>Yearly</b></span>
                                <p id="yearlyDate">November 21, 2022</p>
                            </span>
                        </div>
                        &nbsp;
                        <div class="mb-3" style="position: relative;">
                            <canvas id="yearly" height="20vw" width="80vw"></canvas>
                        </div>
                        <div class="mb-3">
                            <span><b>TOTAL NUMBER OF SESSION:</b><span class="mx-5 fs-5"><b id="yearlyTotal">53,600</b></span></span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mt-4">
                <div class="card">
                    <div class="card-body" style="box-shadow: 8px 9px 15px -1px rgba(0,0,0,0.64);">
                        <div class="d-flex justify-content-between mb-3">
                            <span class="px-2" style="border-left: 4px solid #000000; height: 25px;">
                                <h5>No. of Email Blast</h5>
                            </span>
                        </div>
                        &nbsp;
                        <div class="mb-3" style="position: relative;">
                            <canvas id="email_blast" height="20vw" width="80vw"></canvas>
                        </div>
                        <div>
                            <span><b>TOTAL:</b><span class="mx-5 fs-5"><b id="totalBlast">6,308</b></span></span>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>

    <!-- This is Script Js Link -->
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script src="   https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.2.0/dist/chart.umd.min.js"></script>
    <script src="../../js/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../../js/logOut.js" type="text/javascript"></script>
    <script src="../../js/nav_profile.js" type="text/javascript"></script>
</body>

</html>