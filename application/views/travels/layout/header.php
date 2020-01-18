<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Tour Template</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />
	<!-- <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet"> -->
	<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/animate.css');?>">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/icomoon.css');?>">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css');?>">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/magnific-popup.css');?>">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/flexslider.css');?>">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/owl.carousel.min.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/owl.theme.default.min.css');?>">
	
	<!-- Date Picker -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-datepicker.css');?>">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="<?php echo base_url('assets/fonts/flaticon/font/flaticon.css');?>">

	<!-- Theme style  -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/style.css');?>">

	<!-- Modernizr JS -->
	<script src="<?php echo base_url('assets/js/modernizr-2.6.2.min.js');?>"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="colorlib-loader"></div>

	<div id="page">
		<nav class="colorlib-nav" role="navigation">
			<div class="top-menu">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-2">
							<div id="colorlib-logo"><a href="<?php echo base_url('index');?>">Tour</a></div>
						</div>
						<div class="col-xs-10 text-right menu-1">
							<ul>
								<li class="active"><a href="<?php echo base_url('index');?>">Home</a></li>
								<li class="has-dropdown">
									<a href="<?php echo base_url('tours');?>">Tours</a>
									<ul class="dropdown">
										<li><a href="<?php echo base_url()?>Travel/card">Tour</a></li>
										<!-- <li><a href="#">Cruises</a></li> -->
										<li><a href="#">Hotels</a></li>
										<!-- <li><a href="#">Booking</a></li> -->
									</ul>
								</li>
								<li><a href="<?php echo base_url('hotels');?>">Hotels</a></li>
								<li><a href="<?php echo base_url('services');?>">Services</a></li>
								<li><a href="<?php echo base_url('blog');?>">Blog</a></li>
								<li><a href="<?php echo base_url('about');?>">About</a></li>
								<li><a href="<?php echo base_url('contact');?>">Contact</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>
	