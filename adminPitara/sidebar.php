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
							<a href="index.html"><i class="clip-home-3"></i>
								<span class="title"> Dashboard </span><span class="selected"></span>
							</a>
						</li>
						<li>
							<a href="javascript:void(0)"><i class="clip-screen"></i>
								<span class="title"> Deals </span><i class="icon-arrow"></i>
								<span class="selected"></span>
							</a>
							<ul class="sub-menu">
								<li>
									<a href="#">
										<span class="title"> ADD </span>
									</a>
								</li>
								<li>
									<a href="#">
										<span class="title"> EDIT </span>
									</a>
								</li>
								
							</ul>
						</li>
                        <?php if($_SESSION['user_level'] == 1) { ?>
						<li>
							<a href="#">
								<i class="clip-user-2"></i><span class="title"> Register User </span>
							</a>
					    </li>
					    <?php } ?>
						
					</ul>
					<!-- end: MAIN NAVIGATION MENU -->
				</div>
				<!-- end: SIDEBAR -->
			</div>