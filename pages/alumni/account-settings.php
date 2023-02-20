

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

<link rel="stylesheet" href="https://fengyuanchen.github.io/cropperjs/css/cropper.css" >

</head>

<body style="background-color: #e0e0e0;">

<!-- This is Sub-Header -->

<!-- This is Header -->

<?php include('header.php') ?>

<!-- This is Main -->
<div class="container-fluid" style="padding: 20px;">
    <div class="row">
        <div class="col-md-3">
          <div class="card">
            <div class="card-body">
              <div class="text-center">
                <img src="../../profileImg/profile.jpg" class="img-thumbnail" width="50%" id="profileImg">
                <br>
                <button class="btn btn-info text-white mt-2" onclick="clickImage()"><b>Change Profile</b></button>     
              </div>
              <div class="row">
                <div class="col-md-12">
                <label>Old Password: </label>
                <input type="password" id="old_pass" class="form-control form-control-sm">
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                <label>New Password: </label>
                <input type="password" id="new_pass" class="form-control form-control-sm">
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                <label>Confirm Password: </label>
                <input type="password" id="confirm_pass" class="form-control form-control-sm">
                </div>
              </div>
                <div class="text-end">
                <button onclick="updatePassword()" class="btn btn-info text-white mt-2"><b>Update Password</b></button>
                </div>
            </div>
          </div>
        </div>
        <div class="col-sm-9">
          <div class="card">
            <div class="card-body">
            <div class="row">
              <h5><b>Personal Information</b></h5>
              <div class="col-sm-4">
                <label>First Name:</label>
                <input class="form-control form-control-sm" id="fname" value="fda">
              </div>
              <div class="col-sm-4">
                <label>Middle Name:</label>
                <input class="form-control form-control-sm" id="mname" value="fdasf">
              </div>
              <div class="col-sm-4">
                <label>Last Name:</label>
                <input class="form-control form-control-sm" id="lname" value="fdasf">
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
              <label>Email: </label>
              <input type="text" id="p_email" value="fdasf" class="form-control form-control-sm">
              </div>
              <div class="col-md-3">
              <label>Cellphone Number:</label>
              <input type="text" id="p_cp_number" value="fdasf" class="form-control form-control-sm">
              </div>
              <div class="col-md-3">
              <label>Birth Date:</label>
              <input type="date" id="b_date" class="form-control form-control-sm">
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
              <label>Username:</label>
              <input type="text" id="uname" value="fdasf" class="form-control form-control-sm">
              </div>
              <div class="col-md-3">
              <label>Gender:</label>
              <select type="text" id="gender" class="form-control form-control-sm">
                <option value="MALE">Male</option>
                <option value="FEMALE">Female</option>
              </select>
              </div>
              <div class="col-md-3">
              <label>Status:</label>
              <select type="text" id="status" class="form-control form-control-sm">
                <option value="SINGLE">Single</option>
                <option value="MARRIED">Married</option>
                <option value="WIDOW">Widow</option>
              </select>
              </div>
              <div class="text-end">
              <button onclick="updatePersonalDetails()" class="btn btn-info text-white mt-2">Update Profile Info</button>  
              </div>
            </div>
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
            <div class="row">
              <h5><b>Employment Status</b></h5>
              <div class="col-md-12">
              <label>Company Name: </label>
              <input type="text" id="company_name" value="" class="form-control form-control-sm">
              </div>
            </div>
            <div class="row">
              <div class="col-md-8">
              <label>Company Email:</label>
              <input type="text" id="company_email" value="" class="form-control form-control-sm">
              </div>
              <div class="col-md-4">
              <label>Company Number:</label>
              <input type="text" id="company_number" value="" class="form-control form-control-sm">
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
              <label>Company Address: </label>
              <input type="text" id="company_address" value="" class="form-control form-control-sm">
              </div>
            </div>
            <div class="text-end">
            <button onclick="updateEmploymentDetails()" class="btn btn-info text-white mt-2">Update Employment Info</button>
            </div>
            </div>
          </div>
        </div>
    </div>
    <form method="post">
        <input style="display: none;" type="file" name="crop_image" class="crop_image" id="upload_image" />
    </form>
    <div class="modal fade" id="modal_crop" tabindex="-1" role="dialog" data-backdrop="static" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title">Crop Image Before Upload</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">×</span>
                  </button>
              </div>
              <div class="modal-body">
                  <div class="img-container">
                      <div>
                          <div class="mt-2">
                              <img src="" style="max-height:800px;" id="sample_image"/>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="modal-footer">
                  <button type="button" id="crop_and_upload" class="btn btn-primary">Crop</button>
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
              </div>
          </div>
      </div>
    </div>
</div>

</body>
<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://fengyuanchen.github.io/cropperjs/js/cropper.js"></script> 
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="../../js/logOut.js" type="text/javascript"></script>
<script src="../../js/profile.js" type="text/javascript"></script>
<script src="../../js/nav_profile.js" type="text/javascript"></script>

</html>