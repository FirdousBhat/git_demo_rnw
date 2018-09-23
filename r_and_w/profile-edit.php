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
							<form name="profile_edit" method="POST">
								<div class="col-md-12 p_edit_form pn">
									<div class="col-md-4">
										<h5>Name</h5>
										<input type="text" name="name" id="name_pe" class="name" placeholder="Name please..">
									</div>
									<div class="col-md-4">
										<h5>Email</h5>
										<input type="text" name="email" id="email_pe" placeholder="Email please..">
									</div>
									<div class="col-md-4">
										<h5>Mobile</h5>
										<input type="text" name="mobile" id="mobile_pe" placeholder="Mobile please..">
									</div>
									<div class="clearfix mb-xlg"></div>
									<div class="col-md-4">
										<div class="sav_btn col-md-12">
											<a class="">Next</a>
										</div>
									</div>
								</div>
								<div class="col-md-12 otp" hidden="">
									<h5>Enter OTP</h5>
									<div class="col-md-3 pn">
										<input type="text" name="otp" id="otp_input" placeholder="OTP please..">
									</div>
									<div class="col-md-3">
										<p class="resend_otp">Resend OTP?</p>
									</div>
									<div class="clearfix mb-xlg"></div>
									<div class="col-md-3 pn back_btn">
										<a href="">Back</a>
									</div>
									<div class="col-md-3">
										<div class="col-md-12 sav_btn">
											<a class="">Submit</a>
										</div>
									</div>
								</div>
								<div class="clearfix mb-xlg"></div>
								<div class="col-md-4">
									<div id="err_msg"></div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php include ('footer.php') ?>

		<!-- Vendor -->
		<script src="vendor/jquery/jquery.js"></script>
		<!--<script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
		<script src="js/form-validation.js"></script>-->
		<script src="js/custom.js"></script>
		<script type="text/javascript">
      $(".sav_btn").click(function(){
        var otp=$('#otp_input').val();  

        if(otp == ''){
          $('#err_msg').html('<p style="color:red">Otp required</p>');
          $('#otp_input').focus();
          return false;
            }
        else{
          $('#err_msg').html('<p style="color:green">Details Updated</p>');
        }
      });
			$(".sav_btn").click(function(){
      			//$('#loader-image').show();
      	
		      	var name=$('#name_pe').val();  
		      	var email=$('#email_pe').val(); 
		      	var phone=$('#mobile_pe').val(); 
		      	var pattern = /^\d{10}$/;
		      	var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
      	
		      	if(name == ''){
					$('#err_msg').html('<p style="color:red">Name required</p>');
					$('#name_pe').focus();
					return false;
		      	}
		      	else if(email == ''){
					$('#err_msg').html('<p style="color:red">Email required</p>');
					$('#email_pe').focus();
					return false;
		      	}
		      	else if(!re.test(email)){
					$('#err_msg').html('<p style="color:red">Invalid email address</p>');
					$('#email_pe').focus();
					return false;
		      	}
		      	else if(phone == ''){
					$('#err_msg').html('<p style="color:red">Phone number required</p>');
					$('#mobile_pe').focus();
					return false;
		      	}
		      	else if(!pattern.test(phone)){
					$('#err_msg').html('<p style="color:red">Invalid Phone number</p>');
					$('#mobile_pe').focus();
					return false;
		      	}
		      	else {
					$('.p_edit_form').hide();
          			$('.otp').show();
          			$('#err_msg').hide();
					return false;
		      	}
		    });
		    $(".back_btn").click(function(){
		    	$('.otp').hide();
		    	$('.p_edit_form').show();
		    });
		</script>

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