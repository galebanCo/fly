<?php
require_once(dirname(__FILE__).DIRECTORY_SEPARATOR.'/elements/constants.php');
$BASE_THEME = BASE_THEME[array_rand(BASE_THEME)];
?>
<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="codepixer">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title><?php echo APP_NAME; ?></title>

	<link href="https://fonts.googleapis.com/css?family=Poppins:400,600|Roboto:400,400i,500" rel="stylesheet">
	<!--
			CSS
			============================================= -->
	<link rel="stylesheet" href="css/linearicons.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/nice-select.css">
	<link rel="stylesheet" href="css/hexagons.min.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/extends.css">
</head>

<body class="<?php echo $BASE_THEME; ?>">

	<!-- start banner Area -->
	<section class="home-banner-area">
		<div class="container">
			<div class="row fullscreen d-flex align-items-center justify-content-between">
				<div class="home-banner-content col-lg-6 col-md-7">
					<h1>
						A <span class="highlight">Better</span> Way <br> to Meet People
					</h1>
					<p class="subtitle">We are creating a magical app to help you connect with real people in the same life stage as you. People who share your interests and live nearby.<br>Best of all, it's free.</p>
					<p class="early-access highlight">Now in beta</p>
					<div class="form-container">
						<?php include("beta-join.php"); ?>
					<div class="download-button d-flex flex-row justify-content-start">
						<p class="founding-member-benefit">Founding members get unlimited access to all features during beta and 50% of all features for the first year after launch.</p>
						<p class="app-device">Initially on iOS, Android soon after</p>
					</div>
				</div>
				</div>
				<div class="banner-img col-lg-4 col-md-5">
					<img class="img-fluid" src="img/banner-img.png" alt="">
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->

	<!-- Start about Area -->
	<section class="about-area">
		<div class="container">
			<!-- Find People Who Like What You like -->
			<div class="row align-items-center">
				<div class="col-lg-6 home-about-left">
					<img class="img-fluid" src="img/friend-3.jpg" srcset="img/friend-3@2x.jpg 2x" alt="">
				</div>
				<div class="offset-lg-1 col-lg-5 home-about-right">
					<h2 class="subtitle">
						Find People Who <br>
						Like What You like
					</h2>
					<p>
						Set your profile to show what kinds of interests you have,
						based on that you can see people who share those interests.
						Set your location. While your location will never be made public,
						it will be used to help find friends near you.
					</p>
				</div>
			</div>
			<!-- Only Connect With People You Are Interested In -->
			<div class="row reverse align-items-center">
				<div class="col-lg-5 offset-rt-lg-1 home-about-right home-about-right2">
					<h2 class="subtitle">
						Only Connect<br>
						With People You <br>
						Are Interested In
					</h2>
					<p>
						Look through profiles of people near you. Swipe left if you find someone you want to connect with.
						If they swipe left as well, you are both free to send each other messages.
						Getting inappropriate messsages? Flag that person for review.
					</p>
				</div>
				<div class="col-lg-6 home-about-left">
					<img class="img-fluid" src="img/friend-1.jpg" srcset="img/friend-1@2x.jpg 2x" alt="">
				</div>
			</div>
				<!-- Find People Who Like What You like -->
			<div class="row align-items-center">
				<div class="col-lg-6 home-about-left">
					<img class="img-fluid" src="img/friend-5.jpg" srcset="img/friend-5@2x.jpg 2x" alt="">
				</div>
				<div class="offset-lg-1 col-lg-5 home-about-right">
					<h2 class="subtitle">
						No more dealing<br>
						with fake identities
					</h2>
					<p>
						The internet is an easy place for people to create fake identities,
						we don't want to talk to these people and we know you don't either.<br>
						We use multiple verification methods to ensure everyone you
						talk to is real and will continue to improve our verfication methods.
					</p>
				</div>
			</div>
		</div>
	</section>
	<!-- End about Area -->

	<!-- Start Footer Area -->
	<footer class="footer-area section-gap">
		<div class="container">
			<div class="row">
				<?php include("beta-join.php"); ?>
			</div>
			<div class="footer-bottom row align-items-center">
				<p class="footer-text m-0 pl-0 col-lg-6 col-md-12"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
			</div>
		</div>
	</footer>
	<!-- End Footer Area -->

	<script src="js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
	 crossorigin="anonymous"></script>
	<!-- <script src="js/tilt.jquery.min.js"></script> -->
	<script src="js/vendor/bootstrap.min.js"></script>
	<!-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script> -->
	<!-- <script src="js/easing.min.js"></script> -->
	<!-- <script src="js/hoverIntent.js"></script> -->
	<!-- <script src="js/superfish.min.js"></script> -->
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<!-- <script src="js/jquery.magnific-popup.min.js"></script> -->
	<!-- <script src="js/owl.carousel.min.js"></script>
	<script src="js/owl-carousel-thumb.min.js"></script> -->
	<!-- <script src="js/hexagons.min.js"></script> -->
	<!-- <script src="js/jquery.nice-select.min.js"></script> -->
	<!-- <script src="js/waypoints.min.js"></script> -->
	<!-- <script src="js/mail-script.js"></script> -->
	<script src="js/main.js"></script>
</body>

</html>
