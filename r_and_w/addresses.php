<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">	
		<title>Addresses</title>	
		<meta name="keywords" content="" />
		<meta name="description" content="">
		<meta name="author" content="okler.net">
		<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
		<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
		<link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.css">
		<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="css/theme.css">
		<link rel="stylesheet" href="css/theme-elements.css">
		<link rel="stylesheet" href="css/custom.css">
	</head>
	<body>
		<div class="body">
			<?php include ('header.php') ?>
			<div role="main" class="main addresses">
				<div class="container">
					<div class="col-md-12 profile_main_block">
						<?php include ('profile-menu.php') ?>
						<div class="col-md-9 mt-xlg">
							<h3>Your <strong>Addresses</strong></h3>
							<div class="row">
								<div class="col-md-6">
									<div class="col-md-12 block">
										<h4>Faizan</h4>
										<p>7411769394</p>
										<p><span class="text_address">JMS main road, kanoon goyaan</span>, <span class="city">Barabanki</span></p>
										<p><span class="state">Uttar Pradesh</span>, <span class="zip">225001</span></p>
										<p><i class="fa fa-pencil edit"></i></p>
									</div>
								</div>
								<div class="col-md-6">
									<div class="col-md-12 block">
										<h4>Faizan</h4>
										<p>7411769394</p>
										<p>JMS main road, kanoon goyaan, Barabanki</p>
										<p>Uttar Pradesh, 225001</p>
										<p><i class="fa fa-pencil edit"></i></p>
									</div>
								</div>
							</div>
							<div class="col-md-12 pn">
								<p class="add_address" data-toggle="modal" data-target="#add_address">Add Address</p>
							</div>
							<div class="col-md-12 mt-xlg mb-xlg"></div>
						</div>
					</div>

				</div>

			</div>

			<?php include ('footer.php')?>
		</div>

		<!-- Vendor -->
		<script src="vendor/jquery/jquery.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.js"></script>
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
		 <!-- Modal -->
		<div id="add_address" class="modal fade" role="dialog">
		    <div class="modal-dialog">
		        <!-- Modal content-->
		        <div class="modal-content">
		            <div class="modal-header">
		                <button type="button" class="close" data-dismiss="modal">&times;</button>
		                <h4 class="modal-title">Modal Header</h4>
		            </div>
		            <div class="modal-body">
		                <form>
		                	<div class="col-md-6">
		                		<input type="text" name="" placeholder="Name">
		                	</div>
		                	<div class="col-md-6">
		                		<input type="text" name="" placeholder="Mobile">
		                	</div>
		                	<div class="col-md-4">
		                		<input type="text" name="" placeholder="city">
		                	</div>
		                	<div class="col-md-4">
		                		<input type="text" name="" placeholder="District">
		                	</div>
		                	<div class="col-md-4">
		                		<input type="text" name="" placeholder="Zipcode">
		                	</div>
		                	<div class="col-md-12">
		                		<input type="text" name="" placeholder="Full address">
		                	</div>
		                </form>
		            </div>
		            <div class="modal-footer">
		                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		            </div>
		        </div>
		    </div>
		</div>

	</body>
</html>
