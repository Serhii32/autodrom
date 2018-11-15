@extends('shared.master')

@section('content')
	<div class="empty-slider"></div>

	<section class="section blog-area">
		<div class="container">
			<div class="row">

				<div class="col-12">
					<div class="blog-posts">

						<h3 class="title mb-2 text-center"><b class="light-color">Chip-tuning от Автодрома</b></h3>
						<div class="row mb-5" style="justify-content: center;">
							<div class="col-12">
								<h4 class="title mb-2 text-center"><b class="light-color">Вы узнаете на что способен Ваш автомобиль!</b></h4>
								
	        					<h4 class="title text-center mt-4 mb-4 mx-auto" style="font-size: 16px;"><b class="light-color">Мы предлагаем эффективное увеличение мощности автомобиля, отключение систем <strong>DPF, EGR, AdBlue</strong></b></h4>
							</div>
						</div>

						<div class="row">
							<div class="col-12 col-lg-4">
								@if(count($actionItems))
									<div class="container">
										<div class="row justify-content-center">
											<h3 class="text-center mt-4">Акции</h3>
											@foreach($actionItems as $actionItem)
												<div class="col-12 mb-2">
													<a style="display: block;" href="{{route('page.pro-action.item', $actionItem->id)}}">
														<div class="rounded row" style="box-shadow: 0px 10px 40px rgba(0,0,0,.2);">
															<div class="col-12 text-center">
																<img class="p-3" style="height: 150px; width: auto; object-fit: contain;" src="{{ $actionItem->main_photo ? asset($actionItem->main_photo) : asset('img/site/common/default.png') }}" alt="{{$actionItem->title}}">
															</div>
											  				<div class="text-center col-12 p-4">
											    				<h5 class="card-title"><strong>{{$actionItem->title}}</strong></h5>
											    				<p class="card-text p-2" style="font-size: 12px;">{{$actionItem->short_description}}</p>
											  				</div>
														</div>
													</a>
												</div>
											@endforeach
										</div>
									</div>
								@endif
							</div>
							<div class="col-12 col-lg-4">
								@if(count($frontServiceItems))
									<div class="container">
										<div class="row justify-content-center">
											<h3 class="text-center mt-4">Услуги</h3>
											@foreach($frontServiceItems as $frontServiceItem)
												<div class="col-12 mb-2">
													<a style="display: block;" href="{{route('page.service.item', $frontServiceItem->id)}}">
														<div class="rounded row" style="box-shadow: 0px 10px 40px rgba(0,0,0,.2);">
															<div class="col-12 text-center">
																<img class="p-3" style="height: 150px; width: auto; object-fit: contain;" src="{{ $frontServiceItem->main_photo ? asset($frontServiceItem->main_photo) : asset('img/site/common/default.png') }}" alt="{{$frontServiceItem->title}}">
															</div>
											  				<div class="text-center col-12 p-4">
											    				<h5 class="card-title"><strong>{{$frontServiceItem->title}}</strong></h5>
											    				<p class="card-text p-2" style="font-size: 12px;">{{$frontServiceItem->short_description}}</p>
											  				</div>
														</div>
													</a>
												</div>
											@endforeach
										</div>
									</div>
								@endif
							</div>
							<div class="col-12 col-lg-4">
								@if(count($blogItems))
									<div class="container">
										<div class="row justify-content-center">
											<h3 class="text-center mt-4">Новости</h3>
											@foreach($blogItems as $blogItem)
												<div class="col-12 mb-2">
													<a style="display: block;" href="{{route('page.blog.item', $blogItem->id)}}">
														<div class="rounded row" style="box-shadow: 0px 10px 40px rgba(0,0,0,.2);">
															<div class="col-12 text-center">
																<img class="p-3" style="height: 150px; width: auto; object-fit: contain;" src="{{ $blogItem->main_photo ? asset($blogItem->main_photo) : asset('img/site/common/default.png') }}" alt="{{$blogItem->title}}">
															</div>
											  				<div class="text-center col-12 p-4">
											    				<h5 class="card-title"><strong>{{$blogItem->title}}</strong></h5>
											    				<p class="card-text p-2" style="font-size: 12px;">{{$blogItem->short_description}}</p>
											  				</div>
														</div>
													</a>
												</div>
											@endforeach
										</div>
									</div>
								@endif
							</div>
						</div>

						
						<h3 class="title mb-2 mt-3 text-center"><b class="light-color">Обращаясь в BOSCH Service АвтоДром Вы получаете гарантировано высокий уровень обслуживания!!!</b></h3>
						<div class="row mb-5" style="justify-content: center;">
							<div class="col-md-3 m-auto">
								<img class="img-fluid rounded" src="{{asset('img/site/index/WRB_215.jpg')}}">
							</div>
	        				<h4 class="title text-justify mt-4 mb-4 mx-auto col-md-6" style="font-size: 16px;"><b class="light-color">
	        				— Мы используем лицензионное оборудование и программное обеспечение<br>
	        				— Работы по чип-тюнингу выполняются опытными квалифицированными специалистами с большим опытом работы<br>
	        				— Перед началом работ проводится бесплатная диагностика<br>
	        				— Мы не «чипуем» неисправные авто!<br>
	        				— Мы предоставляем гарантию на наши услуги.</b></h4>
	        				<div class="col-md-3 m-auto">
								<img class="img-fluid rounded" src="{{asset('img/site/index/comp.jpg')}}">
							</div>
						</div>

						@if(count($feedbackItems))
							<link href="{{asset('/css/flickity.min.css')}}" rel="stylesheet">
							<script src="{{asset('/js/flickity.pkgd.min.js')}}"></script>
							<style>
								.carousel {
								  background: #FAFAFA;
								}

								.carousel-cell {
								  width: 66%;
								  height: 400px;
								  margin-right: 10px;
								  background: #333;
								}
								
								@media(max-width: 700px)
								{
									.carousel-cell {
									  width: 100%!important;
									  height: 400px;
									  margin-right: 10px;
									  background: #333;
									}
								}

								.carousel-cell-image {
								  display: block;
								  max-height: 100%;
								  margin: 0 auto;
								  max-width: 100%;
								  opacity: 0;
								  -webkit-transition: opacity 0.4s;
								          transition: opacity 0.4s;
								}

								.flickity-viewport {
									height: 685px !important;
								}

								/* fade in lazy loaded image */
								.carousel-cell-image.flickity-lazyloaded,
								.carousel-cell-image.flickity-lazyerror {
								  opacity: 1;
								}
							</style>
							<h3 class="text-center m-3">Наши работы</h3>
							<div class="main-carousel" data-flickity='{ "imagesLoaded": true, "percentPosition": false, "autoPlay": 2000, "groupCells": true }'>
							@foreach($feedbackItems as $feedbackItem)
							  <div class="carousel-cell" style="background: transparent; width: 40%;">
							  	<a href="{{route('page.feedback.item', $feedbackItem->id)}}">
								  	<img style="display: block; margin: auto; height: 480px; /*width: 100%;*/ object-fit: cover;" src="{{ $feedbackItem->main_photo ? asset($feedbackItem->main_photo) : asset('img/site/common/default.png') }}" alt="{{$feedbackItem->title}}">
								  	<h3 style="text-align: center;">{{$feedbackItem->title}}</h3>
								  	<p style="text-align: center; font-size: 15px;">{{$feedbackItem->short_description}}</p>
							  </a>
							  </div>
							 @endforeach
							</div>

						@endif

					</div><!-- blog-posts -->
				</div><!-- col-lg-4 -->
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- section -->
@endsection