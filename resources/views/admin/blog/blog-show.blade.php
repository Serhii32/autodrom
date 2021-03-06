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
                            <button type="button" class="close" data-dismiss="alert"></button>
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
                                @isset($item->category)
                                    <h4>Категорія: <a href="{{route('admin/category.edit', $item->category->id)}}">{{$item->category->title}}</a></h4>
                                @endisset
                                @isset($item->short_description)
                                    <h4>Короткий опис: {{$item->short_description}}</h4>
                                @endisset
                            </div>
                        </div>
                        <h3 class="m-3 text-center">Основна частина</h3>
                        <div class="main_part_of_article">{!! $item->description !!}</div>
                        <h3 class="m-3 text-center">SEO заголовок</h3>
                        <div class="main_part_of_article">{!! $item->titleSEO !!}</div>
                        <h3 class="m-3 text-center">Мета описання</h3>
                        <div class="main_part_of_article">{!! $item->descriptionSEO !!}</div>
                        <h3 class="m-3 text-center">Ключові слова</h3>
                        <div class="main_part_of_article">{!! $item->keywordsSEO !!}</div>
                        <div class="container-fluid">
                            <div class="row" style="width: 100%">
                                <div class="col-md-6 p-2">
                                    <a href="{{ route('admin/blog.edit', $item->id) }}" class="w-100 mb-3 btn btn-warning text-uppercase font-weight-bold">Редагувати</a>
                                </div>
                                <form class="col-md-6 mb-3 p-2" action="{{ route('admin/blog.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Підтвердити видалення?');">
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