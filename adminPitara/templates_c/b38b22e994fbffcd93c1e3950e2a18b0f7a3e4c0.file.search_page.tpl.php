<?php /* Smarty version Smarty-3.1.18, created on 2014-05-20 18:11:31
         compiled from "templates\search_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21238537b7ab86fbf10-04595542%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b38b22e994fbffcd93c1e3950e2a18b0f7a3e4c0' => 
    array (
      0 => 'templates\\search_page.tpl',
      1 => 1400602289,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21238537b7ab86fbf10-04595542',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_537b7ab87c6df7_13285377',
  'variables' => 
  array (
    'HEADER' => 0,
    'TOPMENU' => 0,
    'userLevel' => 0,
    'dealName' => 0,
    'dealTitle' => 0,
    'dealT' => 0,
    'dealWeight' => 0,
    'dealID' => 0,
    'paginationHtml' => 0,
    'FOOTER' => 0,
    'search' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_537b7ab87c6df7_13285377')) {function content_537b7ab87c6df7_13285377($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['HEADER']->value;?>

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
						<a href="edit_deals_old.php"><i class="clip-pencil"></i>
							<span class="title"> Edit Old Deals </span>
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
										<input type="text" id="search_term" placeholder="Start Searching...">
										<input type="hidden" id="pageType" value="deal" />
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

							<!-- start: BASIC TABLE PANEL -->
							<div class="panel panel-default">
								<div class="panel-heading">
									<i class="fa fa-external-link-square"></i>
									EDIT DEAL WEIGHTAGE
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
								<div class="panel-body" id="panel-body">
									<table class="table table-hover" id="sample-table-1">
										<thead>
											<tr>
												<th>Deal Title</th>
												<th>Deal Weightage</th>
												<th>Action</th>
												<th></th>
											</tr>
										</thead>
										<tbody>
											<?php  $_smarty_tpl->tpl_vars['dealTitle'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dealTitle']->_loop = false;
 $_smarty_tpl->tpl_vars['dealID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['dealName']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dealTitle']->key => $_smarty_tpl->tpl_vars['dealTitle']->value) {
$_smarty_tpl->tpl_vars['dealTitle']->_loop = true;
 $_smarty_tpl->tpl_vars['dealID']->value = $_smarty_tpl->tpl_vars['dealTitle']->key;
?>
											<tr>
												<?php  $_smarty_tpl->tpl_vars['dealWeight'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dealWeight']->_loop = false;
 $_smarty_tpl->tpl_vars['dealT'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['dealTitle']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dealWeight']->key => $_smarty_tpl->tpl_vars['dealWeight']->value) {
$_smarty_tpl->tpl_vars['dealWeight']->_loop = true;
 $_smarty_tpl->tpl_vars['dealT']->value = $_smarty_tpl->tpl_vars['dealWeight']->key;
?>
												<td><?php echo $_smarty_tpl->tpl_vars['dealT']->value;?>
</td>
												<form method="post" action="weight_action.php" target="_blank">
													<td>
														<input type="number" name="dealWeight" value="<?php echo $_smarty_tpl->tpl_vars['dealWeight']->value;?>
" >
													</td>
													<td>
															<input type="hidden" name="dealId" value="<?php echo $_smarty_tpl->tpl_vars['dealID']->value;?>
" >
															<button class="btn btn-default" id="addWeight" type="submit">
																	ADD/UPDATE 
															</button>
													</td>
												</form>
												<?php } ?>
											</tr>
											<?php } ?>
										</tbody>
									</table>
								</div>
							</div>
							<!-- end: BASIC TABLE PANEL -->
							<!--pagination-->
		                           <?php echo $_smarty_tpl->tpl_vars['paginationHtml']->value;?>

							<!-- end:pagination-->
						</div>
					</div>



				

				</div>

			</div>
		</div>
		<!-- end: PAGE -->

	</div>
    
	<?php echo $_smarty_tpl->tpl_vars['FOOTER']->value;?>

	<script>
     var search = "<?php echo $_smarty_tpl->tpl_vars['search']->value;?>
";
	</script>
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
		<script src="dealspitara.js"></script>
		
		<script>
			jQuery(document).ready(function() {
				Main.init();
				FormElements.init();
				
			});
		</script>

</body>
</html><?php }} ?>
