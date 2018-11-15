@extends('shared.master')

@section('content')
	<section class="section blog-area empty-space">
		<div class="container">
			<div class="row">

				<div class="col-lg-8 col-md-12">
					<div class="blog-posts">
						<h3 class="title text-center p-3">
							@if($identificator == 'blog')
								Новости
							@elseif($identificator == 'service')
								Услуги
							@elseif($identificator == 'article')
								Статьи
							@elseif($identificator == 'pro-action')
								Акции
							@else
								Отзывы
							@endif
						</h3>
						@isset($childs)
						@if(count($childs))
								<div class="row">
									<h3 class="title text-center col-12">Подкатегории</h3>

									@foreach($childs as $child)

										<div class="col-lg-6 col-md-12">
											<div class="single-post">
												<div class="image-wrapper"><a href="{{route('page.category.item', $child->id)}}"><img src="{{ $child->photo ? asset($child->photo) : asset('img/site/common/default.png') }}" alt="{{$child->title}}"></a></div>

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
										<div class="image-wrapper"><a href="{{route('page.'.$identificator.'.item', $item->id)}}"><img src="{{ $item->main_photo ? asset($item->main_photo) : asset('img/site/common/default.png') }}" alt="{{$item->title}}"></a></div>

										@if(method_exists($item, 'category')&&($item->category()->first() !== null))

											<div class="icons">
												<div class="left-area">

													<a class="btn caegory-btn" href="{{route('page.category.item', $item->category()->first()->id)}}"><b>{{$item->category()->first()->title}}</b></a>
												</div>

											</div>

										@endif

										{{-- <h6 class="date"><em>{{$item->created_at}}</em></h6> --}}
										<h3 class="title text-center"><a href="{{route('page.'.$identificator.'.item', $item->id)}}"><b class="light-color">{{$item->title}}</b></a></h3>
										<p>{{$item->short_description}}</p>
										<a class="btn read-more-btn" href="{{route('page.'.$identificator.'.item', $item->id)}}"><b>Подробнее</b></a>
									</div><!-- single-post -->
								</div><!-- col-sm-6 -->

							@endforeach



						</div><!-- row -->
						<div class="text-center">{{$items->links()}}</div>

					</div><!-- blog-posts -->
				</div><!-- col-lg-4 -->

				@include('shared.sidebar')

			</div><!-- row -->
		</div><!-- container -->
	</section><!-- section -->
@endsection