@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <h3 class="card-header text-center text-uppercase">{{ $item->title }}</h3>
                <div class="card-body">
                    @if (session('message'))
                        <div class="alert alert-info">
                            <button type="button" class="close" data-dismiss="alert">×</button> 
                            <strong>{{ session('message') }}</strong>
                        </div>
                    @endif 

                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-sm-6">
                                <img class="img-thumbnail img-fluid" src="{{$item->main_photo ? asset($item->main_photo) : asset('img/site/common/default.png')}}" alt="{{ $item->title }}">
                            </div>
                            <div class="col-12 col-sm-6">
                                <h3>Назва: {{ $item->title }}</h3>
                            </div>
                        </div>
                        <h3 class="m-3 text-center">Основна частина</h3>
                        <div class="main_part_of_article">{!! $item->description !!}</div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6 p-2">
                                    <a href="{{ route('admin/feedback.edit', $item->id) }}" class="w-100 mb-3 btn btn-warning text-uppercase font-weight-bold">Редагувати</a>
                                </div>
                                <form class="col-md-6 mb-3 p-2" action="{{ route('admin/feedback.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Підтвердити видалення?');">
                                    <input type="hidden" name="_method" value="DELETE">
                                    {{ csrf_field() }}
                                    <button class="btn btn-danger w-100 text-uppercase font-weight-bold">Видалити</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
