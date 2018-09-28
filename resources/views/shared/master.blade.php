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

	<link href="{{asset('common-css/bootstrap.css')}}" rel="stylesheet">

	<link href="{{asset('common-css/ionicons.css')}}" rel="stylesheet">

	<link href="{{asset('common-css/layerslider.css')}}" rel="stylesheet">

	<link href="{{asset('01-homepage/css/styles.css')}}" rel="stylesheet">

	<link href="{{asset('01-homepage/css/responsive.css')}}" rel="stylesheet">

</head>
<body>
	@auth <a style="position: fixed; bottom: 0px; right: 0px; font-size: 30px; z-index: 100; font-style: normal; font-weight: 800;" class="btn btn-danger" href="{{route('admin/home.index')}}">Адмінка</a> @endauth
	<header>

		<div class="top-menu">

			<ul class="left-area">
				<li style="padding-left: 10px;"><a href="tel:+380672690360">(067)269-03-60</a> &nbsp; <a href="tel:+380960788080">(096)078-80-80</a> &nbsp; <a href="tel:+380930788080">(093)078-80-80</a></li>
			</ul><!-- left-area -->

			{{-- <div class="right-area">

				<div class="src-area">
					<form action="post">
						<input class="src-input" type="text" placeholder="Поиск">
						<button class="src-btn" type="submit"><i class="ion-ios-search-strong"></i></button>
					</form>
				</div><!-- src-area -->

			</div><!-- right-area --> --}}

		</div><!-- top-menu -->

		<div class="middle-menu center-text row">
			<a class="col-8 col-md-2 m-auto" href="{{route('page.index')}}" class="logo">
				<img {{-- style="max-width: 120px;" --}} src="{{asset('img/site/common/ChipTuning.jpg')}}" alt="Chip Tuning">
			</a>
			{{-- <h3 class="col-6 col-md-4 my-auto" style="font-size: 1.2rem;">Удаление ДПФ фильтра</h3> --}}

			<div class="main-slider col-12 col-md-8">
				<div id="slider">

					<div class="ls-slide" data-ls="bgsize:cover; bgposition:50% 50%; duration:4000; transition2d:104; kenburnsscale:1.00;">
						<img src="{{asset('img/site/index/slider1.jpg')}}" class="ls-bg" alt="" />

							{{-- <div class="slider-content ls-l" style="top:60%; left:30%;" data-ls="offsetyin:100%; offsetxout:-50%; durationin:800; delayin:100; durationout:400; parallaxlevel:0;">
								<a class="btn" href="#">TRAVEL</a>
								<h3 class="title"><b>Travel, Love, Live</b></h3>
								<h6>29 October, 2017</h6>
							</div> --}}

					</div><!-- ls-slide -->

					<div class="ls-slide" data-ls="bgsize:cover; bgposition:50% 50%; duration:4000; transition2d:104; kenburnsscale:1.00;">
						<img src="{{asset('img/site/index/slider2.jpg')}}" class="ls-bg" alt="" />

							{{-- <div class="slider-content ls-l" style="top:60%; left:30%;" data-ls="offsetyin:100%; offsetxout:-50%; durationin:800; delayin:100; durationout:400; parallaxlevel:0;">
								<a class="btn" href="#">TRAVEL</a>
								<h3 class="title"><b>Travel, Love, Live</b></h3>
								<h6>29 October, 2017</h6>
							</div> --}}

					</div><!-- ls-slide -->

					<div class="ls-slide" data-ls="bgsize:cover; bgposition:50% 50%; duration:4000; transition2d:104; kenburnsscale:1.00;">
						<img src="{{asset('img/site/index/slider3.jpg')}}" class="ls-bg" alt="" />

							{{-- <div class="slider-content ls-l" style="top:60%; left:30%;" data-ls="offsetyin:100%; offsetxout:-50%; durationin:800; delayin:100; durationout:400; parallaxlevel:0;">
								<a class="btn" href="#">TRAVEL</a>
								<h3 class="title"><b>Travel, Love, Live</b></h3>
								<h6>29 October, 2017</h6>
							</div> --}}

					</div><!-- ls-slide -->

					<div class="ls-slide" data-ls="bgsize:cover; bgposition:50% 50%; duration:4000; transition2d:104; kenburnsscale:1.00;">
						<img src="{{asset('img/site/index/slider4.jpg')}}" class="ls-bg" alt="" />

							{{-- <div class="slider-content ls-l" style="top:60%; left:30%;" data-ls="offsetyin:100%; offsetxout:-50%; durationin:800; delayin:100; durationout:400; parallaxlevel:0;">
								<a class="btn" href="#">TRAVEL</a>
								<h3 class="title"><b>Travel, Love, Live</b></h3>
								<h6>29 October, 2017</h6>
							</div> --}}

					</div><!-- ls-slide -->

					<div class="ls-slide" data-ls="bgsize:cover; bgposition:50% 50%; duration:4000; transition2d:104; kenburnsscale:1.00;">
						<img src="{{asset('img/site/index/slider5.jpg')}}" class="ls-bg" alt="" />

							{{-- <div class="slider-content ls-l" style="top:60%; left:30%;" data-ls="offsetyin:100%; offsetxout:-50%; durationin:800; delayin:100; durationout:400; parallaxlevel:0;">
								<a class="btn" href="#">TRAVEL</a>
								<h3 class="title"><b>Travel, Love, Live</b></h3>
								<h6>29 October, 2017</h6>
							</div> --}}

					</div><!-- ls-slide -->

				</div><!-- slider -->
			</div><!-- main-slider -->

			{{-- <h3 class="col-6 col-md-4 my-auto" style="font-size: 1.2rem;">Чип тюнинг вашего авто</h3> --}}
			<a class="col-8 col-md-2 m-auto" href="{{route('page.index')}}" class="logo">
				<img {{-- style="max-width: 120px;" --}} src="{{asset('img/site/common/BoschService.jpg')}}" alt="Bosch Service">
			</a>
		</div>

		<div class="bottom-area">

			<div class="menu-nav-icon" data-nav-menu="#main-menu"><i class="ion-navicon"></i></div>

			<ul class="main-menu visible-on-click" id="main-menu">
				@if(count($serviceTitles))
					<li class="drop-down"><a href="{{route('page.service')}}">УСЛУГИ<i class="ion-ios-arrow-down"></i></a>
						<ul class="drop-down-menu">
							@foreach($serviceTitles as $serviceTitle)
								<li><a href="{{route('page.service.item', $serviceTitle['id'])}}">{{$serviceTitle['title']}}</a></li>
							@endforeach

							
							{{-- <li><a href="#">ПРОГРАММИРОВАНИЕ</a></li>
							<li><a href="#">ОТКЛЮЧЕНИЕ СИСТЕМЫ РЕЦИРКУЛЯЦИИ ВЫХЛОПНЫХ ГАЗОВ (КЛАПАН EGR)</a></li>
							<li><a href="#">УВЕЛИЧЕНИЕ МОЩНОСТИ</a></li>
							<li><a href="#">ОТКЛЮЧЕНИЕ КАТАЛИЗАТОРА</a></li>
							<li><a href="#">ОТКЛЮЧЕНИЕ СИСТЕМЫ ADBLUE</a></li> --}}
						</ul>
					</li>
				@else
					<li><a href="{{route('page.service')}}">УСЛУГИ</a>
				@endif
				<li><a href="{{route('page.article')}}">СТАТЬИ</a></li>
				@if(count($blogTitlesCategories))
					<li class="drop-down"><a href="{{route('page.blog')}}">НОВОСТИ<i class="ion-ios-arrow-down"></i></a>
						<ul class="drop-down-menu">
							@foreach($blogTitlesCategories as $blogTitleCategory)
								<li><a href="{{route('page.category.item', $blogTitleCategory['id'])}}">{{$blogTitleCategory['title']}}</a></li>
							@endforeach
						</ul>
					</li>
				@else
					<li><a href="{{route('page.blog')}}">НОВОСТИ</a></li>
				@endif
				<li><a href="{{route('page.contacts')}}">КОНТАКТЫ</a></li>
			</ul><!-- main-menu -->

		</div><!-- conatiner -->
	</header>
	@yield('content')
	{{-- <section class="footer-instagram-area">

		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<h5 class="title"><b class="light-color">Follow me &copy; instagram</b></h5>
				</div><!-- col-lg-4 -->
			</div><!-- row -->
		</div><!-- container -->

		<ul class="instagram">
			<li><a href="#"><img src="{{asset('images/instragram-1-300x400.jpg')}}" alt="Instagram Image"></a></li>
			<li><a href="#"><img src="{{asset('images/instragram-2-300x400.jpg')}}" alt="Instagram Image"></a></li>
			<li><a href="#"><img src="{{asset('images/instragram-3-300x400.jpg')}}" alt="Instagram Image"></a></li>
			<li><a href="#"><img src="{{asset('images/instragram-4-300x400.jpg')}}" alt="Instagram Image"></a></li>
			<li><a href="#"><img src="{{asset('images/instragram-5-300x400.jpg')}}" alt="Instagram Image"></a></li>
			<li><a href="#"><img src="{{asset('images/instragram-6-300x400.jpg')}}" alt="Instagram Image"></a></li>
			<li><a href="#"><img src="{{asset('images/instragram-7-300x400.jpg')}}" alt="Instagram Image"></a></li>
		</ul>
	</section><!-- section --> --}}


	<footer class="p-5">
		<div class="container">
			<div class="row">

				<div class="col-12 col-sm-6">
					{{-- <div class="footer-section"> --}}
						@if(session('mailmessage'))
							<div class="alert alert-info">
								<h4 class="text-center">{{session('mailmessage')}}</h4>
							</div>
						@else
							<h4 class="text-center">ОСТАВИТЬ ЗАЯВКУ</h4>
							{!! Form::open(['route'=>'mail.send']) !!}
								<div class="form-group">
		                            {!! Form::label('name', 'Имя:', ['class' => 'text-uppercase font-weight-bold']) !!}
		                            {!! Form::text('name', old('name'), ['placeholder'=>'Имя'] + ($errors->has('name') ? ['class'=>'form-control is-invalid'] : ['class'=>'form-control'])) !!}
		                            <span class="text-danger">{{ $errors->first('name') }}</span>
		                        </div>
		                        <div class="form-group">
		                            {!! Form::label('tel', 'Телефон:', ['class' => 'text-uppercase font-weight-bold']) !!}
		                            {!! Form::number('tel', old('tel'), ['placeholder'=>'Телефон'] + ($errors->has('tel') ? ['class'=>'form-control is-invalid'] : ['class'=>'form-control'])) !!}
		                            <span class="text-danger">{{ $errors->first('tel') }}</span>
		                        </div>
								<div class="form-group">
		                            {!! Form::submit('Отправить', ['class'=>'btn btn-success w-100 text-uppercase font-weight-bold', 'style'=>'cursor:pointer']) !!}
		                        </div>
		                    {!! Form::close() !!}
	                    @endif
	                    <p class="copyright p-2">Адрес: улица Воинов-Интернационалистов 2б, Винница, Винницкая область, 21000</p>
	                    <p class="copyright p-2">Телефоны: <a href="tel:+380672690360">(067)269-03-60</a> &nbsp; <a href="tel:+380960788080">(096)078-80-80</a> &nbsp; <a href="tel:+380930788080">(093)078-80-80</a></p>
					{{-- </div><!-- footer-section -->  --}}
				</div><!-- col-lg-4 col-md-6 -->

				<div class="col-12 col-sm-6" style="width: 100%; height: 500px;">
					{!! Mapper::render() !!}
					{{-- <div class="footer-section">
						<ul class="social-icons">
							<li><a href="#"><i class="ion-social-facebook-outline"></i></a></li>
							<li><a href="#"><i class="ion-social-twitter-outline"></i></a></li>
							<li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
							<li><a href="#"><i class="ion-social-vimeo-outline"></i></a></li>
							<li><a href="#"><i class="ion-social-pinterest-outline"></i></a></li>
						</ul>
					</div><!-- footer-section --> --}}
				</div><!-- col-lg-4 col-md-6 -->

			</div><!-- row -->

		</div><!-- container -->
	</footer>


	<!-- SCIPTS -->

	<script src="{{asset('common-js/jquery-3.1.1.min.js')}}"></script>

	<script src="{{asset('common-js/tether.min.js')}}"></script>

	<script src="{{asset('common-js/bootstrap.js')}}"></script>

	<script src="{{asset('common-js/layerslider.js')}}"></script>

	<script src="{{asset('common-js/scripts.js')}}"></script>

</body>
</html>
