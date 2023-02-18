
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

    <div class="d-flex justify-content-center align-items-center vh-100">
        
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
                        <div class="card">
                            <div class="card-body text-center">
                                <div class="text-center">
                                    <p class="fs-5"><b>Login Panel</b></p>
                                </div>
                                <div>
                                    <input type="text" name="username" id="username" class="form-control my-4 py-2" placeholder="Username" autocomplete="off">
                                    <input type="password" name="password" id="password" class="form-control my-4 py-2" placeholder="Password" autocomplete="off">
                                </div>
                                <div class="text-center d-grid gap-2 mx-auto">
                                    <button onclick="authenticateUser()" type="button" name="submit" id="submit" class="btn btn-success form-control">Login</button>
                                </div>
                                <button class="btn form-control" data-bs-toggle="modal" data-bs-target="#exampleModal">Sign up?</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Sign Up Form:</h5>
            <button type="button" class="btn" data-bs-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div>
                <label>First name:</label>
                <input type="text" class="form-control" id="f_name">
            </div>
            <div>
                <label>Middle name:</label>
                <input type="text" class="form-control" id="m_name">
            </div>
            <div>
                <label>Last name:</label>
                <input type="text" class="form-control" id="l_name">
            </div>
            <div>
                <label>Email:</label>
                <input type="text" class="form-control" id="email">
            </div>
            <div>
                <label>Cellphone Number:</label>
                <input type="text" class="form-control" id="cp_number">
            </div>
            <div>
                <label>Birthday:</label>
                <input type="date" class="form-control" id="b_day">
            </div>
            <div>
                <label>Username:</label>
                <input type="text" class="form-control" id="c_username">
            </div>
            <div>
                <label>Password:</label>
                <input type="text" class="form-control" id="n_pass">
            </div>
            <div>
                <label>Confirm Password:</label>
                <input type="text" class="form-control" id="c_pass">
            </div>
            <div>
                <label>Gender:</label>
                <select class="form-control" id="gender">
                    <option value="MALE">Male</option>
                    <option value="FEMALE">Female</option>
                </select>
            </div>
            <div>
                <label>Civil Status:</label>
                <select class="form-control" id="status">
                    <option value="SINGLE">Single</option>
                    <option value="MARRIED">Married</option>
                    <option value="WIDOW">Widow</option>
                </select>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" onclick="createUser()" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>
    <!-- This is Script Js Link -->
    <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.2.0/dist/chart.umd.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="js/authenticate.js" type="text/javascript"></script>
    <script src="js/createuser.js" type="text/javascript"></script>
</body>
</html>