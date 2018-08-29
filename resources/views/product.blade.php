@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Product info</div>

                <div class="card-body">
                   <p>name: {{$productInfo->name}}</p>
                    <p>price: {{$productInfo->price}}</p>
                    <p>description: {{$productInfo->description}}</p>
                    {{ Form::open(array('url' => '/cart/add')) }}
                        {{ Form::hidden('id', $productInfo->id) }}
                        {{ Form::number('quantity', 1) }}
                        {{ Form::submit('Add to cart') }}
                    {{ Form::close() }}
                                        
                </div>
            </div>
        </div>
    </div>
</div>
@endsection