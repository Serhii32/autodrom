@extends('shared.master')

@section('content')
	<section class="blog-area empty-space">
		<div class="container">
			<div class="row">

				<div class="col-lg-8 col-md-12">
					<div class="blog-posts">

						<div class="single-post">

							@if(method_exists($item, 'category'))

								<div class="icons">
									<div class="left-area">
										<a class="btn caegory-btn" href="{{route('page.category.item', $item->category()->first()->id)}}"><b>{{$item->category()->first()->title}}</b></a>
									</div>
								</div>

							@endif
							{{-- <p class="date"><em>{{$item->created_at}}</em></p> --}}
							<h3 class="title  text-center"><b class="light-color">{{$item->title}}</b></h3>
							<p class="desc text-justify">{{$item->short_description}}</p>
							<br>
							<div class="desc">{!!$item->description!!}</div>

						</div><!-- single-post -->

					</div><!-- blog-posts -->
				</div><!-- col-lg-4 -->

				@include('shared.sidebar')

			</div><!-- row -->
		</div><!-- container -->
	</section><!-- section -->
@endsection