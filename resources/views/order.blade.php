@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Orders</div>

                <div class="card-body">
                   @foreach ($orders as $order)
                        <p>Order id: {{$order->id}} </p>
                        <p>Order status: {{$order->status}} </p>
                        <p>Order date: {{$order->created_at}} </p>
                        {{ Form::open(array('url' => '/orderline')) }}
                            <input type="hidden" name="id" value={{$order->id}}>
                            <button type="submit" class="btn btn-info btn-sm">View details</button>    
                        {{ Form::close() }} 
                        <br>
                   @endforeach
                                        
                </div>
            </div>
        </div>
    </div>
</div>
@endsection