@extends('layouts.app')

@section('content')
<link href="{{ asset('css/admin/categories/index.css') }}" rel="stylesheet">
<link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <h3 class="card-header text-center text-uppercase">Категорії</h3>
                <div class="card-body">
                    @if (session('message'))
                        <div class="alert alert-info">
                            <button type="button" class="close" data-dismiss="alert">×</button> 
                            <strong>{{ session('message') }}</strong>
                        </div>
                    @endif 
                    <div class="container">     
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h3>Список категорій</h3>
                                        <ul class="list-group" id="tree1">
                                            @foreach($parentCategories as $category)
                                                <li class="list-group-item">
                                                    <a href="{{route('admin/category.edit', $category->id)}}">{{ $category->title }}</a>
                                                    @if(count($category->childs))
                                                        @include('admin.categories.shared.categories-index-childs',['childs' => $category->childs])
                                                    @endif
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <h3>Додати нову категорію</h3>
                                        {!! Form::open(['route'=>'admin/category.store', 'files' => true]) !!}
                                            <div class="form-group">
                                                {!! Form::label('title', 'Назва категорії:', ['class' => 'text-uppercase font-weight-bold']) !!}
                                                {!! Form::text('title', old('title'), ['placeholder'=>'Назва категорії'] + ($errors->has('title') ? ['class'=>'form-control is-invalid'] : ['class'=>'form-control'])) !!}
                                                <span class="text-danger">{{ $errors->first('title') }}</span>
                                            </div>
                                            <div class="form-group">
                                                {!! Form::label('parent_id', 'Батьківська категорія:', ['class' => 'text-uppercase font-weight-bold']) !!}
                                                {!! Form::select('parent_id',$allCategories, old('parent_id'), ['placeholder'=>'Вибрати категорію'] + ($errors->has('parent_id') ? ['class'=>'form-control is-invalid'] : ['class'=>'form-control'])) !!}
                                                <span class="text-danger">{{ $errors->first('parent_id') }}</span>
                                            </div>
                                            <div class="form-group">
                                                {!! Form::label('photo', 'Вибрати фото категорії:', ['class' => 'text-uppercase font-weight-bold']) !!}
                                                {!! Form::file('photo', ($errors->has('photo') ? ['class'=>'form-control is-invalid'] : ['class'=>'form-control'])) !!}
                                                <span class="text-danger">{{ $errors->first('photo') }}</span>
                                            </div>
                                            <div class="form-group">
                                                {!! Form::label('titleSEO', 'SEO заголовок:', ['class' => 'text-uppercase font-weight-bold']) !!}
                                                {!! Form::text('titleSEO', old('titleSEO'), ['placeholder'=>'SEO заголовок'] + ($errors->has('titleSEO') ? ['class'=>'form-control is-invalid'] : ['class'=>'form-control'])) !!}
                                                <span class="text-danger">{{ $errors->first('titleSEO') }}</span>
                                            </div>
                                            <div class="form-group">
                                                {!! Form::label('descriptionSEO', 'Мета описанння:', ['class' => 'text-uppercase font-weight-bold']) !!}
                                                {!! Form::textarea('descriptionSEO', old('descriptionSEO'), ['placeholder'=>'Мета описання'] + ($errors->has('descriptionSEO') ? ['class'=>'form-control is-invalid'] : ['class'=>'form-control'])) !!}
                                                <span class="text-danger">{{ $errors->first('descriptionSEO') }}</span>
                                            </div>
                                            <div class="form-group">
                                                {!! Form::label('keywordsSEO', 'Ключові слова:', ['class' => 'text-uppercase font-weight-bold']) !!}
                                                {!! Form::text('keywordsSEO', old('keywordsSEO'), ['placeholder'=>'Ключові слова'] + ($errors->has('keywordsSEO') ? ['class'=>'form-control is-invalid'] : ['class'=>'form-control'])) !!}
                                                <span class="text-danger">{{ $errors->first('keywordsSEO') }}</span>
                                            </div>
                                            {!! Form::submit('Додати', ['class'=>'btn btn-success w-100 text-uppercase font-weight-bold']) !!}
                                        {!! Form::close() !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="{{ asset('js/admin/categories/index.js') }}"></script>
@endsection
