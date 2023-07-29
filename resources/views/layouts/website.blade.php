<!DOCTYPE html>

<!--
   Template:   Waldo - Responsive HTML5 Portfolio Website Template
   Author:     Themetorium
   URL:        http://themetorium.net
   Notes:		You are free to use prepared helper classes to customize your website. Look into "helper.css" file for more info.  
-->

<html lang="en">
	<head>

		<!-- Title -->
		<title>Dummy Page - Waldo</title>

		<!-- Meta -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="Responsive One Page HTML5 Website Template">
		<meta name="keywords" content="HTML5, CSS3, Bootsrtrap, Responsive, Template, Theme, Website" />
		<meta name="author" content="themetorium.net">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Favicon (http://www.favicon-generator.org/) -->
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
		<link rel="icon" href="favicon.ico" type="image/x-icon">

		<!-- Google font (https://www.google.com/fonts) -->
		<link href='https://fonts.googleapis.com/css?family=Ubuntu+Mono:400,400italic,700,700italic' rel='stylesheet' type='text/css'> <!-- Body font (Ubuntu Mono) -->

		<!-- Bootstrap CSS (http://getbootstrap.com) -->
		<link rel="stylesheet" type='text/css' href="assets/vendor/bootstrap/css/bootstrap.min.css"> <!-- bootstrap CSS (http://getbootstrap.com) -->

		<!-- Libs and Plugins CSS -->
		<link rel="stylesheet" href="assets/vendor/jquery/css/jquery-ui.min.css"> <!-- jquery UI CSS (https://jquery.com) -->
		<link rel="stylesheet" href="assets/vendor/fontawesome/css/fontawesome-all.min.css"> <!-- Font Icons CSS (https://fontawesome.com) Free version! -->
		<link rel="stylesheet" href="assets/vendor/owl-carousel/css/owl.carousel.min.css"> <!-- Owl Carousel CSS (https://owlcarousel2.github.io/OwlCarousel2/) -->
		<link rel="stylesheet" href="assets/vendor/owl-carousel/css/owl.theme.default.min.css"> <!-- Owl Carousel default theme CSS (https://owlcarousel2.github.io/OwlCarousel2/) -->
		<link rel="stylesheet" href="assets/vendor/magnific-popup/css/magnific-popup.css"> <!-- Magnific Popup CSS (http://dimsemenov.com/plugins/magnific-popup/) -->
		<link rel="stylesheet" href="assets/vendor/ytplayer/css/jquery.mb.YTPlayer.min.css"> <!-- YTPlayer CSS (more info: https://github.com/pupunzi/jquery.mb.YTPlayer) -->

		<!-- Theme master CSS -->
		<link rel="stylesheet" type='text/css' href="assets/css/helper.css">
		<link rel="stylesheet" type='text/css' href="assets/css/theme.css">


	</head>

	<body>

		<!-- Begin global search (simple) 
		==================================
		* Use class "gl-search-dark" to enable global search dark style.
		-->
		<div id="global-search" class="gl-s gls-simple">
			
			<!-- Begin global search close button -->
			<div class="global-search-close-wrap">
				<a href="#0" class="global-search-close" title="Close">
					<i class="fas fa-close"></i>
				</a>
			</div>
			<!-- End global search close button -->

			<!-- Begin global search form -->
			<form id="global-search-form" method="get" action="search-results-2.html">
				<input type="text" class="form-control" id="global-search-input" name="search" placeholder="Type your keywords...">
			</form>
			<!-- End global search form -->

		</div>
		<!-- End global search -->

		
		<!-- ===================
		///// Begin header /////
		==================== -->
		<div id="header">

			<!-- Begin logo
			================ -->
			<div id="logo">
				<a href="index.html"><img src="assets/img/logo-dark.png" title="Home" alt="logo"></a>
			</div>
			<!-- End logo -->

			<!-- =================
			///// Begin menu /////
			======================
			* Use class "slide-left", "slide-left-half", "slide-right", "slide-right-half", "slide-top", "slide-bottom" or "zoom-in" to change menu effect.
			-->
			<nav id="menu" class="menu slide-right-half bg-image" style="background-image: url(assets/img/misc/menu-bg-1.jpg); background-position: 50% 50%">

				<!-- Element cover -->
				<div class="cover bg-transparent-5-dark"></div>

				<!-- Begin menu inner -->
				<div id="menu-inner">

					<!-- Begin menu content -->
					<div id="menu-content">

						<!-- Begin menu nav -->
						<div class="menu-nav">
							<ul class="menu-list">
								<li class="has-children">
									<a href="#0" class="sub-menu-trigger">Home</a> 
									<ul class="sub-menu">
										<li><a href="index.html">Home v.1</a></li>
										<li><a href="index-2.html">Home v.2</a></li>
									</ul>
								</li>
								<li class="has-children">
									<a href="#0" class="sub-menu-trigger">About</a> 
									<ul class="sub-menu">
										<li><a href="about-us.html">About Us</a></li>
										<li><a href="about-me.html">About Me</a></li>
										<li><a href="team.html">The Team</a></li>
									</ul>
								</li>
								<li class="has-children">
									<a href="#0" class="sub-menu-trigger">Portfolio</a> 
									<ul class="sub-menu">
										<li><a href="portfolio-list.html">Portfolio List v.1</a></li>
										<li><a href="portfolio-list-2.html">Portfolio List v.2</a></li>
										<li><a href="portfolio-single-1.html">Single Item v.1</a></li>
										<li><a href="portfolio-single-2.html">Single Item v.2</a></li>
										<li><a href="portfolio-single-3.html">Single Item v.3</a></li>
										<li><a href="portfolio-single-4.html">Single Item v.4</a></li>
										<li><a href="portfolio-single-5.html">Single Item v.5</a></li>
										<li><a href="portfolio-single-6.html">Single Item v.6</a></li>
									</ul>
								</li>
								<li class="has-children">
									<a href="#0" class="sub-menu-trigger">Articles</a> 
									<ul class="sub-menu">
										<li><a href="blog-list-1.html">Blog List v.1</a></li>
										<li><a href="blog-list-2.html">Blog List v.2</a></li>
										<li><a href="blog-single.html">Blog Post No Sidebar</a></li>
										<li><a href="blog-single-sidebar-left.html">Blog Post Sidebar Left</a></li>
										<li><a href="blog-single-sidebar-right.html">Blog Post Sidebar Right</a></li>
									</ul>
								</li>
								<li class="has-children">
									<a href="#0" class="sub-menu-trigger">Gallery</a> 
									<ul class="sub-menu">
										<li><a href="gallery-list.html">Gallery List v.1</a></li>
										<li><a href="gallery-list-2.html">Gallery List v.2</a></li>
										<li><a href="gallery-single.html">Gallery Single v.1</a></li>
										<li><a href="gallery-single-2.html">Gallery Single v.2</a></li>
									</ul>
								</li>
								<li class="has-children">
									<a href="#0" class="sub-menu-trigger">Shop</a> 
									<ul class="sub-menu">
										<li><a href="shop-list.html">Shop List</a></li>
										<li><a href="shop-single.html">Single Product</a></li>
										<li><a href="shop-cart.html">Shoping Cart</a></li>
										<li><a href="shop-checkout.html">Checkout</a></li>
									</ul>
								</li>
								<li class="has-children">
									<a href="#0" class="sub-menu-trigger">Contact</a> 
									<ul class="sub-menu">
										<li><a href="contact.html">Contact</a></li>
										<li><a href="contact-simple.html">Contact Simple</a></li>
									</ul>
								</li>
								<li class="has-children active">
									<a href="#0" class="sub-menu-trigger">Pages</a> 
									<ul class="sub-menu">
										<li><a href="page-dummy.html">Dummy Page v.1</a></li>
										<li><a href="page-dummy-2.html">Dummy Page v.2</a></li>
										<li><a href="search-results.html">Search Results v.1</a></li>
										<li><a href="search-results-2.html">Search Results v.2</a></li>
									</ul>
								</li>
							</ul>
						</div>
						<!-- End menu nav -->

					</div>
					<!-- End menu inner -->

					<!-- Begin menu footer -->
					<div class="menu-footer">
						<div class="row">
							<div class="col-sm-6">
								
								<!-- Begin social buttons -->
								<div class="social-buttons">
									<ul>
										<li><a href="#" class="btn btn-primary btn-link" target="_blank" title="Follow us on facebook"><i class="fab fa-facebook-f"></i></a></li>
										<li><a href="#" class="btn btn-primary btn-link" target="_blank" title="Follow us on twitter"><i class="fab fa-twitter"></i></a></li>
										<li><a href="#" class="btn btn-primary btn-link" target="_blank" title="Follow us on dribbble"><i class="fab fa-dribbble"></i></a></li>
										<li><a href="#" class="btn btn-primary btn-link" target="_blank" title="Follow us on behance"><i class="fab fa-behance"></i></a></li>
										<li><a href="#" class="btn btn-primary btn-link" target="_blank" title="Follow us on linkedin"><i class="fab fa-linkedin-in"></i></a></li>
										<li><a href="#" class="btn btn-primary btn-link" target="_blank" title="Follow us on youtube"><i class="fab fa-youtube"></i></a></li>
									</ul>
								</div>
								<!-- End social buttons -->
								
							</div> <!-- /.col -->

							<div class="col-sm-6 text-right">
								<!-- made with love -->
								<div class="made-with-love hide-from-sm">
									<p>Made With <span class="text-yellow"><i class="far fa-heart"></i></span></p>
								</div>
							</div> <!-- /.col -->
						</div> <!-- /.row -->
					</div>
					<!-- End menu footer -->

				</div>
				<!-- End menu content -->

			</nav>
			<!-- End menu -->

			
			<!-- ==============================
			///// Begin header attriputes /////
			=============================== -->
			<div id="header-attriputes">
				<ul>
					<li>
						<!-- Begin menu trigger -->
						<div id="menu-trigger">
							<div class="mt-inner">
								<div class="menu-str">
									<span class="str-1"></span>
									<span class="str-2"></span>
									<span class="str-3"></span>
								</div>
							</div>
							<div class="mt-text">Menu</div>
						</div>
						<!-- End menu trigger -->
					</li>

					<li>
						<!-- Begin global search trigger -->
						<div id="global-search-trigger">
							<a href="#0" class="gst-icon" title="Search...">
								<i class="fas fa-search"></i>
							</a>
						</div>
						<!-- End global search trigger -->
					</li>
				</ul>

				<ul>
					<li>
						<!-- Begin content share trigger  -->
						<div class="content-share-trigger">
							<a href="#0" class="content-share-icon" title="Share this item" data-toggle="modal" data-target="#modal-19052776">
								<i class="fas fa-share-alt"></i>
							</a>
						</div>
						<!-- End content share trigger -->

						<!-- Begin modal (for content share) 
						=====================================
						* Use class "modal-center" to enable modal center position (for small content only).
						* Use class "modal-left" to enable left sidebar modal.
						* Use class "modal-right" to enable right sidebar modal.
						* Note: Do not use these glasses if you want to use bootstrap default modal.
						-->
						<div id="modal-19052776" class="modal modal-center fade" tabindex="-1" role="dialog" aria-hidden="false">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
										<h4 class="modal-title">Share This Page</h4>
									</div>
									<div class="modal-body">

										<!-- Begin modal share -->
										<div class="modal-share">
											<div class="modal-share-image" style="background-image: url(assets/img/page-header/page-header-bg-21.jpg); background-position: 50% 50%"></div>

											<!-- Begin social buttons -->
											<div class="social-buttons">
												<ul>
													<li><a href="#0" class="btn btn-social-min btn-facebook btn-rounded-full" title="Share on facebook"><i class="fab fa-facebook-f"></i></a></li>
													<li><a href="#0" class="btn btn-social-min btn-twitter btn-rounded-full" title="Share on twitter"><i class="fab fa-twitter"></i></a></li>
													<li><a href="#0" class="btn btn-social-min btn-google btn-rounded-full" title="Share on google+"><i class="fab fa-google-plus-g"></i></a></li>
													<li><a href="#0" class="btn btn-social-min btn-pinterest btn-rounded-full" title="Share on pinterest"><i class="fab fa-pinterest-p"></i></a></li>
													<li><a href="#0" class="btn btn-social-min btn-linkedin btn-rounded-full" title="Share on linkedin"><i class="fab fa-linkedin-in"></i></a></li>
												</ul>
											</div>
											<!-- End social buttons -->

											<input class="grab-link" type="text" readonly="" value="https://your-site.com/your-page-link/" onclick="this.select()">
										</div>
										<!-- End modal share -->

									</div>
									<div class="modal-footer">
										Copyright 2016 / All rights reserved
									</div>
								</div> <!-- /.modal-content -->
							</div> <!-- /.modal-dialog -->
						</div>
						<!-- End modal -->
					</li>
				</ul>
			</div>
			<!-- End header attriputes -->

		</div>
		<!-- End header -->


		<!-- *************************************
		*********** Begin body content *********** 
		************************************** -->
		<div id="body-content">

			<!-- Begin content container -->
			<div id="content-container">

				<!-- ========================
				///// Begin page header /////
				========================= -->
				<section id="page-header" data-percent-height="0.9">

					<!-- Begin page header image -->
					<div  class="page-header-image parallax fade-out-scroll-6 bg-image" style="background-image: url(/img/sample/{{$image}}); background-position: 50% 60%;">

						<!-- Begin page header caption -->
						<div class="page-header-caption">
							<h1 class="page-header-title"> {{$text}}</h1>
							<div class="page-header-sub-title-wrap">
								<h2 class="page-header-sub-title">
									Just a dummy page for your content.
								</h2>
							</div>
						</div>

						
						<!-- End page header caption -->

						<!-- Begin scroll down button -->
						<a href="#page-section" class="scroll-down sm-scroll hide-from-sm" title="Scroll down"></a>
						<!-- End scroll down button -->

					</div>
					<!-- End page header image -->

				</section>


				<section id="page-header" data-percent-height="0.9">

					<!-- Begin page header image -->
				<video width="100%" height="100%" controls>
					<source src="{{asset('img/video')}}/{{$video}}" type="video/mp4">
		</video>
					<!-- End page header image -->

				</section>

				<!-- End page header -->


				<!-- =========================
				///// Begin page section /////
				========================== -->
				<section id="page-section">
					<div class="container">
						<div class="row">
							<div class="col-md-8 margin-bottom-40">

								<h2>- Your Content Here</h2>

								<p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed viverra rhoncus placerat. Quisque sed auctor turpis. Etiam elementum malesuada felis, sit amet aliquet nibh laoreet et.</p> 

								<p>Nunc pellentesque erat metus, euismod feugiat purus semper ut. Quisque rutrum, nibh quis blandit lacinia, nibh lorem condimentum neque, quis vestibulum mi felis non lectus. Ut at lectus euismod, pharetra libero quis, vestibulum est. Fusce et velit sed augue rhoncus tempor. Sed ac lacinia augue, nec lacinia felis. Sed sit amet diam leo. Praesent vel malesuada arcu. Donec mattis, arcu vel vehicula feugiat, sem turpis dignissim ex, eu sollicitudin neque massa eget ante. In hac habitasse platea dictumst. Pellentesque non interdum dolor, et imperdiet metus. Phasellus et posuere justo. Donec quis enim eu ex tincidunt rhoncus sit amet et libero.</p>

								<blockquote>Non mauris nullam. Wisi gravida quis quisque mattis dolor. Etiam sociis turpis nesciunt sed lacus sed hendrerit diam. Accumsan varius venenatis arcu maecenas nulla. Aliquet tempus lobortis. Tortor nibh erat vel gravida est accumsan ut ad. Orci malesuada morbi. Luctus pharetra lectus.</blockquote>

								<p>Morbi malesuada feugiat nisl. Donec dapibus felis vitae vestibulum laoreet. Quisque scelerisque, nisl at ornare rutrum, orci purus convallis ipsum, et tincidunt ligula est vel turpis. Nunc at finibus elit, vel fringilla ligula. Duis accumsan nibh eget mauris elementum porttitor. Aliquam erat volutpat. Quisque rutrum vulputate metus non aliquet. Nullam vulputate scelerisque tortor nec porttitor.</p>

								<p>Nunc scelerisque bibendum laoreet. Aenean eleifend quam a dui ullamcorper bibendum. Maecenas blandit at odio nec tempus. Integer nec elit ac nunc aliquam commodo. Pellentesque sed tincidunt neque, in tempor turpis.</p>

								<p>:)</p>

							</div> <!-- /.col -->

							<div class="col-md-4">

								<p><img src="assets/img/misc/misc-1.jpg" alt="Image"></p>

								<p>Donec mattis, arcu vel vehicula feugiat, sem turpis dignissim ex, eu sollicitudin neque massa eget ante. In hac habitasse platea dictumst. Pellentesque non interdum dolor, et imperdiet metus.</p>

							</div> <!-- /.col -->
						</div> <!-- /.row -->
					</div> <!-- /.container -->

				</section>
				<!-- End page section -->

			</div>
			<!-- End content container -->


			<!-- ===================
			///// Begin footer /////
			========================
			* Use class "fixed-footer" to enable fixed footer (no effect on small devices).
			-->
			<footer id="footer" class="fixed-footer bg-dark text-gray-2">
				<div class="container">
					<div class="row">

						<div class="col-md-4">

							<!-- Begin footer text -->
							<div class="footer-text">
								<h4>- Information</h4>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat cum vitae fugit est, eaque ea, quod pariatur numquam!
							</div>
							<!-- End footer text -->

						</div> <!-- /.col -->

						<div class="col-md-4 text-center">

							<!-- Begin footer logo -->
							<div class="footer-logo margin-top-40 margin-bottom-40">
								<a href="index.html"><img src="assets/img/logo-light.png" title="Home" alt="logo"></a>
							</div>
							<!-- End footer logo -->

						</div> <!-- /.col -->

						<div class="col-md-4">

							<!-- Begin social buttons -->
							<div class="social-buttons margin-bottom-15">
								<ul>
									<li><a href="#" class="btn btn-primary btn-link" target="_blank" title="Follow us on facebook"><i class="fab fa-facebook-f"></i></a></li>
									<li><a href="#" class="btn btn-primary btn-link" target="_blank" title="Follow us on twitter"><i class="fab fa-twitter"></i></a></li>
									<li><a href="#" class="btn btn-primary btn-link" target="_blank" title="Follow us on dribbble"><i class="fab fa-dribbble"></i></a></li>
									<li><a href="#" class="btn btn-primary btn-link" target="_blank" title="Follow us on behance"><i class="fab fa-behance"></i></a></li>
									<li><a href="#" class="btn btn-primary btn-link" target="_blank" title="Follow us on linkedin"><i class="fab fa-linkedin-in"></i></a></li>
									<li><a href="#" class="btn btn-primary btn-link" target="_blank" title="Follow us on youtube"><i class="fab fa-youtube"></i></a></li>
								</ul>
							</div>
							<!-- End social buttons -->

							<!-- Begin subscribe form -->
							<form id="footer-subscribe-form" class="form-btn-inside">
								<div class="form-group">
									<input type="email" class="form-control no-bg" id="footer-subscribe" name="subscribe" placeholder="Subscribe. Enter your email address..." required="">
									<button class="bg-yellow" type="submit"><i class="fas fa-envelope"></i></button>
								</div>
							</form>
							<!-- End subscribe form -->

							<!-- Begin copyright -->
							<div class="copyright">
								Copyright 2016 / All rights reserved <br>
								Designed by <a target="_blank" href="http://themeforest.net/user/themetorium/portfolio">Themetorium</a>
							</div>
							<!-- End copyright -->

						</div> <!-- /.col -->

					</div> <!-- /.row -->
				</div> <!-- /.container -->

				<!-- Scroll to top button -->
				<a href="#body-content" class="scrolltotop sm-scroll"></a>

			</footer>
			<!-- End footer -->


		</div>
		<!-- End body content -->



        

		<!-- ====================
		///// Scripts below /////
		===================== -->

		<!-- Core JS -->
		<script src="assets/vendor/jquery/js/jquery.min.js"></script> <!-- jquery JS (https://jquery.com) -->
		<script src="assets/vendor/jquery/js/jquery-ui.min.js"></script> <!-- jquery UI JS (https://jquery.com) -->
		<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script> <!-- bootstrap JS (http://getbootstrap.com) -->

		<!-- Libs and Plugins JS -->
		<script src="assets/vendor/pace.min.js"></script> <!-- Pace (page loader) JS (http://github.hubspot.com/pace/docs/welcome/) -->
		<script src="assets/vendor/jquery.easing.min.js"></script> <!-- Easing JS (http://gsgd.co.uk/sandbox/jquery/easing/) -->
		<script src="assets/vendor/isotope.pkgd.min.js"></script> <!-- Isotope JS (http://isotope.metafizzy.co) -->
		<script src="assets/vendor/imagesloaded.pkgd.min.js"></script> <!-- ImagesLoaded JS (https://github.com/desandro/imagesloaded) -->
		<script src="assets/vendor/jquery.mousewheel.min.js"></script> <!-- A jQuery plugin that adds cross browser mouse wheel support (https://github.com/jquery/jquery-mousewheel) -->
		<script src="assets/vendor/owl-carousel/js/owl.carousel.min.js"></script> <!-- Owl Carousel JS (https://owlcarousel2.github.io/OwlCarousel2/) -->
		<script src="assets/vendor/magnific-popup/js/jquery.magnific-popup.min.js"></script> <!-- Magnific Popup JS (http://dimsemenov.com/plugins/magnific-popup/) -->
		<script src="assets/vendor/ytplayer/js/jquery.mb.YTPlayer.min.js"></script> <!-- YTPlayer JS (more info: https://github.com/pupunzi/jquery.mb.YTPlayer) -->

		<!-- Theme master JS -->
		<script src="assets/js/theme.js"></script>



		<!--==============================
		///// Begin Google Analytics /////
		============================== -->

		<!-- Paste your Google Analytics code here. 
		Go to http://www.google.com/analytics/ for more information. -->

		<!-- End Google Analytics -->



	</body>

</html>