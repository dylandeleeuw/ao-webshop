@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Categories</div>

                <div class="card-body">
                    @foreach ($categories as $category)
                       <a href="category/{{$category->id}}"> {{$category->name}}</a><br>
                    @endforeach
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection