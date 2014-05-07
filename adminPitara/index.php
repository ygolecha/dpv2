<?php
//including header file
include "header.php";
//including processes file which contains all login functions
include 'include/processes.php';
$Login_Process = new Login_Process;
$Login_Process->check_login($_GET['page']);
$Login = $Login_Process->log_in($_POST['user'], $_POST['pass'], $_POST['page'], $_POST['submit']); 
?>
	<!-- end: HEAD -->
	<!-- start: BODY -->
	<body class="login example1">
		<div class="main-login col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
			<div class="logo">
				<img src="images/dealspitara_logo.png">
			</div>
			<!-- start: LOGIN BOX -->
			<div class="box-login">
				<h3>Sign in to your account</h3>
				<p>
					Please enter your name and password to log in.
				</p>
				<form class="form-login" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
					<div class="errorHandler alert alert-danger no-display">
						<i class="fa fa-remove-sign"></i> You have some form errors. Please check below.
					</div>
					<fieldset>
						<div class="form-group">
							<span class="input-icon">
								<input type="text" class="form-control" name="user" id="user" placeholder="Username">
								<i class="fa fa-user"></i> </span>
							<!-- To mark the incorrectly filled input, you must add the class "error" to the input -->
							<!-- example: <input type="text" class="login error" name="login" value="Username" /> -->
						</div>
						<div class="form-group form-actions">
							<span class="input-icon">
								<input type="password" class="form-control password" name="pass" id="pass" placeholder="Password">
								<!-- <i class="fa fa-lock"></i>
								<a class="forgot" href="#">
									I forgot my password
								</a>--> </span>
						</div>
						<input name="page" type="hidden" value="<?php echo $_GET['page']; ?>" />
						<div class="form-actions">
							<label for="remember" class="checkbox-inline">
								<input type="checkbox" class="grey remember" id="remember" name="remember">
								Keep me signed in
							</label>
							<button type="submit" class="btn btn-bricky pull-right" name="submit">
								Login <i class="fa fa-arrow-circle-right"></i>
							</button>
								
						</div>
						
					</fieldset>
				</form>
			</div>
			<!-- end: LOGIN BOX -->
			<!-- start: FORGOT BOX -->
			<!-- <div class="box-forgot">
				<h3>Forget Password?</h3>
				<p>
					Enter your e-mail address below to reset your password.
				</p>
				<form class="form-forgot">
					<div class="errorHandler alert alert-danger no-display">
						<i class="fa fa-remove-sign"></i> You have some form errors. Please check below.
					</div>
					<fieldset>
						<div class="form-group">
							<span class="input-icon">
								<input type="email" class="form-control" name="email" placeholder="Email">
								<i class="fa fa-envelope"></i> </span>
						</div>
						<div class="form-actions">
							<a class="btn btn-light-grey go-back">
								<i class="fa fa-circle-arrow-left"></i> Back
							</a>
							<button type="submit" class="btn btn-bricky pull-right">
								Submit <i class="fa fa-arrow-circle-right"></i>
							</button>
						</div>
					</fieldset>
				</form>
			</div> -->
			<!-- end: FORGOT BOX -->

		</div>
		<!-- start: MAIN JAVASCRIPTS -->
		<!--[if lt IE 9]>
		<script src="assets/plugins/respond.min.js"></script>
		<script src="assets/plugins/excanvas.min.js"></script>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<![endif]-->
		<!--[if gte IE 9]><!-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
		<!--<![endif]-->
	<!--	<script src="assets/plugins/jquery-ui/jquery-ui-1.10.2.custom.min.js"></script>
		<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
		<script src="assets/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js"></script>
		<script src="assets/plugins/blockUI/jquery.blockUI.js"></script>
		<script src="assets/plugins/iCheck/jquery.icheck.min.js"></script>
		<script src="assets/plugins/perfect-scrollbar/src/jquery.mousewheel.js"></script>
		<script src="assets/plugins/perfect-scrollbar/src/perfect-scrollbar.js"></script>
		<script src="assets/plugins/less/less-1.5.0.min.js"></script>
		<script src="assets/plugins/jquery-cookie/jquery.cookie.js"></script>
		<script src="assets/plugins/bootstrap-colorpalette/js/bootstrap-colorpalette.js"></script>
		<script src="assets/js/main.js"></script> -->
		<!-- end: MAIN JAVASCRIPTS -->
		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<!-- <script src="assets/plugins/jquery-validation/dist/jquery.validate.min.js"></script> -->
		<!-- <script src="assets/js/login.js"></script> -->
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<!-- <script>
			jQuery(document).ready(function() {
				Main.init();
				Login.init();
			});
		</script> -->
	</body>
	<!-- end: BODY -->
</html>