<?php /* Smarty version Smarty-3.1.18, created on 2014-05-19 08:50:58
         compiled from "templates\dashboard.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19879536a49e9a7e4a9-55661181%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fae4a1401156e5b20d1f084faaf483e3619d4522' => 
    array (
      0 => 'templates\\dashboard.tpl',
      1 => 1400482216,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19879536a49e9a7e4a9-55661181',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_536a49e9adefa7_01186743',
  'variables' => 
  array (
    'HEADER' => 0,
    'TOPMENU' => 0,
    'userLevel' => 0,
    'FOOTER' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_536a49e9adefa7_01186743')) {function content_536a49e9adefa7_01186743($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['HEADER']->value;?>

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
					<li class="active open">
						<a href="index.php"><i class="clip-home-3"></i>
							<span class="title"> Dashboard </span><span class="selected"></span>
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
					<li>
						<a href="set_weightage.php"><i class="clip-pencil"></i>
							<span class="title"> Set Weightages </span>
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
						<div class="page-header">
							<h1>Dashboard <small>overview &amp; stats </small></h1>
						</div>
						<!-- end: PAGE TITLE & BREADCRUMB -->
					</div>
				</div>
				<!-- end: PAGE HEADER -->
				<!-- start: PAGE CONTENT -->
				<div class="row">

					<?php if ($_smarty_tpl->tpl_vars['userLevel']->value==1) {?>
					<h3>Welcome super user</h3>
					<?php } elseif ($_smarty_tpl->tpl_vars['userLevel']->value==2) {?>
					<h3>Welcome Moderator</h3>
					<?php } else { ?>
					<h3>Welcome user</h3>
					<?php }?>
										

				</div>

			</div>
		</div>
		<!-- end: PAGE -->

	</div>

	<?php echo $_smarty_tpl->tpl_vars['FOOTER']->value;?>

	<script>
			jQuery(document).ready(function() {
				Main.init();
				
			});
		</script>
</body>
</html><?php }} ?>
