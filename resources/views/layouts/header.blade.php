<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('title') | {{config('','Nofino Rural Finance Private Limitd')}}</title>

    <meta name="description" content="Nofino Rural Finance Private Limited">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Favicon -->
	<link rel="icon" type="image/png" sizes="56x56" href="{{asset('assets/images/fav-icon/favicon-32x32.svg')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/images/fav-icon/apple-touch-icon.svg')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets/images/fav-icon/favicon-32x32.svg')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/images/fav-icon/favicon-16x16.svg')}}">
	<!-- bootstrap CSS -->
	<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" type="text/css" media="all" />
	<!-- Jquery UI Tab css -->
	<link rel="stylesheet" href="{{asset('assets/css/jquery-ui.min.css')}}" type="text/css" media="all" >
	<!-- Uikit  CSS -->
	<link rel="stylesheet" href="{{asset('assets/css/uikit.min.css')}}" type="text/css" media="all" />
	<!-- Mobile-Menu -->
	<link rel="stylesheet" href="{{asset('assets/css/mobile-menu.css')}}" type="text/css" media="all" />
	<!-- carousel CSS -->
	<link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}" type="text/css" media="all" />
	<!-- nivo-slider CSS -->
	<link rel="stylesheet" href="{{asset('assets/css/nivo-slider.css')}}" type="text/css" media="all" />
	<!-- animate CSS -->
	<link rel="stylesheet" href="{{asset('assets/css/animate.css')}}" type="text/css" media="all" />
	<!-- Mobile-Menu -->
	<link rel="stylesheet" href="{{asset('assets/css/mobile-menu.css')}}" type="text/css" media="all" />
	<!-- animated-text CSS -->
	<link rel="stylesheet" href="{{asset('assets/css/animated-text.css')}}" type="text/css" media="all" />
	<!-- font-awesome CSS -->
	<link rel="stylesheet" href="{{asset('assets/css/all.min.css')}}" type="text/css" media="all" />
	<!-- font-flaticon CSS -->
	<link rel="stylesheet" href="{{asset('assets/css/flaticon.css')}}" type="text/css" media="all" />
	<!-- theme-default CSS -->
	<link rel="stylesheet" href="{{asset('assets/css/theme-default.css')}}" type="text/css" media="all" />
	<!-- meanmenu CSS -->
	<link rel="stylesheet" href="{{asset('assets/css/meanmenu.min.css')}}" type="text/css" media="all" />
	<!-- Main Style CSS -->
	<link rel="stylesheet"  href="{{asset('assets/css/style.css')}}" type="text/css" media="all" />
	<link rel="stylesheet"  href="{{asset('assets/css/message.css')}}" type="text/css" media="all" />
	<!-- transitions CSS -->
	<link rel="stylesheet" href="{{asset('assets/css/owl.transitions.css')}}" type="text/css" media="all" />
	<!-- venobox CSS -->
	<link rel="stylesheet" href="{{asset('assets/venobox/venobox.css')}}" type="text/css" media="all" />
	<!-- widget CSS -->
	<link rel="stylesheet" href="{{asset('assets/css/widget.css')}}" type="text/css" media="all" />
	<!-- Swiper Slider -->
	<link rel="stylesheet" href="{{asset('assets/css/swiper.min.css')}}" type="text/css" media="all">
	<!--Animated Headline-->
	<link rel="stylesheet" href="{{asset('assets/css/jquery.animatedheadline.css')}}" type="text/css" media="all">
	<!-- responsive CSS -->
	<link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}" type="text/css" media="all" />
	<!--Simple Line Icon-->
	<link rel="stylesheet" href="../../cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.min.css">

	<!-- modernizr js -->
	<script type="text/javascript" src="{{asset('assets/js/vendor/modernizr-3.5.0.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
