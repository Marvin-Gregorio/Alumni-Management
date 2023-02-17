<?php 
session_start();
include "server.php";
if (!isset($_SESSION['username']) && !isset($_SESSION['id'])) {   ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Columban College, Inc. | Alumni Database Management System</title>

    <!-- This is Website Logo -->
    <link rel="icon" href="assets/css/images/logo.png">
fdasfddfds
    <!-- This is Additionanl CSS Link -->
    <link rel="stylesheet" href="style.css">

    <!-- This is Bootstrap CSS Link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">

    <!-- This is Table Link -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>

</head>

<body style="background-color: #e0e0e0;">

    <div class="container mt-5 pt-5">
        <form action="login-func.php" method="POST">
            <div class="text-center">
                <img src="assets/css/images/logo.png" width="150px" alt="">
            </div>
            <div class="text-center mb-3">
                <h3 id="school-name">Columban College, Inc.</h3>
                <span id="cp-title" class="fw-semibold">Alumni Management System</span>
            </div>
            <div class="row">
                <div class="col-12 col-sm-8 col-md-3 m-auto">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center">
                                <p class="fs-5"><b>Admin Panel</b></p>
                            </div>
                            <div>
                                <input type="text" name="username" id="username" class="form-control my-4 py-2" placeholder="Username" autocomplete="off">
                                <input type="password" name="password" id="password" class="form-control my-4 py-2" placeholder="Password" autocomplete="off">
                            </div>
                            <div class="text-center d-grid gap-2 col-5 mx-auto">
                                <button type="submit" name="submit" id="submit" class="btn btn-success">Login</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>



    <!-- This is Script Js Link -->
    <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.2.0/dist/chart.umd.min.js"></script>
    <script src="sweetalert.min.js"></script>
<?php if (isset($_GET['error'])) { ?>
<script>
swal({
  title: "<?php echo $_GET['error']; ?>",
  // text: "You clicked the button!",
  icon: "warning",
  button: "Got it",
});
</script>
<?php } ?>
</body>

</html>
<?php }else{
     header("Location: index.php");
} ?>