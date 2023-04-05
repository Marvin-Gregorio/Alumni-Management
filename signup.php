
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

    <!-- This is Table Link -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>

</head>

<body style="background-color: #e0e0e0;">

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
    <div class="container" style="padding: 20px">
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
                    <option selected>Select Department</option>
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
                    <option selected>Select Gender</option>
                    <option value="MALE">Male</option>
                    <option value="FEMALE">Female</option>
                </select>
            </div>
            
            <div class="col-md-2">
                <label>Civil Status:</label>
                <select class="form-select form-select-sm" autocomplete="off" id="status">
                    <option selected>Select Stauts</option>
                    <option value="SINGLE">Single</option>
                    <option value="MARRIED">Married</option>
                    <option value="WIDOW">Widow</option>
                </select>
            </div>
            </div>

            <div class="row">
            <span><b>Educational Background:</b></span>
              <div class="col-md-4">
                <label>Elementary (Grade 1-6)</label>
                <input class="form-control form-control-sm" id="elem_school">
              </div>
              <div class="col-md-2">
                <label>Year Grad</label>
                <input class="form-control form-control-sm" id="elem_year">
              </div>
              <div class="col-md-4">
                <label>Junior HighSchool (Grade 7-10)</label>
                <input class="form-control form-control-sm" id="junior_school">
              </div>
              <div class="col-md-2">
                <label>Year Grad</label>
                <input class="form-control form-control-sm" id="junior_year">
              </div>
            </div>

            <div class="row">
              <div class="col-md-4">
              <label>Strand:</label>
                  <select id="senior_course" class="form-control form-control-sm">
                    <option selected>Select Strand</option>
                    <option value="STEM">STEM</option>
                    <option value="TVL">TVL</option>
                    <option value="ABM">ABM</option>
                    <option value="HUMSS">HUMMS</option>
                    <option value="GAS">GAS</option>
                  </select>
              </div>
              <div class="col-md-4">
                <label>School name</label>
                <input class="form-control form-control-sm" id="senior_school">
              </div>
              <div class="col-md-2">
                <label>Year Grad</label>
                <input class="form-control form-control-sm" id="senior_year">
              </div>
            </div>

            <div class="row">
              <div class="col-md-4">
                <label>Undergraduate</label>
                <select id="college_course" class="form-control form-control-sm">
                    <option selected>-select course-</option>
                    <!-- College of Computer Studies -->
                    <option disabled>College of Computer Studies</option>
                    <option value="BSCS">BSCS -Bachelor of Science in Computer Science</option>
                    <option value="BSOA">BSOA -Bachelor of Science in Office Administration</option>
                    <option value="BLIS">BLIS -Bachelor of Library Information and Science</option>
                    <option value="BSIT">BSIT -Bachelor of Science in Information Technology</option>
                    <option value="ACT">ACT -Associate of Communication and Technology</option>
                    <!-- College of Business and Accountant -->
                    <option disabled>College of Business and Accountancy</option>
                    <option value="BSBA">BSA -Bachelor of Science in Accountancy</option>
                    <option value="BSHM">BSHM -Bachelor of Science in Hospitality Management</option>
                    <option value="BSTM">BSTM -Bachelor of Science in Tourism Management</option>
                    <option value="BSBA-FM">BSBA-FM -Bachelor of Science in Business Administration Major in Financial Management</option>
                    <option value="BSBA-HRDM">BSBA-HRDM -Bachelor of Science in Business Administration Major in Human Resource Dev.Management</option>
                    <option value="BSBA-MM">BSBA-MM Bachelor of Science in Business Administration Major in Marketing Management</option>
                    <!-- College of Engineer -->
                    <option disabled>College of Engineer</option>
                    <option value="BSCpE">BSCE -Bachelor of Science in Computer Engineer</option>
                    <option value="BSCE">BSCE -Bachelor of Science in Civil Engineer</option>
                    <option value="BSECE">BSECE -Bachelor of Science in Electronics Engineer</option>
                    <option value="BSEE">BSEE -Bachelor of Science in Electrical Engineer</option>
                    <option value="BSIE">BSIE -Bachelor of Science in Industrial Engineer</option>
                    <!-- College of Architecture -->
                    <option disabled>College of Architecture</option>
                    <option value="BSARCH">BSARCH -Bachelor of Science in Architecture</option>
                    <!-- College of Nursing -->
                    <option disabled>College of Nursing</option>
                    <option value="BSN">BSN -Bachelor of Science in Nursing</option>
                    <!-- College of Arts and Science Education -->
                    <option disabled>College of Arts and Science Education</option>
                    <option value="BEd">BEd -Bachelor of Elementary Education</option>
                    <option value="BPed">BPed -Bachelor of Physical Education</option>
                    <option value="BECE">BECE -Bachelor of Early Childhood Education</option>
                    <option value="BHS">BHS -Bachelor of Human Service</option>
                    <option value="AB-C">AB-C -Bachelor of Arts in Communication</option>
                    <option value="AB-PS">BAPS -Bachelor of Arts in Political Science</option>
                    <option value="BSSW">BSSW-Bachelor of Science in Social Work</option>
                    <option value="BSED-E">BSED-E -Bachelor of Science in Education Major in English</option>
                    <option value="BSED-F">BSED-F -Bachelor of Science in Education Major in Filipino</option>
                    <option value="BSED-M">BSED-M -Bachelor of Science in Education Major in Mathematics</option>
                    <option value="BSED-S">BSED-S -Bachelor of Science in Education Major in Science</option>
                    <option value="BSED-SS">BSED-SS -Bachelor of Science in Education Major in Social Studies</option>
                    <option value="BSED-RE">BSED-RE -Bachelor of Science in Education Major in Religious Education</option>
                    <option value="BSED-VE">BSED-VE -Bachelor of Science in Education Major in Values Education</option>
                    <option value="CPEd">CPEd -Certificate Programs in Professional Education</option>
                    <option value="CECEd">CECEd -Certificate Programs in Education</option>
                    <option value="CPEd">CPEd -Certificate Programs in Physical Education</option>
                    <option value="CREd">CREd -Certificate Programs in Religous Education</option>
                    <option value="CVEd">CVEd -Certificate Programs in Values Education</option>
                  </select>
              </div>
              <div class="col-md-4">
                <label>School name</label>
                <input class="form-control form-control-sm" id="college_school">
              </div>
              <div class="col-md-2">
                <label>Year</label>
                <input class="form-control form-control-sm" id="college_year">
              </div>
            </div>

            <div class="row">
              <div class="col-md-4">
                <label>Masteral</label>
                <select id="master_course" class="form-control form-control-sm">
                    <option selected>Select Masteral</option>
                    <option value="MSCS">MSCS</option>
                    <option value="MSOA">MSOA</option>
                    <option value="MLIS">MLIS</option>
                    <option value="MSIT">MSIT</option>
                  </select>
              </div>
              <div class="col-md-4">
                <label>School name</label>
                <input class="form-control form-control-sm" id="master_school">
              </div>
              <div class="col-md-2">
                <label>Year</label>
                <input class="form-control form-control-sm" id="master_year">
              </div>
            </div>

            <div class="row">
              <div class="col-md-4">
                <label>Doctorate</label>
                <select id="doctor_course" class="form-control form-control-sm">
                  <option selected>Select Doctorate</option>
                    <option value="DSCS">DSCS</option>
                    <option value="DSOA">DSOA</option>
                    <option value="DLIS">DLIS</option>
                    <option value="DSIT">DSIT</option>
                  </select>
              </div>
              <div class="col-md-4">
                <label>School name</label>
                <input class="form-control form-control-sm" id="doctor_school">
              </div>
              <div class="col-md-2">
                <label>Year</label>
                <input class="form-control form-control-sm" id="doctor_year">
              </div>
            </div>

            <div class="row">
            <span><b>Employment Status:</b></span>
              <div class="col-md-12">
                <label>Company Name</label>
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

            </div>
            <div class="card-footer">
              <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button class="btn btn-danger"><a href="index.php" class="nav-link">Go Back</a></button>
                <button type="button" onclick="createUser()" class="btn btn-primary">Save changes</button>
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