<!-- Loder Start -->
<div class="loader-wrapper">
    <div class="loader">
        <img class="animation-loader__circle" src="{{asset('assets/images/loader/circle-only.svg')}}" alt="Loader_circle" />
        <img class="animation-loader__outline" src="{{asset('assets/images/loader/H-outline.svg')}}" alt="Loader_logo" />
    </div>
    <div class="loder-section left-section"></div>
    <div class="loder-section right-section"></div>
  </div>
  <!-- Loder End -->
  <!-----START HEADER TOP SECTION----->
	<div class="header-top-area d-sm-none d-md-none d-lg-block">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-8">
					<div class="header-top-left-items">
						<div class="header-top-left-single-item">
							<a href="#">
								<div class="header-top-left-icon">
									<span>
										<i class="far fa-envelope"></i>
										<a href="mailto:support@nofinofinance.com">support@nofinofinance.com</a>
									</span>
								</div>
							</a>
						</div>
						<div class="header-top-left-single-item">
							<a href="#">
								<div class="header-top-left-icon">
									<span>
										<i class="fa fa-map-marker-alt"></i>
										Mandia Barpeta Assam - 781308 India
									</span>
								</div>
							</a>
						</div>
						<div class="header-top-left-single-item">
							<a href="#">
								<div class="header-top-left-icon">
									<span>
										<i class="fas fa-phone"></i>
										<a href="tel:+913665357493">+91 3665357493</a>
									</span>
								</div>
							</a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="header-top-right-items text-right">
						<div class="header-top-right-icon-area">
							<ul>
								<li>
									<a href="#">
										<i class="fab fa-facebook-f"></i>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="fab fa-twitter"></i>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="fab fa-linkedin-in"></i>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-----START NAV SECTION----->
	<header id="sticky-header" >
		<div class="container">
			<div class="menu-wrapper align-items-center">
				<div class="mobile-logo">
					<a href="{{url('/')}}"><span class="logo-txt"></span></a>
				</div>
				<div class="logo">
					<a href="{{url('/')}}">
						<img src="{{asset('assets/images/logo-dark1.png')}}" alt="logo">
						<img src="{{asset('assets/images/logo-dark1.png')}}" alt="logo">
					</a>
				</div>
				<nav>
					<ul>
						<li>
							<a href="{{url('/')}}">Home</a>
						</li>
						<li>
							<a href="#">Our Company
                                <i class="fas fa-angle-down"></i>
                                <span>
                                    <i class="fas fa-angle-right"></i>
                                </span>
                            </a>
							<ul class="sub-menu">
								<li><a href="{{url('/about')}}">About</a></li>
								<li><a href="{{url('/mission&vission')}}">Mission & Vission </a></li>
								<li><a href="{{ url('/') }}">Our Team </a></li>
								<li><a href="{{ url('/') }}">FAQ's </a></li>
							</ul>
						</li>
						<li>
							<a href="#">Loans<i class="fas fa-angle-down"></i><span><i class="fas fa-angle-right"></i></span></a>
							<ul class="sub-menu">
								<li><a href="{{url('/personal')}}">Personal Loan</a></li>
								<li><a href="{{url('/business')}}">Business Loan</a></li>
								<li><a href="{{url('/group')}}">Group Loan</a></li>
								<li><a href="{{url('/product')}}">Product Loan</a></li>
								<li><a href="{{url('/gold')}}">Gold Loan</a></li>
								<li><a href="{{url('/vehicle')}}">Loan Against Vehicle</a></li>
							</ul>
						</li>
                        <li><a href="{{url('/career')}}">Career</a></li>
						<li><a href="{{url('/contact')}}">Contact Us</a></li>
					</ul>
					<div class="nav-btn  d-sm-none d-md-none d-lg-inline-block">
						<a href="https://nofinofinance.in/" target="_blank">Login Menu</a>
					</div>
				</nav>
			</div>
		</div>
	</header>
	<!-- ============================================================== -->
	<!-- Start - Mobile-Menu- Section -->
	<!-- ============================================================= -->
	<div class="mobile-menu">
		<div class="conainer">
			<div class="row">
			<div class="col-lg-3">
				<div class="logo-container">
					<div class="header-logo">
						<a class="mobile-logo" href="{{url('/')}}">
                            <img src="{{asset('assets/images/logo-dark1.png')}}" alt="Mobile Logo">
                        </a>
					</div>
					<div class="menu-toggle">
						<div class="mobile-icon">
							<i class="fas fa-bars"></i>
							<i class="fas fa-times"></i>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-9 col-md-12">
				<div class="header-menu2" >
					<ul>
						<li><a href="{{url('/')}}">Home</a></li>
						<li class="expand"><a class="menu_hide7" href="#"> Our Company
							<div class="menu-toggle2">
								<div class="icon2">
									<span class="plus">+</span>
									<span class="minus">-</span>
								</div>
							</div>
							</a>
							<ul class="menu_open7 sub-menu2">
								<li><a href="{{url('/about')}}">About</a></li>
								<li><a href="{{url('/mission&vission')}}">Mission & Vission </a></li>
								<li><a href="{{url('/')}}">Our Team </a></li>
								<li><a href="{{url('/')}}">FAQ's </a></li>
							</ul>
						</li>
						<li class="expand"><a class="menu_hide8" href="#">Loans
							<div class="menu-toggle2">
								<div class="icon2">
									<span class="plus">+</span>
									<span class="minus">-</span>
								</div>
							</div>
							</a>
							<ul class="menu_open8 sub-menu2">
								<li><a href="{{url('/personal')}}">Personal Loan</a></li>
								<li><a href="{{url('/business')}}">Business Loan</a></li>
								<li><a href="{{url('/group')}}">Group Loan</a></li>
								<li><a href="{{url('/product')}}">Product Loan</a></li>
								<li><a href="{{url('/gold')}}">Gold Loan</a></li>
								<li><a href="{{url('/vehicle')}}">Loan Against Vehicle</a></li>
							</ul>
						</li>
						<li><a href="{{url('/career')}}">Career</a></li>
						<li><a href="{{url('/contact')}}">Contact Us</a></li>
                        <hr>
					</ul>

                    <div class="nav-btn d-sm-none mb-3">
						<a href="https://nofinofinance.in/" target="_blank">Login Menu</a>
					</div>
				</div>
				</div>
			</div>
		</div>
	</div>
    <!----==========================================----------->
