<?php
include ('server.php');
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
                        <span class="mx-3">Staff / Officer Admin</span>
                        <img src="assets/css/images/avatar.png" width="50px" class="rounded-circle" alt="">
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="user-profile.php" a class="dropdown-item">Manage Accout</a></li>
                        <li><a href="logout.php" a class="dropdown-item">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<Header class="navbar navbar-expand-sm sub-header" id="header">
<div class="container-fluid">
<ul class="navbar-nav mx-3">
<li class="nav-item"><a id="nav-menu" href="index.php" class="nav-link mx-3">Dashboard</a></li>
<li class="nav-item"><a id="nav-menu" href="analytics.php" class="nav-link mx-3">Analytics</a></li>
<li class="nav-item"><a id="nav-menu" href="alumni-list.php" class="nav-link mx-3">Alumni List</a></li>
<li class="nav-item"><a id="nav-menu" href="alumni-attendance.php" class="nav-link mx-3">Alumni Attendance</a></li>
</ul>
</div>
</Header>

    <div class="container-fluid" id="main">
        <div class="row d-flex justify-content-center">

            <div class="col-md-6 ">
                <div class="card">
                    <div class="card-body">

                        <form action="form.php" method="POST" id="mypdf">
                            <div class="container">


                            <legend>Personal Information</legend>

<div class="mb-2">
    <div class="row">
        <div class="col-md-4">
            <input type="text"
            name="lastname"
            id="lastname"
            class="form-control form-control-sm"
            value="<?php if(isset($_GET['lastname']))echo($_GET['lastname']); ?>"
            placeholder="Last name" autocomplete="off">
        </div>
        <div class="col-md-4">
            <input type="text"
            name="firstname"
            id="firstname"
            class="form-control form-control-sm"
            value="<?php if(isset($_GET['firstname']))echo($_GET['firstname']); ?>"
            placeholder="First name" autocomplete="off">
        </div>
        <div class="col-md-4">
            <input type="text"
            name="middlename"
            id="middlename"
            class="form-control form-control-sm"
            value="<?php if(isset($_GET['middlename']))echo($_GET['middlename']); ?>"
            placeholder="Middle name" autocomplete="off">
        </div>
    </div>
</div>

<div class="mb-2">
    <div class="row">
        <div class="col-md-12">
            <input type="text"
            name="permanetaddr"
            class="form-control form-control-sm"
            value="<?php if(isset($_GET['permanetaddr']))echo($_GET['permanetaddr']); ?>"
            placeholder="Permanent Address" autocomplete="off">
        </div>
    </div>
</div>

<div class="mb-2">
    <div class="row">
        <div class="col-md-12">
            <input type="text"
            name="presentaddr"
            class="form-control form-control-sm"
            value="<?php if(isset($_GET['presentaddr']))echo($_GET['presentaddr']); ?>"
            placeholder="Present Address" autocomplete="off">
        </div>
    </div>
</div>

<div class="mb-2">
    <div class="row">
        <div class="col-3">
            <input type="text"
            name="emailaddr"
            class="form-control form-control-sm"
            value="<?php if(isset($_GET['emailaddr']))echo($_GET['emailaddr']); ?>"
            placeholder="Email Address" autocomplete="off">
        </div>
        <div class="col-3">
            <input type="date"
            name="birthdate"
            class="form-control form-control-sm"
            value="<?php if(isset($_GET['birthdate']))echo($_GET['birthdate']); ?>">
        </div>
        <div class="col-sm-2">
            <input type="text"
            name="contact"
            class="form-control form-control-sm"
            value="<?php if(isset($_GET['contact']))echo($_GET['contact']); ?>"
            placeholder="Contact No." autocomplete="off">
        </div>
        <div class="col-sm-2">
            <select name="gender" id="gender" class="form-select form-select-sm">
                <option selected>-Gender-</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
        </div>
        <div class="col-sm-2">
            <select name="civilstats" id="civilstats" class="form-select form-select-sm">
                <option selected>-Civil Status-</option>
                <option value="single">Single</option>
                <option value="married">Married</option>
                <option value="widow">Widow</option>
            </select>
        </div>
    </div>
</div>

<legend>Educational Background</legend>

<div class="mb-2">
    <div class="row">
        <div class="col-md-4">
            <label for=""><b>Basic Education</b></label>
            <select name="basiced" id="basiced" class="form-select form-select-sm">
                <option selected>Select</option>
                <option value="elem">Elementary</option>
                <option value="jhs">Junior Highschool</option>
                <option value="shs">Senior Highschool</option>
            </select>
        </div>
        <div class="col-md-4">
            <label for=""><b>College</b></label>
            <select name="college" id="college" class="form-select form-select-sm">
                <option selected>Select</option>
                <option value="bs">Bachelor of Science</option>
                <option value="assoc">Associate</option>
            </select>
        </div>
    </div>
