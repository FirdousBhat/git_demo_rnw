<!DOCTYPE html>
<html>
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">	

		<title>Profile</title>	

		<meta name="keywords" content="HTML5 Template" />
		<meta name="description" content="Porto - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Favicon -->
		<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
		<link rel="apple-touch-icon" href="img/apple-touch-icon.png">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<!-- Web Fonts  -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.css">
		<link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.css">
		<link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.min.css">
		<link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.css">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="css/theme.css">
		<link rel="stylesheet" href="css/theme-elements.css">
		<link rel="stylesheet" href="css/theme-blog.css">
		<link rel="stylesheet" href="css/theme-shop.css">
		<link rel="stylesheet" href="css/theme-animate.css">

		<!-- Skin CSS -->
		<link rel="stylesheet" href="css/skins/default.css">

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="css/custom.css">

		<!-- Head Libs -->
		<script src="vendor/modernizr/modernizr.js"></script>

	</head>
	<body>

		<div class="body">
			<?php include ('header.php') ?>
			<div role="main" class="main shop profile">

				<div class="container">
					<div class="col-md-12 profile_main_block">
						<div class="col-md-3 mt-xlg profile_menu">
							<ul>
								<a href="orders.php"><li>Orders</li></a>
								<a href="profile.php"><li class="active">Profile</li></a>
								<a href="addresses.php"><li>Addresses</li></a>
							</ul>
						</div>
						<div class="col-md-9 mt-xlg">
							<div class="col-md-4">
								<h5>Name</h5>
								<h4>Faizan Siddqui</h4>
							</div>
							<div class="col-md-4">
								<h5>Email</h5>
								<h4>khanfaizsid@gmail.com</h4>
							</div>
							<div class="clearfix mb-sm"></div>
							<div class="col-md-4">
								<h5>Mobile</h5>
								<h4>7411769394</h4>
							</div>
							<div class="clearfix mb-md"></div>
							<div class="col-md-4 ">
								<a href="profile-edit.php">
									<div class="col-md-12 sav_btn">
										Edit
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php include ('footer.php') ?>

		<!-- Vendor -->
		<script src="vendor/jquery/jquery.js"></script>
		<script src="js/theme.js"></script>
		<script src="js/custom.js"></script>
		<script src="js/theme.init.js"></script>

		<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		
			ga('create', 'UA-12345678-1', 'auto');
			ga('send', 'pageview');
		</script>
		 -->

	</body>
</html>