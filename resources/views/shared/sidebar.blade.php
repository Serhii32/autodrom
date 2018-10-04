<div class="col-lg-4 col-md-12">
	<div class="sidebar-area">
		{{-- <div class="sidebar-section about-author center-text">
			<div class="author-image"><img src="{{asset('img/site/common/BoschService.jpg')}}" alt="Bosch Service"></div>
			<ul class="social-icons">
				<li><a href="#"><i class="ion-social-facebook-outline"></i></a></li>
				<li><a href="#"><i class="ion-social-twitter-outline"></i></a></li>
				<li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
				<li><a href="#"><i class="ion-social-vimeo-outline"></i></a></li>
				<li><a href="#"><i class="ion-social-pinterest-outline"></i></a></li>
			</ul><!-- right-area -->
			<h4 class="author-name"><b class="light-color">Bosch Service</b></h4>
			<p>Комплексний ремонт Вашего авто</p>
			<div class="signature-image"><img src="images/signature-image.png" alt="Signature Image"></div>
			<a class="read-more-link" href="#"><b>READ MORE</b></a>
		</div><!-- sidebar-section about-author -->
		<div class="sidebar-section src-area">
			<form action="post">
				<input class="src-input" type="text" placeholder="Search">
				<button class="src-btn" type="submit"><i class="ion-ios-search-strong"></i></button>
			</form>
		</div><!-- sidebar-section src-area -->
		<div class="sidebar-section newsletter-area">
			<h5 class="title"><b>Subscribe to our newsletter</b></h5>
			<form action="post">
				<input class="email-input" type="text" placeholder="Your email here">
				<button class="btn btn-2" type="submit">SUBSCRIBE</button>
			</form>
		</div><!-- sidebar-section newsletter-area --> --}}

		{{-- <div class="sidebar-section category-area">
			<h4 class="title"><b class="light-color">Categories</b></h4>
			<a class="category" href="#">
				<img src="{{asset('images/category-1-400x150.jpg')}}" alt="Category Image">
				<h6 class="name">TRAVEL</h6>
			</a>
			<a class="category" href="#">
				<img src="{{asset('images/category-2-400x150.jpg')}}" alt="Category Image">
				<h6 class="name">FASHION</h6>
			</a>
			<a class="category" href="#">
				<img src="{{asset('images/category-3-400x150.jpg')}}" alt="Category Image">
				<h6 class="name">LIFESTYLE</h6>
			</a>
			<a class="category" href="#">
				<img src="{{asset('images/category-4-400x150.jpg')}}" alt="Category Image">
				<h6 class="name">DESIGN</h6>
			</a>
		</div><!-- sidebar-section category-area --> --}}

		<div class="sidebar-section latest-post-area">
			<h4 class="title"><b class="light-color">Последние новости</b></h4>
			@foreach($blogItems as $blogItem)
				<div class="latest-post">
					<div class="l-post-image"><img src="{{ $blogItem->main_photo ? asset($blogItem->main_photo) : asset('img/site/common/default.png') }}" alt="{{$blogItem->title}}"></div>
					<div class="post-info">
						@if($blogItem->category()->first())<a class="btn category-btn" href="{{route('page.category.item', $blogItem->category()->first()->id)}}">{{$blogItem->category()->first()->title}}</a>@endif
						<h5><a href="{{route('page.blog.item', $blogItem->id)}}"><b class="light-color">{{$blogItem->title}}</b></a></h5>
						<h6 class="date"><em>{{$blogItem->created_at}}</em></h6>
					</div>
				</div>
			@endforeach
			{{-- <div class="latest-post" href="#">
				<div class="l-post-image"><img src="{{asset('images/recent-post-2-150x200.jpg')}}" alt="Category Image"></div>
				<div class="post-info">
					<a class="btn category-btn" href="#">TRAVEL</a>
					<h5><a href="#"><b class="light-color">Travel lights in winter</b></a></h5>
					<h6 class="date"><em>Monday, October 13, 2017</em></h6>
				</div>
			</div>
			<div class="latest-post" href="#">
				<div class="l-post-image"><img src="{{asset('images/recent-post-3-150x200.jpg')}}" alt="Category Image"></div>
				<div class="post-info">
					<a class="btn category-btn" href="#">TRAVEL</a>
					<h5><a href="#"><b class="light-color">How to travel with no money</b></a></h5>
					<h6 class="date"><em>Monday, October 13, 2017</em></h6>
				</div>
			</div>
			<div class="latest-post" href="#">
				<div class="l-post-image"><img src="{{asset('images/recent-post-4-150x200.jpg')}}" alt="Category Image"></div>
				<div class="post-info">
					<a class="btn category-btn" href="#">TRAVEL</a>
					<h5><a href="#"><b class="light-color">Smile 10 times a day</b></a></h5>
					<h6 class="date"><em>Monday, October 13, 2017</em></h6>
				</div>
			</div> --}}
		</div><!-- sidebar-section latest-post-area -->

		{{-- <div class="sidebar-section advertisement-area">
			<h4 class="title"><b class="light-color">Advertisement</b></h4>
			<a class="advertisement-img" href="#">
				<img src="{{asset('images/advertise-1-400x500.jpg" alt="Advertisement Image">
				<h6 class="btn btn-2 discover-btn">DISCOVER</h6>
			</a>
		</div><!-- sidebar-section advertisement-area --> --}}
		
		{{-- <div class="sidebar-section instagram-area">
			<h4 class="title"><b class="light-color">Instagram</b></h4>
			<ul class="instagram-img">
				<li><a href="#"><img src="images/instragram-side-1-150x150.jpg" alt="Instagram Image"></a></li>
				<li><a href="#"><img src="images/instragram-side-2-150x150.jpg" alt="Instagram Image"></a></li>
				<li><a href="#"><img src="images/instragram-side-3-150x150.jpg" alt="Instagram Image"></a></li>
				<div class="clearfix"></div>
				<li><a href="#"><img src="images/instragram-side-4-150x150.jpg" alt="Instagram Image"></a></li>
				<li><a href="#"><img src="images/instragram-side-5-150x150.jpg" alt="Instagram Image"></a></li>
				<li><a href="#"><img src="images/instragram-side-6-150x150.jpg" alt="Instagram Image"></a></li>
			</ul>
		</div><!-- sidebar-section instagram-area -->
		<div class="sidebar-section tags-area">
			<h4 class="title"><b class="light-color">Tags</b></h4>
			<ul class="tags">
				<li><a class="btn" href="#">design</a></li>
				<li><a class="btn" href="#">fasinon</a></li>
				<li><a class="btn" href="#">travel</a></li>
				<li><a class="btn" href="#">music</a></li>
				<li><a class="btn" href="#">video</a></li>
				<li><a class="btn" href="#">photography</a></li>
				<li><a class="btn" href="#">adventure</a></li>
			</ul>
		</div><!-- sidebar-section tags-area --> --}}
	</div><!-- about-author -->
</div><!-- col-lg-4 -->