</div>

<div class="mb-2">
    <div class="row">
        <div class="col-md-3">
            <label for=""><b>Graduate School</b></label>
            <select name="gradschool" id="gradschool" class="form-select form-select-sm">
                <option selected>Select</option>
                <option value="masteral">Masteral</option>
                <option value="doctorate">Doctorate</option>
            </select>
        </div>
        <div class="col-md-7">
            <label for=""><b>Course</b></label>
            <select name="course" id="course" class="form-select form-select-sm">
                <option selected>Select</option>
                <option value="bsa">Bachelor of Science in Architecture</option>
                <option value="bac">Bachelor of Arts in Communication</option>
                <option value="baps">Bachelor of Arts in Political Science</option>
                <option value="bssw">Bachelor of Science in Social Work</option>
                <option value="bhs">Bachelor in Human Services</option>
                <option value="beed">Bachelor of Elementary Education</option>
                <option value="bped">Bachelor of Physical Education</option>
                <option value="beced">Bachelor of Early Childhood Education</option>
                <option value="bsed">Bachelor of Secondary Education</option>
                <option value="bsa">Bachelor of Science in Accountancy</option>
                <option value="bshm">Bachelor of Science in Hospitality Management</option>
                <option value="bstm">Bachelor of Science in Tourism Management</option>
                <option value="bsba">Bachelor of Science in Business Administration</option>
                <option value="bsit">Bachelor of Science in Information Technology</option>
                <option value="bscs">Bachelor of Science in Computer Science</option>
                <option value="blis">Bachelor of Library and Information Science</option>
                <option value="bsoa">Bachelor of Science in Office Administration</option>
                <option value="act">Associate in Computer Technology</option>
                <option value="bsce">Bachelor of Science in Civil Engineering</option>
                <option value="bsce">Bachelor of Science in Computer Engineering</option>
                <option value="bsee">Bachelor of Science in Electrical Engineering</option>
                <option value="bsee">Bachelor of Science in Electronics Engineering</option>
                <option value="bsie">Bachelor of Science in Industrial Engineering</option>
                <option value="bsn">Bachelor of Science in Nursing</option>
            </select>
        </div>
        <div class="col-md-2">
            <label for=""> <b>Year Graduate</b></label>
            <input type="number"
            name="yeargrad"
            id="yeargrad"
            class="form-control form-control-sm"
            value="<?php if(isset($_GET['yeargrad']))echo($_GET['yeargrad']); ?>"
            min="1900" max="2050">
            <script>
                document.querySelector("input[type=number]")
                    .oninput = e => console.log(new Date(e.target.valueAsNumber, 0, 1))
            </script>
        </div>
    </div>
</div>


<legend>Employment Status:</legend>
<div class="mb-2">
    <div class="row">
    <div class="col-md-9">
        <label for=""><b>Name of Organization / Company:</b></label>
        <input type="text"
        name="norg"
        id="norg"
        class="form-control form-control-sm"
        value="<?php if(isset($_GET['norg']))echo($_GET['norg']); ?>" autocomplete="off">
    </div>
    <div class="col-md-3">
        <label for=""><b>Contact Number:</b></label>
        <input type="text"
        name="norgcontact"
        id="norgcontact"
        class="form-control form-control-sm"
        value="<?php if(isset($_GET['norgcontact']))echo($_GET['norgcontact']); ?>"
        placeholder="Contact No." autocomplete="off">
    </div>
    </div>
</div>
<div class="mb-2">
    <div class="row">
    <div class="col-md-7">
        <label for=""><b>Organization / Company Address:</b></label>
        <input type="text"
        name="org" id="org"
        value="<?php if(isset($_GET['org']))echo($_GET['org']); ?>"
        class="form-control form-control-sm" autocomplete="off">
    </div>
    <div class="col-md-5">
        <label for=""><b>Email Address:</b></label>
        <input type="text"
        name="orgemail"
        id="orgemail"
        class="form-control form-control-sm"
        value="<?php if(isset($_GET['orgemail']))echo($_GET['orgemail']); ?>"
        placeholder="Email Address" autocomplete="off">
    </div>
    </div>
</div>
                                

                            </div>
                        <div class="text-end">

                            <input type="submit" name="submit" id="submit" class="btn btn-success text-white" value="Create">
                            <a href="alumni-list.php" class="btn btn-danger text-white">Go Back</a>
                        </div>
            
                        </form>

                    </div>
                </div>
            </div>

        </div>
    </div>




    <!-- This is Script Js Link -->
    <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.2.0/dist/chart.umd.min.js"></script>
    <script src="script.js"></script>
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

</body>

</html>