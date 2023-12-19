<?php 
session_start();
error_reporting(0);
include 'include/config.php';
$uid=$_SESSION['uid'];

if(isset($_POST['submit']))
{ 
$pid=$_POST['pid'];


$sql="INSERT INTO tblbooking (package_id,userid) Values(:pid,:uid)";

$query = $dbh -> prepare($sql);
$query->bindParam(':pid',$pid,PDO::PARAM_STR);
$query->bindParam(':uid',$uid,PDO::PARAM_STR);
$query -> execute();
echo "<script>alert('Package has been booked.');</script>";
echo "<script>window.location.href='booking-history.php'</script>";

}

?>
<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Gym Management System</title>
	<meta charset="UTF-8">
	<meta name="description" content="Ahana Yoga HTML Template">
	<meta name="keywords" content="yoga, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="css/nice-select.css"/>
	<link rel="stylesheet" href="css/magnific-popup.css"/>
	<link rel="stylesheet" href="css/slicknav.min.css"/>
	<link rel="stylesheet" href="css/animate.css"/>

	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="css/style.css"/>

</head>
<body>
	<!-- Page Preloder -->
	

	<!-- Header Section -->
	<?php include 'include/header.php';?>
	<!-- Header Section end -->

	

	                                                                              
	<!-- Page top Section -->
	<!-- <section class="page-top-section set-bg" data-setbg="img/page-top-bg.jpg">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 m-auto text-white">
					<h2>About GYM Management System</h2>
				</div>
			</div>
		</div>
	</section> -->



	<!-- Page top Section -->
	<section class="page-top-section set-bg" data-setbg="img/page-top-bg.jpg">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 m-auto text-white">
					<h2>About Us</h2>
					<p>Space for everyone to experiment with and explore the practice of yoga, with expert guidance.<br>The Yoga Studio offers a wide range of classes and workshops for practitioners of all levels, 
					whether you are looking to build a solid foundation or take your practice further.</p>
				</div>
			</div>
		</div>
	</section>
	<!-- Page top Section end -->

	<!-- Service Section -->
	<section class="service-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-sm-6">
					<div class="about-item icon-box">
						<div class="ai-icon">
							<img src="img/icons/about-1.png" alt="">
						</div>
						<div class="ai-text">
							<h4>Full Rejuvenation</h4>
							<p>Yoga can help tone and define your muscles, it burns calories, and it can help you relax and feel rejuvenated</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="about-item icon-box">
						<div class="ai-icon">
							<img src="img/icons/about-2.png" alt="">
						</div>
						<div class="ai-text">
							<h4>Extension of Spring</h4>
							<p>Springtime is here and known for its uplifting properties,not only in life but also in your yoga practice.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="about-item icon-box">
						<div class="ai-icon">
							<img src="img/icons/about-3.png" alt="">
						</div>
						<div class="ai-text">
							<h4>Against Aging</h4>
							<p>Yoga serves as a natural face-lift-it cleanes, relaxes, and restores</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="about-item icon-box">
						<div class="ai-icon">
							<img src="img/icons/about-4.png" alt="">
						</div>
						<div class="ai-text">
							<h4>Slim Body</h4>
							<p>Yoga can also help you burn calories, as well as increase your muscle mass and tone</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Service Section end -->

	<!-- What we do Section -->
	<section class="wwd-section spad set-bg" data-setbg="img/wwd-bg.jpg">
		<div class="container">
			<div class="row">
				<div class="col-xl-6 col-lg-7 ml-auto">
					<div class="wwd-text">
						<h3>What we do</h3>
						<p>To be invited to the nearest Cali center and get free physical advice to learn more about the program.</p>
						<div class="single-progress-item">
							<p>Breathing</p>
							<div class="progress-bar-style" data-progress="84"  data-bgcolor="#f76d63"></div>
						</div>
						<div class="single-progress-item">
							<p>Metabolism</p>
							<div class="progress-bar-style" data-progress="75"  data-bgcolor="#f76d63"></div>
						</div>
						<div class="single-progress-item">
							<p>Flexibility</p>
							<div class="progress-bar-style" data-progress="90"  data-bgcolor="#f76d63"></div>
						</div>
						<div class="single-progress-item">
							<p>Strongness</p>
							<div class="progress-bar-style" data-progress="78"  data-bgcolor="#f76d63"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- What we do Section end -->
	

	<!-- Footer Section -->
	<?php include 'include/footer.php'; ?>
	<!-- Footer Section end -->

	<div class="back-to-top"><img src="img/icons/up-arrow.png" alt=""></div>

	<!-- Search model end -->

	<!--====== Javascripts & Jquery ======-->
	<script src="js/vendor/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.slicknav.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.nice-select.min.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/main.js"></script>

	</body>
</html>
