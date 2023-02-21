
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
				<span class="">Alumni | </span><span class="mr-3" id="header_name"></span>
				<img src="" width="50px" class="rounded-circle" id="nav_profile">
				</a>
				
			</ul>
		</div>
	</div>
</nav>


<Header class="navbar navbar-expand-sm sub-header sticky-top" id="header">
<div class="container-fluid">
<ul class="navbar-nav mx-3">
<li class="nav-item"><a id="nav-menu" href="alumni-dashboard.php" class="nav-link mx-3">Home</a></li>
<li class="nav-item"><a id="nav-menu" href="announcement.php" class="nav-link mx-3">Announcements</a></li>
<li class="nav-item"><a id="nav-menu" href="job.php" class="nav-link mx-3">Jobs Offer</a></li>
<li class="nav-item"><a id="nav-menu" href="event.php" class="nav-link mx-3">Events</a></li>
<li class="nav-item"><a id="nav-menu" href="forum.php" class="nav-link mx-3">Forum</a></li>
<li class="nav-item"><a id="nav-menu" href="account-settings.php" class="nav-link mx-3">My Profile</a></li>
</ul>
<a onclick="logOut()" class="btn btn-danger">Sign-out</a>
</div>
</Header>