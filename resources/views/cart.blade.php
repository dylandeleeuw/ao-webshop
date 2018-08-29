@extends('layouts.app')

@section('content')
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Cart</div>

                <div class="card-body">
                    @isset ($products)                    
                    <table id="cart" class="table table-hover table-condensed">
                        <thead>
                            <tr>
                                <th style="width:50%">Product</th>
                                <th style="width:10%">Price</th>
                                <th style="width:8%">Quantity</th>
                                <th style="width:22%" class="text-center">Subtotal</th>
                                <th style="width:10%"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <td data-th="Product">
                                        <div class="row">
                                            <div class="col-sm-2 hidden-xs"><img src="http://placehold.it/100x100" alt="..." class="img-responsive"/></div>
                                            <div class="col-sm-10">
                                                <h4 class="nomargin">{{$product->name}}</h4>
                                                <p>{{$product->description}}</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td data-th="Price">{{$product->price}}</td>
                                    <td data-th="Quantity">
                                        {{ Form::open(array('url' => '/cart/edit')) }}
                                            <input type="hidden" name="id" value={{$product->id}}>
                                            <input type="number" name="quantity" class="form-control text-center" value={{$product->quantity}}>
                                            <button type="submit" class="btn btn-info btn-sm"><i class="fa fa-refresh"></i></button>
                                        {{ Form::close() }}
                                    </td>
                                    
                                    <td data-th="Subtotal" class="text-center">{{$product->totalPrice}}</td>
                                    <td class="actions" data-th="">
                                        {{ Form::open(array('url' => '/cart/delete')) }}
                                            <input type="hidden" name="id" value={{$product->id}}>
                                            <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>    
                                        {{ Form::close() }}                            
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr class="visible-xs">
                                <td class="text-center"><strong>Total 1.99</strong></td>
                            </tr>
                            <tr>
                                <td><a href="/categories" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
                                <td colspan="2" class="hidden-xs"></td>
                                <td class="hidden-xs text-center"><strong>Total {{$totalCartPrice}}</strong></td>
                                @guest
                                    <td><a href="/login" class="btn btn-danger btn-block">Log in to place order <i class="fa fa-angle-right"></i></a></td>
                                @else
                                    <td>
                                        {{ Form::open(array('url' => '/order')) }}
                                            <button type="submit" class="btn btn-success btn-block">Place order <i class="fa fa-angle-right"></i></button>
                                        {{ Form::close() }}                           
                                    </td>
                                @endguest

                            </tr>
                        </tfoot>
                    </table>
                    @else
                    nothing in your cart <a href="/categories" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a>
                    @endisset                     
                </div>
            </div>
        </div>
    </div>
</div>
@endsection