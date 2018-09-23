<?php require_once('functions/config.php');?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">	

		<title>Humbre | Go Spicy</title>	

		<meta name="keywords" content="HTML5 Template" />
		<meta name="description" content="Porto - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Favicon -->
		<link rel="shortcut icon" href="img/favicon.png" type="image/x-icon" />
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

		<link rel="stylesheet" href="css/theme.css">
		<link rel="stylesheet" href="css/theme-elements.css">
		<link rel="stylesheet" href="css/theme-blog.css">
		<link rel="stylesheet" href="css/theme-shop.css">
		<link rel="stylesheet" href="css/theme-animate.css">

		<link rel="stylesheet" href="vendor/rs-plugin/css/settings.css" media="screen">
		<link rel="stylesheet" href="vendor/rs-plugin/css/layers.css" media="screen">
		<link rel="stylesheet" href="vendor/rs-plugin/css/navigation.css" media="screen">
		<link rel="stylesheet" href="vendor/circle-flip-slideshow/css/component.css" media="screen">

		<link rel="stylesheet" href="css/skins/default.css">
		<link rel="stylesheet" href="css/custom.css">
		<script src="vendor/modernizr/modernizr.js"></script>
        <style>
            
        </style>
    <script src="vendor/jquery/jquery.js"></script>
	</head>
	<body>
		<div class="body home_page">       
		<?php include ('header.php') ?>
			<div role="main" class="main"> 
				<div class="slider-container rev_slider_wrapper" style="height: 700px;">
					<div id="revolutionSlider" class="slider rev_slider" data-plugin-revolution-slider data-plugin-options='{"gridwidth": 800, "gridheight": 370,"autoplay": false}'>
						<ul>
							<li data-transition="fade">
								<img src="img/slider/slider1.jpg"  
									alt=""
									data-bgposition="center center" 
									data-bgfit="cover" 
									data-bgrepeat="no-repeat" 
									class="rev-slidebg">

								<div class="tp-caption"
									data-x="center" data-hoffset="-550"
									data-y="center" data-voffset="-95"
									data-start="1000"
									style="z-index: 5"
									data-transform_in="x:[-300%];opacity:0;s:500;"><img src="img/slides/slide-title-border.png" alt=""></div>

								<div class="tp-caption top-label"
									data-x="center" data-hoffset="-400"
									data-y="center" data-voffset="-95"
									data-start="500"
									style="z-index: 5"
									data-transform_in="y:[-300%];opacity:0;s:500;">Need a tasty meat?</div>

								<div class="tp-caption"
									data-x="center" data-hoffset="-250"
									data-y="center" data-voffset="-95"
									data-start="1000"
									style="z-index: 5"
									data-transform_in="x:[300%];opacity:0;s:500;"><img src="img/slides/slide-title-border.png" alt=""></div>

								<div class="tp-caption main-label"
									data-x="center" data-hoffset="-315"
									data-y="center" data-voffset="-45"
									data-start="1500"
									data-whitespace="nowrap"						 
									data-transform_in="y:[100%];s:500;"
									data-transform_out="opacity:0;s:500;"
									style="z-index: 5"
									data-mask_in="x:0px;y:0px;">Daily Fresh Cuts</div>

								<div class="tp-caption bottom-label"
									data-x="center" data-hoffset="-405"
									data-y="center" data-voffset="15"
									data-start="2000"
									style="z-index: 5"
									data-transform_in="y:[100%];opacity:0;s:500;">Check out our options and features.</div>

								<a class="tp-caption btn btn-lg btn_primary btn-slider-action"
									data-hash
									data-hash-offset="85"
									href="#home-intro"
									data-x="center" data-hoffset="-450"
									data-y="center" data-voffset="80"
									data-start="2200"
									data-whitespace="nowrap"						 
									data-transform_in="y:[100%];s:500;"
									data-transform_out="opacity:0;s:500;"
									style="z-index: 5"
									data-mask_in="x:0px;y:0px;">Get Started Now!</a>
								
							</li>
							<li data-transition="fade">
								<img src="img/slider/slider2.jpg"  
									alt=""
									data-bgposition="center center" 
									data-bgfit="cover" 
									data-bgrepeat="no-repeat" 
									class="rev-slidebg">
							</li>
							<li data-transition="fade">
								<img src="img/slider/goat-meat-banner.jpg"  
									alt=""
									data-bgposition="center center" 
									data-bgfit="cover" 
									data-bgrepeat="no-repeat" 
									class="rev-slidebg">
							</li>
						</ul>
					</div>
				</div>
                <div class="container">
                    <div class="col-sm-12 plr_none cat_slider">
                        <h2 class="lined"><span>Best <strong>Servings</strong></span></h2>
                        <div class="row">
                            <div class="" data-plugin-options='{"delegate": "a", "type": "image", "gallery": {"enabled": true}, "mainClass": "mfp-with-zoom", "zoom": {"enabled": true, "duration": 300}}'>
                                <div class="owl-carousel owl-theme stage-margin" data-plugin-options='{"items": 4, "margin": 20, "loop": true, "nav": true, "dots": false, "stagePadding": 15}'>
                                    <div class="">
                                        <div>
                                        	<a href="product.php"><img class="img-responsive" src="https://firebasestorage.googleapis.com/v0/b/gofresh-916c2.appspot.com/o/product%2FChiken%2Fchicken_breast.jpg?alt=media&token=f53d0308-fc79-408f-84ce-2666a3f101e8" alt=""></a>
                                        </div>
                                        <div class="col-sm-12 content">
                                            <h4><a href="product.php">Sabroso Chiken</a></h4>
                                            <p class="desc">Skinless, bone-in, juicy meat from the lower leg with a unique flavour.</p>
                                            <p class="item_weight">
                                            	<span class="net_weight"><strong>Net wt:</strong> 500gm </span>
                                            	<!--<span class="gross_weight"><strong>Gross:</strong> 600gm</span>-->
                                            	<span class="price"><strong>Rs.</strong> <span class="sale_price"> 109 </span> <span class="actual_price"><strike>140</strike></span></span>
                                            </p>
                                            <div class="row">
	                                            <div class="col-md-6 bynow">
		                                        	<button>Buy Now</button>
		                                        </div>
		                                        <div class="col-md-6 cart">
		                                        	<button>Add to Cart</button>
		                                        </div>
	                                        </div>
                                        </div>
                                        
                                    </div>
                                    <div>
                                        <a href="product.php"><img class="img-responsive" src="https://firebasestorage.googleapis.com/v0/b/gofresh-916c2.appspot.com/o/product%2FMutton%2Fgoat_lambleg.jpg?alt=media&token=c7f64288-7fb7-4ab3-88ff-8127a8193999" alt="Project Image"></a>
                                        <div class="content">
                                            <h4><a href="product.php">Mutton Zelista</a></h4>
                                            <p class="desc">Skinless, bone-in, juicy meat from the lower leg with a unique flavour.</p>
                                            <p class="item_weight">
                                            	<span class="net_weight"><strong>Net wt:</strong> 500gm </span>
                                            	<!--<span class="gross_weight"><strong>Gross:</strong> 600gm</span>-->
                                            	<span class="price"><strong>Rs.</strong> <span class="sale_price"> 109 </span> <span class="actual_price"><strike>140</strike></span></span>
                                            </p>
                                            <div class="row">
	                                            <div class="col-md-6 bynow">
		                                        	<button>Buy Now</button>
		                                        </div>
		                                        <div class="col-md-6 cart">
		                                        	<button>Add to Cart</button>
		                                        </div>
	                                        </div>
                                        </div>
                                    </div>
                                    <div>
                                        <a href="product.php"><img class="img-responsive" src="img/home/exotic_rabbit.jpg" alt="Project Image"></a>
                                        <div class="content">
                                            <h4><a href="product.php">Rabbit Khorza</a></h4>
                                            <p class="desc">Skinless, bone-in, juicy meat from the lower leg with a unique flavour.</p>
                                            <p class="item_weight">
                                            	<span class="net_weight"><strong>Net wt:</strong> 500gm </span>
                                            	<!--<span class="gross_weight"><strong>Gross:</strong> 600gm</span>-->
                                            	<span class="price"><strong>Rs.</strong> <span class="sale_price"> 109 </span> <span class="actual_price"><strike>140</strike></span></span>
                                            </p>
                                            <div class="row">
	                                            <div class="col-md-6 bynow">
		                                        	<button>Buy Now</button>
		                                        </div>
		                                        <div class="col-md-6 cart">
		                                        	<button>Add to Cart</button>
		                                        </div>
	                                        </div>
                                        </div>
                                    </div>
                                    <div>
                                        <a href="product.php"><img class="img-responsive" src="img/home/bd2.jpg" alt="Project Image"></a>
                                        <div class="content">
                                            <h4><a href="product.php">Fish Freshness</a></h4>
                                            <p class="desc">Skinless, bone-in, juicy meat from the lower leg with a unique flavour.</p>
                                            <p class="item_weight">
                                            	<span class="net_weight"><strong>Net wt:</strong> 500gm </span>
                                            	<!--<span class="gross_weight"><strong>Gross:</strong> 600gm</span>-->
                                            	<span class="price"><strong>Rs.</strong> <span class="sale_price"> 109 </span> <span class="actual_price"><strike>140</strike></span></span>
                                            </p>
                                            <div class="row">
	                                            <div class="col-md-6 bynow">
		                                        	<button>Buy Now</button>
		                                        </div>
		                                        <div class="col-md-6 cart">
		                                        	<button>Add to Cart</button>
		                                        </div>
	                                        </div>
                                        </div>
                                    </div>
                                    <div>
                                        <img class="img-responsive" src="img/home/country_eggs.jpg" alt="Project Image">
                                        <div class="content">
                                            <h4>Country Eggs</h4>
                                            <p class="desc">Skinless, bone-in, juicy meat from the lower leg with a unique flavour.</p>
                                            <p class="item_weight">
                                            	<span class="net_weight"><strong>Net wt:</strong> 500gm </span>
                                            	<!--<span class="gross_weight"><strong>Gross:</strong> 600gm</span>-->
                                            	<span class="price"><strong>Rs.</strong> <span class="sale_price"> 109 </span> <span class="actual_price"><strike>140</strike></span></span>
                                            </p>
                                            <div class="row">
	                                            <div class="col-md-6 bynow">
		                                        	<button>Buy Now</button>
		                                        </div>
		                                        <div class="col-md-6 cart">
		                                        	<button>Add to Cart</button>
		                                        </div>
	                                        </div>
                                        </div>
                                    </div>
                                    <div>
                                        <img class="img-responsive" src="img/home/chicken_drumstick.jpg" alt="Project Image">
                                        <div class="content">
                                            <h4>Chiken Drumstick</h4>
                                            <p class="desc">Skinless, bone-in, juicy meat from the lower leg with a unique flavour.</p>
                                            <p class="item_weight">
                                            	<span class="net_weight"><strong>Net wt:</strong> 500gm </span>
                                            	<!--<span class="gross_weight"><strong>Gross:</strong> 600gm</span>-->
                                            	<span class="price"><strong>Rs.</strong> <span class="sale_price"> 109 </span> <span class="actual_price"><strike>140</strike></span></span>
                                            </p>
                                            <div class="row">
	                                            <div class="col-md-6 bynow">
		                                        	<button>Buy Now</button>
		                                        </div>
		                                        <div class="col-md-6 cart">
		                                        	<button>Add to Cart</button>
		                                        </div>
	                                        </div>
                                        </div>
                                    </div>
                                    <div>
                                        <img class="img-responsive" src="img/home/goat_lambleg.jpg" alt="Project Image">
                                        <div class="content">
                                            <h4>Lambleg</h4>
                                            <p class="desc">Skinless, bone-in, juicy meat from the lower leg with a unique flavour.</p>
                                            <p class="item_weight">
                                            	<span class="net_weight"><strong>Net wt:</strong> 500gm </span>
                                            	<!--<span class="gross_weight"><strong>Gross:</strong> 600gm</span>-->
                                            	<span class="price"><strong>Rs.</strong> <span class="sale_price"> 109 </span> <span class="actual_price"><strike>140</strike></span></span>
                                            </p>
                                            <div class="row">
	                                            <div class="col-md-6 bynow">
		                                        	<button>Buy Now</button>
		                                        </div>
		                                        <div class="col-md-6 cart">
		                                        	<button>Add to Cart</button>
		                                        </div>
	                                        </div>
                                        </div>
                                    </div>
                                    <div>
                                        <img class="img-responsive" src="img/home/bd3.jpg" alt="Project Image">
                                        <div class="content">
                                            <h4>Chiken Yum</h4>
                                            <p class="desc">Skinless, bone-in, juicy meat from the lower leg with a unique flavour.</p>
                                            <p class="item_weight">
                                            	<span class="net_weight"><strong>Net wt:</strong> 500gm </span>
                                            	<!--<span class="gross_weight"><strong>Gross:</strong> 600gm</span>-->
                                            	<span class="price"><strong>Rs.</strong> <span class="sale_price"> 109 </span> <span class="actual_price"><strike>140</strike></span></span>
                                            </p>
                                            <div class="row">
	                                            <div class="col-md-6 bynow">
		                                        	<button>Buy Now</button>
		                                        </div>
		                                        <div class="col-md-6 cart">
		                                        	<button>Add to Cart</button>
		                                        </div>
	                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 plr_none all_categories">
                    <div class="container">
                    <h2 class="lined"><span>Reached <strong>Categories</strong></span></h2>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="img-thumbnail">
                                    <img class="img-responsive" src="img/home/goat_lambleg.jpg" alt="Project Image">
                                    <h4>Mutton</h4>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="img-thumbnail">
                                    <img class="img-responsive" src="img/home/bd2.jpg" alt="Project Image">
                                    <h4>Fish</h4>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="img-thumbnail">
                                    <img class="img-responsive" src="img/home/country_eggs.jpg" alt="Project Image">
                                    <h4>Eggs</h4>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="img-thumbnail">
                                    <img class="img-responsive" src="img/home/exotic_prawns.jpg" alt="Project Image">
                                    <h4>Prawns</h4>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-xl">
                            <div class="col-md-3">
                                <div class="img-thumbnail">
                                    <img class="img-responsive" src="img/home/chicken_drumstick.jpg" alt="Project Image">
                                </div>
                                <h4>Chiken</h4>
                            </div>
                            <div class="col-md-3">
                                <div class="img-thumbnail">
                                    <img class="img-responsive" src="img/home/goat_curry.jpg" alt="Project Image">
                                </div>
                                <h4>Marinades</h4>
                            </div>
                            <div class="col-md-3">
                                <div class="img-thumbnail">
                                    <img class="img-responsive" src="img/home/chicken_breast.jpg" alt="Project Image">
                                </div>
                                <h4>Exotic Meals</h4>
                            </div>
                            <div class="col-md-3">
                                <div class="img-thumbnail">
                                    <img class="img-responsive" src="img/home/goat_mince.jpg" alt="Project Image">
                                </div>
                                <h4>Mince</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
				<section class="section sec1 section-center section-no-border mt-none p-sm hidden" id="demos">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<ul class="nav nav-pills sort-source sort-source-style-2" data-sort-id="portfolio" data-option-key="filter">
									<li data-option-value="*" class="active"><a href="#">All Deals</a></li>
									<li data-option-value=".best_deals"><a href="#">Trending</a></li>
									<li data-option-value=".chicken"><a href="#">Chicken</a></li>
									<li data-option-value=".red_meat"><a href="#">Red Meat</a></li>
									<li data-option-value=".fish_seafood"><a href="#">Fish & Seafood</a></li>
									<li data-option-value=".eggs"><a href="#">Eggs</a></li>
									<li data-option-value=".exotic_meals"><a href="#">Exotic Meals</a></li>
								</ul>
							</div>
						</div>
					</div>
				</section>
				<div class="container hidden">
				<ul class="portfolio-list sort-destination full-width-spaced mb-xl" data-sort-id="portfolio" id="homeOverview">
					<li class="col-md-4 col-sm-6 col-xs-12 isotope-item best_deals">
						<div class="portfolio-item center">
							<a href="index-classic.html" class="text-decoration-none block-link pt-md">
								<span class="thumb-info thumb-info-preview thumb-info-preview-long mb-md">
									<span class="thumb-info-wrapper">
										<span class="thumb-info-image" data-original="img/home/bd1.jpg" data-plugin-lazyload></span>
									</span>
								</span>
								<h5 class="mb-xs">Pabda/Butterfish (Whole - Cleaned)</h5>
								<p class="font-size-xs line-height-xs">Net wt: 500gm - Rs 334x</p>
							</a>
						</div>
					</li>
					<li class="col-md-4 col-sm-6 col-xs-12 isotope-item chicken">
						<div class="portfolio-item center">
							<a href="index-classic-color.html" class="text-decoration-none block-link pt-md">
								<span class="thumb-info thumb-info-preview thumb-info-preview-long mb-md">
									<span class="thumb-info-wrapper">
										<span class="thumb-info-image" data-original="img/home/chicken_breast.jpg" data-plugin-lazyload></span>
									</span>
								</span>
								<h5 class="mb-xs">Chicken Breast (Boneless)</h5>
								<p class="font-size-xs line-height-xs">Net wt: 500gm - Rs 219</p>
							</a>
						</div>
					</li>
					<li class="col-md-4 col-sm-6 col-xs-12 isotope-item red_meat">
						<div class="portfolio-item center">
							<a href="index-classic-light.html" class="text-decoration-none block-link pt-md">
								<span class="thumb-info thumb-info-preview thumb-info-preview-long mb-md">
									<span class="thumb-info-wrapper">
										<span class="thumb-info-image" data-original="img/home/goat_curry.jpg" data-plugin-lazyload></span>
									</span>
								</span>
								<h5 class="mb-xs">Premium Goat Curry Cut</h5>
								<p class="font-size-xs line-height-xs">Net wt: 500gm - Rs 399</p>
							</a>
						</div>
					</li>
					<li class="col-md-4 col-sm-6 col-xs-12 isotope-item fish_seafood">
						<div class="portfolio-item center">
							<a href="index-classic-light.html" class="text-decoration-none block-link pt-md">
								<span class="thumb-info thumb-info-preview thumb-info-preview-long mb-md">
									<span class="thumb-info-wrapper">
										<span class="thumb-info-image" data-original="img/home/fish_ballot.jpg" data-plugin-lazyload></span>
									</span>
								</span>
								<h5 class="mb-xs">Basa Fillet (Platinum Grade) </h5>
								<p class="font-size-xs line-height-xs">Net wt: 500gm - Rs 299</p>
							</a>
						</div>
					</li>
					<li class="col-md-4 col-sm-6 col-xs-12 isotope-item eggs">
						<div class="portfolio-item center">
							<a href="index-classic-light.html" class="text-decoration-none block-link pt-md">
								<span class="thumb-info thumb-info-preview thumb-info-preview-long mb-md">
									<span class="thumb-info-wrapper">
										<span class="thumb-info-image" data-original="img/home/country_eggs.jpg" data-plugin-lazyload></span>
									</span>
								</span>
								<h5 class="mb-xs">Country Eggs </h5>
								<p class="font-size-xs line-height-xs">6 pieces - Rs 75</p>
							</a>
						</div>
					</li>
					<li class="col-md-4 col-sm-6 col-xs-12 isotope-item best_deals">
						<div class="portfolio-item center">
							<a href="index-classic-video.html" class="text-decoration-none block-link pt-md">
								<span class="thumb-info thumb-info-preview thumb-info-preview-long mb-md">
									<span class="thumb-info-wrapper">
										<span class="thumb-info-image" data-original="img/home/bd2.jpg" data-plugin-lazyload></span>
									</span>
								</span>
								<h5 class="mb-xs">Freshwater Catla - Bengali Cut</h5>
								<p class="font-size-xs line-height-xs">Net wt: 500gm - Gross: 694gm</p>
							</a>
						</div>
					</li>
					<li class="col-md-4 col-sm-6 col-xs-12 isotope-item chicken">
						<div class="portfolio-item center">
							<a href="index-classic-video-light.html" class="text-decoration-none block-link pt-md">
								<span class="thumb-info thumb-info-preview thumb-info-preview-long mb-md">
									<span class="thumb-info-wrapper">
										<span class="thumb-info-image" data-original="img/home/chicken_drumstick.jpg" data-plugin-lazyload></span>
									</span>
								</span>
								<h5 class="mb-xs">Chicken Drumstick (Skinless)</h5>
								<p class="font-size-xs line-height-xs">Net wt: 500gm - Rs 159</p>
							</a>
						</div>
					</li>
					<li class="col-md-4 col-sm-6 col-xs-12 isotope-item red_meat">
						<div class="portfolio-item center">
							<a href="index-corporate.html" class="text-decoration-none block-link pt-md">
								<span class="thumb-info thumb-info-preview thumb-info-preview-long mb-md">
									<span class="thumb-info-wrapper">
										<span class="thumb-info-image" data-original="img/home/goat_lambleg.jpg" data-plugin-lazyload></span>
									</span>
								</span>
								<h5 class="mb-xs">Lamb Leg (Boneless)</h5>
								<p class="font-size-xs line-height-xs">Net wt: 500gm - Rs 449</p>
							</a>
						</div>
					</li>
					<li class="col-md-4 col-sm-6 col-xs-12 isotope-item fish_seafood">
						<div class="portfolio-item center">
							<a href="index-corporate.html" class="text-decoration-none block-link pt-md">
								<span class="thumb-info thumb-info-preview thumb-info-preview-long mb-md">
									<span class="thumb-info-wrapper">
										<span class="thumb-info-image" data-original="img/home/fish_atlantic.jpg" data-plugin-lazyload></span>
									</span>
								</span>
								<h5 class="mb-xs">Atlantic Salmon Steaks</h5>
								<p class="font-size-xs line-height-xs">Net wt: 500gm - Rs 699</p>
							</a>
						</div>
					</li>
					<li class="col-md-4 col-sm-6 col-xs-12 isotope-item eggs">
						<div class="portfolio-item center">
							<a href="index-corporate.html" class="text-decoration-none block-link pt-md">
								<span class="thumb-info thumb-info-preview thumb-info-preview-long mb-md">
									<span class="thumb-info-wrapper">
										<span class="thumb-info-image" data-original="img/home/classic.jpg" data-plugin-lazyload></span>
									</span>
								</span>
								<h5 class="mb-xs">Classic Eggs</h5>
								<p class="font-size-xs line-height-xs">6 piece - Rs 55</p>
							</a>
						</div>
					</li>
					<li class="col-md-4 col-sm-6 col-xs-12 isotope-item exotic_meals">
						<div class="portfolio-item center">
							<a href="index-corporate.html" class="text-decoration-none block-link pt-md">
								<span class="thumb-info thumb-info-preview thumb-info-preview-long mb-md">
									<span class="thumb-info-wrapper">
										<span class="thumb-info-image" data-original="img/home/exotic_prawns.jpg" data-plugin-lazyload></span>
									</span>
								</span>
								<h5 class="mb-xs">Freshwater Scampi/Giant Prawns</h5>
								<p class="font-size-xs line-height-xs">Net wt: 500gm - Rs 329</p>
							</a>
						</div>
					</li>
					<li class="col-md-4 col-sm-6 col-xs-12 isotope-item best_deals">
						<div class="portfolio-item center">
							<a href="index-corporate-2.html" class="text-decoration-none block-link pt-md">
								<span class="thumb-info thumb-info-preview mb-md">
									<span class="thumb-info-wrapper">
										<span class="thumb-info-image" data-original="img/home/bd3.jpg" data-plugin-lazyload></span>
									</span>
								</span>
								<h5 class="mb-xs">Amritsari Achari Murgh</h5>
								<p class="font-size-xs line-height-xs">Net wt: 500gm - Rs 271</p>
							</a>
						</div>
					</li>
					<li class="col-md-4 col-sm-6 col-xs-12 isotope-item chicken">
						<div class="portfolio-item center">
							<a href="index-corporate-3.html" class="text-decoration-none block-link pt-md">
								<span class="thumb-info thumb-info-preview thumb-info-preview-long mb-md">
									<span class="thumb-info-wrapper">
										<span class="thumb-info-image" data-original="img/home/chicken_skinless.jpg" data-plugin-lazyload></span>
									</span>
								</span>
								<h5 class="mb-xs">Chicken (Skinless) - Curry Cut</h5>
								<p class="font-size-xs line-height-xs">Net wt: 500gm - Rs 129</p>
							</a>
						</div>
					</li>
					<li class="col-md-4 col-sm-6 col-xs-12 isotope-item red_meat">
						<div class="portfolio-item center">
							<a href="index-corporate-3.html" class="text-decoration-none block-link pt-md">
								<span class="thumb-info thumb-info-preview thumb-info-preview-long mb-md">
									<span class="thumb-info-wrapper">
										<span class="thumb-info-image" data-original="img/home/goat_mince.jpg" data-plugin-lazyload></span>
									</span>
								</span>
								<h5 class="mb-xs">Goat Mince/Keema</h5>
								<p class="font-size-xs line-height-xs">Net wt: 500gm - Rs 469</p>
							</a>
						</div>
					</li>
					<li class="col-md-4 col-sm-6 col-xs-12 isotope-item exotic_meals">
						<div class="portfolio-item center">
							<a href="index-corporate-4.html" class="text-decoration-none block-link pt-md">
								<span class="thumb-info thumb-info-preview thumb-info-preview-long mb-md">
									<span class="thumb-info-wrapper">
										<span class="thumb-info-image" data-original="img/home/exotic_rabbit.jpg" data-plugin-lazyload></span>
									</span>
								</span>
								<h5 class="mb-xs">Rabbit - Curry Cut (Medium)</h5>
								<p class="font-size-xs line-height-xs">Net wt: 500gm - Rs 540</p>
							</a>
						</div>
					</li>
				</ul>
				</div>  
				<section class="call-to-action theme_back mb-xl download_strip">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="col-md-7 left">
									<h2 class="text-color-light mb-none mt-xl">Discover the World of Craft <strong>Meats</strong></h2>
									<p class="lead mb-xl text-color-light">Individually wrapped, flash-frozen, and delivered to your doorstep</p>
								</div>
								<div class="col-md-5 right">
									<a href="" target="_blank" class="dwn_link mr-md">Download App!</a>
									<img src="img/home/android.png" alt="Android" style="width: 30px;">
								</div>
							</div>
						</div>
					</div>
				</section>
				<div class="container">
					<div class="row">
						<div class="col-md-12 center">
							<h2 class="mt-xl mb-none">Get the Best <strong class="theme_color">Meat</strong> <span class="alternative-font font-size-md theme_color">...Deals too!</span></h2>
							<p class="mb-xl">GoFresh has been sourcing the finest quality meats from around the India and servicing them to Bangalore meat lovers/users.</p>
							<hr class="invisible">
						</div>
					</div>

					<div class="row">
						<div class="col-md-4">
							<div class="feature-box feature-box-style-6 reverse mb-none mt-xl appear-animation" data-appear-animation="fadeInLeft" data-appear-animation-delay="300">
								<div class="feature-box-icon">
									<i class="fa fa-mobile theme_color"></i>
								</div>
								<div class="feature-box-info">
									<h4 class="mb-sm">Buy Online, Make it simple</h4>
									<p class="mb-lg">Get registered, place order and receive it within 80 minutes with fresh cut flesh.</p>
								</div>
								<div class="feature-box-icon">
									<i class="fa fa-mobile theme_color"></i>
								</div>
								<div class="feature-box-info">
									<h4 class="mb-sm">PRIME DELIVERY</h4>
									<p class="mb-lg">In hurry to serve your guests, order in urgent mode and get delivery withn 45 min.</p>
								</div>
								<div class="feature-box-icon">
									<i class="fa fa-mobile theme_color"></i>
								</div>
								<div class="feature-box-info">
									<h4 class="mb-sm">Pasture raised, no hormones</h4>
									<p class="mb-lg">We choose to work with only the very best independent farms raising high-quality meat.</p>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<img alt="Responsive" data-appear-animation="fadeInUp" class="hidden-xs img-responsive appear-animation fadeInUp" src="img/home/order-online.png" style="margin-bottom: -1px;">
						</div>
						<div class="col-md-4">
							<div class="feature-box feature-box-style-6 mb-none mt-xl appear-animation" data-appear-animation="fadeInRight" data-appear-animation-delay="300">
								<div class="feature-box-icon">
									<i class="fa fa-eye theme_color"></i>
								</div>
								<div class="feature-box-info">
									<h4 class="mb-sm">Chicken, Mutton, and Beef</h4>
									<p class="">GoFresh is your one-stop shop for craft meats sourced straight from the farm.</p>
								</div>
								<div class="feature-box-icon">
									<i class="fa fa-eye theme_color"></i>
								</div>
								<div class="feature-box-info">
									<h4 class="mb-sm">Refer and Earn</h4>
									<p class="mb-lg">Get 100 cashback for each registration using your referral code.</p>
								</div>
								<div class="feature-box-icon">
									<i class="fa fa-eye theme_color"></i>
								</div>
								<div class="feature-box-info">
									<h4 class="mb-sm">Choose the piece you want.</h4>
									<p class="mb-lg">Buy the cuts & quantities you want, with the ease of ordering online & delivery at door.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="container hidden">
					<div class="row mt-xl mb-xl">
						<div class="col-md-3">
							<img class="img-responsive mt-xl appear-animation" src="img/top-quality-documentation.png" alt="" data-appear-animation="fadeInLeft">
						</div>
						<div class="col-md-9">
							<h2 class="mt-xl">Top Quality <strong>Documentation</strong></h2>
							<p>
								Porto comes with a very extensive and as thorough as possible documentation where each section of the theme and its features are described in a easy way to understand, it also comes with a lot of screenshots to help you. If the documentation is not enough contact us on our support forum.
							</p>	
						</div>
					</div>
				</div>
				<section class="section section-default hidden">
					<div class="container">
						<div class="row">
							<div class="col-md-9">
								<h2>Template <strong>Updates</strong></h2>
								<p>
									Porto template is constantly being updated with new features and updates of the plugins that are included in the package.<br>
									If you have any suggestion for the next updates, just let us know.
								</p>
							</div>
							<div class="col-md-3">
								<img class="hidden-xs img-responsive appear-animation" style="margin-top: -100px;" src="img/updates.png" alt="" data-appear-animation="fadeInRight">
							</div>
						</div>
					</div>
				</section>
				<section class="parallax section section-text-light section-parallax section-center mt-xl mb-none" data-stellar-background-ratio="0.5" style="background-image:linear-gradient(rgba(236, 40, 40, 0.57), rgba(251, 97, 92, 0.48)), url(img/home/background.jpg);">
					<div class="container">
						<div class="row">
							<div class="col-md-10 col-md-offset-1">
								<h2><i class="fa fa-star font-size-xs mr-xs"></i><i class="fa fa-star font-size-xs mr-xs"></i><i class="fa fa-star font-size-xs mr-xs"></i><i class="fa fa-star font-size-xs mr-xs"></i><i class="fa fa-star font-size-xs"></i><br><strong>What Client’s Say</strong></h2>
								<div class="owl-carousel owl-theme nav-bottom rounded-nav mb-none" data-plugin-options='{"items": 1, "loop": false}'>
									<div>
										<div class="col-md-12">
											<div class="testimonial testimonial-style-2 testimonial-with-quotes mb-none">
												<blockquote>
													<p>Outstanding about everything : - Support is fast and perfect : I got answers to every questions I asked. - Code quality is up to date, modern, structured, clear, easy to understand. - Responsive IS responsive (any screen size, smartphone & tablet. - Design is pure and esthetic. - Okler provide update. Thank you Okler team for all of this ! Keep going !</p>
												</blockquote>
												<div class="testimonial-author">
													<p><strong>Gothvel</strong></p>
												</div>
											</div>
										</div>
									</div>
									<div>
										<div class="col-md-12">
											<div class="testimonial testimonial-style-2 testimonial-with-quotes mb-none">
												<blockquote>
													<p>This theme is totally customizable, clean with all the options you could want. Don't want full screen layout? With one word added to the code the entire site becomes boxed version... The customer support is absolutely unsurpassed. Can not recommend this enough.</p>
												</blockquote>
												<div class="testimonial-author">
													<p><strong>katefischer510</strong></p>
												</div>
											</div>
										</div>
									</div>
									<div>
										<div class="col-md-12">
											<div class="testimonial testimonial-style-2 testimonial-with-quotes mb-none">
												<blockquote>
													<p>The code is extremely well organized, the help information and support is terrific and the options provided by the template are about the most thorough I've found - what more could you ask for?</p>
												</blockquote>
												<div class="testimonial-author">
													<p><strong>sibelius</strong></p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section class="call-to-action call-to-action-default call-to-action-in-footer mt-none no-top-arrow" hidden="">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="call-to-action-content align-left pb-md mb-xl ml-none">
									<h2 class="mb-xs mt-xl">Start creating your new website today with <strong>Porto!</strong></h2>
									<p class="lead mb-xl">Now that you already know that Porto is the best choice for your next project, do not hesitate, purchase now for only $16 and join many happy customers. Get started now.</p>
								</div>
								<div class="call-to-action-btn">
									<a href="http://themeforest.net/item/porto-responsive-html5-template/4106987" target="_blank" class="btn btn-lg btn-primary"><i class="fa fa-cark mr-xs"></i> BUY PORTO NOW - $16</a>
									<p><span class="alternative-font font-size-sm mt-xs text-color-primary">Join The 19,000+ Happy Customers :)</span></p>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
 
			<div w3-include-html="footer.html"></div>
		</div>

		<!-- Vendor -->
		
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
		
		<!-- Current Page Vendor and Views -->
		<script src="vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
		<script src="vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
		<script src="vendor/circle-flip-slideshow/js/jquery.flipshow.js"></script>
		<script src="js/views/view.home.js"></script>
		
		<!-- Theme Custom -->
		<script src="js/custom.js"></script>
        <script>
			includeHTML();
		</script>
		
		
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

		 <?if(isset($_SESSION['user_id'])){?>

		 	<script>
		 		var res = "<?= $_SESSION['user_id'];?>";
		 		 if (typeof(Storage) !== "undefined") {
					sessionStorage.setItem("logged_user", res);

				}

		 	</script>

		 	<?}?>

	</body>
</html>