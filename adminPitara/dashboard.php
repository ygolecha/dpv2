<!DOCTYPE html>
<!-- Template Name: Clip-One - Responsive Admin Template build with Twitter Bootstrap 3.x Version: 1.3 Author: ClipTheme -->
<!--[if IE 8]><html class="ie8 no-js" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9 no-js" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
	<!--<![endif]-->
<?php include "header.php"; ?>
<body>
<?php include "top-menu.php"; ?>

<div class="main-container">
	<?php include "sidebar.php"; ?>

	<!-- start: PAGE -->
			<div class="main-content">
				<div class="container">
					<!-- start: PAGE HEADER -->
					<div class="row">
						<div class="col-sm-12">
							<!-- start: PAGE TITLE & BREADCRUMB -->
							<ol class="breadcrumb">
								<li>
									<i class="clip-home-3"></i>
									<a href="#">
										Home
									</a>
								</li>
								<li class="active">
									Dashboard
								</li>
								<li class="search-box">
									<form class="sidebar-search">
										<div class="form-group">
											<input type="text" placeholder="Start Searching...">
											<button class="submit">
												<i class="clip-search-3"></i>
											</button>
										</div>
									</form>
								</li>
							</ol>
							<div class="page-header">
								<h1>Dashboard <small>overview &amp; stats </small></h1>
							</div>
							<!-- end: PAGE TITLE & BREADCRUMB -->
						</div>
					</div>
					<!-- end: PAGE HEADER -->
					<!-- start: PAGE CONTENT -->
					<div class="row">
                        
                        <?php if($_SESSION['user_level'] == 1) { ?>
						<h3>Welcome super user</h3>
						<?php } else if ($_SESSION['user_level'] == 2) { ?>
						<h3>Welcome deals moderator</h3>
						<?php } else { ?>
						<h3>Welcome company user</h3>
						<?php } ?>
						
					</div>
					
				</div>
			</div>
			<!-- end: PAGE -->

</div>

<?php include "footer.php"; ?>
</body>
</html>