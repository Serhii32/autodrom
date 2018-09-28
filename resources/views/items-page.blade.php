@extends('shared.master')

@section('content')
	<section class="section blog-area empty-space">
		<div class="container">
			<div class="row">

				<div class="col-lg-8 col-md-12">
					<div class="blog-posts">

						{{-- <div class="single-post">
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
						@isset($childs)
						@if(count($childs))
								<div class="row">
									<h3 class="title text-center col-12">Подкатегории</h3>		

									@foreach($childs as $child)

										<div class="col-lg-6 col-md-12">
											<div class="single-post">
												<div class="image-wrapper"><img src="{{ $child->photo ? asset($child->photo) : asset('img/site/common/default.png') }}" alt="{{$child->title}}"></div>

												<h3 class="title text-center"><a href="{{route('page.category.item', $child->id)}}"><b class="light-color">{{$child->title}}</b></a></h3>
											</div><!-- single-post -->
										</div><!-- col-sm-6 -->

									@endforeach

								</div>
						@endif
						@endisset


						<div class="row">

							@foreach($items as $item)

								<div class="col-lg-6 col-md-12">
									<div class="single-post">
										<div class="image-wrapper"><img src="{{ $item->main_photo ? asset($item->main_photo) : asset('img/site/common/default.png') }}" alt="{{$item->title}}"></div>

										@if(method_exists($item, 'category')&&($item->category()->first() !== null))

											<div class="icons">
												<div class="left-area">

													<a class="btn caegory-btn" href="{{route('page.category.item', $item->category()->first()->id)}}"><b>{{$item->category()->first()->title}}</b></a>
												</div>
												{{-- <ul class="right-area social-icons">
													<li><a href="#"><i class="ion-android-share-alt"></i>Share</a></li>
													<li><a href="#"><i class="ion-android-favorite-outline"></i>03</a></li>
													<li><a href="#"><i class="ion-android-textsms"></i>06</a></li>
												</ul> --}}
											</div>

										@endif

										<h6 class="date"><em>{{$item->created_at}}</em></h6>
										<h3 class="title text-center"><a href="{{route('page.'.$identificator.'.item', $item->id)}}"><b class="light-color">{{$item->title}}</b></a></h3>
										<p>{{$item->short_description}}</p>
										<a class="btn read-more-btn" href="{{route('page.'.$identificator.'.item', $item->id)}}"><b>Подробнее</b></a>
									</div><!-- single-post -->
								</div><!-- col-sm-6 -->

							@endforeach

							{{-- <div class="col-lg-6 col-md-12">
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
							</div><!-- col-sm-6 --> --}}

							{{-- <div class="col-lg-12 col-md-12">
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
							</div><!-- col-sm-6 --> --}}

						</div><!-- row -->
						<div class="text-center">{{$items->links()}}</div>
						{{-- <a class="btn load-more-btn" target="_blank" href="#">LOAD OLDER POSTS</a> --}}

					</div><!-- blog-posts -->
				</div><!-- col-lg-4 -->

				@include('shared.sidebar')

			</div><!-- row -->
		</div><!-- container -->
	</section><!-- section -->
@endsection
