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

						@if(count($serviceItems))
							<div class="container">
								<div class="row justify-content-center">
									@foreach($serviceItems as $serviceItem)

										<div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-5">
											<div class="card rounded" style="box-shadow: 0px 10px 40px rgba(0,0,0,.2); height: 100%;">
								    			<img class="card-img-top p-2" style="height: 50%; object-fit: contain;" src="{{ $serviceItem->main_photo ? asset($serviceItem->main_photo) : asset('img/site/common/default.png') }}" alt="{{$serviceItem->title}}">
								  				<div class="card-body text-center">
								    				<h5 class="card-title"><a href="{{route('page.service.item', $serviceItem->id)}}"><strong>{{$serviceItem->title}}</strong></a></h5>
								    				<p class="card-text p-2" style="font-size: 12px;">{{$serviceItem->short_description}}</p>
								  				</div>
											</div>
										</div>

									@endforeach
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
						@endif
						<h3 class="title mb-2 text-center"><b class="light-color">Обращаясь в BOSH Service АвтоДром Вы получаете гарантировано высокий уровень обслуживания!!!</b></h3>
						<div class="row mb-5" style="justify-content: center;">
							<div class="col-md-3 m-auto">
								<img class="img-fluid rounded" src="{{asset('img/site/index/WRB_215.jpg')}}">
							</div>	
	        				<h4 class="title text-justify mt-4 mb-4 mx-auto col-md-6" style="font-size: 16px;"><b class="light-color">Мы используем лицензионное оборудование и программное обеспечение Работы по чип-тюнингу выполняются опытными квалифицированными специалистами с большим опытом работы. Перед началом работ проводится бесплатная диагностика. Мы не «чипуем» неисправные авто! Мы предоставляем гарантию на наши услуги.</b></h4>
	        				<div class="col-md-3 m-auto">
								<img class="img-fluid rounded" src="{{asset('img/site/index/comp.jpg')}}">
							</div>
						</div>
						
						<style>
						/* Slideshow container */
						.slideshow-container {
						  max-width: 1000px;
						  position: relative;
						  margin: auto;
						}

						/* Next & previous buttons */
						.prev, .next {
						  cursor: pointer;
						  position: absolute;
						  top: 50%;
						  width: auto;
						  padding: 16px;
						  margin-top: -22px;
						  color: white;
						  font-weight: bold;
						  font-size: 18px;
						  transition: 0.6s ease;
						  background-color: #4b8fcc21;
						  border-radius: 3px;
						}

						/* Position the "next button" to the right */
						.next {
						  right: 0;
						}

						/* On hover, add a black background color with a little bit see-through */
						.prev:hover, .next:hover {
						  background-color: #4b8fcc;
						}

						/* Caption text */
						.text-caption {
						  color: black;
						  font-size: 1.2em;
						  padding: 8px 12px;
						  bottom: 8px;
						  text-align: center;
						  min-height: 6em;
						}

						/* Number text (1/3 etc) */
						.numbertext {
						  color: #f2f2f2;
						  font-size: 12px;
						  padding: 8px 12px;
						  position: absolute;
						  top: 0;
						}

						/* The dots/bullets/indicators */
						.dot {
						  cursor: pointer;
						  height: 15px;
						  width: 15px;
						  margin: 0 2px;
						  background-color: #bbb;
						  border-radius: 50%;
						  display: inline-block;
						  transition: background-color 0.6s ease;
						}

						.active, .dot:hover {
						  background-color: #717171;
						}

						/* Fading animation */
						.fade-m {
						  -webkit-animation-name: fade;
						  -webkit-animation-duration: 1.5s;
						  animation-name: fade;
						  animation-duration: 1.5s;
						}

						@-webkit-keyframes fade {
						  from {opacity: .4} 
						  to {opacity: 1}
						}

						@keyframes fade-m {
						  from {opacity: .4} 
						  to {opacity: 1}
						}

						/* On smaller screens, decrease text size */
						@media only screen and (max-width: 300px) {
						  .prev, .next,.text-caption {font-size: 11px}
						}

						</style>
						
						@if(count($feedbackItems))
						<section>
						  <div class="slideshow-container">
						  	@foreach($feedbackItems as $feedbackItem)
						    <div class="mySlides fade-m row" style="text-align: center;">
						      <img src="{{ $feedbackItem->main_photo ? asset($feedbackItem->main_photo) : asset('img/site/common/default.png') }}" alt="{{$feedbackItem->title}}" style="max-width:210px">
						      <div class="text-caption"><a href="{{route('page.feedback.item', $feedbackItem->id)}}"><strong>{{$feedbackItem->title}}</strong></a><br>
						        {{$feedbackItem->short_description}}
						      </div>
						    </div>
						    @endforeach

						    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
						    <a class="next" onclick="plusSlides(1)">&#10095;</a>
						  </div>
						  <br>
						  <div style="text-align:center">
						  	@for($i = 1; $i <= count($feedbackItems); $i++)
						    	<span class="dot" onclick="currentSlide({{$i}})"></span> 
						    @endfor
						  </div>
						</section>

						<script>
							var slideIndex = 1;
							showSlides(slideIndex);

							function plusSlides(n) {
							  showSlides(slideIndex += n);
							}

							function currentSlide(n) {
							  showSlides(slideIndex = n);
							}

							function showSlides(n) {
							  var i;
							  var slides = document.getElementsByClassName("mySlides");
							  var dots = document.getElementsByClassName("dot");
							  if (n > slides.length) {slideIndex = 1}    
							  if (n < 1) {slideIndex = slides.length}
							  for (i = 0; i < slides.length; i++) {
							      slides[i].style.display = "none";  
							  }
							  for (i = 0; i < dots.length; i++) {
							      dots[i].className = dots[i].className.replace(" active", "");
							  }
							  slides[slideIndex-1].style.display = "block";  
							  dots[slideIndex-1].className += " active";
							}

						</script>

						@endif

					</div><!-- blog-posts -->
				</div><!-- col-lg-4 -->
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- section -->
@endsection
