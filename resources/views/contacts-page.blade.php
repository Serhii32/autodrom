@extends('shared.master')

@section('content')
	<section class="blog-area" style="margin-top: 400px;">
		<div class="container">
			<div class="row">

				<div class="col-lg-8 col-md-12">
					<div class="blog-posts">

						<div class="single-post">

							<h3 class="title text-center"><b class="light-color">Контакты</b></h3>
							<p class="desc" style="font-size: 1.3em;">
								Адрес: улица Воинов-Интернационалистов 2б, Винница, Винницкая область, 21029<br><br>

								Телефоны: <a onclick="gtag('event','Click',{'event_category':'0930788080','event_label':'Contacts',})" href="tel:+380432558080">(0432)55-80-80</a> &nbsp; <a onclick="gtag('event','Click',{'event_category':'0960788080','event_label':'Contacts',})" href="tel:+380960788080">(096)078-80-80</a> &nbsp; <a onclick="gtag('event','Click',{'event_category':'0432558080','event_label':'Contacts',})" href="tel:+380930788080">(093)078-80-80</a>
							</p>
							<br>
							<h3 class="title text-center"><b class="light-color">График работы</b></h3>
							<p class="desc" style="font-size: 1.3em;">
								Пн-Пт. 08.00-20.00
							</p>
							<p class="desc" style="font-size: 1.3em;">
								Сб. 08.00-18.00
							</p>
							<p class="desc" style="font-size: 1.3em;">
								Вс. Выходной
							</p>
						</div><!-- single-post -->

					</div><!-- blog-posts -->
				</div><!-- col-lg-4 -->

				@include('shared.sidebar')

			</div><!-- row -->
		</div><!-- container -->
	</section><!-- section -->

@endsection