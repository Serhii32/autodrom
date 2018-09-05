@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <h3 class="card-header text-center text-uppercase">Зміна даних адміністратора</h3>
                <div class="card-body">
                    @if (session('message'))
                        <div class="alert alert-info">
                            <button type="button" class="close" data-dismiss="alert">×</button> 
                            <strong>{{ session('message') }}</strong>
                        </div>
                    @endif
                    {!! Form::open(['route'=>'admin/home.store', 'method' => 'put']) !!}
                        <div class="form-group">
                            {!! Form::label('name', 'Ім\'я:', ['class' => 'text-uppercase font-weight-bold']) !!}
                            {!! Form::text('name', old('name') ? old('name') :$currentUserName, ['placeholder'=>'Ім\'я'] + ($errors->has('name') ? ['class'=>'form-control is-invalid'] : ['class'=>'form-control'])) !!}
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        </div>
                        <div class="form-group">
                            {!! Form::label('email', 'Email:', ['class' => 'text-uppercase font-weight-bold']) !!}
                            {!! Form::email('email', old('email') ? old('email') :$currentUserEmail, ['placeholder'=>'Email'] + ($errors->has('email') ? ['class'=>'form-control is-invalid'] : ['class'=>'form-control'])) !!}
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        </div>
                        <div class="form-group">
                            {!! Form::label('current_password', 'Пароль:', ['class' => 'text-uppercase font-weight-bold']) !!}
                            {!! Form::password('current_password', ['placeholder'=>'Пароль'] + ($errors->has('current_password') ? ['class'=>'form-control is-invalid'] : ['class'=>'form-control'])) !!}
                            <span class="text-danger">{{ $errors->first('current_password') }}</span>
                        </div>
                        <div class="form-group">
                            {!! Form::label('password', 'Новий пароль:', ['class' => 'text-uppercase font-weight-bold']) !!}
                            {!! Form::password('password', ['placeholder'=>'Новий пароль'] + ($errors->has('password') ? ['class'=>'form-control is-invalid'] : ['class'=>'form-control'])) !!}
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                        </div>
                        <div class="form-group">
                            {!! Form::label('password_confirmation', 'Підтвердити пароль:', ['class' => 'text-uppercase font-weight-bold']) !!}
                            {!! Form::password('password_confirmation', ['placeholder'=>'Підтвердити пароль'] + ($errors->has('password_confirmation') ? ['class'=>'form-control is-invalid'] : ['class'=>'form-control'])) !!}
                            <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                        </div>
                        <div class="form-group">
                            {!! Form::submit('Зберегти', ['class'=>'btn btn-success w-100 text-uppercase font-weight-bold']) !!}
                        </div> 
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
