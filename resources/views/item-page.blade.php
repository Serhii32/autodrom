@extends('shared.master')

@section('content')
	<section class="blog-area empty-space">
		<div class="container">
			<div class="row">

				<div class="col-lg-8 col-md-12">
					<div class="blog-posts">

						<div class="single-post">
							{{-- <div class="image-wrapper"><img src="{{ $item->main_photo ? asset($item->main_photo) : asset('img/site/common/default.png') }}" alt="{{$item->title}}"></div> --}}

							@if(method_exists($item, 'category'))

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
							<p class="date"><em>{{$item->created_at}}</em></p>
							<h3 class="title  text-center"><b class="light-color">{{$item->title}}</b></h3>
							<p class="desc text-justify">{{$item->short_description}}</p>
							<br>
							<p class="desc">{{$item->description}}</p>

							{{-- <h5 class="quoto"><em><i class="ion-quote"></i>Eerror sit voluptatem accusantium doloremque
								 laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
								 architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas
								 consectetur, adipisci velit
							</em></h5>

							<div class="image-wrapper"><img src="{{asset('images/blog-2-1000x600.jpg')}}" alt="Blog Image"></div>

							<p class="desc">Eerror sit voluptatem accusantium doloremque
								 laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
								 architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas
								 consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et
								 laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
								 architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas
								dolore magnam aliquam quaerat voluptatem.</p> --}}

							{{-- <ul>
								<li><a class="btn" href="#">design</a></li>
								<li><a class="btn" href="#">fashion</a></li>
							</ul> --}}

						</div><!-- single-post -->


						{{-- <div class="post-author">
							<div class="author-image"><img src="{{asset('images/author-1-200x200.jpg')}}" alt="Autohr Image"></div>

							<div class="author-info">
								<h4 class="name"><b class="light-color">Cristnne Smith</b></h4>

								<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
								dolore magnam aliquam quaerat voluptatem.</p>

								<ul class="social-icons">
									<li><a href="#"><i class="ion-social-facebook-outline"></i></a></li>
									<li><a href="#"><i class="ion-social-twitter-outline"></i></a></li>
									<li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
									<li><a href="#"><i class="ion-social-vimeo-outline"></i></a></li>
									<li><a href="#"><i class="ion-social-pinterest-outline"></i></a></li>
								</ul><!-- right-area -->

							</div><!-- author-info -->
						</div><!-- post-author --> --}}

						{{-- <div class="comments-area">
							<h4 class="title"><b class="light-color">2 Comments</b></h4>
							<div class="comment">
								<div class="author-image"><img src="{{asset('images/author-2-150x150.jpg')}}" alt="Autohr Image"></div>
								<div class="comment-info">
									<h5><b class="light-color">William Smith</b></h5>
									<h6 class="date"><em>Monday, October 30, 2017</em></h6>
									<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
										dolore magnam aliquam quaerat voluptatem.</p>
								</div>
							</div><!-- comment -->

							<div class="comment">
								<div class="author-image"><img src="{{asset('images/author-3-150x150.jpg')}}" alt="Autohr Image"></div>
								<div class="comment-info">
									<h5><b class="light-color">William Smith</b></h5>
									<h6 class="date"><em>Monday, October 30, 2017</em></h6>
									<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
										dolore magnam aliquam quaerat voluptatem.</p>
								</div>
							</div><!-- comment -->

						</div><!-- comments-area --> --}}

						{{-- <div class="leave-comment-area">
							<h4 class="title"><b class="light-color">Leave a comment</b></h4>
							<div class="leave-comment">

								<form method="post">
									<div class="row">
										<div class="col-sm-6">
											<input class="name-input" type="text" placeholder="Name">
										</div>
										<div class="col-sm-6">
											<input class="email-input" type="text" placeholder="Email">
										</div>
										<div class="col-sm-12">
											<input class="subject-input" type="text" placeholder="Subject">
										</div>
										<div class="col-sm-12">
											<textarea class="message-input" rows="6" placeholder="Message"></textarea>
										</div>
										<div class="col-sm-12">
											<button class="btn btn-2"><b>COMMENT</b></button>
										</div>

									</div><!-- row -->
								</form>

							</div><!-- leave-comment -->

						</div><!-- comments-area --> --}}

					</div><!-- blog-posts -->
				</div><!-- col-lg-4 -->

				@include('shared.sidebar')

			</div><!-- row -->
		</div><!-- container -->
	</section><!-- section -->
@endsection