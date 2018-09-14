@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <h3 class="card-header text-center text-uppercase">Сторінка адміністратора</h3>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if (session('message'))
                        <div class="alert alert-info">
                            <button type="button" class="close" data-dismiss="alert">×</button> 
                            <strong>{{ session('message') }}</strong>
                        </div>
                    @endif
                    
                    <div class="container">
                        <div class="row row-eq-height justify-content-center">
                            <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-5">
                                <div class="card h-100">
                                    <a class="card-link" href="{{ route('admin/blog.index') }}">
                                        <img class="card-img-top" alt="Список новин" src="{{ asset('img/admin/home/news-list.png') }}">
                                        <h3 class="text-center card-title">Список новин</h3>
                                    </a>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-5">
                                <div class="card h-100">
                                    <a class="card-link" href="{{ route('admin/blog.create') }}">
                                        <img class="card-img-top" alt="Додати новину" src="{{ asset('img/admin/home/add-news.png') }}">
                                        <h3 class="text-center card-title">Додати новину</h3>
                                    </a>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-5">
                                <div class="card h-100">
                                    <a class="card-link" href="{{ route('admin/article.index') }}">
                                        <img class="card-img-top" alt="Список статей" src="{{ asset('img/admin/home/articles-list.png') }}">
                                        <h3 class="text-center card-title">Список статей</h3>
                                    </a>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-5">
                                <div class="card h-100">
                                    <a class="card-link" href="{{ route('admin/article.create') }}">
                                        <img class="card-img-top" alt="Додати статтю" src="{{ asset('img/admin/home/add-article.png') }}">
                                        <h3 class="text-center card-title">Додати статтю</h3>
                                    </a>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-5">
                                <div class="card h-100">
                                    <a class="card-link" href="{{ route('admin/category.index') }}">
                                        <img class="card-img-top" alt="Категорії" src="{{ asset('img/admin/home/category.png') }}">
                                        <h3 class="text-center card-title">Категорії</h3>
                                    </a>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-5">
                                <div class="card h-100">
                                    <a class="card-link" href="{{ route('admin/feedback.index') }}">
                                        <img class="card-img-top" alt="Список відгуків" src="{{ asset('img/admin/home/feedback-list.png') }}">
                                        <h3 class="text-center card-title">Список відгуків</h3>
                                    </a>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-5">
                                <div class="card h-100">
                                    <a class="card-link" href="{{ route('admin/feedback.create') }}">
                                        <img class="card-img-top" alt="Додати відгук" src="{{ asset('img/admin/home/add-feedback.png') }}">
                                        <h3 class="text-center card-title">Додати відгук</h3>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="container border border-info rounded p-2">
                        <h4 class="d-inline-block">Email: {{$currentUserEmail}}</h4>
                        <a href="{{ route('admin/home.edit') }}" class="btn btn-info float-right text-uppercase font-weight-bold">Змінити</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
