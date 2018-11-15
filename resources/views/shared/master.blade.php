<!DOCTYPE HTML>
<html lang="ru">
<head>
	<title>{{ isset($pageTitle) ? $pageTitle : "Chip Tuning" }}</title>
	<meta name="description" content="{{ isset($pageDescription) ? $pageDescription : 'Мы предлагаем эффективное увеличение мощности автомобиля, отключение систем DPF, EGR, AdBlue' }}">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta charset="UTF-8">
    <meta name="author" content="serhii.bondarenko.ria@gmail.com">
    <meta name="keywords" content="{{ isset($pageKeywords) ? $pageKeywords : 'DPF, EGR, AdBlue' }}">
    <link rel="canonical" href="{{ URL::current() }}"/>


	<!-- Font -->

	<link href="https://fonts.googleapis.com/css?family=Comfortaa:400,700&amp;subset=cyrillic" rel="stylesheet">


	<!-- Stylesheets -->

	<link href="{{asset('common-css/bootstrap.css')}}" rel="stylesheet">

	<link href="{{asset('common-css/ionicons.css')}}" rel="stylesheet">

	<link href="{{asset('common-css/layerslider.css')}}" rel="stylesheet">

	<link href="{{asset('01-homepage/css/styles.css')}}" rel="stylesheet">

	<link href="{{asset('01-homepage/css/responsive.css')}}" rel="stylesheet">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async
	src="https://www.googletagmanager.com/gtag/js?id=UA-127047740-1"></script>
	<script>
	   window.dataLayer = window.dataLayer || [];
	   function gtag(){dataLayer.push(arguments);}
	   gtag('js', new Date());

	   gtag('config', 'UA-127047740-1');
	</script>

	@if(!empty(Session::get('error_code')) && Session::get('error_code') == 5)
		<script>
		$(function() {
			$('#myModal').modal('show');
		});
		</script>
	@endif

</head>
<body>
	@auth <a style="position: fixed; bottom: 0px; right: 0px; font-size: 30px; z-index: 100; font-style: normal; font-weight: 800;" class="btn btn-danger" href="{{route('admin/home.index')}}">Адмінка</a> @endauth
	<header id="main-header">

		<div class="middle-menu center-text row">
			<a class="col-8 col-md-2 m-auto" href="{{route('page.index')}}" class="logo">
				<img src="{{asset('img/site/common/ChipTuning.jpg')}}" alt="Chip Tuning">
			</a>

			<div class="main-slider col-12 col-md-8">
				<div id="slider">

					<div class="ls-slide" data-ls="bgsize:cover; bgposition:50% 50%; duration:4000; transition2d:104; kenburnsscale:1.00;">
						<img src="{{asset('img/site/index/slider1.jpg')}}" class="ls-bg" alt="" />

					</div><!-- ls-slide -->

					<div class="ls-slide" data-ls="bgsize:cover; bgposition:50% 50%; duration:4000; transition2d:104; kenburnsscale:1.00;">
						<img src="{{asset('img/site/index/slider2.jpg')}}" class="ls-bg" alt="" />

					</div><!-- ls-slide -->

					<div class="ls-slide" data-ls="bgsize:cover; bgposition:50% 50%; duration:4000; transition2d:104; kenburnsscale:1.00;">
						<img src="{{asset('img/site/index/slider3.jpg')}}" class="ls-bg" alt="" />

					</div><!-- ls-slide -->

					<div class="ls-slide" data-ls="bgsize:cover; bgposition:50% 50%; duration:4000; transition2d:104; kenburnsscale:1.00;">
						<img src="{{asset('img/site/index/slider4.jpg')}}" class="ls-bg" alt="" />

					</div><!-- ls-slide -->

					<div class="ls-slide" data-ls="bgsize:cover; bgposition:50% 50%; duration:4000; transition2d:104; kenburnsscale:1.00;">
						<img src="{{asset('img/site/index/slider5.jpg')}}" class="ls-bg" alt="" />

					</div><!-- ls-slide -->

				</div><!-- slider -->
			</div><!-- main-slider -->

			<a class="col-8 col-md-2 m-auto" href="http://autodrom-service.com.ua/" class="logo" target="_blank">
				<img src="{{asset('img/site/common/BoschService.jpg')}}" alt="Bosch Service">
			</a>
		</div>

		<div id="scrollmenu" class="bottom-area" style="background: #e9eef1">

			<div class="menu-nav-icon" data-nav-menu="#main-menu"><i class="ion-navicon"></i></div>

			<ul class="main-menu visible-on-click" id="main-menu">
				<a id="menu-request-button" style="float: left; margin: 10px 0px 0px 20px; font-size: 18px; padding: 8px; font-style: normal; font-weight: 800;" class="btn btn-danger" href="#footer_form">Оставить заявку</a>
				@if(count($serviceTitles))
					<li class="drop-down"><a href="{{route('page.service')}}">УСЛУГИ<i class="ion-ios-arrow-down"></i></a>
						<ul class="drop-down-menu">
							@foreach($serviceTitles as $serviceTitle)
								<li><a href="{{route('page.service.item', $serviceTitle['id'])}}" class>{{$serviceTitle['title']}}</a></li>
							@endforeach

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
				<li><a href="{{route('page.pro-action')}}">АКЦИИ</a></li>
				<li><a href="{{route('page.contacts')}}">КОНТАКТЫ</a></li>
				<li id="menu-number-1" style="float: right;"><a style="padding: 0 5px; font-size: 17px;" href="tel:+380432558080">(0432)55-80-80</a></li>
				<li id="menu-number-2" style="float: right;"><a style="padding: 0 5px; font-size: 17px;" href="tel:+380960788080">(096)078-80-80</a></li>
				<li id="menu-number-3" style="float: right;"><a style="padding: 0 5px; font-size: 17px;" href="tel:+380930788080">(093)078-80-80</a></li>

			</ul><!-- main-menu -->

		</div><!-- conatiner -->
		<style>
			@media only screen and (max-width: 770px) {
				#menu-request-button {
				    display: none !important;
				}
			}
		</style>
	</header>

	@yield('content')

	<footer class="p-5">
		<div class="container">
			<div class="row">

				<div class="col-12 col-sm-6" id="footer_form">

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
	                    <p class="copyright p-2">Адрес: улица Воинов-Интернационалистов 2б, Винница, Винницкая область, 21029</p>
	                    <p class="copyright p-2">Телефоны: <a href="tel:+380432558080">(0432)55-80-80</a> &nbsp; <a href="tel:+380960788080">(096)078-80-80</a> &nbsp; <a href="tel:+380930788080">(093)078-80-80</a></p>


				</div><!-- col-lg-4 col-md-6 -->

				<div class="col-12 col-sm-6">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3098.2546283737734!2d28.408322195870884!3d49.232588576073354!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x472d5c5bc4d2835b%3A0x172719545f59bd7f!2z0JHQvtGIINCh0LXRgNCy0ZbRgSDQkNCy0YLQvtC00YDQvtC8!5e0!3m2!1suk!2sua!4v1538467366896" frameborder="0" style="border:0; width: 100%; height: 500px;" allowfullscreen></iframe>
					
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

	<script>

		var scrollmenu = $("#scrollmenu");
		$(document).scroll(function(e) {
		    if($(this).scrollTop() > $("#main-header").height()) {
		        scrollmenu.css({"position" : "fixed", "top" : "0", "display" : "block", "width" : "100%", "background" : "#e9eef1"});
		    } else {
		        scrollmenu.css("position", "relative");

		    }
		});
	</script>

</body>
</html>