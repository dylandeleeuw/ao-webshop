@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Categories</div>

                <div class="card-body">
                   <p>name: {{$productInfo->name}}</p>
                    <p>price: {{$productInfo->price}}</p>
                    <p>description: {{$productInfo->description}}</p>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection