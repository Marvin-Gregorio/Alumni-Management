
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