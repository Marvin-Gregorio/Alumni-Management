
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Columban College, Inc. | Alumni Database Management System</title>

    <!-- This is Website Logo -->
    <link rel="icon" href="assets/css/images/logo.png">

    <!-- This is Bootstrap CSS Link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">

    <!-- This is Canvass Style Sheet for Signup -->
    <link rel="stylesheet" href="signup-style.css">

    <!-- This is Table Link -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>

</head>

<body>

    <!-- <div class="d-flex justify-content-center align-items-center vh-100">
        
            <div>
                <div class="text-center">
                    <img src="assets/css/images/logo.png" width="150px" alt="">
                </div>
                <div class="text-center mb-3">
                    <h3 id="school-name">Columban College, Inc.</h3>
                    <span id="cp-title" class="fw-semibold">Alumni Management System</span>
                </div>
                <div class="row">
                    <div class="d-flex justify-content-center">
                        <div class="card text-center">
                            <div class="card-body">
                                <div class="text-center">
                                    <p class="fs-5"><b>Login Panel</b></p>
                                </div>
                                <div>
                                    <input type="text" name="username" id="username" class="form-control my-4 py-2" placeholder="Username" autocomplete="off">
                                    <input type="password" name="password" id="password" class="form-control my-4 py-2" placeholder="Password" autocomplete="off">
                                </div>
                                <div class="text-center d-grid gap-2 mx-auto">
                                    <button onclick="authenticateUser()" type="button" name="submit" id="submitForm" class="btn btn-success form-control">Login</button>
                                </div>
                                <button class="btn btn-sm link-primary" data-bs-toggle="modal" data-bs-target="#password_reset">Forgot Password? Click Here</button>
                                <button class="btn form-control" data-bs-toggle="modal" data-bs-target="#exampleModal">Sign up?</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div> -->

    <!-- Modal SignUp -->
    <div class="container">
      <div class="text-center">
        <img src="assets/css/images/logo.png" width="150px" alt="">
      </div>
      <div class="text-center mb-3">
          <h3 id="school-name">Columban College, Inc.</h3>
          <span id="cp-title" class="fw-semibold">Alumni Management System</span>
      </div>
      <div class="row justify-content-evenly">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header">
              <h5>Sign Up Form:</h5>
            </div>
            <div class="card-body">
              
            <div class="row">
              <span><b>Personal Information:</b></span>
            <div class="col-md-4">
                <label>First name:</label>
                <input type="text" class="form-control form-control-sm" autocomplete="off" id="f_name">
            </div>
            <div class="col-md-4">
                <label>Middle name:</label>
                <input type="text" class="form-control form-control-sm" autocomplete="off" id="m_name">
            </div>
            <div class="col-md-4">
                <label>Last name:</label>
                <input type="text" class="form-control form-control-sm" autocomplete="off" id="l_name">
            </div>
            </div>

            <div class="row">
            <div class="col-md-6">
                <label>Email:</label>
                <input type="text" class="form-control form-control-sm" autocomplete="off" id="email">
            </div>
            <div class="col-md-3">
                <label>Cellphone Number:</label>
                <input type="text" class="form-control form-control-sm" autocomplete="off" id="cp_number">
            </div>
            <div class="col-md-3">
                <label>Birthday:</label>
                <input type="date" class="form-control form-control-sm" autocomplete="off" id="b_day">
            </div>
            </div>

            <div class="row">
            <div class="col-md-4">
                <label>Username:</label>
                <input type="text" class="form-control form-control-sm" autocomplete="off" id="c_username">
            </div>
            <div class="col-md-4">
                <label>Password:</label>
                <input type="text" class="form-control form-control-sm" autocomplete="off" id="n_pass">
            </div>
            <div class="col-md-4">
                <label>Confirm Password:</label>
                <input type="text" class="form-control form-control-sm" autocomplete="off" id="c_pass">
            </div>
            </div>

            <div class="row">
            <div class="col-md-8">
                <label>Department:</label>
                <select class="form-select form-select-sm" autocomplete="off" id="dept">
                    <option selected>-Select Department-</option>
                    <option value="CCS">College of Computer Studies</option>
                    <option value="CBA">College of Business Administration</option>
                    <option value="CASED">College of Arts, Science, and Education</option>
                    <option value="ARCHITECTURE">College of Architecture</option>
                    <option value="ENGINEERING">College of Engineering</option>
                    <option value="NURSING">College of Nursing</option>
                </select>
            </div>
            <div class="col-md-2">
                <label>Gender:</label>
                <select class="form-select form-select-sm" autocomplete="off" id="gender">
                    <option selected>-select-</option>
                    <option value="MALE">Male</option>
                    <option value="FEMALE">Female</option>
                </select>
            </div>
            
            <div class="col-md-2">
                <label>Civil Status:</label>
                <select class="form-select form-select-sm" autocomplete="off" id="status">
                    <option selected>-select-</option>
                    <option value="SINGLE">Single</option>
                    <option value="MARRIED">Married</option>
                    <option value="WIDOW">Widow</option>
                </select>
            </div>
            </div>

            

            </div>
            <div class="card-footer">
              <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button class="btn btn-sm" id="gobackbutton"><a href="index.php" class="nav-link">Go Back</a></button>
                <button type="button" id="savechangesbutton" onclick="createUser()" class="btn btn-sm">Save changes</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal for user policy and data privacy -->
    <div class="modal fade" id="user_policy" tabindex="-1" data-bs-backdrop="static" role="dialog" aria-labelledby="user_policy" aria-hidden="true">
      <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Data Privacy Policy</h5>
          </div>
          <div class="modal-body">
            <p class="mb-3"><b>Republic Act No. 10173, otherwise known as the Data Privacy Act is a law that
                seeks to protect all forms of information, be it private, personal, or sensitive.
                It is meant to cover both natural and juridical persons involved in the processing 
                of personal information.</b></p><br>
            <input type="checkbox" name="check" id="check" class="mx-3"><label><b>I agree the <a href="#">terms of use</a></b></label>
          </div>
          <div class="modal-footer">
            <input type="submit" value="Accept" class="btn btn-success" data-bs-dismiss="modal" disabled>
          </div>
        </div>
      </div>
    </div>


    <!-- dont delete this -->
    <button hidden id="policyButton" class="btn form-control" data-bs-toggle="modal" data-bs-target="#user_policy">Policy</button>

    <!-- This is Script Js Link -->


    
    <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.2.0/dist/chart.umd.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="js/authenticate.js" type="text/javascript"></script>
    <script src="js/createuser.js" type="text/javascript"></script>
    <script src="js/policyModal.js" type="text/javascript"></script>
    <script src="js/emailPass.js" type="text/javascript"></script>
    <script>
    var checkboxes = $("input[type='checkbox']"),
    submitButt = $("input[type='submit']");

    checkboxes.click(function() {
    submitButt.attr("disabled", !checkboxes.is(":checked"));
    });
    </script>
</body>
</html>