<!DOCTYPE HTML>
<html lang="ru">
<head>
	<title>Chip Tuning</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">


	<!-- Font -->

	{{-- <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet"> --}}
	<link href="https://fonts.googleapis.com/css?family=Comfortaa:400,700&amp;subset=cyrillic" rel="stylesheet">


	<!-- Stylesheets -->

	<link href="common-css/bootstrap.css" rel="stylesheet">

	<link href="common-css/ionicons.css" rel="stylesheet">

	<link href="common-css/layerslider.css" rel="stylesheet">

	<link href="01-homepage/css/styles.css" rel="stylesheet">

	<link href="01-homepage/css/responsive.css" rel="stylesheet">

</head>
<body>

	<header>

		<div class="top-menu">

			<ul class="left-area welcome-area">
				<li><a href="tel:+380672690360">(067)269-03-60</a> &nbsp; <a href="tel:+380960788080">(096)078-80-80</a> &nbsp; <a href="tel:+380930788080">(093)078-80-80</a></li>
			</ul><!-- left-area -->


			<div class="right-area">

				<div class="src-area">
					<form action="post">
						<input class="src-input" type="text" placeholder="Поиск">
						<button class="src-btn" type="submit"><i class="ion-ios-search-strong"></i></button>
					</form>
				</div><!-- src-area -->

				<ul class="social-icons">
					<li><a href="#"><i class="ion-social-facebook-outline"></i></a></li>
					<li><a href="#"><i class="ion-social-twitter-outline"></i></a></li>
					<li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
					<li><a href="#"><i class="ion-social-vimeo-outline"></i></a></li>
					<li><a href="#"><i class="ion-social-pinterest-outline"></i></a></li>
				</ul><!-- right-area -->

			</div><!-- right-area -->

		</div><!-- top-menu -->

		<div class="middle-menu center-text row">
			<h3 class="col-md-5 my-auto">Удаление ДПФ фильтра</h3>
				<a class="col-md-2" href="{{route('page.index')}}" class="logo">
					<img style="max-width: 150px;" src="{{asset('img/site/common/ChipTuning.jpg')}}" alt="Chip Tuning">
				</a>
			<h3 class="col-md-5 my-auto">Чип тюнинг вашего авто</h3>
		</div>

		<div class="bottom-area">

			<div class="menu-nav-icon" data-nav-menu="#main-menu"><i class="ion-navicon"></i></div>

			<ul class="main-menu visible-on-click" id="main-menu">
				<li {{-- class="drop-down" --}}><a href="#!">ПРОГРАММИРОВАНИЕ ЕБУ{{-- <i class="ion-ios-arrow-down"></i> --}}</a>

					{{-- <ul class="drop-down-menu">
						<li><a href="#">FEATURED</a></li>
						<li><a href="#">ABOUT</a></li>
						<li class="drop-down"><a href="#!">CATEGORIES<i class="ion-ios-arrow-right"></i></a>
							<ul class="drop-down-menu drop-down-inner">
								<li><a href="#">FEATURED</a></li>
								<li><a href="#">ABOUT</a></li>
								<li><a href="#">CATEGORIES</a></li>
							</ul>
						</li>
					</ul> --}}

				</li>
				<li><a href="#">ПРОГРАММИРОВАНИЕ</a></li>
				<li><a href="#">СТАТЬИ</a></li>
				<li><a href="#">НОВОСТИ</a></li>
				<li><a href="#">КОНТАКТЫ</a></li>
			</ul><!-- main-menu -->

		</div><!-- conatiner -->
	</header>
	@yield('content')
	<section class="footer-instagram-area">

		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<h5 class="title"><b class="light-color">Follow me &copy; instagram</b></h5>
				</div><!-- col-lg-4 -->
			</div><!-- row -->
		</div><!-- container -->

		<ul class="instagram">
			<li><a href="#"><img src="images/instragram-1-300x400.jpg" alt="Instagram Image"></a></li>
			<li><a href="#"><img src="images/instragram-2-300x400.jpg" alt="Instagram Image"></a></li>
			<li><a href="#"><img src="images/instragram-3-300x400.jpg" alt="Instagram Image"></a></li>
			<li><a href="#"><img src="images/instragram-4-300x400.jpg" alt="Instagram Image"></a></li>
			<li><a href="#"><img src="images/instragram-5-300x400.jpg" alt="Instagram Image"></a></li>
			<li><a href="#"><img src="images/instragram-6-300x400.jpg" alt="Instagram Image"></a></li>
			<li><a href="#"><img src="images/instragram-7-300x400.jpg" alt="Instagram Image"></a></li>
		</ul>
	</section><!-- section -->


	<footer>
		<div class="container">
			<div class="row">

				<div class="col-sm-6">
					<div class="footer-section">
						<p class="copyright">Juli &copy; 2018. All rights reserved. </p>
					</div><!-- footer-section -->
				</div><!-- col-lg-4 col-md-6 -->

				<div class="col-sm-6">
					<div class="footer-section">
						<ul class="social-icons">
							<li><a href="#"><i class="ion-social-facebook-outline"></i></a></li>
							<li><a href="#"><i class="ion-social-twitter-outline"></i></a></li>
							<li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
							<li><a href="#"><i class="ion-social-vimeo-outline"></i></a></li>
							<li><a href="#"><i class="ion-social-pinterest-outline"></i></a></li>
						</ul>
					</div><!-- footer-section -->
				</div><!-- col-lg-4 col-md-6 -->

			</div><!-- row -->
		</div><!-- container -->
	</footer>


	<!-- SCIPTS -->

	<script src="common-js/jquery-3.1.1.min.js"></script>

	<script src="common-js/tether.min.js"></script>

	<script src="common-js/bootstrap.js"></script>

	<script src="common-js/layerslider.js"></script>

	<script src="common-js/scripts.js"></script>

</body>
</html>
