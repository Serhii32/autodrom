@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <h3 class="card-header text-center text-uppercase">Додати @if($identificator == 'blog') новину @elseif($identificator == 'article') статтю @else послугу @endif</h3>
                <div class="card-body">
                    @if (session('message'))
                        <div class="alert alert-info">
                            <button type="button" class="close" data-dismiss="alert">×</button> 
                            <strong>{{ session('message') }}</strong>
                        </div>
                    @endif
                    {!! Form::open(['route'=>'admin/'.$identificator.'.store', 'files' => true]) !!}
                        <div class="form-group">
                            {!! Form::label('title', ($identificator=='blog')?'Назва новини:':(($identificator=='article')?'Назва статті:':'Назва послуги:'), ['class' => 'text-uppercase font-weight-bold']) !!}
                            {!! Form::text('title', old('title'), ['placeholder'=>($identificator=='blog')?'Назва новини':(($identificator=='article')?'Назва статті':'Назва послуги')] + ($errors->has('title') ? ['class'=>'form-control is-invalid'] : ['class'=>'form-control'])) !!}
                            <span class="text-danger">{{ $errors->first('title') }}</span>
                        </div>
                        <div class="form-group">
                            {!! Form::label('category', 'Категорія:', ['class' => 'text-uppercase font-weight-bold']) !!}
                            {!! Form::select('category', $categories, old('category'), ['placeholder'=>'Вибрати категорію'] + ($errors->has('category') ? ['class'=>'form-control is-invalid'] : ['class'=>'form-control'])) !!}
                            <span class="text-danger">{{ $errors->first('category') }}</span>
                        </div>
                        <div class="form-group">
                            {!! Form::label('main_photo', ($identificator=='blog')?'Вибрати головне фото новини:':(($identificator=='article')?'Вибрати головне фото статті:':'Вибрати головне фото послуги:'), ['class' => 'text-uppercase font-weight-bold']) !!}
                            {!! Form::file('main_photo', ($errors->has('main_photo') ? ['class'=>'form-control is-invalid'] : ['class'=>'form-control'])) !!}
                            <span class="text-danger">{{ $errors->first('main_photo') }}</span>
                        </div>
                        <div class="form-group">
                            {!! Form::label('description', 'Основна частина:', ['class' => 'text-uppercase font-weight-bold']) !!}
                            {!! Form::textarea('description', old('description'), ['id' => 'editor'] + ($errors->has('description') ? ['class'=>'form-control is-invalid'] : ['class'=>'form-control'])) !!}
                            <span class="text-danger">{{ $errors->first('description') }}</span>
                        </div>

                        <div class="form-group">
                            {!! Form::submit(($identificator=='blog')?'Додати новину':(($identificator=='article')?'Додати статтю:':'Додати послугу:'), ['class'=>'btn btn-success w-100 text-uppercase font-weight-bold']) !!}
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