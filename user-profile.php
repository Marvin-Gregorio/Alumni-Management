<?php
session_start();
include "server.php";
if (isset($_SESSION['username']) && isset($_SESSION['id'])) {
?>
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

<!-- This is Table Link -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>

</head>

<body style="background-color: #e0e0e0;">

<!-- This is Sub-Header -->

<nav class="navbar navbar-expand-lg" id="header">
<div class="container-fluid">
<a class="navbar-brand" href="#" id="logo-name">
<img src="assets/css/images/logo.png" width="50px;" alt="">
<span class="mx-3"><b>COLUMBAN COLLEGE, INC. ALUMNI MANAGEMENT SYSTEM</b></span>
</a>
<div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
<ul class="navbar-nav">
<li class="nav-item dropdown">
<a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
<span class="mx-3">Alumni Admin / <?=$_SESSION['username']?></span>
<img src="assets/css/images/bill-gates.jpg" width="50px" class="rounded-circle" alt="">
</a>
<ul class="dropdown-menu">
<li><a href="index.php?page=user-profile" a class="dropdown-item">Manage Accout</a></li>
<li><a href="logout.php" a class="dropdown-item">Logout</a></li>
</ul>
</li>
</ul>
</div>
</div>
</nav>

<!-- This is Header -->

<Header class="navbar navbar-expand-sm sub-header" id="header">
<div class="container-fluid">
<ul class="navbar-nav mx-3">
<li class="nav-item"><a id="nav-menu" href="index.php" class="nav-link mx-3">Dashboard</a></li>
<li class="nav-item"><a id="nav-menu" href="analytics.php" class="nav-link mx-3">Analytics</a></li>
<li class="nav-item"><a id="nav-menu" href="alumni-list.php" class="nav-link mx-3">Alumni List</a></li>
<li class="nav-item"><a id="nav-menu" href="alumni-attendance.php" class="nav-link mx-3">Alumni Attendance</a></li>
<li class="nav-item"><a id="nav-menu" href="user-list.php" class="nav-link mx-3">Users List</a></li>
</ul>
</div>
</Header>


<!-- This is Main -->
<div class="container-fluid d-flex justify-content-center" id="main">
<div class="col-md-6 ">
<div class="card">
<div class="card-body">
<form action="" method="POST" id="">
<div class="mb-2">
<div class="row">
<div class="col-md-4">
                                    <div class="form-group">
                                    <label for="">Last Name</label>
                                    <input type="text"
                                    class="form-control form-control-sm"
                                    name=""
                                    id=""
                                    placeholder=""
                                    value="">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                    <label for="">First Name</label>
                                    <input type="text"
                                    class="form-control form-control-sm"
                                    name=""
                                    id=""
                                    placeholder=""
                                    value="">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                    <label for="">Middle Name</label>
                                    <input type="text"
                                    class="form-control form-control-sm"
                                    name=""
                                    id=""
                                    placeholder=""
                                    value="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-2">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <label for="">Email Address</label>
                                    <input type="text"
                                    class="form-control form-control-sm"
                                    name=""
                                    id=""
                                    placeholder=""
                                    value="">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                    <label for="">Date of Birth</label>
                                    <input type="date"
                                    class="form-control form-control-sm"
                                    name=""
                                    id=""
                                    placeholder=""
                                    value="">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                    <label for="">Contact</label>
                                    <input type="text"
                                    class="form-control form-control-sm"
                                    name=""
                                    id=""
                                    placeholder=""
                                    value="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-2">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                    <label for="">Username</label>
                                    <input type="text"
                                    class="form-control form-control-sm"
                                    name=""
                                    id=""
                                    placeholder=""
                                    value="">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                    <label for="">Password</label>
                                    <input type="password"
                                    class="form-control form-control-sm"
                                    name=""
                                    id=""
                                    placeholder=""
                                    value="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-2">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                    <label for="">Province</label>
                                    <input type="text"
                                    class="form-control form-control-sm"
                                    name=""
                                    id=""
                                    placeholder=""
                                    value="">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                    <label for="">City</label>
                                    <input type="password"
                                    class="form-control form-control-sm"
                                    name=""
                                    id=""
                                    placeholder=""
                                    value="">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                    <label for="">Zipcode</label>
                                    <input type="password"
                                    class="form-control form-control-sm"
                                    name=""
                                    id=""
                                    placeholder=""
                                    value="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-2">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                    <label for="">Address</label>
                                    <input type="text"
                                    class="form-control form-control-sm"
                                    name=""
                                    id=""
                                    placeholder=""
                                    value="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-2">
                            <div class="row">
                                <div class="form-group text-end">
                                    <a href="" class="btn btn-success btn-sm" name="" id="" type="submit">Create</a>
                                    <a href="index.php?page=dashboard" class="btn btn-danger btn-sm" name="" id="" type="button">Go Back</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
<?php }else{
	header("Location: login.php");
} ?>