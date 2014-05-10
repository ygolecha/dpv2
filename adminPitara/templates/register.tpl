~$HEADER`
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

          </li class="active open">
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
                  <form role="form" class="form-horizontal" id="form" action"~$processPage`" method="post">
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
                        <input type="text" placeholder="" id="email_address" name="email_address" class="form-control" value="">
                      </div>
              </div>

              <div class="form-group">
                      <label class="col-sm-2 control-label" for="form-field-1">
                        Password
                      </label>
                      <div class="col-sm-9">
                        <input type="password" placeholder="" id="pass1" name="pass1" class="form-control" value="">
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
    
  ~$FOOTER`


</body>
</html>

