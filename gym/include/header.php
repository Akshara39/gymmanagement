	<header class="header-section">
		<div class="header-top">
			<div class="row m-0">
				<div class="col-md-6 d-none d-md-block p-0">

				</div>
				<div class="col-md-6 text-left text-md-right p-0">
                 <?php if(strlen($_SESSION['uid'])==0): ?>
					<div class="header-info d-none d-md-inline-flex">
						<i class="material-icons">account_circle</i>
						<a href="login.php"><p>Login</p></a>
					</div>
					<?php else :?>
					<div class="header-info d-none d-md-inline-flex">
						<i class="material-icons">account_circle</i>
						<a href="profile.php"><p>My Profile</p></a>
					</div>
					<div class="header-info d-none d-md-inline-flex">
						<i class="material-icons">brightness_7</i>
						<a href="changepassword.php"><p>Change Password</p></a>
					</div>
					<div class="header-info d-none d-md-inline-flex">
						<i class="material-icons">logout</i>
						<a href="logout.php"><p>Logout</p></a>
					</div>
					
					<?php endif;?>
				</div>
			</div>
		</div>
		<div class="header-bottom">
			<a href="index.php" class="site-logo" style="color:#fff; font-weight:bold; font-size:35px;">
				Aahana<br />
				<!-- <small style="margin-top:-4%;">Aahana</small> -->
			</a>
			
			<div class="container">
				<ul class="main-menu">
					<li><a href="index.php" class="active">Home</a></li>
					<li><a href="about.php">About</a></li>
					<li><a href="classes.php">Classes</a>
						<ul class="sub-menu">
							<li><a href="classes.php">Our Claasses</a></li>
							<li><a href="classes-details.php">Claasses Details</a></li>
						</ul>
					</li>
					<li><a href="trainer.php">trainers</a>
						<ul class="sub-menu">
							<li><a href="trainer.php">Our Trainers</a></li>
							<li><a href="trainer-details.php">Trainers Details</a></li>
						</ul>
					</li>
					<li><a href="blog.php">Blog</a>
						<ul class="sub-menu">
							<li><a href="blog.php">Our Blog</a></li>
							<li><a href="single-blog.php">Blog Details</a></li>
						</ul>
					</li>
					<li><a href="contact.php">Contact</a></li>
					<!-- <li><a href="login.php">Login</a></li> -->
			
		

				
					
					<?php if(strlen($_SESSION['uid'])==0): ?>
			<li><a href="admin/">Admin</a></li>
					<?php else :?>
						<li><a href="booking-history.php">Booking History</a></li>
						<?php endif;?>
				</ul>
			</div>
		</div>
	</header>