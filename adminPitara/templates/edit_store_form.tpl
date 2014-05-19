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
					<li class="active open">
						<a href="edit_store.php"><i class="clip-pencil"></i>
							<span class="title"> Edit Store </span><span class="selected"></span>
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
							<!-- start: FORM VALIDATION 1 PANEL -->
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
								<div class="panel-body">
						
									<form action="#" role="form" id="form">
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
														Name <span class="symbol required"></span>
													</label>
													<input type="text" placeholder="Insert store name" class="form-control" id="name" name="name" value="~$storeData['name']`">
												</div>
												<div class="form-group">
													<label class="control-label">
														Title <span class="symbol required"></span>
													</label>
													<input type="text" placeholder="Insert store title" class="form-control" id="title" name="title" value="~$storeData['title']`">
												</div>
												<div class="form-group">
													<label class="control-label">
														Description <span class="symbol required"></span>
													</label>
													<div class="col-sm-12" id="descMain">
												    <div class="summernote">
												    	~$storeData['description']`
												    </div>
												    <textarea class="form-control no-display" id="desc" name="desc" cols="10" rows="10"></textarea>
											        </div>
												</div>
												<div class="form-group">
													<label class="control-label">
														SEO Title <span class="symbol required"></span>
													</label>
													<input type="text" placeholder="" class="form-control" id="seo_title" name="seo_title" value="~$storeData['seo_title']`">
												</div>
												<div class="form-group">
													<label class="control-label">
														SEO Description <span class="symbol required"></span>
													</label>
													<input type="text" placeholder="" class="form-control" id="seo_desc" name="seo_desc" value="~$storeData['seo_desc']`">
												</div>
												<div class="form-group">
													<label class="control-label">
														OG Title <span class="symbol required"></span>
													</label>
													<input type="text" placeholder="" class="form-control" id="og_title" name="og_title" value="~$storeData['og_title']`">
												</div>
												
												
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label class="control-label">
														OG Description <span class="symbol required"></span>
													</label>
													<input type="text" placeholder="" class="form-control" id="og_desc" name="og_desc" value="~$storeData['og_desc']`">
												</div>
												<div class="form-group">
													<label class="control-label">
														Short Description <span class="symbol required"></span>
													</label>
													<input type="text" placeholder="" class="form-control" id="short_desc" name="short_desc" value="~$storeData['short_desc']`">
												</div>
												<div class="form-group">
													<label class="control-label">
														Long Description <span class="symbol required"></span>
													</label>
													<div class="col-sm-12" id="contentMain">
												    <div class="summernote">
												      ~$storeData['long_desc']`													
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
													  <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"><img src="~$storeData['image_url']`" style="max-height: 150px;" /></div>
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
										<div class="row">
											<div class="col-md-8">
												<p>
													<span class="symbol required"></span>Required Fields
												</p>
											</div>
											<input type="hidden" id="page_type" value="store_edit" />
											<input type="hidden" id="ID" value="~$storeID`" />
											<div class="col-md-4">
												<button class="btn btn-yellow btn-block">
													ADD <i class="fa fa-arrow-circle-right"></i>
												</button>
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
    
	~$FOOTER`
	<script>
     var Cat_Action = "~$catAction`";
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
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script src="dealspitara.js"></script>
		
		<script>
			jQuery(document).ready(function() {
				Main.init();
				FormValidator.init();

				
           });
            
		</script>

</body>
</html>