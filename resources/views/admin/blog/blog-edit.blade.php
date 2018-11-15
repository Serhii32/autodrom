@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <h3 class="card-header text-center text-uppercase">Редагувати {{ $item->title }}</h3>
                <div class="card-body">
                    @if (session('message'))
                        <div class="alert alert-info">
                            <button type="button" class="close" data-dismiss="alert">×</button> 
                            <strong>{{ session('message') }}</strong>
                        </div>
                    @endif
                    {!! Form::open(['route'=> ['admin/blog.update', $item->id], 'method' => 'put', 'files' => true]) !!}
                        <div class="container">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <img class="img-thumbnail img-fluid" src="{{$item->main_photo ? asset($item->main_photo) : asset('img/site/common/default.png')}}" alt="{{ $item->title }}">
                                    <div class="form-group">
                                        {!! Form::label('main_photo', 'Вибрати головне фото новини:', ['class' => 'text-uppercase font-weight-bold']) !!}
                                        {!! Form::file('main_photo', ($errors->has('main_photo') ? ['class'=>'form-control is-invalid'] : ['class'=>'form-control'])) !!}
                                        <span class="text-danger">{{ $errors->first('main_photo') }}</span>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        {!! Form::label('title', 'Назва новини:', ['class' => 'text-uppercase font-weight-bold']) !!}
                                        {!! Form::text('title', $item->title, ['placeholder'=>'Назва новини'] + ($errors->has('title') ? ['class'=>'form-control is-invalid'] : ['class'=>'form-control'])) !!}
                                        <span class="text-danger">{{ $errors->first('title') }}</span>
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('category', 'Категорія:', ['class' => 'text-uppercase font-weight-bold']) !!}
                                        {!! Form::select('category', $categories, $item->category_id, ['placeholder'=>'Вибрати категорію'] + ($errors->has('category') ? ['class'=>'form-control is-invalid'] : ['class'=>'form-control'])) !!}
                                        <span class="text-danger">{{ $errors->first('category') }}</span>
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('short_description', 'Короткий опис:', ['class' => 'text-uppercase font-weight-bold']) !!}
                                        {!! Form::textarea('short_description', $item->short_description, ['placeholder' => 'Короткий опис'] + ($errors->has('short_description') ? ['class'=>'form-control is-invalid'] : ['class'=>'form-control'])) !!}
                                        <span class="text-danger">{{ $errors->first('short_description') }}</span>
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('titleSEO', 'SEO заголовок:', ['class' => 'text-uppercase font-weight-bold']) !!}
                                        {!! Form::text('titleSEO', $item->titleSEO, ['placeholder'=>'SEO заголовок'] + ($errors->has('titleSEO') ? ['class'=>'form-control is-invalid'] : ['class'=>'form-control'])) !!}
                                        <span class="text-danger">{{ $errors->first('titleSEO') }}</span>
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('descriptionSEO', 'Мета описання:', ['class' => 'text-uppercase font-weight-bold']) !!}
                                        {!! Form::textarea('descriptionSEO', $item->descriptionSEO, ['placeholder'=>'Мета описання'] + ($errors->has('descriptionSEO') ? ['class'=>'form-control is-invalid'] : ['class'=>'form-control'])) !!}
                                        <span class="text-danger">{{ $errors->first('descriptionSEO') }}</span>
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('keywordsSEO', 'Ключові слова:', ['class' => 'text-uppercase font-weight-bold']) !!}
                                        {!! Form::text('keywordsSEO', $item->keywordsSEO, ['placeholder'=>'Ключові слова'] + ($errors->has('keywordsSEO') ? ['class'=>'form-control is-invalid'] : ['class'=>'form-control'])) !!}
                                        <span class="text-danger">{{ $errors->first('keywordsSEO') }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                {!! Form::label('description', 'Основна частина:', ['class' => 'text-uppercase font-weight-bold']) !!}
                                {!! Form::textarea('description', $item->description, ['id' => 'editor'] + ($errors->has('description') ? ['class'=>'form-control is-invalid'] : ['class'=>'form-control'])) !!}
                                <span class="text-danger">{{ $errors->first('description') }}</span>
                            </div>
                        </div>
                        <div class="col-md-6 m-auto">
                            {!! Form::submit('Зберегти', ['class'=>'btn btn-success w-100 text-uppercase font-weight-bold']) !!}
                        </div>
                    {!! Form::close() !!}
                    {!! Form::open(['route'=> ['admin/blog.destroy', $item->id], 'method' => 'delete', 'class' => 'mt-3', 'onsubmit' => 'return confirm("Підтвердити видалення?")']) !!}
                        <div class="col-md-6 m-auto">
                            {!! Form::submit('Видалити', ['class'=>'btn btn-danger w-100 text-uppercase font-weight-bold']) !!}
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
