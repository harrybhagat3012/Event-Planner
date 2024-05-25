<?php

//session_start();


?>

<header>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<nav class="navbar navbar-expand-lg navbar-light navigation">
					<a class="navbar-brand" href="dashboard.html">
						<h1 style="color: darkblue; background-color: lightgrey;">Event Planners</h1>
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav ml-auto main-nav ">
							<li class="nav-item @@home">
								<a class="nav-link" href="dashboard.php">Home</a>
							</li>
						
							<li class="nav-item dropdown dropdown-slide @@pages">
								<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Service <span><i class="fa fa-angle-down"></i></span>
								</a>
								<!-- Dropdown list -->
								<ul class="dropdown-menu">
									<!-- <li><a class="dropdown-item @@profile" href="viewservice.php">View Services</a></li>
									<li><a class="dropdown-item @@profile" href="accept_request.php">View Accept Services</a></li>-->
									<li><a class="dropdown-item @@singlePage" href="add_post.php">Add Event</a></li>
									<li><a class="dropdown-item @@package" href="feedback.php">Feedback</a></li>

									
								</ul>
							</li>
							<li class="nav-item dropdown dropdown-slide @@listing">
								<a class="nav-link dropdown-toggle" href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Help <span><i class="fa fa-angle-down"></i></span>
								</a>
								<!-- Dropdown list -->
								<ul class="dropdown-menu">
									<li><a class="dropdown-item @@category" href="about_us.php">About Us</a></li>
									<li><a class="dropdown-item @@listView" href="contact_us.php">Contact Us</a></li>
									<li><a class="dropdown-item @@terms" href="terms-condition.php">Terms &amp; Conditions</a></li>
									
								</ul>
							</li>

								<li class="nav-item dropdown dropdown-slide @@dashboard">
								<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#!">My Account<span><i class="fa fa-angle-down"></i></span>
								</a>

								<!-- Dropdown list -->
								<ul class="dropdown-menu">
									<li><a class="dropdown-item @@dashboardMyAds" href="view_order.php">View Orders</a></li>
									<li><a class="dropdown-item @@dashboardMyAds" href="profile.php">Edit Profile</a></li>
									
									<li><a class="dropdown-item @@dashboardArchivedAds" href="change_password.php">Change Password</a></li>

									<li><a class="dropdown-item @@terms" href="logout.php">Logout</a></li>
									
								</ul>
							</li>
						</ul>
						<ul class="navbar-nav ml-auto mt-10">
							<li class="nav-item">
							<?php
                           if(isset($_SESSION['id']))
                           {
                            ?>
                            <a class="nav-link login-button" href="logout.php"class="btn-common">Logout</a>
                           <?php
                           }
                           else
                           {
                            ?>
                              <a class="nav-link login-button" href="login.php"class="btn-common">Login</a>
                           <?php
                        }
                           ?>
							</li>
							<li class="nav-item">
								<a class="nav-link login-button" href="add_post.php">Add Event</a>
							</li>
							
						</ul>
					</div>
				</nav>
			</div>
		</div>
	</div>
</header>