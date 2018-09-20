@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <h3 class="card-header text-center text-uppercase">Редагувати {{ $category->title }}</h3>
                <div class="card-body">
                    @if (session('message'))
                        <div class="alert alert-info">
                            <button type="button" class="close" data-dismiss="alert">×</button> 
                            <strong>{{ session('message') }}</strong>
                        </div>
                    @endif 
                    {!! Form::open(['route'=> ['admin/category.update', $category->id], 'method' => 'put', 'files' => true]) !!}
                        <div class="container">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <img class="img-thumbnail img-fluid" src="{{$category->photo ? asset($category->photo) : asset('img/site/common/default.png')}}" alt="{{ $category->title }}">
                                    <div class="form-group">
                                        {!! Form::label('photo', 'Вибрати фото категорії:', ['class' => 'text-uppercase font-weight-bold']) !!}
                                        {!! Form::file('photo', ($errors->has('photo') ? ['class'=>'form-control is-invalid'] : ['class'=>'form-control'])) !!}
                                        <span class="text-danger">{{ $errors->first('photo') }}</span>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        {!! Form::label('title', 'Назва категорії:', ['class' => 'text-uppercase font-weight-bold']) !!}
                                        {!! Form::text('title', $category->title, ['placeholder'=>'Назва категорії'] + ($errors->has('title') ? ['class'=>'form-control is-invalid'] : ['class'=>'form-control'])) !!}
                                        <span class="text-danger">{{ $errors->first('title') }}</span>
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('parent_id', 'Батьківська категорія:', ['class' => 'text-uppercase font-weight-bold']) !!}
                                        {!! Form::select('parent_id',$allCategories, $category->parent_id, ['placeholder'=>'Вибрати категорію'] + ($errors->has('parent_id') ? ['class'=>'form-control is-invalid'] : ['class'=>'form-control'])) !!}
                                        <span class="text-danger">{{ $errors->first('parent_id') }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 m-auto">
                            {!! Form::submit('Зберегти', ['class'=>'btn btn-success w-100 text-uppercase font-weight-bold']) !!}
                        </div>
                    {!! Form::close() !!}
                    {!! Form::open(['route'=> ['admin/category.destroy', $category->id], 'method' => 'delete', 'class' => 'mt-3', 'onsubmit' => 'return confirm("Підтвердити видалення?")']) !!}
                        <div class="col-md-6 m-auto">
                            {!! Form::submit('Видалити', ['class'=>'btn btn-danger w-100 text-uppercase font-weight-bold']) !!}
                        </div>
                    {!! Form::close() !!}
                    @if(count($blogItems))
                        <h3 class="text-center p-2 m-5">Новини в даній категорії</h3>
                        <div class="container">
                            <div class="row">
                                @foreach($blogItems as $blogItem)
                                    {!! Form::open(['route'=> ['admin/category.removeItemFromCategory', $blogItem->id, 'blog'], 'method' => 'delete', 'class' => 'col-12 mb-3 border-bottom', 'onsubmit' => 'return confirm("Підтвердити видалення?")']) !!}
                                        <h4 class="d-inline-block">{{$blogItem->title}}</h4>
                                        {!! Form::submit('Видалити новину з категорії', ['class'=>'btn btn-danger float-right text-uppercase font-weight-bold']) !!}
                                    {!! Form::close() !!}
                                @endforeach
                            </div>
                        </div>
                    @endif
                    @if(count($articleItems))
                        <h3 class="text-center p-2 m-5">Статті в даній категорії</h3>
                        <div class="container">
                            <div class="row">
                                @foreach($articleItems as $articleItem)
                                    {!! Form::open(['route'=> ['admin/category.removeItemFromCategory', $articleItem->id, 'article'], 'method' => 'delete', 'class' => 'col-12 mb-3 border-bottom', 'onsubmit' => 'return confirm("Підтвердити видалення?")']) !!}
                                        <h4 class="d-inline-block">{{$articleItem->title}}</h4>
                                        {!! Form::submit('Видалити статтю з категорії', ['class'=>'btn btn-danger float-right text-uppercase font-weight-bold']) !!}
                                    {!! Form::close() !!}
                                @endforeach
                            </div>
                        </div>
                    @endif
                    @if(count($serviceItems))
                        <h3 class="text-center p-2 m-5">Послуги в даній категорії</h3>
                        <div class="container">
                            <div class="row">
                                @foreach($serviceItems as $serviceItem)
                                    {!! Form::open(['route'=> ['admin/category.removeItemFromCategory', $serviceItem->id, 'service'], 'method' => 'delete', 'class' => 'col-12 mb-3 border-bottom', 'onsubmit' => 'return confirm("Підтвердити видалення?")']) !!}
                                        <h4 class="d-inline-block">{{$serviceItem->title}}</h4>
                                        {!! Form::submit('Видалити послугу з категорії', ['class'=>'btn btn-danger float-right text-uppercase font-weight-bold']) !!}
                                    {!! Form::close() !!}
                                @endforeach
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
