~$HEADER`
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
	~$TOPMENU`

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
					<li>
						<a href="set_weightage.php"><i class="clip-pencil"></i>
							<span class="title"> Set Weightages </span>
						</a>

					</li>
					~if $userLevel eq 1`
					<li>
						<a href="register.php">
							<i class="clip-user-2"></i><span class="title"> Register User </span>
						</a>
					</li>
					~/if`

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
													<input type="text" placeholder="Insert category title" class="form-control" id="title" name="title" value="~$dealData['title']`">
												</div>
												<div class="form-group">
													<label class="control-label">
														Description <span class="symbol required"></span>
													</label>
													<div class="col-sm-12" id="descMain">
												    <div class="summernote">
												    	~$dealData['description']`
												    </div>
												    <textarea class="form-control no-display" id="desc" name="desc" cols="10" rows="10"></textarea>
											        </div>
												</div>
												<div class="form-group">
													<label class="control-label">
														SEO Title <span class="symbol required"></span>
													</label>
													<input type="text" placeholder="" class="form-control" id="seoTitle" name="seoTitle" value="~$dealData['seo_title']`">
												</div>
												<div class="form-group">
													<label class="control-label">
														SEO Description <span class="symbol required"></span>
													</label>
													<input type="text" placeholder="" class="form-control" id="seoDesc" name="seoDesc" value="~$dealData['seo_desc']`">
												</div>
												<div class="form-group">
													<label class="control-label">
														OG Title <span class="symbol required"></span>
													</label>
													<input type="text" placeholder="" class="form-control" id="ogTitle" name="ogTitle" value="~$dealData['og_title']`">
												</div>
												<div class="form-group">
													<label class="control-label">
														OG Description <span class="symbol required"></span>
													</label>
													<input type="text" placeholder="" class="form-control" id="ogDesc" name="ogDesc" value="~$dealData['og_desc']`">
												</div>
												<div class="col-sm-6" style="padding-left:0;">
												<div class="form-group">
													<label class="control-label">
															Store Name <span class="symbol required"></span>
														</label>
														<select id="storeName" name="storeName" class="form-control">
															<option value="~$dealData['store_name']`">~$dealData['store_name']`</option>
															~foreach $storeName as $store`
															
															<option value="~$store`">~$store`</option>
															
															~/foreach`
														</select>
												</div>
											    </div>
											    <div class="col-sm-6">
												<div class="form-group">
													<label class="control-label">
														Category <span class="symbol required"></span>
													</label>
													<input type="hidden" id="numTags" value="~$countCat`">
													~foreach $catMap as $catI=>$catM`
													<input type="hidden" id="num~$catI`" value="~$catM`">
													~/foreach`
														<select  multiple="multiple" id="category" name="category" class="form-control search-select">
															<option value="">&nbsp;</option>
															~foreach $catName as $catId=>$cat`
															
															<option value="~$catId`">~$cat`</option>
															
															~/foreach`
														</select>
												</div>
											   </div>
											   
											   
											   <div class="col-sm-6" style="padding-left:0;">
												<div class="form-group">
													<label class="control-label">
														Original Price
													</label>
														<input type="number" placeholder="" id="originalPrice" name="originalPrice" class="form-control" value="~$dealData['original_price']`">
												</div>
											    </div>
											    <div class="col-sm-6">
												<div class="form-group">
													<label class="control-label">
														Final Price
													</label>
														<input type="number" placeholder="" id="finalPrice" name="finalPrice" class="form-control" value="~$dealData['final_price']`">
												</div>
											    </div>
														
												
											</div>
											<div class="col-md-6">

												<div class="col-sm-4" style="padding-left:0;">
										    	<div class="form-group">
													<label class="control-label">
														Discount
													</label>
														<input type="number" placeholder="" id="discount" name="discount" class="form-control" value="~$dealData['discount']`">
												</div>
											    </div>
											    <div class="col-sm-4">
												<div class="form-group">
													<label class="control-label">
														Expiry Date
													</label>
														<div class="input-group"> 
											    	      <input type="text" data-date-format="yyyy-mm-dd" data-date-viewmode="years" class="form-control date-picker" id="expiryDate" name="expiryDate" value="~$dealData['expiry']`">
											    	      <span class="input-group-addon"> <i class="fa fa-calendar"></i> </span>
											           </div>
												</div>
											    </div>
											    <div class="col-sm-4" style="padding-left:0;">
										    	<div class="form-group">
													<label class="control-label">
														Coupon Code
													</label>
														<input type="text" placeholder="" id="couponCode" name="couponCode" class="form-control" value="~$dealData['coupon_code']`">
												</div>
											    </div>
											    <div class="form-group">
													<label class="control-label">
														Shipping Charges
													</label>
														<input type="text" placeholder="" id="shippingCharges" name="shippingCharges" class="form-control" value="~$dealData['shipping_charges']`">
											    </div>
											    <div class="form-group">
													<label class="control-label">
														Offer Text
													</label>
														<input type="text" placeholder="" id="offerText" name="offerText" class="form-control" value="~$dealData['offer_text']`">
											    </div>
											    <div class="form-group">
													<label class="control-label">
														Affiliate Url <span class="symbol required"></span>
													</label>
														<input type="text" placeholder="" id="affiliateUrl" name="affiliateUrl" class="form-control" value="~$dealData['affiliate_url']`">
											    </div>

												<div class="form-group">
													<label class="control-label">
														Content <span class="symbol required"></span>
													</label>
													<div class="col-sm-12" id="contentMain">
												    <div class="summernote">	
												    ~$dealData['content']`												
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
													  <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"><img src="~$dealData['image_url']`" style="max-height: 150px;" /></div>
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
											<input type="hidden" id="author" value="~$sessionUserid`" />
											<input type="hidden" id="dealID" value="~$dealID`" />
											<input type="hidden" id="pageType" value="Deal Edit" />
											<div class="col-md-2">
												<button class="btn btn-yellow btn-block" id="addDeals">
													UPDATE <i class="fa fa-arrow-circle-right"></i>
												</button><div id="xyz"></div>
											</div>
											</form>
											<div class="col-md-2">
												<form method="post" action="deal_preview.php" target="_blank">
													<input type="hidden" name="hiddenLastID" value="~$dealID`" />
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
    
	~$FOOTER`
	<script>
     var dealAction = "~$dealAction`";
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

				var num_tag = eval($('#numTags').val());
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
</html>