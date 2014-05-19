<?php /* Smarty version Smarty-3.1.18, created on 2014-05-19 16:28:19
         compiled from "templates\edit_deal_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18362536dbc58881fc0-24714215%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a52c939b2df4987aec9cc09dd3eab657fc8e60cb' => 
    array (
      0 => 'templates\\edit_deal_form.tpl',
      1 => 1400509297,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18362536dbc58881fc0-24714215',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_536dbc58902344_13208818',
  'variables' => 
  array (
    'HEADER' => 0,
    'TOPMENU' => 0,
    'userLevel' => 0,
    'dealData' => 0,
    'storeName' => 0,
    'store_name' => 0,
    'countCat' => 0,
    'catMap' => 0,
    'catI' => 0,
    'catM' => 0,
    'catName' => 0,
    'cat_id' => 0,
    'cat_name' => 0,
    'sessionUserid' => 0,
    'dealID' => 0,
    'FOOTER' => 0,
    'dealAction' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_536dbc58902344_13208818')) {function content_536dbc58902344_13208818($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['HEADER']->value;?>

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
					<li class="active open">
						<a href="edit_deals.php"><i class="clip-pencil"></i>
							<span class="title"> Edit Deals </span><span class="selected"></span>
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

							<div class="panel panel-default">
								<div class="panel-heading">
									<i class="fa fa-external-link-square"></i>
									EDIT DEAL
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
						
									<form action="#" role="form" id="form-deal">
										<div class="row">
											<div class="col-md-12">
												<div class="errorHandler alert alert-danger no-display">
													<i class="fa fa-times-sign"></i> You have some form errors. Please check below.
												</div>
												<div class="successHandler alert alert-success no-display">
													<i class="fa fa-ok"></i> Your form validation is successful!
												</div>
											</div>
											<div class="col-md-6">
												
												<div class="form-group">
													<label class="control-label">
														Title <span class="symbol required"></span>
													</label>
													<input type="text" placeholder="Insert category title" class="form-control" id="title" name="title" value="<?php echo $_smarty_tpl->tpl_vars['dealData']->value['title'];?>
">
												</div>
												<div class="form-group">
													<label class="control-label">
														Description <span class="symbol required"></span>
													</label>
													<div class="col-sm-12" id="descMain">
												    <div class="summernote">
												    	<?php echo $_smarty_tpl->tpl_vars['dealData']->value['description'];?>

												    </div>
												    <textarea class="form-control no-display" id="desc" name="desc" cols="10" rows="10"></textarea>
											        </div>
												</div>
												<div class="form-group">
													<label class="control-label">
														SEO Title <span class="symbol required"></span>
													</label>
													<input type="text" placeholder="" class="form-control" id="seo_title" name="seo_title" value="<?php echo $_smarty_tpl->tpl_vars['dealData']->value['seo_title'];?>
">
												</div>
												<div class="form-group">
													<label class="control-label">
														SEO Description <span class="symbol required"></span>
													</label>
													<input type="text" placeholder="" class="form-control" id="seo_desc" name="seo_desc" value="<?php echo $_smarty_tpl->tpl_vars['dealData']->value['seo_desc'];?>
">
												</div>
												<div class="form-group">
													<label class="control-label">
														OG Title <span class="symbol required"></span>
													</label>
													<input type="text" placeholder="" class="form-control" id="og_title" name="og_title" value="<?php echo $_smarty_tpl->tpl_vars['dealData']->value['og_title'];?>
">
												</div>
												<div class="form-group">
													<label class="control-label">
														OG Description <span class="symbol required"></span>
													</label>
													<input type="text" placeholder="" class="form-control" id="og_desc" name="og_desc" value="<?php echo $_smarty_tpl->tpl_vars['dealData']->value['og_desc'];?>
">
												</div>
												<div class="col-sm-6" style="padding-left:0;">
												<div class="form-group">
													<label class="control-label">
															Store Name <span class="symbol required"></span>
														</label>
														<select id="store_name" name="store_name" class="form-control">
															<option value="<?php echo $_smarty_tpl->tpl_vars['dealData']->value['store_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['dealData']->value['store_name'];?>
</option>
															<?php  $_smarty_tpl->tpl_vars['store_name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['store_name']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['storeName']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['store_name']->key => $_smarty_tpl->tpl_vars['store_name']->value) {
$_smarty_tpl->tpl_vars['store_name']->_loop = true;
?>
															
															<option value="<?php echo $_smarty_tpl->tpl_vars['store_name']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['store_name']->value;?>
</option>
															
															<?php } ?>
														</select>
												</div>
											    </div>
											    <div class="col-sm-6">
												<div class="form-group">
													<label class="control-label">
														Category <span class="symbol required"></span>
													</label>
													<input type="hidden" id="num_tags" value="<?php echo $_smarty_tpl->tpl_vars['countCat']->value;?>
">
													<?php  $_smarty_tpl->tpl_vars['catM'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['catM']->_loop = false;
 $_smarty_tpl->tpl_vars['catI'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['catMap']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['catM']->key => $_smarty_tpl->tpl_vars['catM']->value) {
$_smarty_tpl->tpl_vars['catM']->_loop = true;
 $_smarty_tpl->tpl_vars['catI']->value = $_smarty_tpl->tpl_vars['catM']->key;
?>
													<input type="hidden" id="num<?php echo $_smarty_tpl->tpl_vars['catI']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['catM']->value;?>
">
													<?php } ?>
														<select  multiple="multiple" id="category" name="category" class="form-control search-select">
															<option value="">&nbsp;</option>
															<?php  $_smarty_tpl->tpl_vars['cat_name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cat_name']->_loop = false;
 $_smarty_tpl->tpl_vars['cat_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['catName']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cat_name']->key => $_smarty_tpl->tpl_vars['cat_name']->value) {
$_smarty_tpl->tpl_vars['cat_name']->_loop = true;
 $_smarty_tpl->tpl_vars['cat_id']->value = $_smarty_tpl->tpl_vars['cat_name']->key;
?>
															
															<option value="<?php echo $_smarty_tpl->tpl_vars['cat_id']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['cat_name']->value;?>
</option>
															
															<?php } ?>
														</select>
												</div>
											   </div>
											   
											   
											   <div class="col-sm-6" style="padding-left:0;">
												<div class="form-group">
													<label class="control-label">
														Original Price
													</label>
														<input type="number" placeholder="" id="original_price" name="original_price" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['dealData']->value['original_price'];?>
">
												</div>
											    </div>
											    <div class="col-sm-6">
												<div class="form-group">
													<label class="control-label">
														Final Price
													</label>
														<input type="number" placeholder="" id="final_price" name="final_price" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['dealData']->value['final_price'];?>
">
												</div>
											    </div>
														
												
											</div>
											<div class="col-md-6">

												<div class="col-sm-4" style="padding-left:0;">
										    	<div class="form-group">
													<label class="control-label">
														Discount
													</label>
														<input type="number" placeholder="" id="discount" name="discount" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['dealData']->value['discount'];?>
">
												</div>
											    </div>
											    <div class="col-sm-4">
												<div class="form-group">
													<label class="control-label">
														Expiry Date
													</label>
														<div class="input-group"> 
											    	      <input type="text" data-date-format="dd-mm-yyyy" data-date-viewmode="years" class="form-control date-picker" id="expiry_date" name="expiry_date" value="<?php echo $_smarty_tpl->tpl_vars['dealData']->value['expiry'];?>
">
											    	      <span class="input-group-addon"> <i class="fa fa-calendar"></i> </span>
											           </div>
												</div>
											    </div>
											    <div class="col-sm-4" style="padding-left:0;">
										    	<div class="form-group">
													<label class="control-label">
														Coupon Code
													</label>
														<input type="text" placeholder="" id="coupon_code" name="coupon_code" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['dealData']->value['coupon_code'];?>
">
												</div>
											    </div>
											    <div class="form-group">
													<label class="control-label">
														Shipping Charges
													</label>
														<input type="text" placeholder="" id="shipping_charges" name="shipping_charges" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['dealData']->value['shipping_charges'];?>
">
											    </div>
											    <div class="form-group">
													<label class="control-label">
														Offer Text
													</label>
														<input type="text" placeholder="" id="offer_text" name="offer_text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['dealData']->value['offer_text'];?>
">
											    </div>
											    <div class="form-group">
													<label class="control-label">
														Affiliate Url <span class="symbol required"></span>
													</label>
														<input type="text" placeholder="" id="affiliate_url" name="affiliate_url" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['dealData']->value['affiliate_url'];?>
">
											    </div>

												<div class="form-group">
													<label class="control-label">
														Content <span class="symbol required"></span>
													</label>
													<div class="col-sm-12" id="contentMain">
												    <div class="summernote">	
												    <?php echo $_smarty_tpl->tpl_vars['dealData']->value['content'];?>
												
												    </div>
												    <textarea class="form-control no-display" id="content" name="content" cols="10" rows="10"></textarea>
											        </div>
												</div>
												<div class="form-group">
												  <div class="col-sm-12 center">
												    <label class="control-label">
													   Image Upload
												    </label>
											     	<div class="fileupload fileupload-exists" data-provides="fileupload">
													  <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA?text=no+image" alt=""/>
													  </div>
													  <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"><img src="<?php echo $_smarty_tpl->tpl_vars['dealData']->value['image_url'];?>
" style="max-height: 150px;" /></div>
													  <div>
														<span class="btn btn-light-grey btn-file"><span class="fileupload-new"><i class="fa fa-picture-o"></i> Select image</span><span class="fileupload-exists"><i class="fa fa-picture-o"></i> Change</span>
															<input type="file" name="upload_file">
														</span>
														<a href="#" class="btn fileupload-exists btn-light-grey" data-dismiss="fileupload">
															<i class="fa fa-times"></i> Remove
														</a>
													  </div>
												    </div>
												
										     	 </div>
												</div>
																								
												
											</div>
										</div>
										<hr>
										
											<div class="col-md-8">
												<p>
													<span class="symbol required"></span>Required Fields
												</p>
											</div>
											<input type="hidden" id="author" value="<?php echo $_smarty_tpl->tpl_vars['sessionUserid']->value;?>
" />
											<input type="hidden" id="dealID" value="<?php echo $_smarty_tpl->tpl_vars['dealID']->value;?>
" />
											<input type="hidden" id="page_type" value="Deal Edit" />
											<div class="col-md-2">
												<button class="btn btn-yellow btn-block" id="add_deals">
													UPDATE <i class="fa fa-arrow-circle-right"></i>
												</button>
											</div>
											</form>
											<div class="col-md-2">
												<form method="post" action="deal_preview.php" target="_blank">
													<input type="hidden" name="hidden_lastID" value="<?php echo $_smarty_tpl->tpl_vars['dealID']->value;?>
" />
													<button class="btn btn-yellow btn-block">
														PREVIEW <i class="fa fa-arrow-circle-right"></i>
													</button>
												</form>
											</div>
										
									
								</div>
							</div>
							<!-- end: FORM VALIDATION 1 PANEL -->
							
						</div>
					</div>



				

				</div>

			</div>
		</div>
		<!-- end: PAGE -->

	</div>
    
	<?php echo $_smarty_tpl->tpl_vars['FOOTER']->value;?>

	<script>
     var Deal_Action = "<?php echo $_smarty_tpl->tpl_vars['dealAction']->value;?>
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
		<script src="assets/plugins/jquery-validation/dist/jquery.validate.min.js"></script>
		<script src="assets/js/form-validation.js"></script>
		

		<script src="dealspitara.js"></script>
		
		<script type='text/javascript'>
			jQuery(document).ready(function() {
				Main.init();
				FormElements.init();

				var num_tag = eval($('#num_tags').val());
			    if(num_tag > 0)
			    {
			    var myTags=new Array(); 
			    for(var i=0;i<num_tag;i++)
			    {
			    myTags[i]= eval($('#num'+i).val());    
			    }
			    $('#category').select2();
			    $('#category').val(myTags).select2();
			    
			    }
			    FormValidator.init();
			    
    
			});
		</script>

</body>
</html><?php }} ?>
