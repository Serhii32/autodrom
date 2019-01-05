<div class="col-lg-4 col-md-12">
	<div class="sidebar-area">

		<div class="sidebar-section latest-post-area" style="padding-top: 20px;">
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
	</div><!-- about-author -->
</div><!-- col-lg-4 -->