@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <h3 class="card-header text-center text-uppercase">Додати новину</h3>
                <div class="card-body">
                    @if (session('message'))
                        <div class="alert alert-info">
                            <button type="button" class="close" data-dismiss="alert">×</button> 
                            <strong>{{ session('message') }}</strong>
                        </div>
                    @endif
                    {!! Form::open(['route'=>'admin/blog.store', 'files' => true]) !!}
                        <div class="form-group">
                            {!! Form::label('title', 'Назва новини:', ['class' => 'text-uppercase font-weight-bold']) !!}
                            {!! Form::text('title', old('title'), ['placeholder'=>'Назва новини'] + ($errors->has('title') ? ['class'=>'form-control is-invalid'] : ['class'=>'form-control'])) !!}
                            <span class="text-danger">{{ $errors->first('title') }}</span>
                        </div>
                        <div class="form-group">
                            {!! Form::label('category', 'Категорія:', ['class' => 'text-uppercase font-weight-bold']) !!}
                            {!! Form::select('category', $categories, old('category'), ['placeholder'=>'Вибрати категорію'] + ($errors->has('category') ? ['class'=>'form-control is-invalid'] : ['class'=>'form-control'])) !!}
                            <span class="text-danger">{{ $errors->first('category') }}</span>
                        </div>
                        <div class="form-group">
                            {!! Form::label('main_photo', 'Вибрати головне фото новини:', ['class' => 'text-uppercase font-weight-bold']) !!}
                            {!! Form::file('main_photo', ($errors->has('main_photo') ? ['class'=>'form-control is-invalid'] : ['class'=>'form-control'])) !!}
                            <span class="text-danger">{{ $errors->first('main_photo') }}</span>
                        </div>
                        {{-- <div class="form-group">
                            {!! Form::label('photos[]', 'Фото новини:', ['class' => 'text-uppercase font-weight-bold']) !!}
                            {!! Form::file('photos[]', ['multiple'=>'multiple', 'class'=>'form-control']) !!}
                        </div> --}}
                        <div class="form-group">
                            {!! Form::label('description', 'Описання новини:', ['class' => 'text-uppercase font-weight-bold']) !!}
                            {!! Form::textarea('description', old('description'), ['id' => 'editor', 'placeholder'=>'Коротке описання новини'] + ($errors->has('description') ? ['class'=>'form-control is-invalid'] : ['class'=>'form-control'])) !!}
                            <span class="text-danger">{{ $errors->first('description') }}</span>
                        </div>

                        <div class="form-group">
                            {!! Form::submit('Додати новину', ['class'=>'btn btn-success w-100 text-uppercase font-weight-bold']) !!}
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
<script>
    CKEDITOR.replace( 'editor' );
</script>
@endsection