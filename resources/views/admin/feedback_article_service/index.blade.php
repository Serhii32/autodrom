@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <h3 class="card-header text-center text-uppercase">@if($identificator == 'feedback') Відгуки @elseif($identificator == 'article') Статті @else Послуги @endif</h3>

                <div class="card-body">
                    @if(session('message'))
                        <div class="alert alert-info">
                            <button type="button" class="close" data-dismiss="alert">×</button> 
                            <strong>{{ session('message') }}</strong>
                        </div>
                    @endif 
                    @if($items->total() != 0)
                        <div class="container">
                            <div class="row row-eq-height justify-content-center">
                                @foreach($items as $item)
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-5">
                                        <div class="card h-100">
                                            <img class="card-img-top" style="height: 200px; object-fit: contain;" alt="{{$item->title}}" src="{{ $item->main_photo ? asset($item->main_photo) : asset('img/site/common/default.png') }}">
                                            <h3 class="text-center card-title"><a href="{{route('admin/'.$identificator.'.show', $item->id)}}">{{$item->title}}</a></h3>
                                            <div class="card-footer">
                                                <a href="{{ route('admin/'.$identificator.'.edit', $item->id) }}" class="btn btn-warning w-100 text-uppercase font-weight-bold">Редагувати</a>
                                                <form class="w-100" action="{{ route('admin/'.$identificator.'.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Підтвердити видалення?');">
                                                    <input type="hidden" name="_method" value="DELETE">
                                                        {{ csrf_field() }}
                                                    <button class="btn btn-danger w-100 text-uppercase font-weight-bold">Видалити</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="text-center">{{$items->links()}}</div>
                    @else
                        <h4 class="text-center">@if($identificator == 'feedback') Відгуки @elseif($identificator == 'article') Статті @else Послуги @endif відсутні</h4>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
