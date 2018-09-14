@extends('shared.master')

@section('content')
	<div class="main-slider">
		<div id="slider">

			<div class="ls-slide" data-ls="bgsize:cover; bgposition:50% 50%; duration:4000; transition2d:104; kenburnsscale:1.00;">
				<img src="{{asset('img/site/index/slider1.jpg')}}" class="ls-bg" alt="" />

					<div class="slider-content ls-l" style="top:60%; left:30%;" data-ls="offsetyin:100%; offsetxout:-50%; durationin:800; delayin:100; durationout:400; parallaxlevel:0;">
						<a class="btn" href="#">TRAVEL</a>
						<h3 class="title"><b>Travel, Love, Live</b></h3>
						<h6>29 October, 2017</h6>
					</div>

			</div><!-- ls-slide -->

			<div class="ls-slide" data-ls="bgsize:cover; bgposition:50% 50%; duration:4000; transition2d:104; kenburnsscale:1.00;">
				<img src="{{asset('img/site/index/slider2.jpg')}}" class="ls-bg" alt="" />

					<div class="slider-content ls-l" style="top:60%; left:30%;" data-ls="offsetyin:100%; offsetxout:-50%; durationin:800; delayin:100; durationout:400; parallaxlevel:0;">
						<a class="btn" href="#">TRAVEL</a>
						<h3 class="title"><b>Travel, Love, Live</b></h3>
						<h6>29 October, 2017</h6>
					</div>

			</div><!-- ls-slide -->

		</div><!-- slider -->
	</div><!-- main-slider -->

	<section class="section blog-area">
		<div class="container">
			<div class="row">

				<div class="col-12">
					<div class="blog-posts">

						<h3 class="title mb-2 text-center"><b class="light-color">Chip-tuning от Автодрома</b></h3>
						<div class="row mb-5" style="justify-content: center;">
							<div class="col-12">
								<h4 class="title mb-2 text-center"><b class="light-color">Вы узнаете на что способен Ваш автомобиль!</b></h4>
								<div class="col-md-10 m-auto">
									<img class="img-fluid rounded" src="{{asset('img/site/index/tuning.jpg')}}">
								</div>	
	        					<h4 class="title text-center mt-4 mb-4 mx-auto" style="font-size: 16px;"><b class="light-color">Мы предлагаем эффективное увеличение мощности автомобиля, отключение систем <strong>DPF, EGR, AdBlue</strong></b></h4>
							</div>
						</div>

						<div class="container">
							<div class="row justify-content-center">
								<div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-5">
									<div class="card rounded" style="box-shadow: 0px 10px 40px rgba(0,0,0,.2); height: 100%;">
						    			<img class="card-img-top p-2" style="height: 50%; object-fit: contain;" src="{{asset('img/site/index/dpf.jpg')}}" alt="Card image cap">
						  				<div class="card-body text-center">
						    				<h6 class="card-title"><strong>Удаление сажевого фильтра  DPF/FOP</strong></h6>
						    				<p class="card-text p-2" style="font-size: 12px;">Ефективное решение проблемы с сажевым фильтром DPF/FOP раз и навсегда!</p>
						  				</div>
									</div>
								</div>
								<div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-5">
									<div class="card rounded" style="box-shadow: 0px 10px 40px rgba(0,0,0,.2); height: 100%;">
						    			<img class="card-img-top p-2" style="height: 50%; object-fit: contain;" src="{{asset('img/site/index/egr_off.jpg')}}" alt="Card image cap">
						  				<div class="card-body text-center">
						    				<h6 class="card-title"><strong>Отключение системы рециркуляции выхлопных газов (клапан EGR)</strong></h6>
						    				<p class="card-text p-2" style="font-size: 12px;">Продлите жизнь двигателя Вашего автомобиля, он будет дышать чистым воздухом!</p>
						  				</div>
									</div>
								</div>
								<div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-5">
									<div class="card rounded" style="box-shadow: 0px 10px 40px rgba(0,0,0,.2); height: 100%;">
						    			<img class="card-img-top p-2" style="height: 50%; object-fit: contain;" src="{{asset('img/site/index/chip_tuning.jpg')}}" alt="Card image cap">
						  				<div class="card-body text-center">
						    				<h6 class="card-title"><strong>Увеличение мощности</strong></h6>
						    				<p class="card-text p-2" style="font-size: 12px;">Улучшение динамики 30% (Stage 1), без потери в экономичности</p>
						  				</div>
									</div>
								</div>
								<div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-5">
									<div class="card rounded" style="box-shadow: 0px 10px 40px rgba(0,0,0,.2); height: 100%;">
						    			<img class="card-img-top p-2" style="height: 50%; object-fit: contain;" src="{{asset('img/site/index/catalyst.jpg')}}" alt="Card image cap">
						  				<div class="card-body text-center">
						    				<h6 class="card-title"><strong>Отключение Катализатора</strong></h6>
						    				<p class="card-text p-2" style="font-size: 12px;">Отключение второго лямбда зонда. Перевод автомобиля на Евро2.</p>
						  				</div>
									</div>
								</div>
								<div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-5">
									<div class="card rounded" style="box-shadow: 0px 10px 40px rgba(0,0,0,.2); height: 100%;">
						    			<img class="card-img-top p-2" style="height: 50%; object-fit: contain;" src="{{asset('img/site/index/AdBlue.jpg')}}" alt="Card image cap">
						  				<div class="card-body text-center">
						    				<h6 class="card-title"><strong>Отключение системы AdBlue</strong></h6>
						    				<p class="card-text p-2" style="font-size: 12px;">Автомобиль будет экономнее. Вам не нужно тратится на реагенты.</p>
						  				</div>
									</div>
								</div>
							</div>
						</div>
					</div><!-- blog-posts -->
				</div><!-- col-lg-4 -->
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- section -->
@endsection
