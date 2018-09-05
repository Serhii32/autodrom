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

				<div class="col-lg-8 col-md-12">
					<div class="blog-posts">

						<div class="row mb-5" style="justify-content: center;">
							<h2 class="title mb-2"><b class="light-color">Chip-tuning от Автодрома</b></h2>
							<h3 class="title mb-2"><b class="light-color">Вы узнаете на что способен Ваш автомобиль!</b></h3>
							<div class="col-md-10 my-auto">
								<img class="img-fluid rounded" src="{{asset('img/site/index/tuning.jpg')}}">
							</div>	
        					<p class="col-md-10 title text-center mt-4 mb-4" style="font-size: 20px;"><b class="light-color">Мы предлагаем эффективное увеличение мощности автомобиля, отключение систем <strong>DPF, EGR, AdBlue</strong></b></p>
						</div>

						<div class="container">
							<div class="row justify-content-center">
								<div class="col-12 col-md-6 mb-5">
									<div class="card rounded" style="box-shadow: 0px 10px 40px rgba(0,0,0,.2); height: 75%;">
						    			<img class="card-img-top p-2" src="{{asset('img/site/index/dpf.jpg')}}" alt="Card image cap">
						  				<div class="card-body text-center">
						    				<h4 class="card-title"><strong>Удаление сажевого фильтра  DPF/FOP</strong></h4>
						    				<p class="card-text">Ефективное решение проблемы с сажевым фильтром DPF/FOP раз и навсегда!</p>
						  				</div>
									</div>
								</div>
								<div class="col-12 col-md-6 mb-5">
									<div class="card rounded" style="box-shadow: 0px 10px 40px rgba(0,0,0,.2); height: 75%;">
						    			<img class="card-img-top p-2" src="{{asset('img/site/index/egr_off.jpg')}}" alt="Card image cap">
						  				<div class="card-body text-center">
						    				<h4 class="card-title"><strong>Отключение системы рециркуляции выхлопных газов (клапан EGR)</strong></h4>
						    				<p class="card-text">Продлите жизнь двигателя Вашего автомобиля, он будет дышать чистым воздухом!</p>
						  				</div>
									</div>
								</div>
								<div class="col-12 col-md-6 mb-5">
									<div class="card rounded" style="box-shadow: 0px 10px 40px rgba(0,0,0,.2); height: 75%;">
						    			<img class="card-img-top p-2" src="{{asset('img/site/index/chip_tuning.jpg')}}" alt="Card image cap">
						  				<div class="card-body text-center">
						    				<h4 class="card-title"><strong>Увеличение мощности</strong></h4>
						    				<p class="card-text">Улучшение динамики 30% (Stage 1), без потери в экономичности</p>
						  				</div>
									</div>
								</div>
								<div class="col-12 col-md-6 mb-5">
									<div class="card rounded" style="box-shadow: 0px 10px 40px rgba(0,0,0,.2); height: 75%;">
						    			<img class="card-img-top p-2" src="{{asset('img/site/index/catalyst.jpg')}}" alt="Card image cap">
						  				<div class="card-body text-center">
						    				<h4 class="card-title"><strong>Отключение Катализатора</strong></h4>
						    				<p class="card-text">Отключение второго лямбда зонда. Перевод автомобиля на Евро2.</p>
						  				</div>
									</div>
								</div>
								<div class="col-12 col-md-6 mb-5">
									<div class="card rounded" style="box-shadow: 0px 10px 40px rgba(0,0,0,.2); height: 75%;">
						    			<img class="card-img-top p-2" src="{{asset('img/site/index/AdBlue.jpg')}}" alt="Card image cap">
						  				<div class="card-body text-center">
						    				<h4 class="card-title"><strong>Отключение системы AdBlue</strong></h4>
						    				<p class="card-text">Автомобиль будет экономнее. Вам не нужно тратится на реагенты.</p>
						  				</div>
									</div>
								</div>
							</div>
						</div>



