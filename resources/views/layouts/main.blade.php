<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>SolMusic | HTML Template</title>
	<meta charset="UTF-8">
	<meta name="description" content="SolMusic HTML Template">
	<meta name="keywords" content="music, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!-- Favicon -->
	<link href="{{ asset('front/img/favicon.ico') }}" rel="shortcut icon"/>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i&display=swap" rel="stylesheet">
 
	<!-- Stylesheets -->
	<link rel="stylesheet" href="{{ asset('front/css/bootstrap.min.css') }}"/>
	<link rel="stylesheet" href="{{ asset('front/css/font-awesome.min.css') }}"/>
	<link rel="stylesheet" href="{{ asset('front/css/owl.carousel.min.css') }}"/>
	<link rel="stylesheet" href="{{ asset('front/css/slicknav.min.css') }}"/>

	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="{{ asset('front/css/style.css') }}"/>


	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	<script src="{{ asset('front/js/jquery-3.2.1.min.js') }}"></script>

</head>
<body>
	<!-- Page Preloder -->
	{{-- <div id="preloder">
		<div class="loader"></div>
	</div> --}}

	<!-- Header section -->
	<header class="header-section clearfix">
		<a href="{{ route('index') }}" class="site-logo">
			<img src="{{ asset('front/img/logo-1.png')}}" alt="">
		</a>
		<div class="header-right">
			<span>|</span>
			<div class="user-panel">
                @guest
				<a style="cursor: pointer" 
				data-toggle="modal" 
				data-target="#loginModal" class="login">Login</a>
				<a href="{{ route('register-user') }}" class="register">Create an account</a>
                @else
				<a href="{{ route('signout') }}" class="register">Logout</a>
                @endguest
			</div> 
		</div>
		<ul class="main-menu">
			<li class="active"><a href="{{ route('index') }}">Home</a></li>
			<li><a href="#">Spit Songs</a></li>
			<li><a href="{{route('freestems')}}">Free Stems</a></li>
			<li><a href="#">Blog</a></li>
			<li><a href="{{route('contact')}}">Contact us</a></li>
			<li><a href="#">About</a></li>
		</ul>
	</header>
	<!-- Header section end -->


	@yield('content')


	<!-- Footer section -->
	<footer class="footer-section">
		<div class="container">
			<div class="row">
				<div class="col-xl-6 col-lg-7 order-lg-2">
					<div class="row">
						<div class="col-sm-4">
							<div class="footer-widget">
								<h2>About us</h2>
								<ul>
									<li><a href="">Our Story</a></li>
									<li><a href="">Blog</a></li>
									<li><a href="{{route('contact')}}">Contact</a></li>
								</ul>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="footer-widget">
								<h2>Split</h2>
								<ul>
									<li><a href="">Free Stems</a></li>
									<li><a href="">Split Song</a></li>
									<li><a href="">Custom Music</a></li>
									<li><a href="">Footage</a></li>
								</ul>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="footer-widget">
								<h2>Playlists</h2>
								<ul>
									<li><a href="">Newsletter</a></li>
									<li><a href="">Careers</a></li>
									<li><a href="">Blog</a></li>
									<li><a href="">Contact</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-6 col-lg-5 order-lg-1">
					<img src="{{asset('front/img/logo-1.png')}}" alt="">
					<div class="copyright">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Sample Split</div>
					<div class="social-links">
						<a href=""><i class="fa fa-instagram"></i></a>
						<a href=""><i class="fa fa-facebook"></i></a>
						<a href=""><i class="fa fa-twitter"></i></a>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- Footer section end -->

	@include('partials.login')
	<!--====== Javascripts & Jquery ======-->
	<script src="{{ asset('front/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('front/js/jquery.slicknav.min.js') }}"></script>

	<script src="{{ asset('front/js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('front/js/mixitup.min.js') }}"></script>
	<script src="{{ asset('front/js/main.js') }}"></script>


	<!-- Audio Players js -->
	<script src="{{ asset('front/js/jquery.jplayer.min.js') }}"></script>
	<script src="{{ asset('front/js/wavesurfer.min.js') }}"></script>

	<!-- Audio Players Initialization -->
	<script src="{{ asset('front/js/WaveSurferInit.js') }}"></script>
	<script src="{{ asset('front/js/jplayerInit.js') }}"></script>
	@yield('scripts')
	</body>
</html>