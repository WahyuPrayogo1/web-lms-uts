<!DOCTYPE html>
<html lang="en">
<head>


	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>Dreamswww LMS</title>


	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/img/favicon.svg')}}">

	<!-- Theme Settings Js -->
	<script src="{{asset('assets/js/theme-script.js')}}" type="8d34f95a86e9a0aa77bfdbeb-text/javascript"></script>


	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">

	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/fontawesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/all.min.css')}}">

	<!-- Owl Carousel CSS -->
	<link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css')}}">

	<!-- Feathericon CSS -->
	<link rel="stylesheet" href="{{asset('assets/plugins/feather/feather.css')}}">

	<!-- Slick CSS -->
	<link rel="stylesheet" href="{{asset('assets/plugins/slick/slick.css')}}">
	<link rel="stylesheet" href="{{asset('assets/plugins/slick/slick-theme.css')}}">

	<!-- Select2 CSS -->
	<link rel="stylesheet" href="{{asset('assets/plugins/select2/css/select2.min.css')}}">

	<!-- Swiper CSS -->
	<link rel="stylesheet" href="{{asset('assets/plugins/swiper/css/swiper.min.css')}}">

	<!-- Aos CSS -->
	<link rel="stylesheet" href="{{asset('assets/plugins/aos/aos.css')}}">

	<!-- Main CSS -->
	<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

    <style>
        .latest-blog-sec {
    display: none;
}

    </style>
</head>