{{-- 
						<div class="single-post">
							<div class="image-wrapper"><img src="images/blog-1-1000x600.jpg" alt="Blog Image"></div>

							<div class="icons">
								<div class="left-area">
									<a class="btn caegory-btn" href="#"><b>TRAVEL</b></a>
								</div>
								<ul class="right-area social-icons">
									<li><a href="#"><i class="ion-android-share-alt"></i>Share</a></li>
									<li><a href="#"><i class="ion-android-favorite-outline"></i>03</a></li>
									<li><a href="#"><i class="ion-android-textsms"></i>06</a></li>
								</ul>
							</div>
							<p class="date"><em>Monday, October 13, 2017</em></p>
							<h3 class="title"><a href="#"><b class="light-color">This is post about travel, adventure and fun</b></a></h3>
							<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
								 laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
								 architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas
								 consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et
								dolore magnam aliquam quaerat voluptatem.</p>
							<a class="btn read-more-btn" href="#"><b>READ MORE</b></a>
						</div><!-- single-post -->

						<div class="single-post">
							<div class="image-wrapper"><img src="images/blog-2-1000x600.jpg" alt="Blog Image"></div>

							<div class="icons">
								<div class="left-area">
									<a class="btn caegory-btn" href="#"><b>TRAVEL</b></a>
								</div>
								<ul class="right-area social-icons">
									<li><a href="#"><i class="ion-android-share-alt"></i>Share</a></li>
									<li><a href="#"><i class="ion-android-favorite-outline"></i>03</a></li>
									<li><a href="#"><i class="ion-android-textsms"></i>06</a></li>
								</ul>
							</div>
							<h6 class="date"><em>Monday, October 13, 2017</em></h6>
							<h3 class="title"><a href="#"><b class="light-color">This is post for the ones that love to travel</b></a></h3>
							<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
								 laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
								 architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas
								 consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et
								dolore magnam aliquam quaerat voluptatem.</p>
							<a class="btn read-more-btn" href="#"><b>READ MORE</b></a>
						</div><!-- single-post --> --}}

						{{-- <div class="row">

							<div class="col-lg-6 col-md-12">
								<div class="single-post">
									<div class="image-wrapper"><img src="images/blog-3-500x400.jpg" alt="Blog Image"></div>

									<div class="icons">
										<div class="left-area">
											<a class="btn caegory-btn" href="#"><b>TRAVEL</b></a>
										</div>
										<ul class="right-area social-icons">
											<li><a href="#"><i class="ion-android-share-alt"></i>Share</a></li>
											<li><a href="#"><i class="ion-android-favorite-outline"></i>03</a></li>
											<li><a href="#"><i class="ion-android-textsms"></i>06</a></li>
										</ul>
									</div>
									<h6 class="date"><em>Monday, October 13, 2017</em></h6>
									<h3 class="title"><a href="#"><b class="light-color">How to paint the wall and street</b></a></h3>
									<p>Sed ut perspiciatis unde omnis iste natus error sit doloremque
										 laudantium, totam rem aperiam, eaque ipsa quae ab illo veritatis et quasi
										dolore magnam aliquam quaerat voluptatem.</p>
									<a class="btn read-more-btn" href="#"><b>READ MORE</b></a>
								</div><!-- single-post -->
							</div><!-- col-sm-6 -->

							<div class="col-lg-6 col-md-12">
								<div class="single-post">
									<div class="image-wrapper"><img src="images/blog-4-500x400.jpg" alt="Blog Image"></div>

									<div class="icons">
										<div class="left-area">
											<a class="btn caegory-btn" href="#"><b>TRAVEL</b></a>
										</div>
										<ul class="right-area social-icons">
											<li><a href="#"><i class="ion-android-share-alt"></i>Share</a></li>
											<li><a href="#"><i class="ion-android-favorite-outline"></i>03</a></li>
											<li><a href="#"><i class="ion-android-textsms"></i>06</a></li>
										</ul>
									</div>
									<h6 class="date"><em>Monday, October 13, 2017</em></h6>
									<h3 class="title"><a href="#"><b class="light-color">One more night in the local clubs</b></a></h3>
									<p>Sed ut perspiciatis unde omnis iste natus error sit doloremque
										 laudantium, totam rem aperiam, eaque ipsa quae ab illo veritatis et quasi
										dolore magnam aliquam quaerat voluptatem.</p>
									<a class="btn read-more-btn" href="#"><b>READ MORE</b></a>
								</div><!-- single-post -->
							</div><!-- col-sm-6 -->

							<div class="col-lg-6 col-md-12">
								<div class="single-post">
									<div class="image-wrapper"><img src="images/blog-5-500x400.jpg" alt="Blog Image"></div>

									<div class="icons">
										<div class="left-area">
											<a class="btn caegory-btn" href="#"><b>TRAVEL</b></a>
										</div>
										<ul class="right-area social-icons">
											<li><a href="#"><i class="ion-android-share-alt"></i>Share</a></li>
											<li><a href="#"><i class="ion-android-favorite-outline"></i>03</a></li>
											<li><a href="#"><i class="ion-android-textsms"></i>06</a></li>
										</ul>
									</div>
									<h6 class="date"><em>Monday, October 13, 2017</em></h6>
									<h3 class="title"><a href="#"><b class="light-color">A new festival in your town</b></a></h3>
									<p>Sed ut perspiciatis unde omnis iste natus error sit doloremque
										 laudantium, totam rem aperiam, eaque ipsa quae ab illo veritatis et quasi
										dolore magnam aliquam quaerat voluptatem.</p>
									<a class="btn read-more-btn" href="#"><b>READ MORE</b></a>
								</div><!-- single-post -->
							</div><!-- col-sm-6 -->

							<div class="col-lg-6 col-md-12">
								<div class="single-post">
									<div class="image-wrapper"><img src="images/blog-6-500x400.jpg" alt="Blog Image"></div>

									<div class="icons">
										<div class="left-area">
											<a class="btn caegory-btn" href="#"><b>TRAVEL</b></a>
										</div>
										<ul class="right-area social-icons">
											<li><a href="#"><i class="ion-android-share-alt"></i>Share</a></li>
											<li><a href="#"><i class="ion-android-favorite-outline"></i>03</a></li>
											<li><a href="#"><i class="ion-android-textsms"></i>06</a></li>
										</ul>
									</div>
									<h6 class="date"><em>Monday, October 13, 2017</em></h6>
									<h3 class="title"><a href="#"><b class="light-color">How to make your home modern</b></a></h3>
									<p>Sed ut perspiciatis unde omnis iste natus error sit doloremque
										 laudantium, totam rem aperiam, eaque ipsa quae ab illo veritatis et quasi
										dolore magnam aliquam quaerat voluptatem.</p>
									<a class="btn read-more-btn" href="#"><b>READ MORE</b></a>
								</div><!-- single-post -->
							</div><!-- col-sm-6 -->

							<div class="col-lg-12 col-md-12">
								<div class="single-post post-style-2">
									<div class="image-wrapper width-50 left-area">
										<img src="images/blog-7-500x400.jpg" alt="Blog Image"></div>

									<div class="post-details width-50 right-area">

										<div class="icons">
											<div class="left-area">
												<a class="btn caegory-btn" href="#"><b>TRAVEL</b></a>
											</div>
											<ul class="right-area social-icons">
												<li><a href="#"><i class="ion-android-share-alt"></i>Share</a></li>
												<li><a href="#"><i class="ion-android-favorite-outline"></i>03</a></li>
												<li><a href="#"><i class="ion-android-textsms"></i>06</a></li>
											</ul>
										</div>
										<h6 class="date"><em>Monday, October 13, 2017</em></h6>
										<h3 class="title"><a href="#"><b class="light-color">How to througn the best engagement party</b></a></h3>
										<p>Sed ut perspiciatis unde omnis iste natus error sit doloremque
											 laudantium, totam rem aperiam, eaque ipsa quae ab illo veritatis et quasi
											dolore magnam aliquam quaerat voluptatem.</p>
										<a class="btn read-more-btn" href="#"><b>READ MORE</b></a>
									</div><!-- post-details -->

								</div><!-- single-post -->
							</div><!-- col-sm-6 -->

						</div><!-- row --> --}}

						{{-- <a class="btn load-more-btn" target="_blank" href="#">LOAD OLDER POSTS</a> --}}

					</div><!-- blog-posts -->
				</div><!-- col-lg-4 -->
				
				@include('shared.sidebar')

			</div><!-- row -->
		</div><!-- container -->
	</section><!-- section -->
