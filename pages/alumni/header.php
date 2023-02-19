
<?php session_start(); ?>
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
				<span class="mx-3"><b>Welcome to Alumni Managemet System</b> <span class="fs-5"><b>"Mr. <?=$_SESSION['last_name']?>"</b></span></span>
				<img src="../profileImg/.png" width="50px" class="rounded-circle" id="nav_profile">
				</a>
				
			</ul>
		</div>
	</div>
</nav>


<Header class="navbar navbar-expand-sm sub-header" id="header">
<div class="container-fluid">
<ul class="navbar-nav mx-3">
<li class="nav-item"><a id="nav-menu" href="alumni-dashboard.php" class="nav-link mx-3"><i class="fas fa-home mx-1"></i>Home</a></li>
<li class="nav-item"><a id="nav-menu" href="forum.php" class="nav-link mx-3"><i class="fas fa-bullhorn mx-1"></i>Announcement</a></li>
<li class="nav-item"><a id="nav-menu" href="forum.php" class="nav-link mx-3"><i class="fas fa-envelope mx-1"></i>Message</a></li>
<li class="nav-item"><a id="nav-menu" href="account-settings.php" class="nav-link mx-3"><i class="fas fa-address-card mx-1"></i>My Profile</a></li>
</ul>
<a onclick="logOut()" class="btn btn-sm btn-danger"><b>LOGOUT</b><i class="fas fa-right-from-bracket mx-2"></i></a>
</div>
</Header>