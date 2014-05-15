<?php /* Smarty version Smarty-3.1.18, created on 2014-05-15 08:13:16
         compiled from "templates\edit_store.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19718536e14a3958c88-19129419%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd1035a58707d34f97a1159057610b3881ccd8599' => 
    array (
      0 => 'templates\\edit_store.tpl',
      1 => 1400134382,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19718536e14a3958c88-19129419',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_536e14a39e7c18_06832343',
  'variables' => 
  array (
    'HEADER' => 0,
    'TOPMENU' => 0,
    'userLevel' => 0,
    'storeName' => 0,
    'storeTitle' => 0,
    'storeID' => 0,
    'totalPages' => 0,
    'currentPage' => 0,
    'i' => 0,
    'FOOTER' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_536e14a39e7c18_06832343')) {function content_536e14a39e7c18_06832343($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['HEADER']->value;?>

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
							<span class="title"> Edit Deals 
						</a>

					</li>
					<li>
						<a href="add_store.php"><i class="clip-pencil"></i>
							<span class="title"> Add Store </span>
						</a>

					</li>
					<li class="active open">
						<a href="edit_store.php"><i class="clip-pencil"></i>
							<span class="title"> Edit Store </span></span><span class="selected"></span>
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
										<input type="hidden" id="pageType" value="store" />
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
									EDIT STORE
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
												<th>Store Name</th>
												<th class="hidden-xs">Action</th>
												<th></th>
											</tr>
										</thead>
										<tbody>
											<?php  $_smarty_tpl->tpl_vars['storeTitle'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['storeTitle']->_loop = false;
 $_smarty_tpl->tpl_vars['storeID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['storeName']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['storeTitle']->key => $_smarty_tpl->tpl_vars['storeTitle']->value) {
$_smarty_tpl->tpl_vars['storeTitle']->_loop = true;
 $_smarty_tpl->tpl_vars['storeID']->value = $_smarty_tpl->tpl_vars['storeTitle']->key;
?>
											<tr>
												<td class="hidden-xs"><?php echo $_smarty_tpl->tpl_vars['storeTitle']->value;?>
</td>
												<td>
													<form method="post" action="edit_store_form.php"> <input type="hidden" name="store_id" value="<?php echo $_smarty_tpl->tpl_vars['storeID']->value;?>
" />
														<button class="btn btn-default">EDIT</button>
													</form>
												</td>
											</tr>
											<?php } ?>
										</tbody>
									</table>
								</div>
							</div>
							<!-- end: BASIC TABLE PANEL -->
							<div class="pagination">
								<?php if ($_smarty_tpl->tpl_vars['totalPages']->value>1) {?>
								   <?php if ($_smarty_tpl->tpl_vars['currentPage']->value==1) {?>
	                                  <a href="http://localhost/dealspitara/dpv2/adminPitara/edit_store.php" class="btn btn-bricky">1</a>
	                               <?php } else { ?>
	                                  <a href="http://localhost/dealspitara/dpv2/adminPitara/edit_store.php" class="btn btn-light-grey">1</a>
	                               <?php }?>
	                               <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['totalPages']->value+1 - (2) : 2-($_smarty_tpl->tpl_vars['totalPages']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 2, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
		                                <?php if ($_smarty_tpl->tpl_vars['currentPage']->value==$_smarty_tpl->tpl_vars['i']->value) {?>
			                                 <a href="http://localhost/dealspitara/dpv2/adminPitara/edit_store.php?page=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" class="btn btn-bricky"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</a>
			                                 <?php } else { ?>
			                                 <a href="http://localhost/dealspitara/dpv2/adminPitara/edit_store.php?page=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" class="btn btn-light-grey"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</a>
		                                 <?php }?>
	                               <?php }} ?>
								<?php }?>
							</div>
						</div>
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
		<script src="dealspitara.js"></script>
		
		<script>
			jQuery(document).ready(function() {
				Main.init();
				FormElements.init();
				
			});
		</script>

</body>
</html><?php }} ?>
