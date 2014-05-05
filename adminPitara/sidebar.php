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
							<a href="#"><i class="clip-pencil"></i>
								<span class="title"> Add Deals </span>
							</a>
							
						</li>
						<li>
							<a href="#"><i class="clip-pencil"></i>
								<span class="title"> Edit Deals </span>
							</a>
							
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