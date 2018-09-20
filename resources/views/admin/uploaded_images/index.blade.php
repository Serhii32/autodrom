@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <h3 class="card-header text-center text-uppercase">Завантажені зображення</h3>

                <div class="card-body">
                    @if(session('message'))
                        <div class="alert alert-info">
                            <button type="button" class="close" data-dismiss="alert">×</button> 
                            <strong>{{ session('message') }}</strong>
                        </div>
                    @endif 
                    @if($images->total() != 0)
                        <div class="container">
                            <div class="row row-eq-height justify-content-center">
                                @foreach($images as $image)
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-5">
                                        <div class="card h-100">
                                            <img class="card-img-top" style="height: 200px; object-fit: contain;" alt="{{$image}}" src="{{ asset($image) }}">
                                            <h5 class="text-center card-title">{{$image}}</h5>
                                            <div class="card-footer">
                                                <form class="w-100" action="{{ route('admin/uploaded-images.destroy', Crypt::encrypt($image)) }}" method="POST" onsubmit="return confirm('Підтвердити видалення?');">
                                                    <input type="hidden" name="_method" value="DELETE">
                                                        {{ csrf_field() }}
                                                    <button class="btn btn-danger w-100 text-uppercase font-weight-bold">Видалити</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="text-center">{{$images->links()}}</div>
                    @else
                        <h4 class="text-center">Зображення відсутні</h4>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
