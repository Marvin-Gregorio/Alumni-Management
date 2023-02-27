
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
    </div>

</body>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script src="https://fengyuanchen.github.io/cropperjs/js/cropper.js"></script> 
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../../js/logOut.js" type="text/javascript"></script>
    <script src="../../js/profile.js" type="text/javascript"></script>
    <script src="../../js/nav_profile.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</html>