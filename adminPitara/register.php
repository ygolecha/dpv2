
<!DOCTYPE html>
<!-- Template Name: Clip-One - Responsive Admin Template build with Twitter Bootstrap 3.x Version: 1.3 Author: ClipTheme -->
<!--[if IE 8]><html class="ie8 no-js" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9 no-js" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<?php include "header.php"; 

include_once 'include/processes.php';
$Login_Process = new Login_Process;
$New = $Login_Process->Register($_POST, $_POST['process']);
$Login_Process->check_status($_SERVER['SCRIPT_NAME']);

?>
<body>
  <!-- start: Top menu -->
    <div class="navbar navbar-inverse navbar-fixed-top">
      <!-- start: TOP NAVIGATION CONTAINER -->
      <div class="container">
        <div class="navbar-header">
          <!-- start: RESPONSIVE MENU TOGGLER -->
          <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
            <span class="clip-list-2"></span>
          </button>
          <!-- end: RESPONSIVE MENU TOGGLER -->
          <!-- start: LOGO -->
          <a class="navbar-brand" href="index.php">
            <img src="images/dealspitara_logo.png" width="100" height="30">
          </a>
          <!-- end: LOGO -->
        </div>
        <div class="navbar-tools">
          <!-- start: TOP NAVIGATION MENU -->
          <ul class="nav navbar-right">
            <!-- start: USER DROPDOWN -->
            <li class="dropdown current-user">
              <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" data-close-others="true" href="#">
                <img src="assets/images/avatar-1-small.jpg" class="circle-img" alt="">
                <span class="username"><?php echo $_SESSION['username']; ?></span>
                <i class="clip-chevron-down"></i>
              </a>
              <ul class="dropdown-menu">
                <li>
                  <a href="include/processes.php?log_out=true">
                    <i class="clip-exit"></i>
                    &nbsp;Log Out
                  </a>
                </li>
              </ul>
            </li>
            <!-- end: USER DROPDOWN -->
          </ul>
          <!-- end: TOP NAVIGATION MENU -->
        </div>
      </div>
      <!-- end: TOP NAVIGATION CONTAINER -->
    </div>
    <!-- end: HEADER -->

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
          <li>
            <a href="add_store.php"><i class="clip-pencil"></i>
              <span class="title"> Add Store </span>
            </a>

          </li>
          <li>
            <a href="add_category.php"><i class="clip-pencil"></i>
              <span class="title"> Add Category </span><span class="selected"></span>
            </a>

          </li class="active open">
          <?php if($_SESSION['user_level'] == 1) { ?>
          <li>
            <a href="register.php">
              <i class="clip-user-2"></i>
              <span class="title"> Register User </span><span class="selected"></span>
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
              <h3>Add Category</h3>
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
                  <form role="form" class="form-horizontal" id="form" action"<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <div class="alert alert-success">
                      <?php  echo $New; ?>
                    </div>
                      <div class="form-group">
                          <label class="col-sm-2 control-label" for="form-field-1">
                              User Role
                            </label>
                            <div class="col-sm-9">
                            <select id="user_role" name="user_role" class="form-control" required>
                              <option value=""></option>
                              <option value="Company admin">Company admin</option>
                              <option value="Moderator">Moderator</option>
                              <option value="Company user">Company user</option>
                              
                            </select>
                              </div>
                       </div>       

                            
              <div class="form-group">
                      <label class="col-sm-2 control-label" for="form-field-1">
                        User name
                      </label>
                      <div class="col-sm-9">
                        <input type="text" placeholder="" id="user_name" name="user_name" class="form-control">
                      </div>
              </div>

              <div class="form-group">
                      <label class="col-sm-2 control-label" for="form-field-1">
                        Email address
                      </label>
                      <div class="col-sm-9">
                        <input type="text" placeholder="" id="email_address" name="email_address" class="form-control" value="<?php echo $_POST['email_address']; ?>">
                      </div>
              </div>

              <div class="form-group">
                      <label class="col-sm-2 control-label" for="form-field-1">
                        Password
                      </label>
                      <div class="col-sm-9">
                        <input type="password" placeholder="" id="pass1" name="pass1" class="form-control" value="<?php echo $_POST['pass1']; ?>">
                      </div>
              </div>
              
              <div class="form-group">
                      <label class="col-sm-2 control-label" for="form-field-1">
                        Repeat Password
                      </label>
                      <div class="col-sm-9">
                        <input type="password" placeholder="" id="pass2" name="pass2" class="form-control">
                      </div>
              </div>


              <div class="col-md-4" style="float:right;">
                        <button class="btn btn-yellow btn-block" type="submit" name="process"> 
                          Register <i class="fa fa-arrow-circle-right"></i>
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


</body>
</html>

