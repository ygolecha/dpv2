<?php
include_once 'include/processes.php';
$Login_Process = new Login_Process;
$Login_Process->check_status($_SERVER['SCRIPT_NAME']);
?>
<!-- start: Top menu -->
		<div class="navbar navbar-inverse navbar-fixed-top">
			<!-- start: TOP NAVIGATION CONTAINER -->
			<div class="container">
				<div class="navbar-header">
					<!-- start: RESPONSIVE MENU TOGGLER -->
					<button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
						<span class="clip-list-2"></span>
					</button>
					<!-- end: RESPONSIVE MENU TOGGLER -->
					<!-- start: LOGO -->
					<a class="navbar-brand" href="index.php">
						<img src="images/dealspitara_logo.png" width="100" height="30">
					</a>
					<!-- end: LOGO -->
				</div>
				<div class="navbar-tools">
					<!-- start: TOP NAVIGATION MENU -->
					<ul class="nav navbar-right">
						<!-- start: USER DROPDOWN -->
						<li class="dropdown current-user">
							<a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" data-close-others="true" href="#">
								<img src="assets/images/avatar-1-small.jpg" class="circle-img" alt="">
								<span class="username">Peter Clark</span>
								<i class="clip-chevron-down"></i>
							</a>
							<ul class="dropdown-menu">
								<li>
									<a href="include/processes.php?log_out=true">
										<i class="clip-exit"></i>
										&nbsp;Log Out
									</a>
								</li>
							</ul>
						</li>
						<!-- end: USER DROPDOWN -->
					</ul>
					<!-- end: TOP NAVIGATION MENU -->
				</div>
			</div>
			<!-- end: TOP NAVIGATION CONTAINER -->
		</div>
		<!-- end: HEADER -->