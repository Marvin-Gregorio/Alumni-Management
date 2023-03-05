
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

    <div class="contianer-fluid" style="padding: 20px">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="text-center">
                            <img src="../../profileImg/profile.jpg" class="img-thumbnail" width="50%" id="profileImg">
                            <br>
                            <button class="btn btn-info text-white mt-2" onclick="clickImage()"><b>Change Profile</b></button>
                        </div>
                        <div class="row">
                            <h5><b>Change Password</b></h5>
                            <div class="col-md-12">
                                <label for="">Old Password:</label>
                                <input type="password" id="old_pass" class="form-control form-control-sm">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label for="">New Password:</label>
                                <input type="password" id="new_pass" class="form-control form-control-sm">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label for="">Confirm Password:</label>
                                <input type="password" id="confirm_pass" class="form-control form-control-sm">
                            </div>
                        </div>
                        <div class="text-end">
                            <button onclick="updatePassword()" class="btn btn-info text-white mt-2"><b>Update Password</b></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
            <div class="d-flex mb-2">
              <button type="button" class="btn btn-info btn-sm text-white mx-2"><a href="account-settings.php" class="nav-link">Personal Information</a></button>
              <button type="button" class="btn btn-info btn-sm text-white mx-2"><a href="educationinfo.php" class="nav-link">Educational Background</a></button>
              <button type="button" class="btn btn-info btn-sm text-white mx-2"><a href="employmentstats.php" class="nav-link">Employment Status</a></button>
            </div>
                <div class="card">
                    <div class="card-body">
                    <div class="row">
              <h5>Educational Background:</h5>
              <div class="col-md-4">
              <span><b>Elementary (Grade 1-6)</b></span>
              <label>School Name:</label>
              <input class="form-control form-control-sm" id="elem_school">
              </div>
              <div class="col-md-2">
              <label>Year:</label>
              <input class="form-control form-control-sm" id="elem_year">
              </div>
              <div class="col-md-4">
              <span><b>Junior Highschool (Grade 7-10)</b></span>
              <label>School Name:</label>
              <input class="form-control form-control-sm" id="junior_school">
              </div>
              <div class="col-md-2">
              <label>Year Graduated:</label>
              <input class="form-control form-control-sm" id="junior_year">
              </div>
            </div>
            <div class="row">
              <div class="col-md-4">
              <span><b>Senior Highschool (Grade 11-12)</b></span>
              <label>Course:</label>
                  <select id="senior_course" class="form-control form-control-sm">
                    <option value="BSCS">TVL</option>
                    <option value="BSOA">ABM</option>
                    <option value="BLIS">HUMMS</option>
                    <option value="BSIT">GAS</option>
                  </select>
              </div>
              <div class="col-md-4">
              <label>School Name:</label>
              <input class="form-control form-control-sm" id="senior_school">
              </div>
              <div class="col-md-4">
              <label>Year Graduated:</label>
              <input class="form-control form-control-sm" id="senior_year">
              </div>
            </div>
            <div class="row">
              <div class="col-md-4">
                <span><b>Undergraduate</b></span>
              <label>Course:</label>
                  <select id="college_course" class="form-control form-control-sm">
                    <option value="BSCS">BSCS</option>
                    <option value="BSOA">BSOA</option>
                    <option value="BLIS">BLIS</option>
                    <option value="BSIT">BSIT</option>
                  </select>
              </div>
              <div class="col-md-4">
              <label>School Name:</label>
              <input class="form-control form-control-sm" id="college_school">
              </div>
              <div class="col-md-4">
              <label>Year Graduated:</label>
              <input class="form-control form-control-sm" id="college_year">
              </div>
            </div>
            <div class="row">
              <div class="col-md-4">
              <span><b>Masteral</b></span>
              <label>Course:</label>
                  <select id="master_course" class="form-control form-control-sm">
                    <option value="MSCS">MSCS</option>
                    <option value="MSOA">MSOA</option>
                    <option value="MLIS">MLIS</option>
                    <option value="MSIT">MSIT</option>
                  </select>
              </div>
              <div class="col-md-4">
              <label>School Name:</label>
              <input class="form-control form-control-sm" id="master_school">
              </div>
              <div class="col-md-4">
              <label>Year Graduated:</label>
              <input class="form-control form-control-sm" id="master_year">
              </div>
            </div>
            <div class="row">
              <div class="col-md-4">
              <span><b>Doctorate</b></span>
              <label>Course:</label>
                  <select id="doctor_course" class="form-control form-control-sm">
                    <option value="DSCS">DSCS</option>
                    <option value="DSOA">DSOA</option>
                    <option value="DLIS">DLIS</option>
                    <option value="DSIT">DSIT</option>
                  </select>
              </div>
              <div class="col-md-4">
              <label>School Name:</label>
                  <input class="form-control form-control-sm" id="doctor_school">
              </div>
              <div class="col-md-4">
              <label>Year Graduated:</label>
                  <input class="form-control form-control-sm" id="doctor_year">
              </div>
            </div>
            <div class="text-end">
            <button onclick="updateEducationalDetails()" class="btn btn-info text-white mt-2">Update Educational Info</button>
            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script src="https://fengyuanchen.github.io/cropperjs/js/cropper.js"></script> 
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../../js/logOut.js" type="text/javascript"></script>
    <script src="../../js/educational_bg.js" type="text/javascript"></script>
    <script src="../../js/nav_profile.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</html>