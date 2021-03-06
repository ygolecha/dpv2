<!DOCTYPE html>
<!-- Template Name: Clip-One - Responsive Admin Template build with Twitter Bootstrap 3.x Version: 1.3 Author: ClipTheme -->
<!--[if IE 8]><html class="ie8 no-js" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9 no-js" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<?php include "header.php"; ?>
<!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
		<link rel="stylesheet" href="assets/plugins/select2/select2.css">
		<link rel="stylesheet" href="assets/plugins/datepicker/css/datepicker.css">
		<link rel="stylesheet" href="assets/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css">
		<link rel="stylesheet" href="assets/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css">
		<link rel="stylesheet" href="assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css">
		<link rel="stylesheet" href="assets/plugins/jQuery-Tags-Input/jquery.tagsinput.css">
		<link rel="stylesheet" href="assets/plugins/bootstrap-fileupload/bootstrap-fileupload.min.css">
		<link rel="stylesheet" href="assets/plugins/summernote/build/summernote.css">
		<!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->
<body>
	<?php include "top-menu.php"; ?>

	<div class="main-container">

		<div class="navbar-content">
			<!-- start: SIDEBAR -->
			<div class="main-navigation navbar-collapse collapse">
				<!-- start: MAIN MENU TOGGLER BUTTON -->
				<div class="navigation-toggler">
					<i class="clip-chevron-left"></i>
					<i class="clip-chevron-right"></i>
				</div>
				<!-- end: MAIN MENU TOGGLER BUTTON -->
				<!-- start: MAIN NAVIGATION MENU -->
				<ul class="main-navigation-menu">
					<li>
						<a href="index.html"><i class="clip-home-3"></i>
							<span class="title"> Dashboard </span>
						</a>
					</li>
					<li>
						<a href="add_deals.php"><i class="clip-pencil"></i>
							<span class="title"> Add Deals </span>
						</a>

					</li>
					<li>
						<a href="edit_deals.php"><i class="clip-pencil"></i>
							<span class="title"> Edit Deals </span>
						</a>

					</li>
					<li class="active open">
						<a href="add_store.php"><i class="clip-pencil"></i>
							<span class="title"> Add Store </span><span class="selected"></span>
						</a>

					</li>
					<li>
						<a href="edit_store.php"><i class="clip-pencil"></i>
							<span class="title"> Edit Store </span>
						</a>

					</li>
					<li>
						<a href="add_category.php"><i class="clip-pencil"></i>
							<span class="title"> Add Category </span>
						</a>

					</li>
					<li>
						<a href="edit_category.php"><i class="clip-pencil"></i>
							<span class="title"> Edit Category </span>
						</a>

					</li>
					<?php if($_SESSION['user_level'] == 1) { ?>
					<li>
						<a href="register.php">
							<i class="clip-user-2"></i><span class="title"> Register User </span>
						</a>
					</li>
					<?php } ?>

				</ul>
				<!-- end: MAIN NAVIGATION MENU -->
			</div>
			<!-- end: SIDEBAR -->
		</div>

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
							<h3>Add Store</h3>
						</div>
						<!-- end: PAGE TITLE & BREADCRUMB -->
					</div>
				</div>
				<!-- end: PAGE HEADER -->
				<!-- start: PAGE CONTENT -->
				<div class="row">

					       <!-- start: TEXT FIELDS PANEL -->
							<div class="panel panel-default">
								<div class="panel-body">
									<form role="form" class="form-horizontal" id="form" action"#" method="post">
										
										<div class="form-group">
											<label class="col-sm-2 control-label" for="form-field-1">
												Title <span class="symbol required"></span>
											</label>
											<div class="col-sm-9">
												<input type="text" placeholder="" id="title" name="title" class="form-control" required />
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-2 control-label" for="form-field-1">
												Description <span class="symbol required"></span>
											</label>
											<div class="col-sm-9">
												<input type="text" placeholder="" id="desc" name="desc" class="form-control" required>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-2 control-label" for="form-field-1">
												SEO Title <span class="symbol required"></span>
											</label>
											<div class="col-sm-9">
												<input type="text" placeholder="" id="seo_title" name="seo_title" class="form-control" required>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-2 control-label" for="form-field-1">
												SEO Description <span class="symbol required"></span>
											</label>
											<div class="col-sm-9">
												<input type="text" placeholder="" id="seo_desc" name="seo_desc" class="form-control" required>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-2 control-label" for="form-field-1">
												OG Title <span class="symbol required"></span>
											</label>
											<div class="col-sm-9">
												<input type="text" placeholder="" id="og_title" name="og_title" class="form-control" required>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-2 control-label" for="form-field-1">
												OG Description <span class="symbol required"></span>
											</label>
											<div class="col-sm-9">
												<input type="text" placeholder="" id="og_desc" name="og_desc" class="form-control" required>
											</div>
										</div>
										
										<div class="form-group">
											<label class="col-sm-2 control-label" for="form-field-1">
												Short description
											</label>
											<div class="col-sm-9">
												<input type="text" placeholder="" id="short_desc" name="short_desc" class="form-control">
											</div>
										</div>
										
										
										<div class="form-group">
												<label class="col-sm-2 control-label" for="form-field-1">
													Long description
												</label>
												<div class="col-sm-9">
												<div class="summernote" id="content" name="content">
													
												</div>
											    </div>
										</div>
										<div class="col-md-4" style="float:right;">
												<button class="btn btn-yellow btn-block" type="submit">
													ADD Store <i class="fa fa-arrow-circle-right"></i>
												</button>
										</div>
										
										
										
									</form>
								</div>
							</div>
							<!-- end: TEXT FIELDS PANEL -->
						</div>

				</div>

			</div>
		</div>
		<!-- end: PAGE -->

	</div>
    
	<?php include "footer.php"; ?>
	<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script src="assets/plugins/jquery-inputlimiter/jquery.inputlimiter.1.3.1.min.js"></script>
		<script src="assets/plugins/autosize/jquery.autosize.min.js"></script>
		<script src="assets/plugins/select2/select2.min.js"></script>
		<script src="assets/plugins/jquery.maskedinput/src/jquery.maskedinput.js"></script>
		<script src="assets/plugins/jquery-maskmoney/jquery.maskMoney.js"></script>
		<script src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		<script src="assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
		<script src="assets/plugins/bootstrap-daterangepicker/moment.min.js"></script>
		<script src="assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
		<script src="assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
		<script src="assets/plugins/bootstrap-colorpicker/js/commits.js"></script>
		<script src="assets/plugins/jQuery-Tags-Input/jquery.tagsinput.js"></script>
		<script src="assets/plugins/bootstrap-fileupload/bootstrap-fileupload.min.js"></script>
		<script src="assets/plugins/summernote/build/summernote.min.js"></script>
		<script src="assets/plugins/ckeditor/ckeditor.js"></script>
		<script src="assets/plugins/ckeditor/adapters/jquery.js"></script>
		<script src="assets/js/form-elements.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->

		
		<script>
			jQuery(document).ready(function() {
				Main.init();
				FormElements.init();
				
			});
		</script>

</body>
</html>