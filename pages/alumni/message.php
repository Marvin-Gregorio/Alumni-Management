
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

<body style="background-image: linear-gradient(#5ecde1, #2caee2);background-position: center;background-size: cover;background-repeat: no-repeat;min-height: 100vh;">

<!-- This is Header -->
<?php include('header.php') ?>
<!-- Header ends here -->

<!-- Main start here -->
<div class="container-fluid" id="main">

    <div class="row">

        <!-- Sidebar start here -->
        <div class="col-md-2">
            <div class="card" style="background-color: #ffffff65; box-shadow: -1px -1px 23px 3px rgba(0,0,0,0.75);">
                <div class="card-body">
                    <div class="navbar-brand text-center">
                        <img src="../profileImg/.png" width="50px" class="rounded-circle mb-2" id="nav_profile">
                        <h5><span><?=$_SESSION['first_name']." ".$_SESSION['last_name']?></span></h5>
                    </div>
                    <hr>
                    <ul class="list-unstyled">
                        <li class="nav-item"><a href="announcement.php" id="nav-menu" class="nav-link px-3 py-2 d-block mb-2"><i class="fas fa-bullhorn mx-2"></i>Announcement</a></li>
                        <li class="nav-item"><a href="message.php" id="nav-menu" class="nav-link px-3 py-2 d-block mb-2"><i class="fas fa-message mx-2"></i>Message<span class="badge text-bg-danger mx-5">4</span></a></li>
                        <li class="nav-item"><a href="account-settings.php" id="nav-menu" class="nav-link px-3 py-2 d-block mb-5"><i class="fas fa-address-card mx-2"></i>My Profile</a></li>
                        <br>
                        &nbsp;
                        <div class="px-4">
                            <a onclick="logOut()" class="btn btn-sm btn-danger"><b>LOGOUT</b><i class="fas fa-right-from-bracket mx-2"></i></a>
                        </div>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Sidebar ends here -->


        <!-- Article start here -->
        <div class="col-md-10">
            <div class="card" style="background-color: #ffffff65; box-shadow: -1px -1px 23px 3px rgba(0,0,0,0.75);">
                <div class="card-body">
                    <span style="border-left: 4px solid black;"><b class="mx-2">Message</b></span>
                </div>
            </div>
        </div>
        <!-- Article ends here -->

    </div>

</div>

<!-- Main ends here -->

<!-- This is Script Js Link -->
<script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.2.0/dist/chart.umd.min.js"></script>
<script src="chart.js"></script>
<?php if (isset($_GET['success'])) { ?>
<script>
swal({
title: "<?php echo $_GET['success']; ?>",
// text: "You clicked the button!",
icon: "success",
button: "Got it",
});
</script>
<?php } ?>
<script>
$(document).ready(function() {
    $('#add').DataTable();
} );
</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="../../js/logOut.js" type="text/javascript"></script>
</body>

</html>