<body class="home-two">

	<!-- Main Wrapper -->
	<div class="main-wrapper">

		<!-- Header -->
		<header class="header header-two">
			<div class="header-fixed">
				<nav class="navbar navbar-expand-lg header-nav scroll-sticky">
					<div class="container">
						<div class="navbar-header">
							<a id="mobile_btn" href="javascript:void(0);">
								<span class="bar-icon">
									<span></span>
									<span></span>
									<span></span>
								</span>
							</a>
							<a href="index.html" class="navbar-brand logo">
								<img src="assets/img/logo.svg" class="img-fluid" alt="Logo">
							</a>
						</div>
						<div class="main-menu-wrapper">
							<div class="menu-header">
								<a href="index.html" class="menu-logo">
									<img src="assets/img/logo.svg" class="img-fluid" alt="Logo">
								</a>
								<a id="menu_close" class="menu-close" href="javascript:void(0);">
									<i class="fas fa-times"></i>
								</a>
							</div>
							<ul class="main-nav">
								<li class="has-submenu menu-effect active">
									<a href="#">Home</a>
								</li>
								<li class="has-submenu">
									<a href="{{url('student')}}">Student</a>
								</li>
								<li class="has-submenu">
									<a href="#">Teacher</a>
								</li>
								<li class="has-submenu">
									<a href="#">Special Class</i></a>
								</li>
								<li class="has-submenu">
									<a href="#">Admin</i></a>
								</li>

							</ul>
						</div>
						<ul class="nav header-navbar-rht">
							<li class="nav-item">
								<div>
									<a href="javascript:void(0);" id="dark-mode-toggle" class="dark-mode-toggle  ">
										<i class="fa-solid fa-moon"></i>
									</a>
									<a href="javascript:void(0);" id="light-mode-toggle" class="dark-mode-toggle ">
										<i class="fa-solid fa-sun"></i>
									</a>
								</div>
							</li>
                            @if (Route::has('login'))
                            @auth
                                <li class="nav-item">
                                    <a class="login-head button" href="{{ url('/dashboard') }}">Dashboard</a>
                                </li>
                            @else
                                <li class="nav-item">
                                    <a class="login-head button" href="{{ route('login') }}">Login</a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="signin-head" href="{{ route('register') }}">Sign up</a>
                                    </li>
                                @endif
                            @endauth
                        @endif
						</ul>
					</div>
				</nav>
			</div>
		</header>
		<!-- /Header -->

        @yield('content')


		<!-- Footer -->
		<footer class="footer footer-two" data-aos="fade-up">

			<!-- Footer Top -->
			<div class="footer-top">
				<div class="container">
					<div class="row">
						<div class="col-lg-4 col-md-6 col-sm-6 col-12">

							<!-- Footer Widget -->
							<div class="footer-widget footer-about">
								<div class="footer-logo">
									<img src="assets/img/logo.svg" alt="logo">
								</div>
								<div class="footer-about-content">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut consequat mauris
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut consequat mauris</p>
								</div>
								<div class="social-icon">
									<ul>
										<li>
											<a href="#" target="_blank"><i class="feather-facebook"></i></a>
										</li>
										<li>
											<a href="#" target="_blank"><i class="feather-twitter"></i></a>
										</li>
										<li>
											<a href="#" target="_blank"><i class="feather-instagram"></i></a>
										</li>
										<li>
											<a href="#" target="_blank"><i class="feather-linkedin"></i></a>
										</li>
									</ul>
								</div>
							</div>
							<!-- /Footer Widget -->

						</div>

						<div class="col-lg-2 col-md-6 col-sm-6 col-12">

							<!-- Footer Widget -->
							<div class="footer-widget footer-menu footer-menu-two">
								<h2 class="footer-title">For Instructor</h2>
								<ul>
									<li><a href="instructor-profile.html">Profile</a></li>
									<li><a href="login.html">Login</a></li>
									<li><a href="register.html">Register</a></li>
									<li><a href="instructor-list.html">Instructor</a></li>
									<li><a href="instructor-dashboard.html"> Dashboard</a></li>
								</ul>
							</div>
							<!-- /Footer Widget -->

						</div>

						<div class="col-lg-2 col-md-6 col-sm-6 col-12">

							<!-- Footer Widget -->
							<div class="footer-widget footer-menu footer-menu-two">
								<h2 class="footer-title">For Student</h2>
								<ul>
									<li><a href="student-profile.html">Profile</a></li>
									<li><a href="login.html">Login</a></li>
									<li><a href="register.html">Register</a></li>
									<li><a href="students-list.html">Student</a></li>
									<li><a href="student-dashboard.html"> Dashboard</a></li>
								</ul>
							</div>
							<!-- /Footer Widget -->

						</div>

						<div class="col-lg-4 col-md-6 col-sm-6 col-12">

							<!-- Footer Widget -->
							<div class="footer-widget footer-contact footer-contact-two">
								<h2 class="footer-title">Address</h2>
								<div class="footer-contact-widget">
									<div class="footer-address">
										<h6>Location</h6>
										<p> 3556 Beech Street, San Francisco,<br> California, CA 94108 </p>
									</div>

									<h6>Email Address</h6>
									<p>
										<a href="https://dreamslms.dreamstechnologies.com/cdn-cgi/l/email-protection#94f0e6f1f5f9e7f8f9e7d4f1ecf5f9e4f8f1baf7fbf9"><span class="__cf_email__" data-cfemail="87e3f5e2e6eaf4ebeaf4c7e2ffe6eaf7ebe2a9e4e8ea">[email&#160;protected]</span></a>
									</p>

									<h6>Phone number</h6>
									<p class="mb-0">
										<a href="tel:+191234567890">+19 123-456-7890</a>
									</p>
								</div>
							</div>
							<!-- /Footer Widget -->

						</div>

					</div>
				</div>
			</div>
			<!-- /Footer Top -->

			<!-- Footer Bottom -->
			<div class="footer-bottom">
				<div class="container">

					<!-- Copyright -->
					<div class="copyright">
						<div class="row">
							<div class="col-md-6 col-sm-12">
								<div class="copyright-text">
									<p class="mb-0">&copy; 2024 DreamsLMS. All rights reserved.</p>
								</div>
							</div>
							<div class="col-md-6 col-sm-12">
								<div class="privacy-policy">
									<ul>
										<li><a href="term-condition.html">Terms & Condition</a></li>
										<li><a href="privacy-policy.html">Privacy Policy</a></li>
										<li><a href="support.html">Contact Us</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!-- /Copyright -->

				</div>
			</div>
			<!-- /Footer Bottom -->

		</footer>
		<!-- /Footer -->

	</div>
	<!-- /Main Wrapper -->

	<!-- jQuery -->
	<script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="{{asset('assets/js/jquery-3.7.1.min.js')}}" type="8d34f95a86e9a0aa77bfdbeb-text/javascript"></script>

	<!-- Bootstrap Core JS -->
	<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}" type="8d34f95a86e9a0aa77bfdbeb-text/javascript"></script>

	<!-- Owl Carousel JS -->
	<script src="{{asset('assets/js/owl.carousel.min.js')}}" type="8d34f95a86e9a0aa77bfdbeb-text/javascript"></script>

	<!-- Aos -->
	<script src="{{asset('assets/plugins/aos/aos.js')}}" type="8d34f95a86e9a0aa77bfdbeb-text/javascript"></script>

	<!-- counterup JS -->
	<script src="{{asset('assets/js/jquery.waypoints.js')}}" type="8d34f95a86e9a0aa77bfdbeb-text/javascript"></script>
	<script src="{{asset('assets/js/jquery.counterup.min.js')}}" type="8d34f95a86e9a0aa77bfdbeb-text/javascript"></script>

	<!-- Select2 JS -->
	<script src="{{asset('assets/plugins/select2/js/select2.min.js')}}" type="8d34f95a86e9a0aa77bfdbeb-text/javascript"></script>

	<!-- Slick Slider -->
	<script src="{{asset('assets/plugins/slick/slick.js')}}" type="8d34f95a86e9a0aa77bfdbeb-text/javascript"></script>

	<!-- Swiper Slider -->
	<script src="{{asset('assets/plugins/swiper/js/swiper.min.js')}}" type="8d34f95a86e9a0aa77bfdbeb-text/javascript"></script>

	<!-- Custom JS -->
	<script src="{{asset('assets/js/script.js')}}" type="8d34f95a86e9a0aa77bfdbeb-text/javascript"></script>

<script src="{{asset('assets/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js')}}" data-cf-settings="8d34f95a86e9a0aa77bfdbeb-|49" defer></script>

</body>

</html>
