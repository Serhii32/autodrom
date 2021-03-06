@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <h3 class="card-header text-center text-uppercase">Додати @if($identificator == 'feedback') відгук @elseif($identificator == 'article') статтю @elseif($identificator == 'pro-action') акцію @else послугу @endif</h3>
                <div class="card-body">
                    @if (session('message'))
                        <div class="alert alert-info">
                            <button type="button" class="close" data-dismiss="alert">×</button> 
                            <strong>{{ session('message') }}</strong>
                        </div>
                    @endif
                    {!! Form::open(['route'=>'admin/'.$identificator.'.store', 'files' => true]) !!}
                        <div class="form-group">
                            {!! Form::label('title', ($identificator=='feedback')?'Назва відгуку:':(($identificator=='article')?'Назва статті:':(($identificator=='pro-action')?'Назва акції:':'Назва послуги:')), ['class' => 'text-uppercase font-weight-bold']) !!}
                            {!! Form::text('title', old('title'), ['placeholder'=>($identificator=='feedback')?'Назва відгуку':(($identificator=='article')?'Назва статті':(($identificator=='pro-action')?'Назва акції':'Назва послуги'))] + ($errors->has('title') ? ['class'=>'form-control is-invalid'] : ['class'=>'form-control'])) !!}
                            <span class="text-danger">{{ $errors->first('title') }}</span>
                        </div>
                        <div class="form-group">
                            {!! Form::label('main_photo', ($identificator=='feedback')?'Вибрати головне фото відгуку:':(($identificator=='article')?'Вибрати головне фото статті:':(($identificator=='pro-action')?'Вибрати головне фото акції:':'Вибрати головне фото послуги:')), ['class' => 'text-uppercase font-weight-bold']) !!}
                            {!! Form::file('main_photo', ($errors->has('main_photo') ? ['class'=>'form-control is-invalid'] : ['class'=>'form-control'])) !!}
                            <span class="text-danger">{{ $errors->first('main_photo') }}</span>
                        </div>
                        <div class="form-group">
                            {!! Form::label('short_description', 'Короткий опис:', ['class' => 'text-uppercase font-weight-bold']) !!}
                            {!! Form::textarea('short_description', old('short_description'), ['placeholder' => 'Короткий опис'] + ($errors->has('short_description') ? ['class'=>'form-control is-invalid'] : ['class'=>'form-control'])) !!}
                            <span class="text-danger">{{ $errors->first('short_description') }}</span>
                        </div>
                        <div class="form-group">
                            {!! Form::label('description', 'Основна частина:', ['class' => 'text-uppercase font-weight-bold']) !!}
                            {!! Form::textarea('description', old('description'), ['id' => 'editor'] + ($errors->has('description') ? ['class'=>'form-control is-invalid'] : ['class'=>'form-control'])) !!}
                            <span class="text-danger">{{ $errors->first('description') }}</span>
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
                        <div class="form-group">
                            {!! Form::submit(($identificator=='feedback')?'Додати відгук':(($identificator=='article')?'Додати статтю:':(($identificator=='pro-action')?'Додати акцію:':'Додати послугу:')), ['class'=>'btn btn-success w-100 text-uppercase font-weight-bold']) !!}
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
<script>
    CKEDITOR.replace('editor');
</script>
@endsection