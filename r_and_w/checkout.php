<!DOCTYPE html>
<html>
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">	

		<title>Checkout</title>	

		<meta name="keywords" content="HTML5 Template" />
		<meta name="description" content="Porto - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Favicon -->
		<link rel="shortcut icon" href="img/favicon.png" type="image/x-icon" />

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

			<div role="main" class="main shop checkout">

				<div class="container">

					<div class="row">
						<div class="col-md-12">
							<hr class="tall">
							<hr class="tall">
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
							<h2 class="m-b-xl"><strong>Checkout</strong></h2>
							<!--<p>Returning customer? <a href="shop-login.html">Click here to login.</a></p>-->
						</div>
					</div>

					<div class="row">
						<div class="col-md-9">
							<div class="col-md-12 single_product">
								<div class="col-md-2">
									<img class="img-responsive m-b-xl" src="img/product/side.jpg" height="300" alt="" >
								</div>
								<div class="col-md-10">
									<h4 class="mb-none"><strong>Chiken Mangosalva</strong></h4>
									<p class="price"><strong>Rs. 220</strong></p>
                                    <form enctype="multipart/form-data" method="post" class="cart">
                                        <div class="quantity">
                                            <input type="button" class="minus" value="-">
                                            <input type="text" class="input-text qty text" title="Qty" value="1" name="quantity" min="1" step="1">
                                            <input type="button" class="plus" value="+">
                                        </div>
                                    </form>
								</div>
							</div>
							<div class="col-md-12 shipping_address plr_none">
								<h3 class="">Shipping Address</h3>
								<form action="/" id="ShippingAddress" method="post">
												
									<div class="row">
										<div class="form-group">
											<div class="col-md-6">
												<label>First Name</label>
												<input type="text" value="" class="form-control">
											</div>
											<div class="col-md-6">
												<label>Last Name</label>
												<input type="text" value="" class="form-control">
											</div>
										</div>
									</div>
									<div class="row form-group">
										<div class="">
											<div class="col-md-4">
												<label>Pincode </label>
												<input type="text" value="" class="form-control">
											</div>
										</div>
										<div class="">
											<div class="col-md-4">
												<label>City </label>
												<input type="text" value="" class="form-control">
											</div>
										</div>
										<div class="">
											<div class="col-md-4">
												<label>State</label>
												<input type="text" value="" class="form-control">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="">
											<div class="col-md-12">
												<label>Address </label>
												<input type="text" value="" class="form-control">
												<label class="mb-none mt-sm"><input type="checkbox" name="" checked="" id="same_address"> Shipping Address Same as billing address </label>
											</div>
										</div>
									</div>
								</form>
							</div>
							<div class="col-md-12 billing_address plr_none">
								<h3 class="">Billing Address</h3>
								<form action="/" id="BillingAddress" method="post">
												
									<div class="row">
										<div class="form-group">
											<div class="col-md-6">
												<label>First Name</label>
												<input type="text" value="" class="form-control">
											</div>
											<div class="col-md-6">
												<label>Last Name</label>
												<input type="text" value="" class="form-control">
											</div>
										</div>
									</div>
									<div class="row form-group">
										<div class="">
											<div class="col-md-4">
												<label>Pincode </label>
												<input type="text" value="" class="form-control">
											</div>
										</div>
										<div class="">
											<div class="col-md-4">
												<label>City </label>
												<input type="text" value="" class="form-control">
											</div>
										</div>
										<div class="">
											<div class="col-md-4">
												<label>State</label>
												<input type="text" value="" class="form-control">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="">
											<div class="col-md-12">
												<label>Address </label>
												<input type="text" value="" class="form-control">
											</div>
										</div>
									</div>
								</form>
							</div>
							
							<div class="actions-continue">
								<input type="submit" value="Place Order" name="proceed" class="place_order">
							</div>

						</div>
						<div class="col-md-3">
							<h2 class="bold">Totals</h2>
							<table class="cart-totals">
								<tbody>
									<tr class="cart-subtotal">
										<th>
											<strong>Subtotal</strong>
										</th>
										<td>
											<strong><span class="amount">Rs. 431</span></strong>
										</td>
									</tr>
									<tr class="shipping">
										<th>
											Shipping
										</th>
										<td>
											Free Shipping<input type="hidden" value="free_shipping" id="shipping_method" name="shipping_method">
										</td>
									</tr>
									<tr class="shipping">
										<th>
											Discount
										</th>
										<td>
											10%
										</td>
									</tr>
									<tr class="total">
										<th>
											<strong>Order Total</strong>
										</th>
										<td>
											<strong><span class="amount">Rs. 431</span></strong>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>

				</div>

			</div>

			<div w3-include-html="footer.html"></div>
		</div>

		<!-- Vendor -->
		<script src="vendor/jquery/jquery.js"></script>
		<script src="vendor/jquery.appear/jquery.appear.js"></script>
		<script src="vendor/jquery.easing/jquery.easing.js"></script>
		<script src="vendor/jquery-cookie/jquery-cookie.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.js"></script>
		<script src="vendor/common/common.js"></script>
		<script src="vendor/jquery.validation/jquery.validation.js"></script>
		<script src="vendor/jquery.stellar/jquery.stellar.js"></script>
		<script src="vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.js"></script>
		<script src="vendor/jquery.gmap/jquery.gmap.js"></script>
		<script src="vendor/jquery.lazyload/jquery.lazyload.js"></script>
		<script src="vendor/isotope/jquery.isotope.js"></script>
		<script src="vendor/owl.carousel/owl.carousel.js"></script>
		<script src="vendor/magnific-popup/jquery.magnific-popup.js"></script>
		<script src="vendor/vide/vide.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="js/theme.js"></script>
		
		<!-- Theme Custom -->
		<script src="js/custom.js"></script>
		
		<!-- Theme Initialization Files -->
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
		<script>
			$(document).ready(function(){
				$('#same_address').change(function(){
				    if($(this).is(":checked")) {
				        $('.billing_address').hide();
				    } else {
				        $('.billing_address').show();
				    }
				});
			});
		</script>
	</body>
</html>
