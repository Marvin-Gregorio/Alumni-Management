<Header class="navbar navbar-expand-sm sub-header" id="header">
<div class="container-fluid">
<ul class="navbar-nav mx-3">
<li class="nav-item"><a id="nav-menu" href="index.php?page=dashboard" class="nav-link mx-3">Dashboard</a></li>
<li class="nav-item"><a id="nav-menu" href="index.php?page=analytics" class="nav-link mx-3">Analytics</a></li>
<li class="nav-item"><a id="nav-menu" href="index.php?page=alumni-list" class="nav-link mx-3">Alumni List</a></li>
<li class="nav-item"><a id="nav-menu" href="index.php?page=alumni-attendance" class="nav-link mx-3">Alumni Attendance</a></li>
<li class="nav-item"><a id="nav-menu" href="index.php?page=user-list" class="nav-link mx-3">Users List</a></li>
</ul>
</div>
</Header>

<script>
$('.nav_collapse').click(function(){
console.log($(this).attr('href'))
$($(this).attr('href')).collapse()
})
$('.nav-<?php echo isset($_GET['page']) ? $_GET['page'] : '' ?>').addClass('active')
</script>