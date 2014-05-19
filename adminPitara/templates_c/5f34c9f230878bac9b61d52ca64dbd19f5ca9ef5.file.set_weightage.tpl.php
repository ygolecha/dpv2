<?php /* Smarty version Smarty-3.1.18, created on 2014-05-19 09:06:18
         compiled from "templates\set_weightage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:256985379a9d4523b13-42410257%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5f34c9f230878bac9b61d52ca64dbd19f5ca9ef5' => 
    array (
      0 => 'templates\\set_weightage.tpl',
      1 => 1400483175,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '256985379a9d4523b13-42410257',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5379a9d4586fe6_34322079',
  'variables' => 
  array (
    'HEADER' => 0,
    'TOPMENU' => 0,
    'userLevel' => 0,
    'FOOTER' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5379a9d4586fe6_34322079')) {function content_5379a9d4586fe6_34322079($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['HEADER']->value;?>

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
	<?php echo $_smarty_tpl->tpl_vars['TOPMENU']->value;?>


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
						<a href="index.php"><i class="clip-home-3"></i>
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
					<li>
						<a href="add_store.php"><i class="clip-pencil"></i>
							<span class="title"> Add Store </span>
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
					<li class="active open">
						<a href="set_weightage.php"><i class="clip-pencil"></i>
							<span class="title"> Set Weightages </span><span class="selected"></span>
						</a>

					</li>
					<?php if ($_smarty_tpl->tpl_vars['userLevel']->value==1) {?>
					<li>
						<a href="register.php">
							<i class="clip-user-2"></i><span class="title"> Register User </span>
						</a>
					</li>
					<?php }?>

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
						<!-- end: PAGE TITLE & BREADCRUMB -->
					</div>
				</div>
				<!-- end: PAGE HEADER -->
				<!-- start: PAGE CONTENT -->
                 



                 <div class="row">
						<div class="col-md-12">
							<!-- start: FORM VALIDATION 1 PANEL -->
							<div class="panel panel-default">
								<div class="panel-heading">
									<i class="fa fa-external-link-square"></i>
									SEARCH DEALS BASED ON DATE
									<div class="panel-tools">
										<a class="btn btn-xs btn-link panel-collapse collapses" href="#">
										</a>
										<a class="btn btn-xs btn-link panel-config" href="#panel-config" data-toggle="modal">
											<i class="fa fa-wrench"></i>
										</a>
										<a class="btn btn-xs btn-link panel-refresh" href="#">
											<i class="fa fa-refresh"></i>
										</a>
										<a class="btn btn-xs btn-link panel-expand" href="#">
											<i class="fa fa-resize-full"></i>
										</a>
										<a class="btn btn-xs btn-link panel-close" href="#">
											<i class="fa fa-times"></i>
										</a>
									</div>
								</div>
								<div class="panel-body">
						
									<form action="search_page.php" role="form">
											<div class="row">
												<div class="col-md-5">
													<p>
											         Date Range Picker
												    </p>
													<div class="input-group">
														<span class="input-group-addon"> <i class="fa fa-calendar"></i> </span>
														<input type="text" class="form-control date-range">
													</div>
												</div>
												<div class="col-md-4">
													<p>
											         Deals Status
												    </p>
													<div class="input-group">
														<select id="store_name" name="store_name" class="form-control">
															<option value="">&nbsp;</option>
															<option value="Not Expired">Not Expired</option>
															<option value="Expired">Expired</option>
															
														</select>
												    </div>
												</div>
												<div class="col-md-3">
													<p>.
												    </p>
													<div class="input-group">
														<button class="btn btn-yellow btn-block" id="date_range">
													      SUBMIT <i class="fa fa-arrow-circle-right"></i>
												        </button>
												    </div>
												</div>
																							
											</div>
									</form>
								</div>
							</div>
							<!-- end: FORM VALIDATION 1 PANEL -->
						</div>
					</div>





		
			</div>
		</div>
		<!-- end: PAGE -->

	</div>
    
	<?php echo $_smarty_tpl->tpl_vars['FOOTER']->value;?>

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
        <script src="assets/plugins/jquery-validation/dist/jquery.validate.min.js"></script>
		<script src="assets/js/form-validation.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script src="dealspitara.js"></script>
		
		<script>
			jQuery(document).ready(function() {
				Main.init();
				FormElements.init();
			});
		</script>

</body>
</html><?php }} ?>
